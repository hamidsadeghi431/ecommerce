<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\ColorsOriductsSizeSizedetails;
use Livewire\Component;

class ShowQtyProductComponent extends Component
{
    protected $listeners =['refreshParentQty'=>'$refresh','getProductId'];
    public  $idIn;
    public function getProductId($id)
    {
        $this->idIn=$id;
    }

    public function selectItem($id,$action)
    {

//        $this->dispatchBrowserEvent('close-qty');
        $this->dispatchBrowserEvent('close_show_qty');

        $this->dispatchBrowserEvent('open_qty');
        $this->emit('getEditId',$id);

//        dd($id,$action);
    }
    public function quantity($id)
    {

        $this->emit('getProductId',$id);
        $this->dispatchBrowserEvent('open_qty');
    }
    public function render()
    {
        $maintitle=' محصولات';
        $pagedescription='افزودن محصولات';
        $tableProducts=ColorsOriductsSizeSizedetails::where('products_id',$this->idIn)->with('size_name')->with('size_details_name')->with('colors_name')->get();
        return view('livewire.admin.product.show-qty-product-component',get_defined_vars());
    }
}
