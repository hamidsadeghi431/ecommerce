<?php

namespace App\Http\Livewire\Admin\ProductParameters;

use App\Models\BrandCategory;
use App\Models\Brands;
use App\Models\BrandScategory;
use App\Models\categories;
use App\Models\productsCategory;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBrandComponent extends Component
{
    use WithFileUploads;

    protected $listeners=['getBrandId','forcedCloseModal'];
    public $idIn;public $brandName;public $description;public $active;public $input_type;public $flcc;public $fldd;
    public $fld1;public $fld2;public $fld3;public $fld4;public $fld5;public $fld6;public $fld7;public $fld8;public $fld9;public $fld10;
    public $fld11;public $fld12;public $fld13;public $fld14;public $fld15;public $fld16;public $fld17;public $fld18;public $fld19;public $fld20;
    public $fld21;public $fld22;public $fld23;public $fld24;public $fld25;public $fld26;public $fld27;public $fld28;public $fld29;public $fld30;

    public $flc1;public $flc2;public $flc3;public $flc4;public $flc5;public $flc6;public $flc7;public $flc8;public $flc9;public $flc10;
    public $flc11;public $flc12;public $flc13;public $flc14;public $flc15;public $flc16;public $flc17;public $flc18;public $flc19;public $flc20;
    public $flc21;public $flc22;public $flc23;public $flc24;public $flc25;public $flc26;public $flc27;public $flc28;public $flc29;public $flc30;

    public function getBrandId($id)
    {
        $this->idIn=$id;
        if ($id != 'a')
        {
            $data=Brands::with('category')->with('scategory')->find($id);
            $this->brandName=$data->brandName;
            $this->description=$data->description;
            $this->active=$data->active;
            $this->idIn=$id;
            foreach ($data->category as $item1)
            {
                $fld="fld".$item1->catId;
                if ($item1->catId)
                {
                    $this->$fld=$item1->catId;
                }
                foreach ($data->scategory as $item2)
                {
                    $flc="flc".$item2->scatId;
                    if ($item2->scatId)
                    {
                        $this->$flc=$item2->scatId;
                    }
                }
            }

        }

    }
    public function forcedCloseModal(){
        $this->cleanme();
        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function save()
    {
        $data=array();
        $data1=array();
        $categories=categories::with('scategory')->get();
        if ($this->idIn != 'a')
        {
            $dataBrand=['brandName'=>$this->brandName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userUpdate'=>Auth::user()->id];
        }
        else
        {

            $brandId=Brands::max('BrandId')+1;
//        if($this->input_type) $validateData=array_merge($validateData,['input_type'=>'required | image',]);
            $dataBrand=[
                'id'=>$brandId,
                'BrandId'=>$brandId,
                'brandName'=>$this->brandName,
                'description'=>$this->description,
                'active'=>$this->active,
                'userInsert'=>Auth::user()->id
            ];
        }
        if (!empty($this->input_type))
        {
            $imageHashName=$this->input_type->hashName();
//            dd($imageHashName);
            $dataBrand=array_merge($dataBrand,[
                'picture'=>$imageHashName
            ]);
//            dd($this->idIn);
            if ($this->idIn != 'a')
            {
                $updateHashName=Brands::find($this->idIn)->picture;
                $updatePath='app/public/photos/Brands/'.$updateHashName;
                unlink(storage_path($updatePath));
            }
            $this->input_type->store('public/photos/Brands/');
            $manager= new ImageManager();
            $path='app/public/photos/Brands/'.$imageHashName;
//            dd(public_path($path));
            $image=$manager->make(storage_path($path))->resize(200,200);
            $image->save(storage_path($path));
        }

        if ($this->idIn != 'a') {
//            dd('hi');
            $brandId=Brands::where('id',$this->idIn)->value('BrandId');
            Brands::where('id',$this->idIn)->update($dataBrand);
            BrandCategory::where('brands_id',$brandId)->delete();
            BrandScategory::where('brands_id',$brandId)->delete();
        }
        else Brands::create($dataBrand);
//        dd($brandId);
        foreach ($categories as $item)
        {
            $fld="fld".$item->catId;
            $this->fldd .=$fld.',';
//            dump(intval($this->$fld));
            if(intval($this->$fld) > 0)
            {
//                dump('hi777');
                $data=[
                    'categories_id'=>$this->$fld,
                    'brands_id'=>$brandId,
                    'userInsert'=>Auth::user()->id
                ];
//                dump($data);
                BrandCategory::create($data);

            }
//            dump($data);
//
            foreach ($item->scategory as $item1)
            {
                $flc="flc".$item1->scatId;
                $this->flcc .=$flc .',';
                if(intval($this->$flc) > 0)
                {
                    $data1=[
                        'categories_id'=>$this->$fld,
                        'scategories_id'=>$this->$flc,
                        'brands_id'=>$brandId,
                        'insertUser'=>Auth::user()->id
                    ];
                    BrandScategory::create($data1);
                }


            }

        }
//        dd('iiiiii');
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closemodalparameters');
        $this->cleanme();



//        dd($data);

    }

    public function cleanme()
    {
//        dd($this->fldd,$this->flcc);
        $flds=explode(',',$this->fldd);
        foreach ($flds as $fld)
        {
            if($fld != '') $this->$fld=null;
        }
        $flcc=explode(',',$this->flcc);
        foreach ($flcc as $flc)
        {
            if($flc != '') $this->$flc=null;
        }
//        dd($fld);
        $this->idIn=null;
        $this->active=null;
        $this->description=null;
        $this->brandName=null;

    }
    public function render()
    {
        $categories=categories::with('scategory')->get();
        return view('livewire.admin.product-parameters.add-brand-component',get_defined_vars());
    }
}
