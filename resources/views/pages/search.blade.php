@extends('templates.master', [
    'title' => 'Result seach',
    'class_body'=>'category-page',
    'keyword' => $keyword,
    'scripts' => [
      ],
    'stylesheets'=>[
    ],
  ])
@section('content')
    <div class="columns-container">
        <div class="container" id="columns">
            <!-- breadcrumb -->
            <div class="breadcrumb clearfix">
                <a class="home" href="{{url('/')}}" title="Return to Home">Home</a>
                    <span class="navigation-pipe">&nbsp;</span>
                    <a class="home" href="" title="Return to ">Result :{{$keyword}}</a>
            </div>
            <!-- ./breadcrumb -->

            <!-- row -->
            <div class="row">
                <!-- Left colunm -->

                    <!-- ./block filter  -->

                    <!-- left silide -->
                    {{--<div class="col-left-slide left-module">--}}
                    {{--<ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">--}}
                    {{--<li><a href="#"><img src="{{asset('')}}data/slide-left.jpg" alt="slide-left"></a></li>--}}
                    {{--<li><a href="#"><img src="{{asset('')}}data/slide-left2.jpg" alt="slide-left"></a></li>--}}
                    {{--<li><a href="#"><img src="{{asset('')}}data/slide-left3.png" alt="slide-left"></a></li>--}}
                    {{--</ul>--}}

                    {{--</div>--}}
                    <!--./left silde-->
                    <!-- SPECIAL -->
                    {{--<div class="block left-module">--}}
                    {{--<p class="title_block">SPECIAL PRODUCTS</p>--}}
                    {{--<div class="block_content">--}}
                    {{--<ul class="products-block">--}}
                    {{--<li>--}}
                    {{--<div class="products-block-left">--}}
                    {{--<a href="#">--}}
                    {{--<img src="{{asset('')}}data/product-100x122.jpg" alt="SPECIAL PRODUCTS">--}}
                    {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="products-block-right">--}}
                    {{--<p class="product-name">--}}
                    {{--<a href="#">Woman Within Plus Size Flared</a>--}}
                    {{--</p>--}}
                    {{--<p class="product-price">$38,95</p>--}}
                    {{--<p class="product-star">--}}
                    {{--<i class="fa fa-star"></i>--}}
                    {{--<i class="fa fa-star"></i>--}}
                    {{--<i class="fa fa-star"></i>--}}
                    {{--<i class="fa fa-star"></i>--}}
                    {{--<i class="fa fa-star-half-o"></i>--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--<div class="products-block">--}}
                    {{--<div class="products-block-bottom">--}}
                    {{--<a class="link-all" href="#">All Products</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <!-- ./SPECIAL -->
                    <!-- TAGS -->
                    {{--<div class="block left-module">--}}
                    {{--<p class="title_block">TAGS</p>--}}
                    {{--<div class="block_content">--}}
                    {{--<div class="tags">--}}
                    {{--<a href="#"><span class="level1">actual</span></a>--}}
                    {{--<a href="#"><span class="level2">adorable</span></a>--}}
                    {{--<a href="#"><span class="level3">change</span></a>--}}
                    {{--<a href="#"><span class="level4">consider</span></a>--}}
                    {{--<a href="#"><span class="level3">phenomenon</span></a>--}}
                    {{--<a href="#"><span class="level4">span</span></a>--}}
                    {{--<a href="#"><span class="level1">spanegs</span></a>--}}
                    {{--<a href="#"><span class="level5">spanegs</span></a>--}}
                    {{--<a href="#"><span class="level1">actual</span></a>--}}
                    {{--<a href="#"><span class="level2">adorable</span></a>--}}
                    {{--<a href="#"><span class="level3">change</span></a>--}}
                    {{--<a href="#"><span class="level4">consider</span></a>--}}
                    {{--<a href="#"><span class="level2">gives</span></a>--}}
                    {{--<a href="#"><span class="level3">change</span></a>--}}
                    {{--<a href="#"><span class="level2">gives</span></a>--}}
                    {{--<a href="#"><span class="level1">good</span></a>--}}
                    {{--<a href="#"><span class="level3">phenomenon</span></a>--}}
                    {{--<a href="#"><span class="level4">span</span></a>--}}
                    {{--<a href="#"><span class="level1">spanegs</span></a>--}}
                    {{--<a href="#"><span class="level5">spanegs</span></a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <!-- ./TAGS -->
                    <!-- Testimonials -->
                    {{--<div class="block left-module">--}}
                    {{--<p class="title_block">Testimonials</p>--}}
                    {{--<div class="block_content">--}}
                    {{--<ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">--}}
                    {{--<li>--}}
                    {{--<div class="client-mane">Roverto & Maria</div>--}}
                    {{--<div class="client-avarta">--}}
                    {{--<img src="{{asset('')}}data/testimonial.jpg" alt="client-avarta">--}}
                    {{--</div>--}}
                    {{--<div class="testimonial">--}}
                    {{--"Your product needs to improve more. To suit the needs and update your image up"--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<div class="client-mane">Roverto & Maria</div>--}}
                    {{--<div class="client-avarta">--}}
                    {{--<img src="{{asset('')}}data/testimonial.jpg" alt="client-avarta">--}}
                    {{--</div>--}}
                    {{--<div class="testimonial">--}}
                    {{--"Your product needs to improve more. To suit the needs and update your image up"--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                    {{--<div class="client-mane">Roverto & Maria</div>--}}
                    {{--<div class="client-avarta">--}}
                    {{--<img src="{{asset('')}}data/testimonial.jpg" alt="client-avarta">--}}
                    {{--</div>--}}
                    {{--<div class="testimonial">--}}
                    {{--"Your product needs to improve more. To suit the needs and update your image up"--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <!-- ./Testimonials -->
                </div>
                <!-- ./left colunm -->

                <!-- Center colunm-->
                <div class="center_column col-xs-12 col-sm-12"  id="center_column">
                    <!-- category-slider -->
                    <!--             <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="{{asset('')}}data/category-slide.jpg" alt="category-slider">
                        </li>
                        <li>
                            <img src="{{asset('')}}data/slide-cart2.jpg" alt="category-slider">
                        </li>
                    </ul>
                </div> -->
                    <!-- ./category-slider -->
                    <!-- subcategories -->
                    <!--               <div class="subcategories">
                                      <ul>
                                          <li class="current-categorie">
                                              <a href="#">Women's Fashion</a>
                                          </li>
                                          <li>
                                              <a href="#">Tops</a>
                                          </li>
                                          <li>
                                              <a href="#">Dresses</a>
                                          </li>
                                          <li>
                                              <a href="#">Bags & Shoes</a>
                                          </li>
                                          <li>
                                              <a href="#">Pants</a>
                                          </li>
                                          <li>
                                              <a href="#">Blouses</a>
                                          </li>
                                      </ul>
                                  </div> -->
                    <!-- ./subcategories -->

                    <!-- view-product-list-->
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title"></span>
                        </h2>

                        <ul class="display-product-option">
                            <li class="view-as-grid selected">
                                <span>grid</span>
                            </li>
                            <li class="view-as-list">
                                <span>list</span>
                            </li>
                        </ul>
                        <!-- PRODUCT LIST -->
                        <ul class="row product-list grid">
                            @if($product_of_category->data != null )
                                @foreach($product_of_category->data as $item_product)

                                    <li class="col-sx-12 col-sm-3">
                                        <div class="product-container">
                                            <div class="left-block">
                                                <a href="{{url('product-detail',['product_id'=>$item_product->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($item_product->name)])}}">
                                                    <img class="img-responsive" alt="product" src="{{$item_product->thumbnail}}" />
                                                </a>
                                                <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a title="Buy now" target="_blank" href="{{$item_product->link}}">VIEW DETAIL</a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="{{url('product-detail',['product_id'=>$item_product->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($item_product->name)])}}">{!! App\Http\Helpers\BladeHelper::the_excerpt($item_product->name) !!}</a></h5>

                                                <div class="product-star">
                                                    @for($i = 1; $i <= $item_product->rate; $i++)
                                                        <i class="fa fa-star"></i>
                                                        <!-- <i class="fa fa-star-half-o"></i> -->
                                                    @endfor
                                                </div>
                                                <br>

                                                <div class="content_price">
                                                    <span class="price product-price">{{number_format($item_product->discounted_price, 0, ",", ".")}} {{" ".$item_product->currency}}</span>
                                                    <span class="price old-price">{{number_format($item_product->price, 0, ",", ".")}} {{" ".$item_product->currency}}</span>
                                                </div>

                                                <div class="info-orther">
                                                    <p>Item Code: {{$item_product->sku}}</p>
                                                    {{-- <p class="availability">Availability: <span>In stock</span></p> --}}
                                                    <div class="product-desc">{{$item_product->description}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <!-- ./PRODUCT LIST -->
                    </div>
                    <!-- ./view-product-list-->
                    @if(!empty($paginator))
                        @include('templates.blocks.paginator', ['paginator' => $paginator])
                    @endif

                </div>
                <!-- ./ Center colunm -->
            </div>
            <!-- ./row-->
        </div>
    </div>


@endsection