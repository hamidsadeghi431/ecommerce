<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\admin\setting\ManageSeo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostseoComponent extends Component
{
    use WithFileUploads;
    public  $title;public $description;public $keywords;public $icon;public $icon_apple;public $active;public $app_title;public $favIcon;public $webaddr;public $author;
    public $listeners=['getModalId'];
    public $idIn;

    public function getModalId($id)
    {
        $this->idIn=$id;
        $data=ManageSeo::find($id);
        $this->title=$data->title;
        $this->description=$data->description;
        $this->keywords=$data->keywords;
        $this->active=$data->active;
        $this->app_title=$data->app_title;
        $this->author=$data->author;
        $this->webaddr=$data->webaddr;
    }

    public function save()
    {
//        dd($this->favIcon->hashName());
        if (empty($this->favIcon)) $x=ManageSeo::value('icon');
        else {$x=$this->favIcon->hashName();
        $this->validate(['favIcon' => 'image|max:10024', // 1MB Max
        ]);}
        if($this->idIn)
        {
            $data=[
                'title'=>$this->title,
                'description'=>$this->description,
                'keywords'=>$this->keywords,
                'app_title'=>$this->app_title,
                'active'=>$this->active,
                'author'=>$this->author,
                'webaddr'=>$this->webaddr,
                'icon'=>$x,
                'update_user_id'=>Auth::user()->id,
                ];
            if (!empty($this->favIcon))
            {
                $this->favIcon->store('public/photos');
            }
            ManageSeo::where('id',$this->idIn)->update($data);
        }
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('close_form');
    }
    public function render()
    {
        return view('livewire.admin.setting.postseo-component');
    }
}
