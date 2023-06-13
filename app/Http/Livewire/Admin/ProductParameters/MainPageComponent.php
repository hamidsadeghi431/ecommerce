<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\admin\parameters\defineParameters;
use App\Models\admin\parameters\definParameters1;
use App\Models\admin\parameters\definProperties;
use App\Models\admin\parameters\definProperties1;
use App\Models\admin\parameters\initProperties;
use App\Models\BrandCategory;
use App\Models\Brands;
use App\Models\BrandScategory;
use App\Models\categories;
use App\Models\colors;
use App\Models\product\products;
use App\Models\ProductNames;
use App\Models\sizedetails;
use App\Models\sizes;
use Livewire\Component;
class MainPageComponent extends Component
{
    public $addparam;public $addpro;public $initpro;public $delId;public $idparmain;public $catId;public $input_type;
    public $addcategory;public $addscategory; public $addcolor;public $addProductName; public $addBrands;public $BrandId;public $SizeId;
    public $addSize;public $addSubSize;
    protected $listeners = [
        'refreshParent'=>'$refresh',
    ];

    public function dataSize($id,$action)
    {
        if($action == 'parameter' || $action == 'update')
        {
//            dd('ssssssssssssss');
            $this->emit('getId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }
    public function dataSubSize($id,$action)
    {
//        dd('hi');
        if($action == 'parameter' || $action == 'update')
        {
//            dd('ssssssssssssss');
            $this->emit('getSubSizeId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }
    public function dataCategory($id,$action)
    {
//dd($id);
        if($action == 'category' || $action == 'update')
        {
//            dd('ssssssssssssss');
            $this->emit('getCategoryId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }

    }
    public function dataScategory($id,$action)
    {

        if($action == 'parameter' || $action == 'update')
        {
            $this->emit('getScategpryId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }
    public function dataColor($id,$action)
    {

        if($action == 'update' || $action=='color')
        {
            $this->emit('getColorId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }

    }
    public function dataBrand($id,$action)
    {

        if($action == 'parameter' || $action == 'update')
        {
            $this->emit('getBrandId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }
    public function dataProductName($id,$action)
    {
        if($action == 'ProductName' || $action == 'update')
        {
            $this->emit('getProductNameId',$id);
            $this->dispatchBrowserEvent('openmodalparameters');
        }
        else
        {
            $this->delId=$id;
            $this->dispatchBrowserEvent('opendeletemodal');
        }
    }

    public function delete()
    {
        if($this->addcategory)
        {
            categories::destroy($this->delId);
            $this->dispatchBrowserEvent('closedeletemodal');
        }
        if ($this->addcolor)
        {
            colors::destroy($this->delId);
            $this->dispatchBrowserEvent('closedeletemodal');
        }
        if($this->addProductName)
        {
            products::destroy($this->delId);
            $this->dispatchBrowserEvent('closedeletemodal');

        }
        if ($this->addBrands)
        {

            $updateHashName=Brands::find($this->delId)->picture;
            $updatePath='app/public/photos/Brands/'.$updateHashName;
            unlink(storage_path($updatePath));
            $brandId=Brands::where('id',$this->delId)->value('BrandId');
            BrandScategory::where('brands_id',$brandId)->delete();
            BrandCategory::where('brands_id',$brandId)->delete();
            Brands::destroy($this->delId);
            $this->dispatchBrowserEvent('closedeletemodal');

        }
        if ($this->addSize)
        {
            $size_id=sizes::where('id',$this->delId)->value('sizeId');
            $count=sizes::where('sizeDetailsId',$size_id)->count('sizeDetailsId');
//            dd($count);
            if ($size_id > 0 && $count == 0)
            {
                sizes::destroy($this->delId);
                $this->dispatchBrowserEvent('closedeletemodal');            }
            elseif($size_id == 0)
            {
                sizes::destroy($this->delId);
                $this->dispatchBrowserEvent('closedeletemodal');
            }
            else
            {
                $this->dispatchBrowserEvent('opennotificationModal');
                $this->dispatchBrowserEvent('closedeletemodal');
                return redirect()->back()->with('delNotification','امکان حذف این ایتم وجود ندارد ابتدا زیر مجموعه های این سایز را پاک کنید سپس اقدام به حذف نمایید!');
            }
//            dd($this->delId,$count);
        }
        if ($this->addSubSize)
        {
            sizedetails::destroy($this->delId);
            $this->dispatchBrowserEvent('closedeletemodal');
        }

    }
    public function render()
    {
        $maintitle='افزودن پارامتر';
        $pagedescription='افزودن پارامتر و ویژگی های آن';
        if ($this->addcategory || $this->addscategory)
        {
            $tableParameters=categories::with('scategory')->get();
            $categories=categories::with('scategory')->where('catId',$this->catId)->get();
        }
        if ($this->addcolor)$tableColor=colors::get();
        if ($this->addProductName)$tableProduct=ProductNames::get();
        if ($this->addBrands){$tableBrands=Brands::with('category')->where('BrandId',$this->BrandId)->get();$brands=Brands::get();}
        if ($this->addSize || $this->addSubSize){$tableSizes=sizes::where('SizeId',$this->SizeId)->get();$size=sizes::get();$subSize=sizedetails::get();}
        return view('livewire.admin.product-parameters.main-page-component',get_defined_vars())->layout('layouts.admin');
    }
}
