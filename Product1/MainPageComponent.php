<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\product\products;
use Livewire\Component;
class MainPageComponent extends Component
{
    protected $listeners=['refreshParent'=>'$refresh'];
    public $idDel;

    public function selectItem($id,$action)
    {
        if($action == 'update' || $action == 'add')
        {
            $this->emit('getProductId',$id);
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
        $data=products::find($this->idDel);
        $imageName=$data->image;
        $updatePath='app/public/photos/product/'.$imageName;
//                dd(storage_path($updatePath));
        unlink(storage_path($updatePath));

        // حذف عکسهای گالری محصول
        $imagesName=$data->images;
        $imagesName=explode(',',$imagesName);

        foreach ($imagesName as $imgs)
        {

            if($imgs != "")
            {
                $imgspath='app/public/photos/product/'.$imgs;
//                        dump(storage_path($imgspath));
                unlink(storage_path($imgspath));
            }
        }
        // حذف از دیتابیس
        products::destroy($this->idDel);
        $this->dispatchBrowserEvent('closedeletemodal');
    }
    public function render()
    {
        $maintitle=' محصولات';
        $pagedescription='افزودن محصولات';
        $tableProducts=products::with('productName')->get();
//        dd($tableProducts);
        return view('livewire.admin.product.main-page-component',get_defined_vars())->layout('layouts.admin');
    }
}
