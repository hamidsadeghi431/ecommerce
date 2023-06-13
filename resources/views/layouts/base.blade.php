<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="{{\App\Models\admin\setting\ManageSeo::value('description')}}">
  <meta name="keywords" content="{{\App\Models\admin\setting\ManageSeo::value('keywords')}}">
  <meta name="author" content="{{\App\Models\admin\setting\ManageSeo::value('author')}}">
  <link rel="manifest" href="{{asset('assets/manifest.json')}}">
  <link rel="icon" href="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" type="image/x-icon" />
  <title>{{\App\Models\admin\setting\ManageSeo::value('title')}}</title>
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
        @stack('css')
        @livewireStyles

</head>

<body>

  <!-- loader strat -->
{{--  <div class="loader">--}}
{{--    <span></span>--}}
{{--    <span></span>--}}
{{--  </div>--}}
  <!-- loader end -->


  <!-- header start -->
  <header>
    <div class="nav-bar">
      <img src="{{asset('assets/svg/bar.svg')}}" class="img-fluid" alt="">
    </div>
    <a href="{{route('homePage')}}" class="brand-logo">
      <img style="height: 30px" src="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" class="img-fluid" alt="">
    </a>
    <div class="header-option">
      <ul>
        <li>
          <a href="search.html"><i class="iconly-Search icli"></i></a>
        </li>
        <li>
          <a href="notification.html"><i class="iconly-Notification icli"></i></a>
        </li>
        <li>
          <a href="wishlist.html"><i class="iconly-Heart icli"></i></a>
        </li>
        <li>
          <a href="{{route('cart')}}" ><i class="iconly-Buy icli"></i><span class="bg-danger rounded-circle border-warning" ><span class="text-white text-bold">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span> </span></a>
        </li>
      </ul>
    </div>
  </header>
  <a href="javascript:void(0)" class="overlay-sidebar"></a>
  <div class="header-sidebar">
    <a href="{{route('userdashboard')}}" class="user-panel">
      <img src="assets/images/user/1.png" class="img-fluid user-img" alt="">
      <span>سلام، پیج ترنر</span>
      <i class="iconly-Arrow-Right-2 icli"></i>
    </a>
    <div class="sidebar-content">
      <ul class="link-section">
        <li>
          <div>
            <i class="iconly-Setting icli"></i>
            <div class="content toggle-sec w-100">
              <div>
                <h4 class="mb-0">نسخه تاریک</h4>
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
                <h4 class="mb-0">RTL</h4>
              </div>
              <div class="button toggle-btn active ms-auto">
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
              <h6>عناصر و صفحات دیگر</h6>
            </div>
          </a>
        </li>
        <li>
          <a href="index.html">
            <i class="iconly-Home icli"></i>
            <div class="content">
              <h4>خانه</h4>
              <h6>پیشنهادات، معاملات برتر، برندهای برتر</h6>
            </div>
          </a>
        </li>
        <li>
              <a href="{{route('category')}}">
            <i class="iconly-Category icli"></i>
            <div class="content">
              <h4>خرید بر اساس طبقه بندی</h4>
              <h6>مردان، زنان، کودکان، زیبایی.. </h6>
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
          <a href="profile.html">
            <i class="iconly-Profile icli"></i>
            <div class="content">
              <h4>حساب شما</h4>
              <h6>نمایه، تنظیمات، کارت های ذخیره شده...</h6>
            </div>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="assets/images/flag.png" class="img-fluid" alt="">
            <div class="content">
              <h4>انتخاب زبان</h4>
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
      </ul>
      <div class="divider"></div>
      <ul class="link-section">
        <li>
          <a href="about-us.html">
            <i class="iconly-Info-Square icli"></i>
            <div class="content">
              <h4>درباره ما</h4>
              <h6>درباره مالتی کارت</h6>
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
  </div>
  <!-- header end -->


 {{$slot}}

  <!-- bottom panel start -->
  <div class="bottom-panel">
    <ul>
      <li class="active">
        <a href="{{route('homePage')}}">
          <div class="icon">
            <i class="iconly-Home icli"></i>
            <i class="iconly-Home icbo"></i>
          </div>
          <span>خانه</span>
        </a>
      </li>
      <li>
        <a href="{{route('category')}}">
          <div class="icon">
            <i class="iconly-Category icli"></i>
            <i class="iconly-Category icbo"></i>
          </div>
          <span>دسته بندی</span>
        </a>
      </li>
      <li>
        <a href="{{route('cart')}}">
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
          <span>مقایسه</span>
        </a>
      </li>
        @if(\Illuminate\Support\Facades\Route::has('login'))
      <li>
            @auth()
                @if(\Illuminate\Support\Facades\Auth::user()?->utype === 'ADM')
                    <a href="{{route('admindashboard')}}">
                @else
                    <a href="{{route('userdashboard')}}">
                @endif
            @else
              <a href="{{route('login')}}">
            @endauth
          <div class="icon">
            <i class="iconly-Profile icli"></i>
            <i class="iconly-Profile icbo"></i>
          </div>
                @auth()
                      @if(\Illuminate\Support\Facades\Auth::user()?->utype === 'ADM')
                          <span>پروفایل ادمین</span>
                      @else
                          <span>پروفایل کاربر</span>
                      @endif
                  @else
                      <span>ورود</span>
                  @endauth
              </a>
      </li>
            @endif
    </ul>
  </div>
  <!-- bottom panel end -->


  <!-- pwa install app popup start -->
  <div class="offcanvas offcanvas-bottom addtohome-popup" tabindex="-1" id="offcanvas">
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    <div class="offcanvas-body small">
      <div class="app-info">
        <img src="{{url('storage/app/public/photos/'.\App\Models\admin\setting\ManageSeo::value('icon'))}}" class="img-fluid" alt="">
        <div class="content">
          <h3>{{\App\Models\admin\setting\ManageSeo::value('app_title')}}</h3>
          <a href="{{\App\Models\admin\setting\ManageSeo::value('webaddr')}}">{{\App\Models\admin\setting\ManageSeo::value('webaddr')}}</a>
        </div>
      </div>
      <a href="javascript:void(0)" class="btn btn-solid install-app" id="installApp">افزودن به صفحه اصلی</a>
    </div>
  </div>
  <!-- pwa install app popup end -->

{{--  <script src="{{asset('assets/js/ew/script.js')}}"></script>--}}

  <!-- latest jquery-->
  <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>


  <!-- Bootstrap js-->
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Slick js-->
  <script src="{{asset('assets/js/slick.js')}}"></script>

  <!-- Slick js-->
{{--  <script src="{{asset('assets/js/homescreen-popup.js')}}"></script>--}}

  <!-- timer js-->
  <script src="{{asset('assets/js/timer.js')}}"></script>

  <!-- offcanvas modal js -->
  <script src="{{asset('assets/js/offcanvas-popup.js')}}"></script>

  <!-- script js -->
  <script src="{{asset('/livewire/livewire.js')}}"></script>

  @stack('scp')
  @livewireScripts
  <script src="{{asset('assets/js/ew/script.js')}}"></script>

</body>

</html>
