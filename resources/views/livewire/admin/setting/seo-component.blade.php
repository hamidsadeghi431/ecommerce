<div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                            تنظیمات سئو
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admindashboard')}}">داشبورد</a></li>
                            <li class="breadcrumb-item active">تنظیمات منوها</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    تعریف سئو
                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="card-body table-responsive p-0">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">ردیف</th>
                                            <th>عنوان وب سایت</th>
                                            <th>عنوان اپلیکیشن</th>
                                            <th style="width: 200px">کلمات کلیدی</th>
                                            <th style="width: 200px">توضیحات</th>
                                            <th>لوگو وب سایت</th>
                                            <th>نام دارنده وب سایت</th>
                                            <th>آدرس وب سایت</th>
                                            <th>فعال</th>
                                            <th>اصلاح</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            @foreach($tableMain as $item)
                                            <td>1.</td>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->app_title}}</td>
                                            <td >{{$item->keywords}}</td>
                                            <td>{{$item->description}}</td>
                                            <td><img src="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" class="img-fluid" alt=""></td>
                                            <td>{{$item->author}}</td>
                                            <td>{{$item->webaddr}}</td>
                                            <td>@if($item->active == 1)<button class="btn btn-success"><i class="fa fa-check"></i> </button>
                                                @else
                                                    <button class="btn btn-danger"><i class="fa fa-times"></i> </button>
                                                @endif
                                            </td>
                                            <td><button wire:click="selectItem({{$item->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i> </button> </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- ./row -->
            </div><!-- /.container-fluid -->

            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">مدیریت سئو</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @livewire('admin.setting.postseo-component')
                        </div>

                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

        </section>
        <!-- /.content -->
    </div>
</div>
@push('css')

@endpush
@push('scp')
    <script>
        window.addEventListener('show-form',event=>{
            $('#modal-default').modal('show');
        })
        window.addEventListener('close_form',event=>{
            $('#modal-default').modal('hide');
        })
    </script>
@endpush
