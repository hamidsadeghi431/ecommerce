<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\ProductNames;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddProductComponent extends Component
{
    protected $listeners=['getProductNameId','forcedCloseModal'];
    public $active;public $description;public $idIn;public $ProductName;

    public function getProductNameId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = ProductNames::find($id);
            $this->ProductName=$data->ProductName;
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
            'ProductName'=>'required',
            'active'=>'required',
        ]);
    }
    public function save()
    {
        $this->validate([
            'ProductName'=>'required',
            'active'=>'required',

        ]);
        if($this->idIn == 'a')
        {
            $ProId=ProductNames::max('ProId')+1;

            $data=[
                'ProId'=>$ProId,
                'ProductName'=>$this->ProductName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userInsert'=>Auth::user()->id
            ];
            ProductNames::create($data);
        }
        else
        {
            $data=[
                'ProductName'=>$this->ProductName,
                'description'=>$this->description,
                'active'=>$this->active,
                'updateInsert'=>Auth::user()->id
            ];
            ProductNames::find($this->idIn)->update($data);
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
        $this->categoryName=null;
    }



    public function render()
    {
        return view('livewire.admin.product-parameters.add-product-component');
    }
}
