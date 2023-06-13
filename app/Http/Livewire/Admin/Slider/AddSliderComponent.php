<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\admin\setting\sliders;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSliderComponent extends Component
{
    use WithFileUploads;

    protected $listeners=['getId'];
    public $title1;public $title2;public $title3;public $links;public $titleButton;public $titleImage;public $image;public $active;public $idIn;
    public $colorCode1;public $colorCode2;public $colorCode3;
    public function getId($id)
    {
        $this->idIn=$id;
        if ($id != 'a')
        {
            $data=sliders::find($id);
            $this->title1=$data->title1;/*1*/$this->title2=$data->title2;/*2*/$this->title3=$data->title3;/*3*/$this->links=$data->links;/*4*/
            $this->titleImage=$data->titleImage;/*5*/$this->titleButton=$data->titleButton;/*6*/$this->active=$data->active;/*7*/
        }

    }
    public function forcedCloseModal(){
        $this->cleanme();
        $this->resetErrorBag();
        $this->resetValidation();
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title1'=>'required', 'title2'=>'required','title3'=>'required', 'links'=>'required',
            'titleImage'=>'required', 'titleButton'=>'required','active'=>'required'
        ]);
    }
    public function save()
    {
        $this->validate([
            'title1'=>'required', 'title2'=>'required','title3'=>'required', 'links'=>'required',
            'titleImage'=>'required', 'titleButton'=>'required','active'=>'required'
        ]);
        $data=[
            'title1'=>$this->title1,
            'title2'=>$this->title2,
            'title3'=>$this->title3,
            'links'=>$this->links,
            'titleButton'=>$this->titleButton,
            'titleImage'=>$this->titleImage,
//            'Image'=>$this->image,
            'active'=>$this->active,

        ];
        if (!empty($this->colorCode1))$data=array_merge($data,['colorCode1'=>$this->colorCode1]);
        if (!empty($this->colorCode2))$data=array_merge($data,['colorCode2'=>$this->colorCode2]);
        if (!empty($this->colorCode3))$data=array_merge($data,['colorCode3'=>$this->colorCode3]);
        if (!empty($this->image))
        {

            $imageHashName=$this->image->hashName();
            $data=array_merge($data,['Image'=>$imageHashName]);
//            dd($data);
            if ($this->idIn != 'a')
            {

                $updateHashName=sliders::find($this->idIn)->Image;
//                dd($updateHashName,'999999999999999999999');
                $updatePath='app/public/photos/slider/'.$updateHashName;
//                dd(storage_path($updatePath));
                unlink(storage_path($updatePath));
//                dd($updateHashName);

            }
            $this->image->store('public/photos/slider');
            $manager= new ImageManager();
//            برای ریسایز کردن عکس بالا مسیر آدرس عکس را از یکفولدر عقبتر درمسیر استوریج قرار می دهیم آدرس شماره یک مسیر ذخیره فایل آدرس شماره 2 مسیر پیدا کردن فایل جهت کاهش اندازه عکسک
//            مسیری که عکس در آن ذخیره می شود =>>  public/photos/product
//               $path='app/public/photos/product/'.$imageHashName; =>     این مسیر عکسی است که قرار است اندازه ی آن کاهش پیدا کند
            $path='app/public/photos/slider/'.$imageHashName;
//            dd(storage_path($path));
            $image=$manager->make(storage_path($path))->resize(898,463);
            $image->save(storage_path($path));
        }
        if($this->idIn == 'a')
        {
            $data=array_merge($data,['userInsert'=>Auth::user()->id]);
            sliders::create($data);
        }
        else
        {
            $data=array_merge($data,['userUpdate'=>Auth::user()->id]);
            sliders::find($this->idIn)->update($data);
        }

        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('close_form');
        $this->cleanme();
        return redirect()->back()->with('success','عملیات با موفقیت انجام شد!');
    }
    public function cleanme()
    {
        $this->idIn=null;$this->title1=null;$this->title2=null;$this->title3=null;$this->links=null;
        $this->titleButton=null;$this->titleImage=null;$this->Image=null;$this->active=null;
    }

    public function render()
    {
        return view('livewire.admin.slider.add-slider-component');
    }
}
