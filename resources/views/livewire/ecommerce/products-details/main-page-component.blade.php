<div>
    <!-- header start -->
@foreach($product as $item)
    @foreach($item->productName as $item1)
    @endforeach
@endforeach
    <!-- header end -->


    <!-- slider start -->
    <section class="product-page-section top-space pt-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                @php($imagesArr=explode(',',$item->images))
                @php($i=1)
                    @foreach($imagesArr as $images)
                        @if($images != null)
                            {{--                            <img src="" width="50px" height="50px" class=" img-circle" alt="">--}}
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}"></li>

                    @endif
                    @endforeach

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('storage/app/public/photos/product/'.$item->image)}}"  alt="First slide">
                </div>
                @php($imagesArr=explode(',',$item->images))
                    @foreach($imagesArr as $images)
                        @if($images != null)
{{--                            <img src="" width="50px" height="50px" class=" img-circle" alt="">--}}
                            <div class="carousel-item ">
                                <img class="d-block w-100" src="{{url('storage/app/public/photos/product/'.$images)}}"  alt="First slide">
                            </div>
                        @endif
                    @endforeach


            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
        <div class="product-detail-box px-15 pt-2">
            <div class="main-detail">
                <h2 class="text-capitalize">{{$item1->ProductName}}</h2>
                <h6 class="content-color">{{$item->shortDescription}}</h6>
                <div class="rating-section">
                    <ul class="ratings">
                        <li><i class="iconly-Star icbo"></i></li>
                        <li><i class="iconly-Star icbo"></i></li>
                        <li><i class="iconly-Star icbo"></i></li>
                        <li><i class="iconly-Star icbo"></i></li>
                        <li><i class="iconly-Star icbo empty"></i></li>
                    </ul>
                    <h6 class="content-color">(20 امتیاز)</h6>
                </div>
                <div class="price">
                    <h4>{{number_format($item->originalPrice)}} تومان <del>{{number_format($item->sellingPrice)}} تومان</del><span>(20% تخفیف)</span></h4>
                </div>
                <h6 class="text-green">با احتساب کلیه مالیات ها</h6>
            </div>
        </div>
        <div class="divider"></div>
        <div class="product-detail-box px-15">
            <div class="size-detail">
                <div class="form-floating mb-4">
                    <select wire:model="msize" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option>انتخاب سایز</option>
                        @foreach($sizeall as $size)
                            <option value="{{\App\Models\sizes::where('sizeId',$size)->value('sizeId')}}">{{\App\Models\sizes::where('sizeId',$size)->value('sizeName')}}</option>
{{--                            <li><a href="javacript:void(0)" wire:click="zirSize({{$item->id}},{{$size}})"></a></li>--}}
                        @endforeach

                    </select>
                    <label for="floatingSelect">انتخاب سایز</label>
                </div>
                @if($msize != null)
                    @php($step=2)

