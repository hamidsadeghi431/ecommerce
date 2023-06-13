<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\sizes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddSizeComponent extends Component
{
    public $status;public $sizeName;public $sizeDetailsId;public $description;public $active;public $idIn;
    protected $listeners=['getId','forcedCloseModal'];
    public function getId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = sizes::find($id);
            $this->sizeName=$data->sizeName;
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
            $this->validateOnly($fields,['sizeName'=>'required', 'active'=>'required',]);
    }
    public function save()
    {
//        dd($this->idIn);
            $this->validate(['sizeName'=>'required', 'active'=>'required',]);
        if($this->idIn == 'a')
        {
            $sizeId=sizes::max('sizeId')+1;
            $data=['id'=>$sizeId,'sizeId'=>$sizeId, 'sizeName'=>$this->sizeName, 'description'=>$this->description, 'active'=>$this->active, 'userInsert'=>Auth::user()->id];
            sizes::create($data);
        }
        else
        {
            $data=['sizeName'=>$this->sizeName, 'description'=>$this->description, 'active'=>$this->active, 'updateInsert'=>Auth::user()->id];
            sizes::find($this->idIn)->update($data);
        }
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closemodalparameters');
        $this->cleanme();
        return redirect()->back()->with('success','عملیات با موفقیت انجام شد!');
    }
    public function cleanme()
    {
        $this->idIn=null;$this->active=null;$this->description=null;$this->sizeName=null;
    }
    public function render()
    {
        $sizes=sizes::get();
        return view('livewire.admin.product-parameters.add-size-component',get_defined_vars());
    }
}
