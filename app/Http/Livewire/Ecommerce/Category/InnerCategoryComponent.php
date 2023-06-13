<?php

namespace App\Http\Livewire\Ecommerce\Category;

use App\Models\admin\parameters\initProperties;
use App\Models\categories;
use Livewire\Component;

class InnerCategoryComponent extends Component
{
    public $idIn;
    public function mount($id)
    {
        $this->idIn=$id;
    }
    public function render()
    {
        $idIn=$this->idIn;
    //        $BrandName=initProperties::where('id',$idIn)->value('properties_name');
    //        $idParent=initProperties::where('id',$idIn)->value('idparents');
    //        $idPar=initProperties::where('id',$idIn)->value('idpar');
    //        $brandCategory=initProperties::where('idpar',$idPar)->where('idparents',0)->where('idslave',$idParent)->get();
    //        $brands=initProperties::where('idpar',1)->where('idparents','>',0)->get();
                $categories=categories::with('scategory')->where('catId',$this->idIn)->get();
        return view('livewire.ecommerce.category.inner-category-component',get_defined_vars())->layout('layouts.base1',get_defined_vars());
    }
}
