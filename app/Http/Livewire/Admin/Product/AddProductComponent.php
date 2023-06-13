<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\admin\parameters\initProperties;
use App\Models\Brands;
use App\Models\categories;
use App\Models\colors;
use App\Models\product\products;
use App\Models\ProductNames;
use App\Models\scategories;
use App\Models\sizedetails;
use App\Models\sizes;
use App\Models\sizeSizedteails;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;
class AddProductComponent extends Component
{
    use WithFileUploads;
    public $product_id;public $category_id;public $BrandId;public $colorId;public $shortDescription;public $longDescription;public $originalPrice;public $image;
    public $sellingPrice;public $quantity;public $trending;public $active;public $metaTitle;public $metaKeyword;public $metaDescription;public $inStock;public $images;
    public $scategory_id;public $idIn;public $status;

    public $flc1;public $flc2;public $flc3;public $flc4;public $flc5;public $flc6;public $flc7;public $flc8;public $flc9;public $flc10;
    public $flc11;public $flc12;public $flc13;public $flc14;public $flc15;public $flc16;public $flc17;public $flc18;public $flc19;public $flc20;

    protected $listeners=['getProductId','forcedCloseModal'];

    public function getProductId($id)
    {
        $this->idIn=$id;
        if ($id != 'a')
        {
            $data=products::find($id);
            /*1*/$this->product_id=$data->product_id;/*2*/$this->category_id=$data->category_id;/*3*/$this->scategory_id=$data->scategory_id;/*4*/$this->BrandId=$data->BrandId;/*5*/
            $this->colorId=$data->colorId;/*6*/$this->shortDescription=$data->shortDescription;/*7*/$this->longDescription=$data->longDescription;/*8*/
            $this->originalPrice=$data->originalPrice;/*9*/$this->sellingPrice=$data->sellingPrice;/*10*/$this->quantity=$data->quantity;/*11*/$this->trending=$data->trending;/*12*/
            $this->active=$data->active;/*13*/$this->metaTitle=$data->metaTitle;/*14*/$this->metaKeyword=$data->metaKeyword;/*15*/$this->metaDescription=$data->metaDescription;/*16*/
            $this->inStock=$data->inStock;/*17*/
//            $colors=explode(',',$this->colorId);

//            foreach ($colors as $k => $item)
//            {
//                if ($item != null) {
//                    $fld="flc".($k+1);
//                    $this->$fld=$item;
//                }
//            }
        }
    }
    public function forcedCloseModal()
    {
        $this->cleanme();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'product_id'=>'required','category_id'=>'required','BrandId'=>'required','shortDescription'=>'required','longDescription'=>'required',
            'originalPrice'=>'required|numeric', 'sellingPrice'=>'required|numeric','metaTitle'=>'required','metaKeyword'=>'required',
            'metaDescription'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'images.*'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048'
//            ,'quantity'=>'required|numeric'
        ]);
    }

    public function save()
    {

        $colors='';
        $flc='';
        $this->validate([
            'product_id'=>'required','category_id'=>'required','BrandId'=>'required','shortDescription'=>'required','longDescription'=>'required',
            'originalPrice'=>'required|numeric', 'sellingPrice'=>'required|numeric','metaTitle'=>'required','metaKeyword'=>'required',
            'metaDescription'=>'required',
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048',
            'images.*'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:6048'
//            ,'quantity'=>'required|numeric'
        ]);
//        dd('hi');
//        $allColors=colors::count('id');
//        for ($i=1;$i<=$allColors;$i++)
//        {
//            $flc="flc$i";
//            if ($this->$flc) $colors .=$this->$flc.',';
//        }
        $imagesname='';
        $data=[
            'product_id'=>$this->product_id, 'category_id'=>$this->category_id, 'BrandId'=>$this->BrandId,
            'shortDescription'=>$this->shortDescription, 'longDescription'=>$this->longDescription, 'originalPrice'=>$this->originalPrice,
            'sellingPrice'=>$this->sellingPrice,  'trending'=>$this->trending, 'active'=>$this->active,
            'metaTitle'=>$this->metaTitle, 'metaKeyword'=>$this->metaKeyword, 'metaDescription'=>$this->metaDescription,'inStock'=>$this->inStock
//            'colorId'=>$colors
//            'quantity'=>$this->quantity,
//        'colorId'=>$this->colorId,
        ];
        if ($this->scategory_id)$data=array_merge($data,['scategory_id'=>$this->scategory_id]);
        if($this->idIn == 'a')$data=array_merge($data,['insertUser'=>Auth::user()->id]);
        else $data=array_merge($data,['updateUser'=>Auth::user()->id]);

        if (!empty($this->image))
        {

            $imageHashName=$this->image->hashName();
            $data=array_merge($data,['image'=>$imageHashName]);
//            dd($data);
            if ($this->idIn != 'a')
            {

                $updateHashName=products::find($this->idIn)->image;
//                dd($updateHashName,'999999999999999999999');
                $updatePath='app/public/photos/product/'.$updateHashName;
//                dd(storage_path($updatePath));
                unlink(storage_path($updatePath));
//                dd($updateHashName);

            }
            $this->image->store('public/photos/product');
            $manager= new ImageManager();
//            برای ریسایز کردن عکس بالا مسیر آدرس عکس را از یکفولدر عقبتر درمسیر استوریج قرار می دهیم آدرس شماره یک مسیر ذخیره فایل آدرس شماره 2 مسیر پیدا کردن فایل جهت کاهش اندازه عکسک
//            مسیری که عکس در آن ذخیره می شود =>>  public/photos/product
//               $path='app/public/photos/product/'.$imageHashName; =>     این مسیر عکسی است که قرار است اندازه ی آن کاهش پیدا کند
            $path='app/public/photos/product/'.$imageHashName;
//            dd(storage_path($path));
            $image=$manager->make(storage_path($path))->resize(800,800);
            $image->save(storage_path($path));
        }
        if ($this->images)
        {

            $allimages=$this->images;
            if($this->idIn != 'a')
            {
                $imagesName=products::where('id',$this->idIn)->value('images');

                $imagesName=explode(',',$imagesName);

                foreach ($imagesName as $imgs)
                {

                    if($imgs != "")
                    {
                        $imgspath='app/public/photos/product/'.$imgs;
//                        dump(storage_path($imgs));
                        unlink(storage_path($imgspath));
                    }
                }
//                dd($imagesName);

            }
            foreach ($allimages as $item)
            {
                $imageGHashName=$item->hashName();
                $item->store('public/photos/product');
                $managerG=new ImageManager();
                $pathG='app/public/photos/product/'.$imageGHashName;
                $imageG=$managerG->make(storage_path($pathG))->resize(800,800);
                $imageG->save(storage_path($pathG));
                $imagesname=$imagesname . ',' .$imageGHashName;
            }
            $data=array_merge($data,['images'=>$imagesname]);
        }
        if($this->idIn != 'a') {products::where('id',$this->idIn)->update($data);}
        else products::create($data);
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('close_form');
        $this->cleanme();

    }

    public function cleanme()
    {
        $this->product_id=null;/*1*/$this->category_id=null;/*2*/$this->scategory_id=null;/*3*/$this->BrandId=null;/*4*/
        $this->shortDescription=null;/*5*/$this->longDescription=null;/*6*/$this->originalPrice=null;/*7*/$this->sellingPrice=null;/*8*/
        $this->quantity=null;/*9*/$this->trending=null;/*10*/$this->active=null;/*11*/$this->metaTitle=null;/*12*/
        $this->metaKeyword=null;/*13*/$this->metaDescription=null;/*14*/$this->inStock=null;/*15*/$this->image=null;/*16*/
        $this->images=null;/*18*/

//        $colors=explode(',',$this->colorId);
//        foreach ($colors as $k => $item)
//        {
//            if ($item != null) {
//                $fld="flc".($k+1);
//                $this->$fld=null;
//            }
//        }
        $this->colorId=null;/*19*/$this->idIn=null;/*20*/
    }
    public function render()
    {
        $products=ProductNames::get();
        $categories=categories::with('scategory')->get();
        $scategories=scategories::where('cat_id',$this->category_id)->get();
        $Brands=Brands::get();
        $colors=colors::get();
        $sizes=sizes::get();
        $subSize=sizedetails::get();
        return view('livewire.admin.product.add-product-component',get_defined_vars());
    }
}
