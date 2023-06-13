<div>
    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>صفحه اصلی</h2>
                    <h6>{{$cnt}} محصول</h6>
                </div>
            </a>
        </div>
        <div class="header-option">
            <ul>
                <li>
                    <a href="wishlist.html"><i class="iconly-Heart icli"></i></a>
                </li>
                <li>
                    <a href="cart.html"><i class="iconly-Buy icli"></i></a>
                </li>
            </ul>
        </div>
    </header>
    <!-- header end -->


    <!-- search panel start -->
    <div class="search-panel top-space xl-space px-15">
        <div class="search-bar">
            <input class="form-control form-theme" placeholder="جستجو">
            <i class="iconly-Search icli search-icon"></i>
            <i class="iconly-Camera icli camera-icon"></i>
        </div>
        <div class="filter-btn" data-bs-toggle="modal" data-bs-target="#filterModal">
            <i class="iconly-Filter icli"></i>
        </div>
    </div>
    <!-- search panel end -->


    <!-- products start -->
    <section class="px-15 lg-t-space">
        <div class="row gy-3 gx-3">
                @foreach($products as $item)
                    <div class="col-6">
                <div class="product-box ratio_square">
                    <div class="img-part">
                        <a href="{{route('productDetails',$item->id)}}"> <img src="{{url('storage/app/public/photos/product/'.$item->image)}}" alt="" class="img-fluid"></a>
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
                        <label>جدید</label>
                    </div>
                    <div class="product-content">
                        <ul class="ratings">
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo"></i></li>
                            <li><i class="iconly-Star icbo empty"></i></li>
                        </ul>
                            @foreach($item->productName as $item1)
                            <a href="{{route('productDetails',$item->id)}}">
                            <h4>{{$item1->ProductName}}</h4>
                            </a>
                        @endforeach
                        <div class="price">
                            <h4>{{number_format($item->sellingPrice) }} تومان <del>{{number_format($item->originalPrice)}} تومان</del><span>20%</span></h4>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </section>
    <!-- products end -->


    <!--  filter modal start  -->
    <div class="modal filter-modal" id="filterModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>فیلترها</h2>
                    <a href="javascript:void(0)" data-bs-dismiss="modal"><img src="assets/svg/x-dark.svg" class="img-fluid" alt=""></a>
                </div>
                <div class="modal-body">
                    <div class="filter-box">
                        <h2 class="filter-title">مرتب سازی:</h2>
                        <div class="filter-content">
                            <select class="form-select form-control form-theme" aria-label="Default select example">
                                <option selected>پیشنهادی</option>
                                <option value="1">محبوبیت</option>
                                <option value="2">جدیدترین</option>
                                <option value="3">قیمت: بالا به پایین</option>
                                <option value="4">قیمت: کم به بالا</option>
                                <option value="5">امتیاز مشتری</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-box">
                        <h2 class="filter-title">برند:</h2>
                        <div class="filter-content">
                            <ul class="row filter-row g-3">
                                <li class="col-6">
                                    <div class="filter-col">در حال حاضر اینجا</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">زارا</div>
                                </li>
                                <li class="col-6 active">
                                    <div class="filter-col">کاسیو</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">توکیو تالک</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">ویوژ</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">گوچی</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-box">
                        <h2 class="filter-title">اندازه:</h2>
                        <div class="filter-content">
                            <ul class="row filter-row g-3">
                                <li class="col-4">
                                    <div class="filter-col">کوچک</div>
                                </li>
                                <li class="col-4">
                                    <div class="filter-col">متوسط</div>
                                </li>
                                <li class="col-4">
                                    <div class="filter-col">بزرگ</div>
                                </li>
                                <li class="col-4">
                                    <div class="filter-col">خ.بزرگ</div>
                                </li>
                                <li class="col-4">
                                    <div class="filter-col">خ.خ.بزرگ</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-box">
                        <h2 class="filter-title">قیمت:</h2>
                        <div class="filter-content">
                            <div class="range-slider pricing-slider">
                                <input type="text" class="js-range-slider" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="filter-box">
                        <h2 class="filter-title">مناسبت:</h2>
                        <div class="filter-content">
                            <ul class="row filter-row g-3">
                                <li class="col-6">
                                    <div class="filter-col">گاه به گاه</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">ورزش ها</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">لباس ساحلی</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">لباس راحتی</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">رسمی</div>
                                </li>
                                <li class="col-6">
                                    <div class="filter-col">مهمانی</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-box">
                        <h2 class="filter-title">رنگها:</h2>
                        <div class="filter-content">
                            <ul class="filter-color">
                                <li>
                                    <div class="color-box light-purple"></div>
                                </li>
                                <li class="active">
                                    <div class="color-box light-grey"></div>
                                </li>
                                <li>
                                    <div class="color-box blue-purple"></div>
                                </li>
                                <li>
                                    <div class="color-box light-orange"></div>
                                </li>
                                <li>
                                    <div class="color-box dark-pink"></div>
                                </li>
                                <li>
                                    <div class="color-box green-blue"></div>
                                </li>
                                <li>
                                    <div class="color-box green"></div>
                                </li>
                                <li>
                                    <div class="color-box blue"></div>
                                </li>
                                <li>
                                    <div class="color-box yellow"></div>
                                </li>
                                <li>
                                    <div class="color-box light-red"></div>
                                </li>
                                <li>
                                    <div class="color-box light-purple2"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0)" class="reset-link" data-bs-dismiss="modal">تنظیم مجدد</a>
                    <a href="javascript:void(0)" class="btn btn-solid" data-bs-dismiss="modal">اعمال فیلترها</a>
                </div>
            </div>
        </div>
    </div>
    <!-- filter modal end -->
</div>
