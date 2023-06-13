<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\admin\setting\sliders;
use Livewire\Component;

class MainSliderComponent extends Component
{
    protected $listeners=['refreshParent'=>'$refresh'];
    public $idDel;
    public function selectItem($id,$action)
    {

        if($action == 'add' || $action == 'update')
        {
            $this->emit('getId',$id);
            $this->dispatchBrowserEvent('show-form');
        }
        else
        {
            $this->idDel=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }
    public function delete()
    {
        //حذف عکس اصلی
        $data=sliders::find($this->idDel);
        $imageName=$data->Image;
        $updatePath='app/public/photos/slider/'.$imageName;
//                dd(storage_path($updatePath));
        unlink(storage_path($updatePath));

        // حذف از دیتابیس
        sliders::destroy($this->idDel);
        $this->dispatchBrowserEvent('closedeletemodal');
    }

    public function render()
    {
        $maintitle='اسلایدر';
        $pagedescription='افزودن اسلایدر';
        $sliders=sliders::where('active',1)->get();
        return view('livewire.admin.slider.main-slider-component',get_defined_vars())->layout('layouts.admin');
    }
}
