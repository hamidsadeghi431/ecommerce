<div>
    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>نمایه</h2>
                </div>
            </a>
        </div>
    </header>
    <!-- header end -->


    <!-- profile section start -->
    <section class="top-space pt-0">
        <div class="profile-detail">
            <div class="media">
                <img src="assets/images/user/1.png" class="img-fluid" alt="">
                <div class="media-body">
                    <h2>پیج ترنر</h2>
                    <h6>paigeturner@gmail.com</h6>
                    <a href="profile-setting.html" class="edit-btn">ویرایش</a>
                </div>
            </div>
        </div>
    </section>
    <!-- profile section end -->


    <!-- link section start -->
    <div class="sidebar-content">
        <ul class="link-section">
            <li>
                <div>
                    <i class="iconly-Setting icli"></i>
                    <div class="content toggle-sec w-100">
                        <div>
                            <h4>مد تاریک</h4>
                        </div>
                        <div class="button toggle-btn ms-auto">
                            <input id="darkButton" type="checkbox" class="checkbox">

                            <div class="knobs">
                                <span></span>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div>
                    <i class="iconly-Setting icli"></i>
                    <div class="content toggle-sec w-100">
                        <div>
                            <h4>RTL</h4>
                        </div>
                        <div class="button toggle-btn ms-auto">
                            <input id="rtlButton" type="checkbox" class="checkbox">
                            <div class="knobs">
                                <span></span>
                            </div>
                            <div class="layer"></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="pages.html">
                    <i class="iconly-Paper icli"></i>
                    <div class="content">
                        <h4>صفحات</h4>
                        <h6>سفارشات در حال انجام، سفارشات اخیر..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="order-history.html">
                    <i class="iconly-Document icli"></i>
                    <div class="content">
                        <h4>سفارشات</h4>
                        <h6>سفارشات در حال انجام، سفارشات اخیر..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i class="iconly-Heart icli"></i>
                    <div class="content">
                        <h4>لیست خواسته های شما</h4>
                        <h6>محصولات ذخیره شما</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="saved-cards.html">
                    <i class="iconly-Wallet icli"></i>
                    <div class="content">
                        <h4>پرداخت</h4>
                        <h6>کارت های ذخیره شده، کیف پول</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="saved-address.html">
                    <i class="iconly-Location icli"></i>
                    <div class="content">
                        <h4>آدرس ذخیره شده</h4>
                        <h6>خانه، دفتر.. </h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/flag.png" class="img-fluid" alt="">
                    <div class="content">
                        <h4>زبان</h4>
                        <h6>زبان خود را در اینجا انتخاب کنید..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="notification.html">
                    <i class="iconly-Notification icli"></i>
                    <div class="content">
                        <h4>اعلان ها</h4>
                        <h6>پیشنهادات، پیام های پیگیری سفارش..</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="settings.html">
                    <i class="iconly-Setting icli"></i>
                    <div class="content">
                        <h4>تنظیمات</h4>
                        <h6>حالت تاریک، راستچین، اعلان</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="profile-setting.html">
                    <i class="iconly-Password icli"></i>
                    <div class="content">
                        <h4>تنظیمات نمایه</h4>
                        <h6>نام کامل، رمز عبور..</h6>
                    </div>
                </a>
            </li>
        </ul>
        <div class="divider"></div>
        <ul class="link-section">
            <li>

                <a href="{{route('logout')}}">
                    <i class="iconly-Info-Square icli"></i>
                    <div class="content">
                        <h4>خروج</h4>
                        <h6>برای خروج روی دکمه کلیک کنید</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="help.html">
                    <i class="iconly-Call icli"></i>
                    <div class="content">
                        <h4>راهنما/مراقبت از مشتری</h4>
                        <h6>پشتیبانی مشتری، سوالات متداول</h6>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <i class="iconly-Call icli"></i>
                    <div class="content">
                        <h4>خروج</h4>
                        <h6>پشتیبانی مشتری، سوالات متداول</h6>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- link section end -->


</div>
@push('css')
    <link rel="stylesheet" id="change-link" type="text/css" href="{{asset('assets/css/style.css')}}">
@endpush
@push('scp')
@endpush
