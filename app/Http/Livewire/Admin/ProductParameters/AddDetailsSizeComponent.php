<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\sizedetails;
use App\Models\sizes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddDetailsSizeComponent extends Component
{
   public $sizeName;public $description;public $active;public $idIn;
    protected $listeners=['getSubSizeId','forcedCloseModal'];
    public function getSubSizeId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = sizedetails::find($id);
            $this->sizeName=$data->title;
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
        $this->validateOnly($fields,['sizeName'=>'required', 'active'=>'required']);
    }
    public function save()
    {
//        dd($this->idIn);
        $this->validate(['sizeName'=>'required', 'active'=>'required']);
        if($this->idIn == 'a')
        {
            $sizeDetailsId=sizedetails::max('sizeDetailsId')+1;
            $data=['id'=>$sizeDetailsId,'sizeDetailsId'=>$sizeDetailsId, 'title'=>$this->sizeName, 'description'=>$this->description, 'active'=>$this->active, 'userInsert'=>Auth::user()->id];
            sizedetails::create($data);
        }
        else
        {
            $data=['title'=>$this->sizeName, 'description'=>$this->description, 'active'=>$this->active, 'updateInsert'=>Auth::user()->id];
            sizedetails::find($this->idIn)->update($data);
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
        $sizes=sizedetails::get();
        return view('livewire.admin.product-parameters.add-details-size-component',get_defined_vars());
    }
}
