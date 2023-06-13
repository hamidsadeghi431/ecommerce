<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            افزورن سایز
        </h3>
        <div class="card-tools">
            <button wire:click="dataSize('a','parameter')" type="button" class="btn btn-primary" >
                افزورن سایز
            </button>
            <button wire:click="dataSize('a','parameter')" class="btn btn-warning" data-toggle="modal" data-target="#addParameters"><i class="fa fa-plus"></i>

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
                                <th>نام سایز</th>
                                <th>توضیحات</th>
                                <th>وضعیت</th>
                                <th>اصلاح</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($size as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->sizeName}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>@if($item->active == 1) <button class="btn btn-success"><i class="fa fa-check"></i> </button> @else<button class="btn btn-danger"><i class="fa fa-times"></i> </button>@endif</td>
                                    <td><button wire:click="dataSize({{$item->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i> </button> </td>
                                    <td><button wire:click="dataSize({{$item->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i> </button> </td>
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
