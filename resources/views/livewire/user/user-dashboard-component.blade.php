<div>
    <!-- profile section start -->
    <section class="top-space pt-0">
        <div class="profile-detail">
            <div class="media">
                <img src="assets/images/user/1.png" class="img-fluid" alt="">
                <div class="media-body">
                    <h2>{{\Illuminate\Support\Facades\Auth::user()->name}}</h2>
                    <h6>{{\Illuminate\Support\Facades\Auth::user()->mobile}}</h6>
                    <a href="profile-setting.html" class="edit-btn">ویرایش</a>
                </div>
            </div>
        </div>
    </section>
    <!-- profile section end -->

    <!-- section start -->
    <section class="px-15 classic-accordion top-space pt-0">
        <h2 class="page-title">تنظیمات پروفایل</h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="iconly-Wallet icli"></i>
                        پرداخت
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <a href="saved-cards.html">
                            <div class="content">
                                <h4>پرداخت</h4>
                                <h6>کارت های ذخیره شده، کیف پول</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          آدرس ذخیره شده
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <!-- delivery option section start -->
                        <section class="top-space px-15 pt-0">
                            <div class="delivery-option-section">
                                <ul>
                                    <li>
                                        <div class="check-box">
                                            <div class="form-check d-flex ps-0">
                                                <input checked class="radio_animated" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1"></label>
                                                <div>
                                                    <h4 class="name">خیابان 9 غربی</h4>
                                                    <div class="addess">
                                                        <h4>محله 9 شرق, </h4>
                                                        <h4>ایران ، استان تهران ، میدان آزادی</h4>
                                                        <h4>بلوار غربی</h4>
                                                    </div>
                                                    <h4>شماره تلفن: 903-239-1284</h4>
                                                    <h6 class="label">خانه</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons l-15">
                                            <a href="#">حذف</a>
                                            <a href="#">ویرایش</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="check-box">
                                            <div class="form-check d-flex ps-0">
                                                <input class=" radio_animated" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2"></label>
                                                <div>
                                                    <h4 class="name">خیابان 9 غربی</h4>
                                                    <div class="addess">
                                                        <h4>محله 9 شرق, </h4>
                                                        <h4>ایران ، استان تهران ، میدان آزادی</h4>
                                                        <h4>بلوار غربی</h4>
                                                    </div>
                                                    <h4>شماره تلفن: 903-239-1284</h4>
                                                    <h6 class="label">دفتر</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="buttons l-15">
                                            <a href="#">حذف</a>
                                            <a href="#">ویرایش</a>
                                        </div>
                                    </li>
                                </ul>
                                <a href="new-address.html" class="btn btn-outline text-capitalize w-100 mt-3">افزودن آدرس جدید</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        آیتم آکاردئون #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- link section start -->
    <div class="sidebar-content">
        <ul class="link-section">



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
                <a href="notification.html">
                    <i class="iconly-Notification icli"></i>
                    <div class="content">
                        <h4>اعلان ها</h4>
                        <h6>پیشنهادات، پیام های پیگیری سفارش..</h6>
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
