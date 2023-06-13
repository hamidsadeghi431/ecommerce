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
                    <label>انتخاب دسته بندی اصلی</label>
                    <select wire:model="cat_id"  class="form-control select2" style="width: 100%;">
                        <option selected="selected">--</option>
                                            @foreach($categories as $item)
                                                <option value="{{$item->catId}}" @if($item->active != 1)disabled="disabled"@endif>{{$item->categoryName}}</option>
                                            @endforeach
                    </select>
                    @if($errors->has('cat_id'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                            {{ $errors->first('cat_id') }}
                        </div>
                    @endif
                </div>
                @if($cat_id)
            <div class="form-group">
                <label for="exampleInputEmail1">نام سر دسته بندی</label>
                <input wire:model="scategoryName" class="form-control" id="exampleInputEmail1" placeholder="نام ویژگی" >
                @if($errors->has('scategoryName'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('scategoryName') }}
                    </div>
                @endif
            </div>
                @endif
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
                <input wire:model="active" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">فعال</label>
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
