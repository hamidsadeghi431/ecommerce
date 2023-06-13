<?php

namespace App\Http\Livewire\Ecommerce\Category;

use App\Models\admin\parameters\initProperties;
use App\Models\Brands;
use Livewire\Component;

class InnerBrandCategoryComponent extends Component
{
    public $idIn;
    public function mount($id)
    {
        $this->idIn=$id;
    }
    public function render()
    {
        $idIn=$this->idIn;
        $Brands=Brands::with('category')->with('scategory')->where('id',$idIn)->get();
//        $idParent=initProperties::where('id',$idIn)->value('idparents');
//        $idPar=initProperties::where('id',$idIn)->value('idpar');
//        $brandCategory=initProperties::where('idpar',$idPar)->where('idparents',0)->where('idslave',$idParent)->get();
//        $brands=initProperties::where('idpar',1)->where('idparents','>',0)->get();
        return view('livewire.ecommerce.category.inner-brand-category-component',get_defined_vars())->layout('layouts.base1');
    }
}