{{--                    ssdsdsdsd--}}
                    <div class="form-floating mb-4">
                        <select wire:model="zsize" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option>انتخاب زیر سایز</option>
                            @foreach($zsizeall as $zsize1)
                                <option value="{{\App\Models\sizedetails::where('sizeDetailsId',$zsize1)->value('sizeDetailsId')}}">{{\App\Models\sizedetails::where('sizeDetailsId',$zsize1)->value('title')}}</option>
{{--                                                            <li><a href="javacript:void(0)" wire:click="zirSize({{$item->id}},{{$size}})"></a></li>--}}
                            @endforeach

                        </select>
                        <label for="floatingSelect">انتخاب زیر سایز</label>
                    </div>
                @endif
            </div>
            @if($zsize != null)
                @php($step=3)
                <div class="spinner-grow" role="status">
                    <span class="sr-only"></span>
                </div>
            <div class="size-detail">
                            <div class="form-floating mb-4">
                                <select wire:model="color" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option>انتخاب رنگ</option>
                                    @foreach($colors as $color1)
                                        <option value="{{\App\Models\colors::where('colorId',$color1)->value('colorId')}}">{{\App\Models\colors::where('colorId',$color1)->value('colorName')}}</option>
{{--                                        <li><a href="javacript:void(0)" wire:click="zirSize({{$item->id}},{{$size}})"></a></li>--}}
                                    @endforeach

                                </select>
                                <label for="floatingSelect">انتخاب رنگ</label>
                            </div>
            </div>
            @endif
            @if($zsize && $color != null && $msize)
                @php($step=4)
            <div class="size-detail">
                <h4 class="size-title">تعداد:</h4>
                <div class="qty-counter">
                    <div class="input-group">
                        <button wire:click="decrease"  type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                            <img src="{{asset('assets/svg/minus-square.svg')}}" class="img-fluid" alt="">
                        </button>
                        <input wire:model="qty" type="text"  class="form-control form-theme qty-input input-number"
                               value="{{$qty}}"  required>
                        <button wire:click="increase" type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                            <img src="{{asset('assets/svg/plus-square.svg')}}" class="img-fluid" alt="">
                        </button>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <div class="divider"></div>
        <div class="product-detail-box px-15">
            <h4 class="page-title">پیشنهادات برای شما</h4>
            <h5>از کد MULTIKART10 برای دریافت 10% تخفیف استفاده کنید</h5>
            <h6 class="content-color">از کد MULTIKART10 برای دریافت 10% تخفیف در حداقل سفارش 20000 تومان استفاده کنید. پیشنهاد فقط برای اولین بار برای کاربران معتبر است</h6>
            <div class="offer-code">
                <div class="code">
                    <h6>MULTIKART10</h6>
                    <img src="assets/svg/scissor.svg" class="img-fluid" alt="">
                </div>
                <h6 class="content-color">کپی کردن</h6>
            </div>
        </div>
        <div class="divider"></div>
        <div class="product-detail-box px-15">
            <h4 class="page-title">سیاست بازگشت و مبادله</h4>
            <h4 class="content-color">این محصول واجد شرایط مرجوعی و تعویض سایز می باشد. لطفاً در عرض 7 روز پس از تحویل، از بخش "سفارشات من" در برنامه بازگردانی/تعویض را انجام دهید. لطفا مطمئن شوید که محصول در شرایط اصلی خود با تمام برچسب ها متصل است.</h4>
        </div>
        <div class="divider"></div>
        <div class="product-detail-box px-15">
            <h4 class="page-title mb-1">مشخصات محصول</h4>
            {{$item->longDescription}}
        </div>
        <div class="divider"></div>
        <div class="product-detail-box px-15">
            <h4 class="page-title">نظرات مشتریان (24) <a href="#">همه نظرات</a></h4>
            <div class="review-section">
                <ul>
                    <li>
                        <div class="media">
                            <img src="assets/images/user/2.png" class="img-fluid" alt="">
                            <div class="media-body">
                                <h4>مارک یاکوب | 20 دی 1401</h4>
                                <ul class="ratings">
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo empty"></i></li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="content-color">این یک دامن واقعا ناز است! من انتظار نداشتم در مواد پلی استر آنقدر احساس خوبی داشته باشم. روشنایی چاپ کمی کمتر از آنچه در توضیحات محصول نشان داده شده است.</h4>
                        <div class="review-bottom">
                            <h6>سایز خریداری شده: <span class="content-color">کوچک</span></h6>
                            <div class="liking-sec">
                                <span class="content-color"><img src="assets/svg/thumbs-up.svg" class="img-fluid"
                                                                 alt="">20</span>
                                <span class="content-color"><img src="assets/svg/thumbs-down.svg" class="img-fluid"
                                                                 alt="">2</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <img src="assets/images/user/3.png" class="img-fluid" alt="">
                            <div class="media-body">
                                <h4>مارک یاکوب | 20 دی 1401</h4>
                                <ul class="ratings">
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo"></i></li>
                                    <li><i class="iconly-Star icbo empty"></i></li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="content-color">این یک دامن واقعا ناز است! من انتظار نداشتم در مواد پلی استر آنقدر احساس خوبی داشته باشم. روشنایی چاپ کمی کمتر از آنچه در توضیحات محصول نشان داده شده است.</h4>
                        <div class="review-bottom">
                            <h6>سایز خریداری شده: <span class="content-color">کوچک</span></h6>
                            <div class="liking-sec">
                                <span class="content-color"><img src="assets/svg/thumbs-up.svg" class="img-fluid"
                                                                 alt="">20</span>
                                <span class="content-color"><img src="assets/svg/thumbs-down.svg" class="img-fluid"
                                                                 alt="">2</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
        <div class="check-delivery-section product-detail-box px-15">
            <div class="title-section">
                <h4>تحویل را بررسی کنید</h4>
                <h6 class="content-color">برای بررسی تاریخ تحویل / گزینه تحویل، کد پین را وارد کنید</h6>
            </div>
            <div class="pincode-form">
                <input class="form-control form-theme" placeholder="کد پین">
                <a href="">بررسی</a>
            </div>
            <div class="service-section">
                <ul>
                    <li><img src="assets/svg/delivery.svg" class="img-fluid" alt="">ارسال رایگان برای سفارش بالای 200 هزار تومان
                    </li>
                    <li><img src="assets/svg/payment.svg" class="img-fluid" alt="">تحویل نقدی موجود است</li>
                    <li><img src="assets/svg/refund.svg" class="img-fluid" alt="">بازگشت و مبادله آسان 21 روزه
                    </li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
    </section>
    <!-- slider end -->


    <!-- related section start -->
    <section class="pt-0 product-slider-section overflow-hidden">
        <div class="title-section px-15">
            <h2>محصولات مشابه</h2>
        </div>
        <div class="product-slider slick-default pl-15">
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="product.html"><img src="assets/images/products/9.jpg" alt="" class="img-fluid bg-img"></a>
                        <div class="wishlist-btn">
                            <i class="iconly-Heart icli"></i>
                            <i class="iconly-Heart icbo"></i>
                            <div class="effect-group">
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <ul class="ratings">
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo empty"></i></li>
                        </ul>
                        <a href="product.html">
                            <h4>کت جین آبی</h4>
                        </a>
                        <div class="price">
                            <h4>3200 تومان <del>3500 تومان</del><span>20%</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="product.html"><img src="assets/images/products/10.jpg" alt="" class="img-fluid bg-img"></a>
                        <div class="wishlist-btn">
                            <i class="iconly-Heart icli"></i>
                            <i class="iconly-Heart icbo"></i>
                            <div class="effect-group">
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <ul class="ratings">
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo empty"></i></li>
                        </ul>
                        <a href="product.html">
                            <h4>کت جین آبی</h4>
                        </a>
                        <div class="price">
                            <h4>3200 تومان <del>3500 تومان</del><span>20%</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="product.html"><img src="assets/images/products/8.jpg" alt="" class="img-fluid bg-img"></a>
                        <div class="wishlist-btn">
                            <i class="iconly-Heart icli"></i>
                            <i class="iconly-Heart icbo"></i>
                            <div class="effect-group">
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                                <span class="effect"></span>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <ul class="ratings">
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo empty"></i></li>
                        </ul>
                        <a href="product.html">
                            <h4>کت جین آبی</h4>
                        </a>
                        <div class="price">
                            <h4>3200 تومان <del>3500 تومان</del><span>20%</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- related section end -->


    <!-- panel space start -->
    <section class="panel-space"></section>
    <!-- panel space end -->


    <!-- fixed panel start -->
        <div class="fixed-panel">
            <div class="row">
                <div class="col-6">
                    <a href="wishlist.html"><i class="iconly-Heart icli"></i>لیست علاقه مندی</a>
                </div>
                <div class="col-6">
                   @if($step == 0) <a href="#" class="theme-color" ><i class="iconly-Buy icli"></i>لطفا سایز اصلی را انتخاب کنید</a>@elseif($step == 2)
                    <a href="#" class="theme-color" ><i class="iconly-Buy icli"></i>لطفا دور شکم  را انتخاب کنید</a>@elseif($step == 3)
                    <a href="#" class="theme-color" ><i class="iconly-Buy icli"></i>لطفا رنگ را انتخاب کنید</a>@elseif($step==4)
                    <button href="#" class="theme-color" wire:click.prevent="store({{$item->id}},'{{$item1->ProductName}}',{{$item->originalPrice}},{{$quantityId}})"><i class="iconly-Buy icli"></i>افزودن سبد</button>
                    @endif
                </div>
            </div>
        </div>

    <!-- fixed panel end -->
</div>
