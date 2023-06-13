<div>
    <div class="card card-primary">
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible text-center">
                    <span class="spinner-grow spinner-grow-sm"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-check"></i> توجه!</h5>
                    {{ session()->get('success') }}
                </div>
            @endif
            <div class="form-group">
                <label for="exampleInputEmail1">تیتر اول</label>
                <input wire:model="title1" class="form-control" id="exampleInputEmail1" placeholder="تیتر اول" >
                @if($errors->has('title1'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('title1') }}
                    </div>
                @endif
                <label for="exampleInputEmail1"> رنگ تیتر اول</label>
                <input wire:model="colorCode1" class="form-control" id="exampleInputEmail1" placeholder="رنگ تیتر اول" >
                @if($errors->has('colorCode1'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('colorCode1') }}
                    </div>
                @endif
            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">تیتر دوم</label>
                    <input wire:model="title2" class="form-control" id="exampleInputEmail1" placeholder="تیتر دوم" >
                    @if($errors->has('title2'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('title2') }}
                        </div>
                    @endif
                    <label for="exampleInputEmail1"> رنگ تیتر دوم</label>
                    <input wire:model="colorCode2" class="form-control" id="exampleInputEmail1" placeholder="رنگ تیتر دوم" >
                    @if($errors->has('colorCode2'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('colorCode2') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">تیتر سوم</label>
                    <input wire:model="title3" class="form-control" id="exampleInputEmail1" placeholder="تیتر سوم" >
                    @if($errors->has('title3'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('title3') }}
                        </div>
                    @endif
                    <label for="exampleInputEmail1"> رنگ تیتر سوم</label>
                    <input wire:model="colorCode3" class="form-control" id="exampleInputEmail1" placeholder="رنگ تیتر سوم" >
                    @if($errors->has('colorCode3'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('colorCode3') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">لینک</label>
                    <input wire:model="links" class="form-control" id="exampleInputEmail1" placeholder="لینک" >
                    @if($errors->has('links'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('links') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">تیتر کلید</label>
                    <input wire:model="titleButton" class="form-control" id="exampleInputEmail1" placeholder="تیتر کلید" >
                    @if($errors->has('titleButton'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('titleButton') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان عکس اسلایدر</label>
                    <input wire:model="titleImage" class="form-control" id="exampleInputEmail1" placeholder="عنوان عکسی که این عکس در اینترنت پیدا شود" >
                    @if($errors->has('titleImage'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('titleImage') }}
                        </div>
                    @endif
                </div>

                <label for="exampleInputFile">بارگذاری تصویر</label>
                <div class="input-group">
                    <div class="custom-file">
                        <div x-data="{ isUploading: false , progress: 0 }"
                             x-on:livewire-upload-start="isUploading = true"
                             x-on:livewire-upload-finish="isUploading = false"
                             x-on:livewire-upload-error="isUploading = false"
                             x-on:livewire-upload-progress="progress=$event.detail.progress"
                        >

                            <input wire:model="image" type="file" class="custom-file-input" id="exampleInputFile">
                            <div x-show="isUploading" class="progress">
                                <div class="progress-bar bg-primary progress-bar-striped" role="progressbar"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" x-bind:style="`width:${progress}%`">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">بارگذاری</span>
                        </div>
                    </div>
                </div>
                @if($errors->has('image'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('image') }}
                    </div>
                @endif
                @if($image)
                    <img src="{{$image->temporaryUrl()}}" width="120">
                @endif
                @if($idIn && !$image && \App\Models\admin\setting\sliders::where('id',$idIn)->value('image'))
                    <img src="{{url('storage/app/public/photos/slider/'.\App\Models\admin\setting\sliders::where('id',$idIn)->value('image'))}}" width="50px" height="50px" class=" img-circle" alt="">
                @endif
        </div>

            <div class="form-check">
                <div class="  p-2 ">فعال
                    <label class="switch">
                        <input type="checkbox"wire:model="active" >
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
            @if($errors->has('active'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                    {{ $errors->first('active') }}
                </div>
            @endif
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button  class="btn btn-primary" wire:click="save"><i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> </button>
        </div>

    </div>
</div>
