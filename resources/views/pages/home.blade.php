@extends('templates.master', [
    'title' => 'Home Page',
    'class_body' => 'home',
    'breadcrumbs' => ['Home' => 'link', 'Categories 1' => 'link', 'lv2' => 'link', 'lv3' => 'link'],

    'libs_elements' => [

    ],
    'stylesheets' => [
        //url('assets/css/search.css'),
    ],
    'scripts' => [
        //url('assets/js/addProduct.js?version=1.0.2'),
    ],
])
@section('content')
        <!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider" style="width:100%">
                    <div class="content-slide">
                        <ul id="contenhomeslider">

                            @if(!empty($sliders))
                            @forelse($sliders as $slider)
                            {{-- @if((isset($slider->image->value) && \App\Http\Helpers\BladeHelper::isImage($slider->image->value))) --}}
                            <li>
                            <img class="check-image" alt="{{$slider->title}}" src="{{$slider->image->value}}" title="{{$slider->title}}" data-no-image="{{asset('/data/slider11.jpg')}}"/>
                            </li>
                            {{-- @endif --}}
                            @empty
                            <li><img alt="Funky roots" src="{{asset('/data/slider11.jpg')}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{asset('/data/slider22.jpg')}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{asset('/data/slider33.jpg')}}" title="Funky roots" /></li>
                            @endforelse
                            @else
                            <li><img alt="Funky roots" src="{{asset('/data/slider11.jpg')}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{asset('/data/slider22.jpg')}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{asset('/data/slider33.jpg')}}" title="Funky roots" /></li>
                            @endif
                            {{-- <li><img alt="Funky roots" src="{{$slide_shop == null? asset('/data/slider11.jpg'): $slide_shop->slide}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{$slide_shop == null? asset('/data/slider22.jpg'): $slide_shop->slide2}}" title="Funky roots" /></li>
                            <li><img alt="Funky roots" src="{{$slide_shop == null? asset('/data/slider33.jpg'): $slide_shop->slide3}}" title="Funky roots" /></li> --}}
                            {{-- @if(!empty($sliders))
                            @forelse($sliders as $slider)
                            <div>
                            <img alt="{{$slider->title}}" src="{{$slider->image->value}}" title="{{$slider->title}}"/>
                            </div>
                            @empty
                            @endforelse
                            @endif --}}
                        </ul>
                    </div>
                </div>
                <!--<div class="header-banner banner-opacity">
                    <?php /*if(isset($ads->error) ||$ads ==null){echo "<a ><img  src='http://salevia.com/data/ads111.jpg' /></a>";}else{echo $ads->html;}*/ ?>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<!-- servives -->
<div class="container">
    <div class="service ">
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">

                <img alt="services" src="{{asset('/data/s1.png')}}" />

            </div>
            <div class="info">
                <a href="#"><h3>Free Shipping</h3></a>
                <span>On order over $200</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">

                <img alt="services" src="{{asset('/data/s2.png')}}" />

            </div>
            <div class="info">
                <a href="#"><h3>30-day return</h3></a>
                <span>Moneyback guarantee</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">

                <img alt="services" src="{{asset('/data/s3.png')}}" />

            </div>

            <div class="info" >
                <a href="#"><h3>24/7 support</h3></a>
                <span>Online consultations</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">

                <img alt="services" src="{{asset('/data/s4.png')}}" />

            </div>
            <div class="info">
                <a href="#"><h3>SAFE SHOPPING</h3></a>
                <span>Safe Shopping Guarantee</span>
            </div>
        </div>
    </div>
</div>
<!-- end services -->

<!-- BEST SELLER-->

<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        @if(!empty($hot_products))
        <?php $stt=0;?>
            @foreach($hot_products as $item_product_of_category)
            <?php $stt++; ?>
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-red show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{asset('/data/fashion.png')}}" />{{$item_product_of_category->name}}</a></div>
                    <span class="toggle-menu"></span>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a data-toggle="tab" href="#tab-4">Best Seller</a></li>
                            <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                <div id="elevator-{{$stt}}" class="floor-elevator">
                    <a href="#elevator-{{($stt-1)}}" class="btn-elevator up fa fa-angle-up"></a>
                    <a href="#elevator-{{($stt+1)}}" class="btn-elevator down fa fa-angle-down"></a>
                </div>
            </nav>
            <div class="product-featured clearfix">

                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container">
                            <!-- tab product -->
                            <div class="tab-panel active" id="tab-4">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                    @if(!empty($item_product_of_category->products))
                                        @foreach($item_product_of_category->products as $product)
                                            @if($product->products != null)

                                    <li>
                                        <div class="left-block">
                                            <a href="{{url('product-detail',['id'=>$product->products->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($product->products->name)])}}">
                                                <img class="img-responsive check-image" alt="product" src="{{$product->products->thumbnail}}" data-no-image="{{url('/images/product-no-image.jpg')}}"/></a>

                                            <div class="add-to-cart">
                                                <a title="Product Detail" href="{{url('product-detail',['id'=>$product->products->id.'-'.App\Http\Helpers\BladeHelper::
                                                convert_lang($product->products->name)])}}">VIEW DETAIL</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{url('product-detail',['id'=>$product->products->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($product->products->name)])}}"></a>{{App\Http\Helpers\BladeHelper::the_excerpt($product->products->name)}}</h5>
                                            <div class="content_price">
                                                <p class="price product-price">{{number_format($product->products->discounted_price,0,",",".")}}{{" ".$product->products->currency}}</p>
                                                <p class="price old-price">{{number_format($product->products->price, 0, ",", ".")}}{{" ".$product->products->currency}}</p>
                                            </div>

                                            @if($product->products->rate != null)
                                                <div class="product-star" >
                                                    @for($i = 1; $i <= $product->products->rate; $i++)
                                                        <i class="fa fa-star"></i>
                                                        <!-- <i class="fa fa-star-half-o"></i> -->
                                                    @endfor
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                            @endif
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            @endforeach
        @endif
    </div>
</div>
@endsection