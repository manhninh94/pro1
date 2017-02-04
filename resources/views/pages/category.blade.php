
@extends('templates.master', [
    'title' => 'Categories',
    'class_body'=>'category-page',
    'scripts' => [
        url('/assets/js/custom.js?v=1.0.0.00'),
        url('/assets/js/filter-price.js'),
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
            @foreach($category_current as $item_category_current)
                <span class="navigation-pipe">&nbsp;</span>
                <a class="home" href="{{url($country.'/category', ['category'=>$item_category_current->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($item_category_current->name)])}}" title="Return to ">{{$item_category_current->name}}</a>
            @endforeach
        </div>
        <!-- ./breadcrumb -->

        <!-- row -->
        <div class="row">
            <!-- Left colunm --> 
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module"> 
                    <p class="title_block">CATEGORIES</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                            <!-- class : tree-menu -->
                                <ul class="tree-menu">
                                @if($categories != null && !empty($categories))
                                    @foreach($categories as $item_category)
                                    <li class="{{isset($category_current->{$item_category->id})? "active":''}}">
                                            <span></span><a href="{{url($country.'/category', ['category'=>$item_category->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($item_category->name)])}}" >{{$item_category->name}}</a>
                                        @if(!empty($item_category->children) and $item_category != null)
                                            <ul class="tree-menu">
                                                @foreach($item_category->children as $item_sub_category )
                                                    <li class="{{isset($category_current->{$item_sub_category->id}) ? "active":''}}"><span></span><a href="{{url($country.'/category', ['category'=>$item_sub_category->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($item_sub_category->name)])}}" >{{$item_sub_category->name}}</a>
                                                        @if(!empty($item_sub_category->children))
                                                            <ul>
                                                                @foreach($item_sub_category->children as $item_sub_category2)
                                                                    <li class="{{isset($category_current->{$item_sub_category2->id}) ? "active":''}}"><span></span><a href="{{url($country.'/category', ['category'=>$item_sub_category2->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($item_sub_category2->name)])}}">{{$item_sub_category2->name}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                @endif
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">Filter selection</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">
                            <!-- filter categgory -->
                            <!-- <div class="layered_subtitle">CATEGORIES</div> -->
                            <!-- <div class="layered-content">
                                <ul class="check-box-list">
                                   

                                </ul>
                            </div>  -->
                            <!-- ./filter categgory -->

                            <!-- filter price -->
                            <div class="layered_subtitle">price</div>
                            <div class="layered-content slider-range">

                                    <div data-label-reasult="Range:" data-min="0" data-max="50000000" data-unit="$" class="slider-range-price" data-value-min="1000" data-value-max="5000000"></div>

                                    <div class="amount-range-price" >Range: {{$request->has('filter-price')?money_format('%(#10n', $price_min)." - ". $price_max:'$'.number_format(1000, 0, ",", ".").' - $'.number_format(5000000, 0, ",", ".") }}</div>
                                    <ul class="list-inline">
                                        <li>
                                            <input type="number" name="min-price" class="min-price" value="{{$request->has('filter-price')?$price_min:1000}}"  placeholder="1000">&nbsp;&nbsp;-
                                        </li>
                                        <li>
                                            <input type="number" name="max-price" class="max-price" value="{{$request->has('filter-price')?$price_max:5000000}}"  placeholder="5000000">
                                        </li>
                                        <li><button type="submit" id="filter-price"><span class="icon-filter glyphicon glyphicon-play"></span></button></li>
                                    </ul>


                               <!--  <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1"  name="cc" />
                                        <label for="p1">
                                        <span class="button"></span>
                                        $20 - $50<span class="count"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="cc" />
                                        <label for="p2">
                                        <span class="button"></span>
                                        $50 - $100<span class="count"></span>
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="cc" />
                                        <label for="p3">
                                        <span class="button"></span>
                                        $100 - $250<span class="count"></span>
                                        </label>   
                                    </li>
                                </ul>
 -->
                            </div>

                            <!-- ./filter price -->
                            <!-- filter color -->
                         {{--    <div class="layered_subtitle">Color</div>
                            <div class="layered-content filter-color">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="color1" name="cc" />
                                        <label style=" background:#aab2bd;" for="color1"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color2" name="cc" />
                                        <label style=" background:#cfc4a6;" for="color2"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color3" name="cc" />
                                        <label style=" background:#aab2bd;" for="color3"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color4" name="cc" />
                                        <label style=" background:#fccacd;" for="color4"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color5" name="cc" />
                                        <label style="background:#964b00;" for="color5"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color6" name="cc" />
                                        <label style=" background:#faebd7;" for="color6"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color7" name="cc" />
                                        <label style=" background:#e84c3d;" for="color7"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color8" name="cc" />
                                        <label style=" background:#c19a6b;" for="color8"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color9" name="cc" />
                                        <label style=" background:#f39c11;" for="color9"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color10" name="cc" />
                                        <label style=" background:#5d9cec;" for="color10"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color11" name="cc" />
                                        <label style=" background:#a0d468;" for="color11"><span class="button"></span></label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color12" name="cc" />
                                        <label style=" background:#f1c40f;" for="color12"><span class="button"></span></label>   
                                    </li>

                                </ul>
                            </div> --}}
                            <!-- ./filter color -->
                            <!-- ./filter brand -->
                            {{--<div class="layered_subtitle">brand</div>--}}
                            {{--<div class="layered-content filter-brand">--}}
                                {{--<ul class="check-box-list">--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="brand1" name="cc" />--}}
                                        {{--<label for="brand1">--}}
                                        {{--<span class="button"></span>--}}
                                        {{--Channelo<span class="count">(0)</span>--}}
                                        {{--</label>   --}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="brand2" name="cc" />--}}
                                        {{--<label for="brand2">--}}
                                        {{--<span class="button"></span>--}}
                                        {{--Mamypokon<span class="count">(0)</span>--}}
                                        {{--</label>   --}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="brand3" name="cc" />--}}
                                        {{--<label for="brand3">--}}
                                        {{--<span class="button"></span>--}}
                                        {{--Pamperson<span class="count">(0)</span>--}}
                                        {{--</label>   --}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="brand4" name="cc" />--}}
                                        {{--<label for="brand4">--}}
                                        {{--<span class="button"></span>--}}
                                        {{--Pumano<span class="count">(0)</span>--}}
                                        {{--</label>   --}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="brand5" name="cc" />--}}
                                        {{--<label for="brand5">--}}
                                        {{--<span class="button"></span>--}}
                                        {{--AME<span class="count">(0)</span>--}}
                                        {{--</label>   --}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- ./filter brand -->

                            <!-- ./filter size -->
                            {{-- <div class="layered_subtitle">Size</div>
                            <div class="layered-content filter-size">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="size1" name="cc" />
                                        <label for="size1">
                                        <span class="button"></span>X
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size2" name="cc" />
                                        <label for="size2">
                                        <span class="button"></span>XXL
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size3" name="cc" />
                                        <label for="size3">
                                        <span class="button"></span>XL
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size4" name="cc" />
                                        <label for="size4">
                                        <span class="button"></span>XXL
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size5" name="cc" />
                                        <label for="size5">
                                        <span class="button"></span>M
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size6" name="cc" />
                                        <label for="size6">
                                        <span class="button"></span>XXS
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size7" name="cc" />
                                        <label for="size7">
                                        <span class="button"></span>S
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size8" name="cc" />
                                        <label for="size8">
                                        <span class="button"></span>XS
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size9" name="cc" />
                                        <label for="size9">
                                        <span class="button"></span>34
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size10" name="cc" />
                                        <label for="size10">
                                        <span class="button"></span>36
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size11" name="cc" />
                                        <label for="size11">
                                        <span class="button"></span>35
                                        </label>   
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size12" name="cc" />
                                        <label for="size12">
                                        <span class="button"></span>37
                                        </label>   
                                    </li>
                                </ul>
                            </div> --}}
                            <!-- ./filter size -->
                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
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
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
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
                    <div>
                        @if($request->has('filter-price'))
                            <p>Price :{{$price_min}} - {{$price_max}} <a href="#"><i class="glyphicon glyphicon-remove remove-filter" style="color: #e74c3c; font-size: 18px;"></i></a> </p>
                        @endif
                    </div>
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
                    @if($product_of_category != null && empty($product_of_category->error))
                        @foreach($product_of_category->data as $item_product)
                            <li class="col-sx-12 col-sm-4">
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="{{url($country.'/product-detail',['product_id'=>$item_product->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($item_product->name)])}}">
                                            <img class="img-responsive" alt="product" src="{{$item_product->thumbnail}}" />
                                        </a>
                                        <div class="quick-view">
                                                <a title="Add to my wishlist" class="heart" href="#"></a>
                                                <a title="Add to compare" class="compare" href="#"></a>
                                                <a title="Quick view" class="search" href="#"></a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a title="Buy now" target="_blank" href="{{$item_product->link}}">BUY NOW</a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="{{url($country.'/product-detail',['product_id'=>$item_product->id.'-'.App\Http\Helpers\BladeHelper::
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
                                            <p>Item Code: #453217907</p>
                                            <p class="availability">Availability: <span>In stock</span></p>
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
                <div class="sortPagiBar">

                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                              <?php $i; ?>
                        @if($product_of_category != null && empty($product_of_category->error))
                            @if($product_of_category->paginator->current_page > 1 )
                                <li>
                                  <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>($product_of_category->paginator->current_page-1)])}}" title="Pre page" aria-label="Pre">
                                      <span aria-hidden="true">&laquo; Pre</span>
                                  </a>
                                </li>
                            @endif

                            @for($i =1; $i<=$product_of_category->paginator->total_pages; $i++)
                                <li class="{{ $product_of_category->paginator->current_page == $i ? 'active' :''  }}"><a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$i])}}" title="page {{$i}}">{{$i}}</a></li>
                            @endfor

                            @if($product_of_category->paginator->total_pages > $product_of_category->paginator->current_page )
                                <li>
                                  <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>($product_of_category->paginator->current_page+1)])}}" title="Next page" aria-label="Next">
                                      <span aria-hidden="true">Next &raquo;</span>
                                  </a>
                                </li>
                            @endif
                        @endif
                          </ul>
                        </nav>
                    </div>

                    <div class="show-product-item">
                        <select id="select_limit_product" name="forma" onchange="location = this.value;">
                            <option value="{{$request->fullUrlWithQuery(['limit' => '30', 'page'=>'1'])}}" {{ $limit == 30 ? 'selected': '' }}>Show 30</option>
                            <option value="{{$request->fullUrlWithQuery(['limit' => '45', 'page'=>'1'])}}" {{ $limit == 45 ? 'selected': '' }}>Show 45</option>
                            <option value="{{$request->fullUrlWithQuery(['limit' => '60', 'page'=>'1'])}}" {{ $limit == 60 ? 'selected': '' }}>Show 60</option>
                            <option value="{{$request->fullUrlWithQuery(['limit' => '120', 'page'=>'1'])}}" {{ $limit == 120 ? 'selected': '' }}>Show 120</option>
                        </select>
                    </div>

                    <div class="sort-product">
                        <select onchange="location = this.value;">
                            <option value="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'name.asc'])}}"  {{$orderby == 'name.asc'   ?'selected':''}}>Product Name</option>
                            <option value="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'price.asc'])}}" {{$orderby == 'price.asc'  ?'selected':''}}>Price</option>
                        </select>
                        <div class="sort-product-icon">
                            @if($orderby == 'name.asc')
                                <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'name.desc'])}}" class="fa fa-sort-alpha-desc" title=""></a>
                            @elseif($orderby == 'name.desc')
                                <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'name.asc'])}}" class="fa fa-sort-alpha-asc" title=""></a>
                            @elseif($orderby == 'price.desc')
                                <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'price.asc'])}}" class="fa fa-sort-amount-asc" title=""></a>
                            @else
                                <a href="{{$request->fullUrlWithQuery(['limit' => $limit, 'page'=>$page, 'orderby'=>'price.desc'])}}" class="fa fa-sort-amount-desc" title=""></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>


@endsection