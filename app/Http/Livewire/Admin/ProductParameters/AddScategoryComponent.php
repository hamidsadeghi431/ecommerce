<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\categories;
use App\Models\scategories;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddScategoryComponent extends Component
{
    protected $listeners=['getScategpryId','forcedCloseModal'];
    public $idIn;public $active;public $description;public $cat_id;public $scategoryName;

    public function getScategpryId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = scategories::find($id);
            $this->cat_id=$data->cat_id;
            $this->scategoryName=$data->scategoryName;
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
            'cat_id'=>'required',
            'scategoryName'=>'required',
            'active'=>'required',
        ]);
    }
    public function save()
    {
        $this->validate([
            'cat_id'=>'required',
            'scategoryName'=>'required',
            'active'=>'required',

        ]);
        if($this->idIn == 'a')
        {
            $scatId=scategories::max('scatId')+1;

            $data=[
                'scatId'=>$scatId,
                'cat_id'=>$this->cat_id,
                'scategoryName'=>$this->scategoryName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userInsert'=>Auth::user()->id
            ];
            scategories::create($data);

        }
        else
        {
            $data=[
                'cat_id'=>$this->cat_id,
                'scategoryName'=>$this->scategoryName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userUpdate'=>Auth::user()->id
            ];
            scategories::find($this->idIn)->update($data);
        }

        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closemodalparameters');
        $this->cleanme();
        return redirect()->back()->with('success','عملیات با موفقیت انجام شد!');
    }
    public function cleanme()
    {
        $this->cat_id=null;
        $this->active=null;
        $this->description=null;
        $this->scategoryName=null;
    }



    public function render()
    {
        $categories=categories::get();
        return view('livewire.admin.product-parameters.add-scategory-component',get_defined_vars());
    }
}
