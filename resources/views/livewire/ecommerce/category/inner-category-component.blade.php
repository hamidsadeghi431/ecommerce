<div>
    <header>
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
{{--                    <h2>دسته بندی <span><i class="iconly-Arrow-Right-2 icli"></i>{{$BrandName}}</span></h2>--}}
                </div>
            </a>
        </div>
        <div class="header-option">
            <ul>
                <li>
                    <a href="wishlist.html"><i class="iconly-Heart icli"></i></a>
                </li>
                <li>
                    <a href="{{route('cart')}}"><i class="iconly-Buy icli"></i></a>
                </li>
            </ul>
        </div>
    </header>
    <!-- color title start -->
    <section class="category-listing px-15 xl-space top-space pt-0">
        @foreach($categories as $category)
        <a href="{{route('products',['b',$category->id])}}" class="category-wrap">
            <div class="content-part">
                    {{$category->categoryName}}
            </div>
            <div class="img-part">
                <img src="assets/images/category/women.png" class="img-fluid" alt="">
            </div>
        </a>
        @endforeach

    </section>
    <!-- color title end -->


    <!-- color menu start -->
    <section class="px-15 category-menu">
        <div class="accordion px-15">
                @foreach($categories as $category)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#one">
                    </button>
                    {{$category->categoryName}}
                </h2>
                <div id="one" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul>
                            @foreach($category->scategory as $item)
                            <li><a href="{{route('products',['b',$category->id,$item->scatId])}}">{{$item->scategoryName}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- color menu end -->


    <!-- inner color start -->
    <!-- inner color end -->


    <!-- brand section start -->
{{--    <section class="brand-section px-15">--}}
{{--        <h2 class="title">بزرگترین تخفیف ها در برندهای برتر</h2>--}}
{{--        <div class="row g-3">--}}
{{--            @foreach($brands as $item)--}}
{{--            <div class="col-4">--}}
{{--                <a class="brand-box" href="{{route('innercategory',$item->id)}}">--}}
{{--                    <img src="{{url('storage/app/public/photos/'.$item->idpar.'/'.$item->idpro.'/'.$item->picture)}}" class="img-fluid" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- brand section end -->


    <!-- panel space start -->
    <section class="panel-space"></section>
</div>
