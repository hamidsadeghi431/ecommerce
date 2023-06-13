<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddMainCategoryComponent extends Component
{
    protected $listeners=['getCategoryId','forcedCloseModal'];
    public $active;public $categoryName; public $description;public $idIn;
    public function getCategoryId($id)
    {
        $this->idIn=$id;
        if($id != 'a')
        {
            $data = categories::find($id);
            $this->categoryName=$data->categoryName;
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
            'categoryName'=>'required',
            'active'=>'required',
        ]);
    }
    public function save()
    {
        $this->validate([
            'categoryName'=>'required',
            'active'=>'required',

        ]);
        if($this->idIn == 'a')
        {
            $catId=categories::max('catId')+1;

            $data=[
                'catId'=>$catId,
                'categoryName'=>$this->categoryName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userInsert'=>Auth::user()->id
            ];
            categories::create($data);
        }
        else
        {
            $data=[
                'categoryName'=>$this->categoryName,
                'description'=>$this->description,
                'active'=>$this->active,
                'updateInsert'=>Auth::user()->id
            ];
            categories::find($this->idIn)->update($data);
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
        return view('livewire.admin.product-parameters.add-main-category-component');
    }
}
