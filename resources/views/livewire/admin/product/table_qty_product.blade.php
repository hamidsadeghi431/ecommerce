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
                        <th class="text-center">رنگ</th>
                        <th class="text-center">سایز</th>
                        <th class="text-center">زیرسایز</th>
                        <th class="text-center">تعداد</th>
                        <th>اصلاح</th>
                        <th>حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($tableProducts as $item)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td class="text-center">{{$item->colors_name->colorName}}</td>
                            <td class="text-center">{{$item->size_name->sizeName}}</td>
                            <td class="text-center">{{$item->size_details_name->title}}</td>
                            <td class="text-center">{{$item->qty}}</td>
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
