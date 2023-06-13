<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                {{$pagedescription}}
            </h3>
            <div class="card-tools">
                <button wire:click="selectItem('a','add')" type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
        </div>
        <!-- /.card -->
        <div class="card-body">

            <div class="card-body table-responsive p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px" class="text-center">ردیف</th>
                        <th class="text-center">نام محصول</th>
                        <th class="text-center">قیمت خرید</th>
                        <th class="text-center">قیمت فروش</th>
{{--                        <th class="text-center">تعداد</th>--}}
                        <th class="text-center">فعال</th>
                        <th class="text-center">دسته بندی</th>
                        <th class="text-center">زیر دسته بندی</th>
                        <th class="text-center">برند</th>
{{--                        <th class="text-center">رنگ</th>--}}
                        <th class="text-center">موجود</th>
                        <th class="text-center">تصویر اصلی</th>
                        <th class="text-center">گالری تصاویر</th>
                        <th>اصلاح</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($tableProducts as $item)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            @foreach($item->productName as $product)<td>{{$product->ProductName}}</td>@endforeach
                            <td class="text-center">{{number_format($item->originalPrice)}}</td>
                            <td class="text-center">{{number_format($item->sellingPrice)}}</td>
{{--                            <td class="text-center">{{number_format($item->quantity)}}</td>--}}
                            <td class="text-center">@if($item->active == 1) <button class="btn btn-success"><i class="fa fa-check"></i> </button>
                                @else <button class="btn btn-danger"><i class="fa fa-times"></i> </button>@endif</td>
                            @foreach($item->category as $category)<td class="text-center">{{$category->categoryName}}</td>@endforeach
                            @if($item->scategory_id)
                                @foreach($item->scategory as $scategory)<td class="text-center"> {{$scategory->scategoryName}}</td>@endforeach
                            @else <td class="text-center"> <button class="btn btn-danger"><i class="fa fa-times"></i></button></td>@endif
                            @foreach($item->brands as $brands)<td class="text-center">{{$brands->brandName}}</td>@endforeach
                            @php($colorsArr=explode(",",$item->colorId))
{{--                            <td class="text-center">--}}
{{--                                @foreach($colorsArr as $color)--}}
{{--                                    <span style=" height: 25px;width: 25px;background-color: {{$color}};border-radius: 50%;display: inline-block;"></span>--}}
{{--                                @endforeach--}}
{{--                            </td>--}}

                            <td class="text-center">@if($item->inStock == 1) <button  wire:click="showQuantity({{$item->id}})"  class="btn btn-success"><i class="fa fa-check"></i> </button>
                                @else <button class="btn btn-danger"><i class="fa fa-times"></i> </button>@endif</td>
                            <td class="text-center"><img src="{{url('storage/app/public/photos/product/'.$item->image)}}" width="50px" height="50px" class=" img-circle" alt=""></td>
                            @php($imagesArr=explode(',',$item->images))
                            <td class="text-center">
                                @foreach($imagesArr as $images)
                                    @if($images != null)
                                        <img src="{{url('storage/app/public/photos/product/'.$images)}}" width="50px" height="50px" class=" img-circle" alt="">
                                    @endif
                                @endforeach
                            </td>
                            <td><button wire:click="selectItem({{$item->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i> </button> </td>
                            <td><button wire:click="selectItem({{$item->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
</div>
