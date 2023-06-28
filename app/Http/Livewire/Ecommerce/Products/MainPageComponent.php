<?php

namespace App\Http\Livewire\Ecommerce\Products;

use App\Models\product\products;
use Livewire\Component;

class MainPageComponent extends Component
{
    public $idBrand;public $idCat;public $idScat;
    public function mount($Brandid=null,$CatId=null,$ScatId=null)
    {
        if ($Brandid != null ) $this->idBrand=$Brandid;
        if ($CatId != null) $this->idCat=$CatId;
        if ($ScatId != null) $this->idScat=$ScatId;
    }
    public function render()
    {
        if ($this->idBrand != null && $this->idCat == null && $this->idBrand != 'b')
        {
            $products=products::with('productName')->where('BrandId',$this->idBrand)->get();
            $cnt=products::where('BrandId',$this->idBrand)->count('id');
        }
        elseif ($this->idCat != null && $this->idBrand != null && $this->idScat == null)
        {
//            dd('hiii');
            if ($this->idBrand == 'b') $products=products::with('productName')->where('category_id',$this->idCat)->get();
            else $products=products::with('productName')->where('BrandId',$this->idBrand)->where('category_id',$this->idCat)->get();
            if ($this->idBrand == 'b') $cnt=products::where('category_id',$this->idCat)->count('id');
            else $cnt=products::where('BrandId',$this->idBrand)->where('category_id',$this->idCat)->count('id');
        }
        elseif ($this->idCat != null && $this->idBrand != null && $this->idScat != null)
        {
            if ($this->idBrand == 'b') $products=products::with('productName')->where('category_id',$this->idCat)->
            where('scategory_id',$this->idScat)->
            get();
            else $products=products::with('productName')->where('BrandId',$this->idBrand)->
            where('category_id',$this->idCat)->
            where('scategory_id',$this->idScat)->
            get();
            if ($this->idBrand == 'b') $cnt=products::where('category_id',$this->idCat)->
            where('scategory_id',$this->idScat)->
            count('id');
            else $cnt=products::where('BrandId',$this->idBrand)->
            where('category_id',$this->idCat)->
            where('scategory_id',$this->idScat)->
            count('id');
        }
        else
        {
            $products=products::with('productName')->get();
            $cnt=products::count('id');
        }

        return view('livewire.ecommerce.products.main-page-component',get_defined_vars())->layout('layouts.base');
    }
}
