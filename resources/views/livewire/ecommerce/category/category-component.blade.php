<div>
    <!-- header start -->
    <header>
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>دسته بندی ها</h2>
                </div>
            </a>
        </div>
        <div class="header-option">
            <ul>
                <li>
                    <a href="#"><i class="iconly-Heart icli"></i></a>
                </li>
                <li>
                    <a href="{{route('cart')}}"><i class="iconly-Buy icli"></i></a>
                </li>
            </ul>
        </div>
    </header>
    <!-- header end -->


    <!-- color start -->
    <section class="category-listing px-15 lg-space top-space pt-0">
        @foreach($categories as $item)
        <a href="{{route('innercategory',$item->id)}}" class="category-wrap">
            <div class="content-part">
                <img src="assets/images/sale.gif" class="img-fluid sale-gif" alt="">
                <h4>{{$item->categoryName}}</h4>
            </div>
            <div class="img-part">
                <img src="assets/images/category/sale.png" class="img-fluid" alt="">
            </div>
        </a>
        @endforeach
    </section>
</div>
