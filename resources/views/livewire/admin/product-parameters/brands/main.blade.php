<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            افزودن برند
        </h3>

        <div class="card-tools">
            <button wire:click="dataBrand('a','parameter')" type="button" class="btn btn-primary" >
                افزودن برند
            </button>
            <button wire:click="dataBrand('a','parameter')" class="btn btn-warning" data-toggle="modal" data-target="#addParameters"><i class="fa fa-plus"></i>

        </div>
        {{--        @dump($tableParameters)--}}
    </div>
    <div class="card-body">
        <!-- Bootstrap Switch -->
        <div class="card-body p-0">
            <div class="form-group col-3">
                <label>انتخاب پارامتر</label>
                <select wire:model="BrandId"  class="form-control select2" style="width: 100%;">
                    <option selected="selected">--</option>
                    @foreach($brands as $item)
                        <option value="{{$item->BrandId}}" @if($item->active != 1)disabled="disabled"@endif>{{$item->brandName}}</option>
                    @endforeach
                </select>
                @if($errors->has('BrandId'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('BrandId') }}
                    </div>
                @endif
            </div>
            <table class="table table-hover">
                <tbody>
                @foreach($tableBrands as $item)

                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td @if($item->active != 1)class="text-danger" @else class="text-bold text-success" @endif>
                            {{$item->catId}}
                            <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            {{$item->brandName}}
                        </td>
                        <td>
                            <img src="{{url('storage/app/public/photos/Brands/'.$item->picture)}}" width="50px" height="50px"  alt="{{$item->brandName}}">
                        </td>
                        <td @if($item->active != 1)class="text-warning"@endif>
                            <button wire:click="dataBrand({{$item->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </td>
                        <td @if($item->active != 1)class="text-warning"@endif>
                            <button wire:click="dataBrand({{$item->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr class="expandable-body">
                        <td>
                            <div class="p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($item->category as $item1)
                                        <tr data-widget="expandable-table" aria-expanded="false">
                                            <td @if($item1->active != 1)class="text-warning"@endif>
                                                {{$item->catId}}-{{$item1->catId}}
                                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                {{$item1->categoryName}}
                                            </td>
                                            <td>
                                        </tr>
                                                                                    <tr class="expandable-body">
                                                                                        <td>
                                                                                            <div class="p-0">
                                                                                                <table class="table table-hover">
                                                                                                    <tbody>
{{--                                                                                                                                                          @php($propertiesslave=\App\Models\admin\parameters\initProperties::where('idpar',$item->idp)->where('idparents',0)->where('idslave',$item1->idparents)->get())--}}
                                                                                                                @foreach($item->scategory as $item2)
                                                                                                                    @if($item2->cat_id == $item1->catId)
                                                                                                         <tr>
                                                                                                                <td >
                                                                                                                    &nbsp; &nbsp; &nbsp; &nbsp; <span class="fa fa-check text-warning"></span> {{$item2->scategoryName}}
                                                                                                                </td>

                                                                                                            </tr>
                                                                                                                    @endif
                                                                                                    @endforeach
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</div>
