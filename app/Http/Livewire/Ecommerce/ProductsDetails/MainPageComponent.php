<?php

namespace App\Http\Livewire\Ecommerce\ProductsDetails;

use App\Models\colors;
use App\Models\ColorsOriductsSizeSizedetails;
use App\Models\product\products;
use App\Models\sizedetails;
use App\Models\sizes;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Routing\RouteUri;
use Livewire\Component;

class MainPageComponent extends Component
{
    public $idProduct;public $zsize;public $msize;public $color;public $qty=1;public $plus;public $mines;public $maxqty;public $quantityId;public $step;
    public function mount($id)
    {
        $this->idProduct=$id;
        $this->step=0;
    }

    public function increase()
    {
        $this->qty++;
        if ($this->qty > $this->maxqty)$this->qty=$this->maxqty;

    }

    public function decrease()
    {
        $this->qty--;
        if ($this->qty <= 0)$this->qty=1;
    }
    public function store($productId,$productName,$productPrice,$quantityId)
    {
//        dd($this->qty);
//        dd($productPrice,$productName,$productId);
        $sizeName=sizes::where('sizeId',$this->msize)->value('sizeName');
        $sizeNameDetails=sizedetails::where('sizeDetailsId',$this->zsize)->value('title');
        $colorName=colors::where('colorId',$this->color)->value('colorName');
        \Gloudemans\Shoppingcart\Facades\Cart::add($productId,$productName,$this->qty,$productPrice,
            ['size_id'=>$this->msize,'sizedetails_id'=>$this->zsize,'colors_id'=>$this->color,'qtyId'=>$this->quantityId,
                'sizeName'=>$sizeName,'sizeNameDetails'=>$sizeNameDetails,'colorName'=>$colorName])->associate('App\Models\product\products');
        session()->flash('success','کالا با موفقیت به سبد خرید افزوده شد');
        return redirect()->route('cart');
    }

    public function render()
    {
        $colors=array();
        $product=products::with('productName')->where('id',$this->idProduct)->get();
        $sizeall=ColorsOriductsSizeSizedetails::where('products_id',$this->idProduct)->distinct('sizes_id')->pluck('sizes_id');
        if ($this->msize) {
            $zsizeall = ColorsOriductsSizeSizedetails::where('products_id', $this->idProduct)->where('sizes_id', $this->msize)->distinct('sizedetails_id')->pluck('sizedetails_id');
            $countColor=ColorsOriductsSizeSizedetails::where('products_id',$this->idProduct)->where('sizes_id',$this->msize)->distinct('colors_id')->count('colors_id');
        }
        if ($this->zsize) $colors=ColorsOriductsSizeSizedetails::where('products_id',$this->idProduct)->where('sizes_id',$this->msize)->where('sizedetails_id',$this->zsize)->distinct('colors_id')->pluck('colors_id');
        if ($this->color)
        {
            $this->maxqty = ColorsOriductsSizeSizedetails::where('products_id', $this->idProduct)->where('sizes_id', $this->msize)->where('sizedetails_id',$this->zsize)->where('colors_id', $this->color)->value('qty');
            $this->quantityId = intval(ColorsOriductsSizeSizedetails::where('products_id', $this->idProduct)->where('sizes_id', $this->msize)->where('sizedetails_id',$this->zsize)->where('colors_id', $this->color)->value('id'));
//            dump($this->quantityId);
        }
//
//        if ($this->msize != null)$this->step=1;
//        if ($this->zsize != null)$this->step=2;
//        if ($this->color != null)$this->step=3;
//        if ($this->qty != null)$this->step=4;
//        dump($this->step);
        return view('livewire.ecommerce.products-details.main-page-component',get_defined_vars())->layout('layouts.base2',get_defined_vars());
    }
}
