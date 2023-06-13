<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            افزورن نام محصول
        </h3>
        <div class="card-tools">
            <button wire:click="dataProductName('a','ProductName')" type="button" class="btn btn-primary" >
                افزودن نام محصول
            </button>
            <button wire:click="dataProductName('a','ProductName')" class="btn btn-warning" data-toggle="modal" data-target="#addParameters"><i class="fa fa-plus"></i>

        </div>
    </div>
    <div class="card-body">
        <!-- Bootstrap Switch -->
        <div class="card card-secondary">
            <div class="card-body">
                <div class="row">
                    <div class="card-body table-responsive p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th style="width: 10px">ردیف</th>
                                <th>نام رنگ</th>
                                <th>توضیحات</th>
                                <th>وضعیت</th>
                                <th>اصلاح</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($tableProduct as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->ProductName}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>@if($item->active == 1) <button class="btn btn-success"><i class="fa fa-check"></i> </button> @else<button class="btn btn-danger"><i class="fa fa-times"></i> </button>@endif</td>
                                    <td><button wire:click="dataProductName({{$item->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i> </button> </td>
                                    <td><button wire:click="dataProductName({{$item->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i> </button> </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
