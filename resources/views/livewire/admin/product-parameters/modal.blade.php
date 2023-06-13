
{{-- مودال افزودن پارامتر--}}
<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">افزودن ویژگی</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if($addcategory)
                    @livewire('admin.product-parameters.add-main-category-component')
                @elseif($addscategory)
                    @livewire('admin.product-parameters.add-scategory-component')
                @elseif($addcolor)
                    @livewire('admin.product-parameters.add-color-component')
                @elseif($addProductName)
                    @livewire('admin.product-parameters.add-product-component')
                @elseif($addBrands)
                    @livewire('admin.product-parameters.add-brand-component')
                @elseif($addSize)
                    @livewire('admin.product-parameters.add-size-component')
                @elseif($addSubSize)
                    @livewire('admin.product-parameters.add-details-size-component')
                @else
                @endif
            </div>
        </div>
    </div>
</div>

{{-- delete modal--}}
<div class="modal fade" id="modalFormDelete" tabindex="-1" aria-labelledby="modalformdeletepost" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalformdeletepost">حذف اطلاعات</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                آیا می خواهید این فایل را حذف کنید؟
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                <button type="button" class="btn btn-primary" wire:click="delete">بله</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="opennotificationModal" tabindex="-1" aria-labelledby="modalformdeletepost" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalformdeletepost">توجه</h5>
                <button class="float-left close"><span class="pull-left" aria-hidden="true" data-dismiss="modal" aria-label="Close">&times;</span></button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                @if(session()->has('delNotification'))
                    <div class="alert alert-danger alert-dismissible text-center">
                        <span class="spinner-grow spinner-grow-sm"></span>
{{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                        <h5><i class="icon fa fa-check"></i> توجه!</h5>
                        {{ session()->get('delNotification') }}
                    </div>
                    @endif
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">تایید</button>
            </div>
        </div>
    </div>
</div>

@push('scp')
    <script>
        window.addEventListener('openmodalparameters',event=>{
            $('#exampleModalCenter').modal('show');
        })
        window.addEventListener('closemodalparameters',event=>{
            $('#exampleModalCenter').modal('hide');
        })
    </script>
{{--    for delete modal--}}
    <script>
        window.addEventListener('opendeletemodal', event => {
            $("#modalFormDelete").modal('show');
        })
    </script>
    <script>
        window.addEventListener('closedeletemodal', event => {
            $("#modalFormDelete").modal('hide');
        })
    </script>
{{--    for notification modal--}}
    <script>
        window.addEventListener('opennotificationModal', event => {
            $("#opennotificationModal").modal('show');
        })
    </script>
{{--    for prevent validation bug --}}
    <script>
        $(document).ready(function(){
            $("#exampleModalCenter").on('hidden.bs.modal', function(){
                livewire.emit('forcedCloseModal');
            });
        });
    </script>
@endpush
