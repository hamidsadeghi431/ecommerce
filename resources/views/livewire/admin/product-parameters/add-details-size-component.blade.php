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
                <label for="exampleInputEmail1">نام زیر سایز</label>
                <input wire:model="sizeName" class="form-control" id="exampleInputEmail1" placeholder="نام سایز" >
                @if($errors->has('sizeName'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('sizeName') }}
                    </div>
                @endif
            </div>
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
