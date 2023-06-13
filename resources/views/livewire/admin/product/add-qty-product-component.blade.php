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
                    <label> سایز</label>
                    <select wire:model="size" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($sizes as $item)
                            <option value="{{$item->id}}">{{$item->sizeName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6" >
                    <label>زیر سایز</label>
                    <select wire:model="sizedetail" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($sizedetails as $item)
                            <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6" >
                    <label>رنگ</label>
                    <select wire:model="color" class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                        @foreach($colors as $item)
                            <option value="{{$item->colorId}}">{{$item->colorName}}</option>
                        @endforeach
                    </select>
                </div>
{{--                @if($category_id)--}}
{{--                    <div class="form-group col-6" >--}}
{{--                        <label>زیر دسته بندی</label>--}}
{{--                        <select wire:model="scategory_id" class="form-control select2" style="width: 100%;">--}}
{{--                            <option selected="selected">--</option>--}}
{{--                            @foreach($scategories as $item)--}}
{{--                                <option value="{{$item->scatId}}">{{$item->scategoryName}}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                @endif--}}
                {{--                تعداد--}}
                <div class="form-group col-6">
                    <label for="exampleInputEmail1">تعداد</label>
                    <input wire:model="quantity1" class="form-control" id="exampleInputEmail1" placeholder="تعداد">
                    @if($errors->has('quantity1'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('quantity1') }}
                        </div>
                    @endif
                </div>

            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button  class="btn btn-primary" wire:click="save">
                <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" wire:click="closeme()"><i class="fa fa-times"></i> </button>
            <span wire:loading class="spinner-grow spinner-grow-sm"></span>

        </div>

    </div>
</div>

