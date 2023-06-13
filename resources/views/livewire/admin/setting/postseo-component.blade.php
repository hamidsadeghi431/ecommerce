<div>
    <div class="card card-primary">

        <!-- /.card-header -->
        <!-- form start -->

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان وب سایت</label>
                    <input wire:model="title" class="form-control" id="exampleInputEmail1" placeholder="عنوان وب سایت">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">عنوان اپلیکیشن</label>
                    <input wire:model="app_title" class="form-control" id="exampleInputEmail1" placeholder="عنوان اپلیکیشن">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">نام دارنده وب سایت</label>
                    <input wire:model="author" class="form-control" id="exampleInputEmail1" placeholder="عنوان اپلیکیشن">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">آدرس وب سایت</label>
                    <input wire:model="webaddr" class="form-control" id="exampleInputEmail1" placeholder="عنوان اپلیکیشن">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">کلمات کلیدی</label>
                    <textarea wire:model="keywords" class="form-control" rows="3" placeholder="کلمات کلیدی بنویسید ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">توضیحات</label>
                    <textarea wire:model="description" class="form-control" rows="3" placeholder="توضیحات بنویسید ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">ایکون</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input wire:model="favIcon" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text">بارگزاری</span>
                        </div>
                    </div>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="exampleInputFile">ایکون اپل</label>--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input type="file" class="custom-file-input" id="exampleInputFile">--}}
{{--                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>--}}
{{--                        </div>--}}
{{--                        <div class="input-group-append">--}}
{{--                            <span class="input-group-text">بارگزاری</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="form-check">
                    <input wire:model="active" type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">فعال</label>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button  class="btn btn-primary" wire:click="save"><i class="fa fa-check"></i> </button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> </button>
            </div>

    </div>
</div>
