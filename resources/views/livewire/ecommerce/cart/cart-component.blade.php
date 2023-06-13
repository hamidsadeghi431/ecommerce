<div>
    <!DOCTYPE html>
    <html lang="fa" dir="rtl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        @if(isset($product))
            @foreach($product as $item)
                @foreach($item->productName as $item1)
                @endforeach
            @endforeach
            <meta name="description" content="{{$item->metaDescription}}">
        @else
            <meta name="description" content="{{\App\Models\admin\setting\ManageSeo::value('description')}}">
        @endif
        @if(isset($product))
            <meta name="keywords" content="{{$item->metaKeyword}}">
            <meta name="keywords" content="{{$item->metaKeyword}}">
        @else
            <meta name="keywords" content="{{\App\Models\admin\setting\ManageSeo::value('keywords')}}">
        @endif
        <meta name="author" content="{{\App\Models\admin\setting\ManageSeo::value('author')}}">
        <link rel="manifest" href="{{asset('assets/manifest.json')}}">
        <link rel="icon" href="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" type="image/x-icon" />
        @if(isset($product))
            <title>{{$item->metaTitle}}</title>
        @else
            <title>{{\App\Models\admin\setting\ManageSeo::value('title')}}</title>
        @endif
        <link rel="icon" href="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" type="image/x-icon" />
        <link rel="apple-touch-icon" href="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}">
        <meta name="theme-color" content="#ff4c3b" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="{{\App\Models\admin\setting\ManageSeo::value('app_title')}}">
        <meta name="msapplication-TileImage" content="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- bootstrap css -->
        <link rel="stylesheet" id="rtl-link" type="text/css" href="{{asset('assets/css/vendors/bootstrap.rtl.css')}}">

        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick-theme.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/slick.css')}}">

        <!-- iconly css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/iconly.css')}}">

        <!-- Theme css -->
        <link rel="stylesheet" id="change-link" type="text/css" href="{{asset('assets/css/style.css')}}">
        {{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
        @stack('css')
        @livewireStyles

    </head>

    <body>
    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{route('products')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>سبد خرید</h2>
                    <h6>مرحله 1 از 3</h6>
                </div>
            </a>
        </div>
        <div class="header-option">
            <ul>
                <li>
                    <a href="{{route('favourite')}}"><i class="iconly-Heart icli"></i></a>
                </li>
            </ul>
        </div>
    </header>

    <!-- header end -->
@if(\Illuminate\Support\Facades\Session::has('success') || Session::has('succsessDel'))
    <section class="order-success-section px-15 top-space xl-space">
        <div>
            <img src="assets/images/check-circle.gif" class="img-fluid" alt="">
            <h1>{{\Illuminate\Support\Facades\Session::get('success')}}</h1>
            <h1>{{\Illuminate\Support\Facades\Session::get('succsessDel')}}</h1>
            <a href="{{route('products')}}"><h1>بازگشت به صفحه محصولات</h1></a>
{{--            <h2>پرداخت با موفقیت انجام شد و سفارش شما در راه است.</h2>--}}
        </div>
    </section>
@endif
    <!-- cart items start -->
    <section class="cart-section pt-0 top-space xl-space">
        @if(\Gloudemans\Shoppingcart\Facades\Cart::count() > 0)
{{--            @dump(\Gloudemans\Shoppingcart\Facades\Cart::content())--}}
        @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $item)
        <div class="cart-box px-15">
            <a href="{{route('productDetails',$item->id)}}" class="cart-img">
{{--                <img src="" class="img-fluid" alt="">--}}
                <img src="{{url('storage/app/public/photos/product/'.$item->model->image)}}" alt="" class="img-fluid">
            </a>
            <div class="cart-content">
                <a href="{{route('productDetails',$item->id)}}">
                    <h4>{{$item->name}}</h4>
                </a>
                <h5 class="content-color">{{$item->model->shortDescription}}</h5>
                <div class="price">
                    <h4>{{number_format($item->price)}} تومان <del>{{number_format($item->model->sellingPrice)}} تومان</del><span>20%</span></h4>
                </div>
                <div class="select-size-sec">

                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#selectQty" class="opion">
                        <h6>سایز :{{$item->options->sizeName}}</h6><i class="iconly-Arrow-Down-2 icli"></i>
                    </a>
                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#selectSize" class="opion">
                        <h6> زیرسایز: {{$item->options->sizeNameDetails}}</h6><i class="iconly-Arrow-Down-2 icli"></i>
                    </a>
                </div>
                <div class="size-detail">
                    <h4 class="size-title">انتخاب رنگ:</h4>
                    <ul class="filter-color">
                        <li>
                            <a href="javascript:void(0)"><div class="color-box {{$item->options->colorName}}"></div></a>
                        </li>

                    </ul>
                </div>
                <div class="size-detail">
                    <h4 class="select-size-sec">تعداد:</h4>
                    <div class="qty-counter">
                        <div class="input-group">
                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="" wire:click.prevent="decQty('{{$item->rowId}}')">
                                <img src="{{asset('assets/svg/minus-square.svg')}}" class="img-fluid" alt="">
                            </button>
                            <input type="text" name="quantity" class="form-control form-theme qty-input input-number"
                                   value="{{$item->qty}}">
                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="" wire:click.prevent="incQty('{{$item->rowId}}')">
                                <img src="{{asset('assets/svg/plus-square.svg')}}" class="img-fluid" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="cart-option">
                    <button class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#removecart"><i class="iconly-Heart icli"></i></button>
                    <span class="divider-cls">|</span>
                    <button class="btn btn-danger" data-bs-toggle="offcanvas" data-bs-target="#removecart"  ><i class="iconly-Delete icli"></i>

                    </button>
                </div>
            </div>
        </div>
        <div class="divider"></div>
                <!-- remove item canvas start -->
                <div class="offcanvas offcanvas-bottom h-auto removecart-canvas" id="removecart">
                    <div class="offcanvas-body small">
                        <div class="content">
                            <h4>حذف آیتم ها:</h4>
                            <p>آیا مطمئن هستید که می خواهید این مورد را از سبد خرید حذف یا منتقل کنید؟</p>
                        </div>
                        <div class="bottom-cart-panel">
                            <div class="row">
                                <div class="col-7">
                                    <a href="wishlist.html" class="title-color">فهرست علاقه مندی ها</a>
                                </div>
                                <div class="col-5">
                                    <a href="#" wire:click="destroy('{{$item->rowId}}')" class="theme-color">حذف</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- remove item canvas end -->
        @endforeach
        </section>
        @else
            <section class="px-15">
                <div class="empty-cart-section text-center">
                    <img src="assets/images/empty-cart.png" class="img-fluid" alt="">
                    <h2>اوه!! هنوز سفارشی وجود ندارد</h2>
                    <p>به نظر می رسد هنوز هیچ سفارشی انجام نداده اید.</p>
                    <a href="{{route('products')}}" class="btn btn-solid w-100">شروع به خرید کنید</a>
                </div>
            </section>
        @endif
    <!-- cart items end -->


    <!-- coupon section -->
    <section class="px-15 pt-0">
        <h2 class="title">تخفیف ها:</h2>
        <div class="coupon-section">
            <i class="iconly-Discount icli icon-discount"></i>
            <input class="form-control form-theme" placeholder="اعمال کد">
            <i class="iconly-Arrow-Right-2 icli icon-right"></i>
        </div>
    </section>
    <div class="divider"></div>
    <!-- coupon end -->


    <!-- order details start -->
    <section id="order-details" class="px-15 pt-0">
        <h2 class="title">جزئیات سفارش:</h2>
        <div class="order-details">
            <ul>
                <li>
                    <h4>مجموع سبد <span>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} تومان</span></h4>
                </li>
{{--                <li>--}}
{{--                    <h4>پس انداز سبد <span class="text-green">2000- تومان</span></h4>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h4>تخفیف کوپن <a href="coupons.html" class="theme-color">درخواست</a></h4>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <h4>تحویل <span>50000 تومان</span></h4>--}}
{{--                </li>--}}
            </ul>
            <div class="total-amount">
                <h4>مجموع <span>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}} تومان</span></h4>
            </div>
            <div class="delivery-info">
                <img src="assets/images/truck.gif" class="img-fluid" alt="">
                <h4>هیچ هزینه ای برای تحویل در این سفارش اعمال نمی شود </h4>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <!-- order details end -->


    <!-- you may also like section start -->
    <section class="pt-0 product-slider-section overflow-hidden">
        <div class="title-section px-15">
            <h2>ممکن است دوست داشته باشید</h2>
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
            <div>
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="product.html"><img src="assets/images/products/2.jpg" alt="" class="img-fluid bg-img"></a>
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
    <div class="divider"></div>
    <!-- you may also like section end -->
    <!-- service section start -->
    <section class="service-wrapper px-15 pt-0">
        <div class="row">
            <div class="col-4">
                <div class="service-wrap">
                    <div class="icon-box">
                        <img src="assets/svg/returning.svg" class="img-fluid" alt="">
                    </div>
                    <span>بازگشت 7 روزه</span>
                </div>
            </div>
            <div class="col-4">
                <div class="service-wrap">
                    <div class="icon-box">
                        <img src="assets/svg/24-hours.svg" class="img-fluid" alt="">
                    </div>
                    <span>پشتیبانی 24/7</span>
                </div>
            </div>
            <div class="col-4">
                <div class="service-wrap">
                    <div class="icon-box">
                        <img src="assets/svg/wallet.svg" class="img-fluid" alt="">
                    </div>
                    <span>پرداخت امن</span>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->
    <div class="cart-bottom">
        <div>
            <div class="left-content">
                <h4>{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}  تومان</h4>
{{--                <a href="#" class="theme-color">مشاهده جزئیات</a>--}}
            </div>
            <a wire:click="purchase('{{\Gloudemans\Shoppingcart\Facades\Cart::subtotal()}}')" href="#" class="btn btn-solid">پرداخت کن</a>
        </div>
    </div>
    @push('scp')
        <script>
            window.addEventListener('opendeletemodal', event => {
                $("#removecart").modal('show');
            })
        </script>
        <script>
            window.addEventListener('closedeletemodal', event => {
                $("#removecart").modal('hide');
            })
        </script>
        <script>
            $(document).ready(function(){
                $("#removecart").on('hidden.bs.modal', function(){
                    livewire.emit('forcedCloseModal');
                });
            });
        </script>
    @endpush
</div>

