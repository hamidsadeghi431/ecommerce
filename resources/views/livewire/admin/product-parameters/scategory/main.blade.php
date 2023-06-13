<div class="card card-primary card-outline">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fas fa-edit"></i>
            افزودن زیر دسته بندی
        </h3>

        <div class="card-tools">
            <button wire:click="dataScategory('a','parameter')" type="button" class="btn btn-primary" >
                افزودن زیر دسته بندی
            </button>
            <button wire:click="dataScategory('a','parameter')" class="btn btn-warning" data-toggle="modal" data-target="#addParameters"><i class="fa fa-plus"></i>

        </div>
        {{--        @dump($tableParameters)--}}
    </div>
    <div class="card-body">
        <!-- Bootstrap Switch -->
        <div class="card-body p-0">
            <div class="form-group col-3">
                <label>انتخاب پارامتر</label>
                <select wire:model="catId"  class="form-control select2" style="width: 100%;">
                    <option selected="selected">--</option>
                    @foreach($tableParameters as $item)
                        <option value="{{$item->catId}}" @if($item->active != 1)disabled="disabled"@endif>{{$item->categoryName}}</option>
                    @endforeach
                </select>
                @if($errors->has('catId'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fa fa-ban"></i> توجه!</h5>
                        {{ $errors->first('catId') }}
                    </div>
                @endif
            </div>
            <table class="table table-hover">
                <tbody>
                @foreach($categories as $item)

                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td @if($item->active != 1)class="text-danger" @else class="text-bold text-success" @endif>
                            {{$item->catId}}
                            <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                            {{$item->categoryName}}
                        </td>

                    </tr>
                    <tr class="expandable-body">
                        <td>
                            <div class="p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    @foreach($item->scategory as $item1)
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td @if($item1->active != 1)class="text-warning"@endif>
                                                                                                    {{$item->catId}}-{{$item1->catId}}
                                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                                    {{$item1->scategoryName}}
                                                </td>
                                                <td>

                                                <td @if($item1->active != 1)class="text-warning"@endif>
                                                    <button wire:click="dataScategory({{$item1->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                                                </td>
                                                <td @if($item1->active != 1)class="text-warning"@endif>
                                                    <button wire:click="dataScategory({{$item1->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>

{{--                                            <tr class="expandable-body">--}}
{{--                                                <td>--}}
{{--                                                    <div class="p-0">--}}
{{--                                                        <table class="table table-hover">--}}
{{--                                                            <tbody>--}}
{{--                                                                                                                    @php($propertiesslave=\App\Models\admin\parameters\initProperties::where('idpar',$item->idp)->where('idparents',0)->where('idslave',$item1->idparents)->get())--}}
{{--                                                            @foreach($item->initpro as $k=>$item2)--}}
{{--                                                                @if(intval($item2->idpar) == intval($item->idp) && $item2->idparents == 0 && $item2->idslave == $item1->idparents)--}}
{{--                                                                    <tr>--}}
{{--                                                                        <td>--}}
{{--                                                                            {{$item2->properties_name}}--}}
{{--                                                                        </td>--}}
{{--                                                                        <td @if($item2->active != 1)class="text-warning"@endif>--}}
{{--                                                                            <button wire:click="InitProperties({{$item2->id}},'update')" class="btn btn-primary"><i class="fa fa-edit"></i></button>--}}
{{--                                                                        </td>--}}
{{--                                                                        <td @if($item2->active != 1)class="text-warning"@endif>--}}
{{--                                                                            <button wire:click="InitProperties({{$item2->id}},'delete')" class="btn btn-danger"><i class="fa fa-trash"></i></button>--}}
{{--                                                                        </td>--}}
{{--                                                                    </tr>--}}
{{--                                                                @endif--}}
{{--                                                            @endforeach--}}
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
{{--                                                    </div>--}}
{{--                                                </td>--}}
{{--                                            </tr>--}}
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
