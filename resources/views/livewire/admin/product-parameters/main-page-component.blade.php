
<div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>
                        {{$maintitle}}
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admindashboard')}}">داشبورد</a></li>
                            <li class="breadcrumb-item active">{{$maintitle}}</li>
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
                                     {{$pagedescription}}
                                </h3>
                            </div>
                            <div class="card-body">
                                <!-- Bootstrap Switch -->
                                <div class="card card-secondary">
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="  p-2 ">افزودن دسته بندی
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addcategory">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن زیر دسته بندی
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addscategory">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن رنگ
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addcolor">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن نام محصول
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addProductName">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن برند
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addBrands">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن سایز
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addSize">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                            <div class="  p-2 ">افزودن زیر سایز
                                                <label class="switch">
                                                    <input type="checkbox" wire:model="addSubSize">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                        </div>

                    </div>
                    <!-- /.col -->
                </div>
                @if($addcategory)
                    @include('livewire.admin.product-parameters.categories.main')
                @endif
                @if($addscategory)
                    @include('livewire.admin.product-parameters.scategory.main')
                @endif
                @if($addcolor)
                    @include('livewire.admin.product-parameters.color.main')
                @endif
                @if($addProductName)
                    @include('livewire.admin.product-parameters.productName.main');
                @endif
                @if($addBrands)
                    @include('livewire.admin.product-parameters.brands.main');
            @endif
                @if($addSize)
                    @include('livewire.admin.product-parameters.size.main');
            @endif
                @if($addSubSize)
                    @include('livewire.admin.product-parameters.subsize.main');
            @endif
            <!-- ./row -->
            </div><!-- /.container-fluid -->



        </section>
        <!-- /.content -->
    </div>
    @include('livewire.admin.product-parameters.modal')

</div>
@push('css')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 20px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 12px;
            width: 12px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endpush
@push('scp')
    @livewireScripts
    <!-- Select2 -->

@endpush
