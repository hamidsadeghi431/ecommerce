<div>
    <!-- color start -->
    <section class="category-section top-space">
        <ul class="category-slide">
            @foreach($brands as $item)
            <li>
                <a href="{{route('innerbrand',$item->BrandId)}}" class="category-box">
                    <img src="{{url('storage/app/public/photos/Brands/'.$item->picture)}}" width="50px" height="50px" class=" img-circle" alt="{{$item->brandName}}">
                    <h4>{{$item->brandName}}</h4>
                </a>
            </li>
            @endforeach
        </ul>
    </section>
    <div class="divider t-12 b-20"></div>
    <!-- color end -->


    <!-- home slider start -->
    <section class="pt-0 home-section ratio_55">
        <div class="home-slider slick-default theme-dots">
            @foreach($sliders as $slider)
            <div>
                <div class="slider-box">
                    <img src="{{url('storage/app/public/photos/slider/'.$slider->Image)}}" class="img-fluid bg-img" alt="{{$slider->titleImage}}">
                    <div class="slider-content">
                        <div>
                            <h2 @if($slider->colorCode1)style="color: {{$slider->colorCode1}}"@endif>{{$slider->title1}}</h2>
                            <h1 @if($slider->colorCode2)style="color: {{$slider->colorCode2}}"@endif>{{$slider->title2}}</h1>
                            <h6 @if($slider->colorCode3)style="color: {{$slider->colorCode3}}"@endif>{{$slider->title3}}</h6>
                            <a href="{{$slider->links}}" class="btn btn-solid">{{$slider->titleButton}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- home slider end -->


    <!-- deals section start -->
    <section class="deals-section px-15 pt-0">
        <div class="title-part">
            <h2>محصولات جدید</h2>
            <a href="{{route('products')}}">مشاهده همه</a>
        </div>
        <div class="product-section">
            <div class="row gy-3">
                @foreach($products as $item)
                <div class="col-12">
                    <div class="product-inline">
                        <a href="{{route('productDetails',$item->id)}}">
                            <img src="{{url('storage/app/public/photos/product/'.$item->image)}}" class="img-fluid" alt="">
                        </a>
                        <div class="product-inline-content">
                            <div>
                                @foreach($item->productName as $item1)
                                    <a href="{{route('productDetails',$item->id)}}">
                                        <h4>{{$item1->ProductName}}</h4>
                                    </a>
                                @endforeach

                                <h5>{{$item->shortDescription}}</h5>
                                <div class="price">
                                    <h4>{{number_format($item->originalPrice)}} تومان <del>{{number_format($item->sellingPrice)}} تومان</del><span>20%</span></h4>
                                </div>
                            </div>
                        </div>
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
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <!-- deals section end -->


    <!-- tab section start -->
    <section class="pt-0 tab-section">
        <div class="title-section px-15">
            <h2>سبک خود را پیدا کنید</h2>
            <h3>فروش فوق العاده تابستانی</h3>
        </div>
        <div class="tab-section">
            <ul class="nav nav-tabs theme-tab pl-15">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#trending" type="button">پرطرفدار</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#top" type="button">برترین ها</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#featured" type="button">محصولات ویژه</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#rated" type="button">دارای رتبه برتر</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ship" type="button">آماده ارسال</button>
                </li>
            </ul>
            <div class="tab-content px-15">
                <div class="tab-pane fade show active" id="trending">
                    <div class="row gy-3 gx-3">
                        <div class="col-md-4 col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/4.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-md-4 col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/5.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-md-4 col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/6.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-md-4 col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/7.jpg" alt="" class="img-fluid bg-img"></a>
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
                </div>
                <div class="tab-pane fade" id="top">
                    <div class="row gy-3 gx-3">
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/6.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/7.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/4.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/5.jpg" alt="" class="img-fluid bg-img"></a>
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
                </div>
                <div class="tab-pane fade" id="featured">
                    <div class="row gy-3 gx-3">
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/7.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/4.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/5.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/6.jpg" alt="" class="img-fluid bg-img"></a>
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
                </div>
                <div class="tab-pane fade" id="rated">
                    <div class="row gy-3 gx-3">
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/5.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/4.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/7.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/6.jpg" alt="" class="img-fluid bg-img"></a>
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
                </div>
                <div class="tab-pane fade" id="ship">
                    <div class="row gy-3 gx-3">
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/4.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/6.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/7.jpg" alt="" class="img-fluid bg-img"></a>
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
                        <div class="col-6">
                            <div class="product-box ratio_square">
                                <div class="img-part">
                                    <a href="product.html"><img src="assets/images/products/5.jpg" alt="" class="img-fluid bg-img"></a>
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
                </div>
            </div>
        </div>
    </section>
    <!-- tab section end -->


    <!-- timer banner start -->
    <section class="banner-timer">
        <div class="banner-bg">
            <div class="banner-content">
                <div>
                    <h6>لباس جین</h6>
                    <h2>شروع فروش در</h2>
                    <div class="counters">
                        <div class="counter">
                            <span id="seconds">NA</span>
                            <p>ثانیه</p>
                        </div>
                        <div class="counter">
                            <span id="minutes">NA</span>
                            <p>دقیقه</p>
                        </div>
                        <div class="counter">
                            <span id="hours">NA</span>
                            <p>ساعت</p>
                        </div>
                        <div class="counter d-none">
                            <span id="days">NA</span>
                            <p>روز</p>
                        </div>
                    </div>
                    <a href="shop.html">کاوش کنید</a>
                </div>
            </div>
            <div class="banner-img">
                <img src="assets/images/banner-image.png" class="img-fluid" alt="">
            </div>
        </div>
    </section>
    <!-- timer banner end -->


    <!-- brands section start -->
    <section class="brand-section pl-15">
        <h2 class="title">بزرگترین تخفیف ها در برندهای برتر</h2>
        <div class="brand-slider slick-default">
            <div>
                <a class="brand-box" href="shop.html">
                    <img src="assets/images/brand-logos/1.png" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a class="brand-box" href="shop.html">
                    <img src="assets/images/brand-logos/2.png" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a class="brand-box" href="shop.html">
                    <img src="assets/images/brand-logos/3.png" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a class="brand-box" href="shop.html">
                    <img src="assets/images/brand-logos/4.png" class="img-fluid" alt="">
                </a>
            </div>
            <div>
                <a class="brand-box" href="shop.html">
                    <img src="assets/images/brand-logos/5.png" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </section>
    <div class="divider"></div>
    <!-- brands section end -->


    <!-- kids corner section start -->
    <section class="pt-0 product-slider-section overflow-hidden">
        <div class="title-section px-15">
            <h2>لباس های بچگانه</h2>
            <h3>لباس برای لیول وان شما </h3>
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
                            <h4>3200 تومان <del>3500 تومان</del><span> 20% سود</span></h4>
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
                            <h4>3200 تومان <del>3500 تومان</del><span> 20% سود</span></h4>
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
                            <h4>3200 تومان <del>3500 تومان</del><span> 20% سود</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- kids corner section end -->


    <!-- offer corner start -->
    <section class="offer-corner-section px-15">
        <h2 class="title">پیشنهاد</h2>
        <div class="row g-3">
            <div class="col-6">
                <div class="offer-box">
                    <a href="shop.html">زیر 50 تومان</a>
                </div>
            </div>
            <div class="col-6">
                <div class="offer-box">
                    <a href="shop.html">20 تومان تخفیف</a>
                </div>
            </div>
            <div class="col-6">
                <div class="offer-box">
                    <a href="shop.html">1 خرید 1 جایزه</a>
                </div>
            </div>
            <div class="col-6">
                <div class="offer-box">
                    <a href="shop.html">50 درصد تخفیف</a>
                </div>
            </div>
        </div>
    </section>
    <!-- offer corner end -->


    <!-- panel space start -->
    <section class="panel-space"></section>
    <!-- panel space end -->

</div>
