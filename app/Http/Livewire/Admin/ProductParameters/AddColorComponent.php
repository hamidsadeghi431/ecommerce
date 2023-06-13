<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\colors;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddColorComponent extends Component
{
    protected $listeners=['getColorId','forcedCloseModal'];
    public $idIn;public $active;public $description;public $colorCode;public $colorName;
    public function getColorId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = colors::find($id);
            $this->colorName=$data->colorName;
            $this->colorCode=$data->colorCode;
            $this->description=$data->description;
            $this->active=$data->active;
        }
    }
    public function forcedCloseModal(){
        $this->cleanme();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'colorName'=>'required',
            'colorCode'=>'required',
            'active'=>'required',
        ]);
    }
    public function save()
    {
        $this->validate([
            'colorName'=>'required',
            'colorCode'=>'required',
            'active'=>'required',

        ]);
        if($this->idIn == 'a')
        {
            $colorId=colors::max('colorId')+1;

            $data=[
                'colorId'=>$colorId,
                'colorName'=>$this->colorName,
                'colorCode'=>$this->colorCode,
                'description'=>$this->description,
                'active'=>$this->active,
                'userInsert'=>Auth::user()->id
            ];
            colors::create($data);
        }
        else
        {
            $data=[
                'colorName'=>$this->colorName,
                'colorCode'=>$this->colorCode,
                'description'=>$this->description,
                'active'=>$this->active,
                'updateInsert'=>Auth::user()->id
            ];
            colors::find($this->idIn)->update($data);
        }

        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closemodalparameters');
        $this->cleanme();
        return redirect()->back()->with('success','عملیات با موفقیت انجام شد!');
    }
    public function cleanme()
    {
        $this->idIn=null;
        $this->active=null;
        $this->description=null;
        $this->colorCode=null;
        $this->colorName=null;
    }
    public function render()
    {
        return view('livewire.admin.product-parameters.add-color-component');
    }
}
