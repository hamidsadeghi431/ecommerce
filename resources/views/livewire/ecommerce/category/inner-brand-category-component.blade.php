<div>
    <header>
        @if(isset($Brands))
            @foreach($Brands as $brand)

            @endforeach
        @endif
        <div class="back-links">
            <a href="{{route('homePage')}}">
                <i class="iconly-Arrow-Left icli"></i>
                <div class="content">
                    <h2>دسته بندی <span><i class="iconly-Arrow-Right-2 icli"></i>{{$brand->brandName}}</span></h2>
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
        <a href="{{route('products',$brand->id)}}" class="category-wrap">
            <div class="content-part">
                <h2>{{$brand->brandName}}</h2>
                <h4></h4>
            </div>
            <div class="img-part">
                <img src="assets/images/category/women.png" class="img-fluid" alt="">
            </div>
        </a>
    </section>
    <!-- color title end -->


    <!-- color menu start -->
    <section class="px-15 category-menu">
        <div class="accordion px-15">
            @foreach($brand->category as $category)
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#one">
                    </button>
                    <a href="{{route('products',[$brand->id,$category->catId])}}">{{$category->categoryName}}</a>
                </h2>
                <div id="one" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul>
                            @foreach($brand->scategory as $scategory)
                                @if($scategory->cat_id ==$category->catId)
                                <li><a href="{{route('products',[$brand->id,$category->catId,$scategory->scatId])}}">{{$scategory->scategoryName}}</a></li>
                                @endif
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
    <section class="brand-section px-15">
        <h2 class="title">بزرگترین تخفیف ها در برندهای برتر</h2>
        <div class="row g-3">
            @foreach($brand->category as $item)
                <div class="col-4">
                    <a class="brand-box" href="{{route('innercategory',$item->catId)}}">
{{--                        <img src="{{url('storage/app/public/photos/Brands/'.$brand->picture)}}" class="img-fluid" alt="">--}}
                        {{$item->categoryName}}
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- brand section end -->
    <!-- panel space start -->
    <section class="panel-space"></section>
</div>
