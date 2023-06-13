<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\colors;
use App\Models\ColorsOriductsSizeSizedetails;
use App\Models\product\products;
use App\Models\ProductNames;
use App\Models\sizedetails;
use App\Models\sizes;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddQtyProductComponent extends Component
{
    public $color;public $quantity1;public $sizedetail;public $size;public $idIn;public $idEdit;
    protected $listeners =['getProductId','getEditId'];

    public function getProductId($id)
    {
        $this->idIn=$id;
    }

    public function getEditId($id)
    {
        $this->idEdit=$id;
        $data=ColorsOriductsSizeSizedetails::find($id);
        $this->idIn=$data->products_id;
        $this->size=$data->sizes_id;
        $this->sizedetail=$data->sizedetails_id;
        $this->color=$data->colors_id;
        $this->quantity1=$data->qty;
    }
    public function save()
    {
        $data=[
            'products_id'=>$this->idIn,
            'sizes_id'=>$this->size,
            'sizedetails_id'=>$this->sizedetail,
            'colors_id'=>$this->color,
            'qty'=>$this->quantity1,

        ];
        if ($this->idEdit)
        {
            $data=array_merge($data,['userUpdate'=>Auth::user()->id]);
            ColorsOriductsSizeSizedetails::find($this->idEdit)->update($data);
        }
        else
        {
            $data=array_merge($data,['userInsert'=>Auth::user()->id]);
            ColorsOriductsSizeSizedetails::create($data);
        }
        $this->emit('refreshParentQty');
        $this->cleanme();
        $this->dispatchBrowserEvent('close_qty');
        $this->dispatchBrowserEvent('open_show_qty');


    }
    public function closeme()
    {
        $this->dispatchBrowserEvent('close_qty');
        $this->dispatchBrowserEvent('open_show_qty');
        $this->cleanme();


    }
    public function cleanme()
    {
        $this->quantity1=null;$this->color=null;$this->sizedetail=null;$this->size=null;$this->idIn=null;$this->idEdit;
    }
    public function render()
    {
        $colors=colors::get();
        $sizes=sizes::get();
        $sizedetails=sizedetails::get();
        $products=ProductNames::get();
        return view('livewire.admin.product.add-qty-product-component',get_defined_vars());
    }
}
