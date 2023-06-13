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
                <div class="row">
                <div class="form-group col-6" >
                    <label>نام محصول</label>
                    <select wire:model="product_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($products as $item)
                            <option value="{{$item->ProId}}">{{$item->ProductName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6" >
                    <label>دسته بندی</label>
                    <select wire:model="category_id" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($categories as $item)
                            <option value="{{$item->catId}}">{{$item->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
                @if($category_id)
                    <div class="form-group col-6" >
                        <label>زیر دسته بندی</label>
                        <select wire:model="scategory_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected">--</option>
                            @foreach($scategories as $item)
                                <option value="{{$item->scatId}}">{{$item->scategoryName}}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="form-group col-6" >
                    <label> انتخاب برند</label>
                    <select wire:model="BrandId" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($Brands as $item)
                            <option value="{{$item->BrandId}}">{{$item->brandName}}</option>
                        @endforeach
                    </select>
                </div>
{{--                <div class="  p-2 ">--}}
{{--                    @foreach($colors as $item)--}}
{{--                        <span style=" height: 25px;width: 25px;background-color: {{$item->colorCode}};border-radius: 50%;display: inline-block;"></span>--}}
{{--                        <label class="switch">--}}
{{--                        <input type="checkbox" value="{{$item->colorCode}}" wire:model="flc{{$item->colorId}}">--}}
{{--                        </label>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
                {{--                قیمت خرید--}}
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">قیمت خرید</label>
                    <input wire:model="originalPrice" class="form-control" id="exampleInputEmail1" placeholder="قیمت خرید">
                    @if($errors->has('originalPrice'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('originalPrice') }}
                        </div>
                    @endif
                    @if($originalPrice)
                        <span class="text-success text-bold">{{number_format($originalPrice)}}</span>
                    @endif
                </div>

                {{--                قیمت فروش--}}
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">قیمت فروش</label>
                    <input wire:model="sellingPrice" class="form-control" id="exampleInputEmail1" placeholder="قیمت فروش">
                    @if($errors->has('sellingPrice'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('sellingPrice') }}
                        </div>
                    @endif
                    @if($sellingPrice)
                        <span class="text-success text-bold">{{number_format($sellingPrice)}}</span>
                    @endif
                </div>

                {{--                تعداد--}}
{{--                <div class="form-group col-6">--}}
{{--                    <label for="exampleInputEmail1">تعداد</label>--}}
{{--                    <input wire:model="quantity" class="form-control" id="exampleInputEmail1" placeholder="تعداد">--}}
{{--                    @if($errors->has('quantity'))--}}
{{--                        <div class="alert alert-danger alert-dismissible">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
{{--                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>--}}
{{--                            {{ $errors->first('quantity') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                </div>--}}
                {{--               توضیحات کوتاه--}}
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">توضیحات کوتاه</label>
                    <textarea wire:model="shortDescription" class="form-control" rows="3" placeholder="توضیحات کوتاه بنویسید ..."></textarea>
                    @if($errors->has('shortDescription'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('shortDescription') }}
                        </div>
                    @endif
                </div>
                {{--               توضیحات بلند--}}
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">توضیحات بلند</label>
                    <textarea wire:model="longDescription" class="form-control" rows="3" placeholder="توضیحات بلند بنویسید ..."></textarea>
                    @if($errors->has('longDescription'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('longDescription') }}
                        </div>
                    @endif
                </div>
                {{--               متا تایتل--}}
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">عنوان صفحه سئو</label>
                    <textarea wire:model="metaTitle" class="form-control" rows="3" placeholder="عنوان صفحه سئو بنویسید ..."></textarea>
                    @if($errors->has('metaTitle'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('metaTitle') }}
                        </div>
                    @endif
                </div>
                {{--               کلمات کلیدی--}}
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">کلمات کلیدی</label>
                    <textarea wire:model="metaKeyword" class="form-control" rows="3" placeholder=" کلمات کلیدی بنویسید ..."></textarea>
                    @if($errors->has('metaKeyword'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('metaKeyword') }}
                        </div>
                    @endif
                </div>
                {{--            متا توضیحات--}}
                <div class="form-group col-6">
                    <label for="exampleInputPassword1">توضیحات سئو</label>
                    <textarea wire:model="metaDescription" class="form-control" rows="3" placeholder="توضیحات سئو بنویسید ..."></textarea>
                    @if($errors->has('metaDescription'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('metaDescription') }}
                        </div>
                    @endif
                </div>
                {{--            بارگذاری تصویر اصلی--}}
                <div class="form-group col-6">
                    <label for="exampleInputFile">بارگذاری تصویر اصلی</label>
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
                    @if($errors->has('input_type'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('input_type') }}
                        </div>
                    @endif
                    @if($image)
                        <img src="{{$image->temporaryUrl()}}" width="120">
                    @endif
                    @if($idIn && !$image && \App\Models\product\products::where('id',$idIn)->value('image'))
                        <img src="{{url('storage/app/public/photos/product/'.\App\Models\product\products::where('id',$idIn)->value('image'))}}" width="50px" height="50px" class=" img-circle" alt="">
                    @endif
                </div>
                {{--            گالری تصاویر محصول--}}
                <div class="form-group col-6">
                    <label for="exampleInputFile">گالری تصاویر محصول</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <div x-data="{ isUploading: false , progress: 0 }"
                                 x-on:livewire-upload-start="isUploading = true"
                                 x-on:livewire-upload-finish="isUploading = false"
                                 x-on:livewire-upload-error="isUploading = false"
                                 x-on:livewire-upload-progress="progress=$event.detail.progress"
                            >

                                <input wire:model="images" type="file" class="custom-file-input" id="exampleInputFile" multiple>
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
                    @if($errors->has('images'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('images') }}
                        </div>
                    @endif
                    @if($images)
                        @foreach($images as $item)
                            <img src="{{$item->temporaryUrl()}}" width="120">
                        @endforeach
                    @endif
                    @if($idIn && !$images)
                        @php($imagesArrq=explode(',',\App\Models\product\products::where('id',$idIn)->value('images')))

                    @foreach($imagesArrq as $images)
                            @if($images != null)
                                <img src="{{url('storage/app/public/photos/product/'.$images)}}" width="50px" height="50px" class=" img-circle" alt="">
                            @endif
                        @endforeach
                    @endif
                </div>
                {{--              فعال  ترند--}}
                <div class="form-check col-6">
                    <div class="  p-2 d-inline">ترند
                        <label class="switch ">
                            <input type="checkbox"wire:model="trending" >
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="  p-2 d-inline">فعال
                        <label class="switch ">
                            <input type="checkbox"wire:model="active" >
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="  p-2 d-inline">موجود
                        <label class="switch ">
                            <input type="checkbox"wire:model="inStock" >
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button  class="btn btn-primary" wire:click="save">
                <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> </button>
            <span wire:loading class="spinner-grow spinner-grow-sm"></span>

        </div>

    </div>
</div>

