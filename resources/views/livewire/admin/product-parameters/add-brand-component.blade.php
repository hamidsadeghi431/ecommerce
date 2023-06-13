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
                                    <label for="exampleInputEmail1">نام بزند</label>
                                    <input wire:model="brandName" class="form-control" id="exampleInputEmail1" placeholder="نام ویژگی" >
                                    @if($errors->has('brandName'))
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                                            {{ $errors->first('brandName') }}
                                        </div>
                                    @endif
                                </div>
                <div class="form-group">
                    <label for="exampleInputFile">بارگذاری تصویر</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <div x-data="{ isUploading: false , progress: 0 }"
                                 x-on:livewire-upload-start="isUploading = true"
                                 x-on:livewire-upload-finish="isUploading = false"
                                 x-on:livewire-upload-error="isUploading = false"
                                 x-on:livewire-upload-progress="progress=$event.detail.progress"
                            >

                                <input wire:model="input_type" type="file" class="custom-file-input" id="exampleInputFile">
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
                    @if($errors->has('input_type'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('input_type') }}
                        </div>
                    @endif
                </div>

                <table class="table table-hover">

                    <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">

                    @foreach($categories as $item)
                                            <td class="bg-gray-light">
                                                <div class="  p-2 ">{{$item->categoryName}}
                                                    <label class="switch">
                                                        <input type="checkbox" value="{{$item->catId}}" wire:model="fld{{$item->catId}}">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        <tr class="expandable-body">
                                            <td>
                                                <div class="p-0">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                        @foreach($item->scategory as $item1)
                                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                                <td class="bg-light">

                                                                    <div class="  p-2 ">
                                                                        &nbsp; &nbsp; &nbsp; &nbsp;<span class="text-bold">{{$item1->scategoryName}}</span>
                                                                        <label class="switch">
                                                                            <input type="checkbox" value="{{$item1->scatId}}" wire:model="flc{{$item1->scatId}}">
                                                                            <span class="slider round"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tr>

                    </tbody>
                </table>

            <div class="form-group">
                <label for="exampleInputPassword1">توضیحات</label>
                <textarea wire:model="description" class="form-control" rows="3" placeholder="توضیحات بنویسید ..."></textarea>
                @if($errors->has('description'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('description') }}
                    </div>
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
