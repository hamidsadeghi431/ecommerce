<div>
    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>اعلان ها</h2>
                </div>
            </a>
        </div>
    </header>
    <!-- header end -->


    <!-- tab section start -->
    <section class="pt-0 tab-section section-b-space">
        <div class="title-section px-15">
            <h2>سبک خود را پیدا کنید</h2>
            <h3>فروش فوق العاده تابستانی</h3>
        </div>

        <div class="px-15">
            <ul class="filter-title" id="filterOptions">
                <li class="active"><a href="#" class="order">اطلاعات سفارش</a></li>
                <li><a href="#" class="offers">تخفیف</a></li>
                <li><a href="#" class="payment">پرداخت موفق</a></li>
                <li><a href="#" class="return">پرداخت ناموفق</a></li>
            </ul>

            <div id="ourHolder" class="filter-content">
                @if($OrderData)
                    @foreach($OrderData as $item)
                <div class="item order">
                    <div class="media">
                        <img src="assets/images/notification/2.jpg" class="img-fluid" alt="">
                        <div class="media-body">
                            <h4> شماره تراکنش : {{$item->transactionNo}}</h4>
                            <h6 class="content-color">{{\Morilog\Jalali\CalendarUtils::strftime('Y-m-d',strtotime(substr($item->created_at,0,10))) }} {{substr($item->created_at,10,20)}}</h6>
                            @if($item->paystatus == 1)
                            <span class="text-success"><i class="fa fa-check text-success"></i> تراکنش موفق </span>
                            @else
                                <span class="text-danger"><i class="fa fa-times text-danger"></i> تراکنش نا موفق </span>
                            @endif
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
                <div class="item offers">
                    <div class="media">
                        <img src="assets/images/notification/4.jpg" class="img-fluid" alt="">
                        <div class="media-body">
                            <h4>تخفیف</h4>
                            <h6 class="content-color">5 دی 1401</h6>
                        </div>
                    </div>
                </div>
                    @if($OrderData)
                        @foreach($OrderData as $item)
                            @if($item->paystatus == 1)
                            <div class="item payment">
                    <div class="media">
                        <img src="assets/images/notification/5.jpg" class="img-fluid" alt="">
                        <div class="media-body">
                            <h4>{{number_format($item->price)}} تومان </h4>
                            <h6 class="content-color">{{\Morilog\Jalali\CalendarUtils::strftime('Y-m-d',strtotime(substr($item->created_at,0,10))) }} {{substr($item->created_at,10,20)}}</h6>
                                <span class="text-success"><i class="fa fa-check text-success"></i> تراکنش موفق </span>
                        </div>
                    </div>
                </div>
                            @endif

                        @endforeach
                    @endif

                    @if($OrderData)
                        @foreach($OrderData as $item)
                            @if($item->paystatus == 2)

                            <div class="item return">
                    <div class="media">
                        <img src="assets/images/notification/6.jpg" class="img-fluid" alt="">
                        <div class="media-body">
                            <h4>{{number_format($item->price)}} تومان </h4>
                            <h6 class="content-color">{{\Morilog\Jalali\CalendarUtils::strftime('Y-m-d',strtotime(substr($item->created_at,0,10))) }} {{substr($item->created_at,10,20)}}</h6>
                                <span class="text-danger"><i class="fa fa-times text-danger"></i> تراکنش نا موفق </span>
                        </div>
                    </div>
                </div>
                            @endif
                        @endforeach
                    @endif

            </div>
        </div>
    </section>
    <!-- tab section end -->

</div>
