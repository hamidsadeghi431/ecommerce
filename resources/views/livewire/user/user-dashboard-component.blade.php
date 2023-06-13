<div>
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
                <a href="terms-condition.html">
                    <i class="iconly-Info-Square icli"></i>
                    <div class="content">
                        <h4>قوانین و مقررات</h4>
                        <h6>برای استفاده از پلتفرم</h6>
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
        </ul>
    </div>
    <div class="px-15">
            <a  class="btn btn-outline w-100 content-color" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <!-- link section end -->



    <!-- panel space start -->
    <section class="panel-space"></section>
    <!-- panel space end -->


    <!-- bottom panel start -->
    <div class="bottom-panel">
        <ul>
            <li>
                <a href="index.html">
                    <div class="icon">
                        <i class="iconly-Home icli"></i>
                        <i class="iconly-Home icbo"></i>
                    </div>
                    <span>خانه</span>
                </a>
            </li>
            <li>
                <a href="category.html">
                    <div class="icon">
                        <i class="iconly-Category icli"></i>
                        <i class="iconly-Category icbo"></i>
                    </div>
                    <span>دسته بندی</span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <div class="icon">
                        <i class="iconly-Buy icli"></i>
                        <i class="iconly-Buy icbo"></i>
                    </div>
                    <span>سبد خرید</span>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <div class="icon">
                        <i class="iconly-Heart icli"></i>
                        <i class="iconly-Heart icbo"></i>
                    </div>
                    <span>علاقه مندی ها</span>
                </a>
            </li>
            <li class="active">
                <a href="profile.html">
                    <div class="icon">
                        <i class="iconly-Profile icli"></i>
                        <i class="iconly-Profile icbo"></i>
                    </div>
                    <span>نمایه</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- bottom panel end -->
</div>
