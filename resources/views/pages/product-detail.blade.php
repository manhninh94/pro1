@extends('templates.master',[
    'title'=>'Product details',
    'class_body'=>'product-page',
    'scripts'=>[
    ],
    'stylesheets'=>[
    ],
])
<div id="fb-root"></div>

@section('content')
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            @if(isset($data->categories->parent->parent) && $data->categories->parent->parent!=null)
            <a href="{{url($country.'/category',['id'=>$data->categories->parent->parent->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($data->categories->parent->parent->name)])}}" title="Return to {{$data->categories->parent->parent->name}}">{{$data->categories->parent->parent->name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            @endif
            @if(isset($data->categories->parent) && $data->categories->parent!=null)
            <a href="{{url($country.'/category',['id'=>$data->categories->parent->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($data->categories->parent->name)])}}" title="Return to {{$data->categories->parent->name}}">{{$data->categories->parent->name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            @endif
            @if(isset($data->categories) && $data->categories!=null)
            <a href="{{url($country.'/category',['id'=>$data->categories->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($data->categories->name)])}}" title="Return to {{$data->categories->name}}">{{$data->categories->name}}</a>
            <span class="navigation-pipe">&nbsp;</span>
            @endif
            @if(isset($data->name) && $data->name!=null)
            <span class="navigation_page">{{$data->name}}</span>
            @endif
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            {{--<div class="column col-xs-12 col-sm-3" id="left_column">--}}
                {{--<!-- block category -->--}}
                {{--<div class="block left-module">--}}
                    {{--<p class="title_block">CATEGORIES</p>--}}
                    {{--<div class="block_content">--}}
                        {{--<!-- layered -->--}}
                        {{--<div class="layered layered-category">--}}
                            {{--<div class="layered-content">--}}
                                {{--<ul class="tree-menu">--}}
                               {{--  @if(!isset($data->error))--}}
                                    {{--@foreach($data->categories as $item_category)--}}
                                        {{--<li class="">--}}
                                            {{--<span></span><a href="{{url('category', ['category'=>$item_category->id])}}">{{$item_category->name}}</a>--}}
                                            {{--<ul>--}}
                                                {{--<li><span></span><a href="#">T-shirts</a></li>--}}
                                                {{--<li><span></span><a href="#">Dresses</a></li>--}}
                                                {{--<li><span></span><a href="#">Casual</a></li>--}}
                                                {{--<li><span></span><a href="#">Evening</a></li>--}}
                                                {{--<li><span></span><a href="#">Summer</a></li>--}}
                                                {{--<li><span></span><a href="#">Bags & Shoes</a></li>--}}
                                                {{--<li><span></span><a href="#"><span></span>Blouses</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--@endif --}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./layered -->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- ./block category  -->--}}
                {{--<!-- block best sellers -->--}}
                {{--<div class="block left-module">--}}
                    {{--<p class="title_block">BEST SELLERS</p>--}}
                    {{--<div class="block_content">--}}
                        {{--<div class="owl-carousel owl-best-sell" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">--}}
                            {{--<ul class="products-block best-sell">--}}
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
                                {{--<li>--}}
                                    {{--<div class="products-block-left">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset('')}}data/p11.jpg" alt="SPECIAL PRODUCTS">--}}
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
                                {{--<li>--}}
                                    {{--<div class="products-block-left">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset('')}}data/p12.jpg" alt="SPECIAL PRODUCTS">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="products-block-right">--}}
                                        {{--<p class="product-name">--}}
                                            {{--<a href="#">Plus Size Rock Star Skirt</a>--}}
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
                            {{--<ul class="products-block best-sell">--}}
                                {{--<li>--}}
                                    {{--<div class="products-block-left">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset('')}}data/p13.jpg" alt="SPECIAL PRODUCTS">--}}
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
                                {{--<li>--}}
                                    {{--<div class="products-block-left">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset('')}}data/p14.jpg" alt="SPECIAL PRODUCTS">--}}
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
                                {{--<li>--}}
                                    {{--<div class="products-block-left">--}}
                                        {{--<a href="#">--}}
                                            {{--<img src="{{asset('')}}data/p15.jpg" alt="SPECIAL PRODUCTS">--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="products-block-right">--}}
                                        {{--<p class="product-name">--}}
                                            {{--<a href="#">Plus Size Rock Star Skirt</a>--}}
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
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- ./block best sellers  -->--}}
                {{----}}
                {{--<!-- left silide -->--}}
                {{--<div class="col-left-slide left-module">--}}
                    {{--<ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">--}}
                        {{--<li><a href="#"><img src="{{asset('')}}data/slide-left.jpg" alt="slide-left"></a></li>--}}
                        {{--<li><a href="#"><img src="{{asset('')}}data/slide-left2.jpg" alt="slide-left"></a></li>--}}
                        {{--<li><a href="#"><img src="{{asset('')}}data/slide-left3.png" alt="slide-left"></a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<!--./left silde-->--}}
                {{--<!-- block best sellers -->--}}
                {{--<div class="block left-module">--}}
                    {{--<p class="title_block">ON SALE</p>--}}
                    {{--<div class="block_content product-onsale">--}}
                        {{--<ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">--}}
                            {{--<li>--}}
                                {{--<div class="product-container">--}}
                                    {{--<div class="left-block">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/product-260x317.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="price-percent-reduction2">-30% OFF</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                        {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="content_price">--}}
                                            {{--<span class="price product-price">$38,95</span>--}}
                                            {{--<span class="price old-price">$52,00</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-bottom">--}}
                                        {{--<a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="product-container">--}}
                                    {{--<div class="left-block">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p35.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="price-percent-reduction2">-10% OFF</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                        {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="content_price">--}}
                                            {{--<span class="price product-price">$38,95</span>--}}
                                            {{--<span class="price old-price">$52,00</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-bottom">--}}
                                        {{--<a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<div class="product-container">--}}
                                    {{--<div class="left-block">--}}
                                        {{--<a href="#">--}}
                                            {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p37.jpg" />--}}
                                        {{--</a>--}}
                                        {{--<div class="price-percent-reduction2">-42% OFF</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-block">--}}
                                        {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                        {{--<div class="product-star">--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star"></i>--}}
                                            {{--<i class="fa fa-star-half-o"></i>--}}
                                        {{--</div>--}}
                                        {{--<div class="content_price">--}}
                                            {{--<span class="price product-price">$38,95</span>--}}
                                            {{--<span class="price old-price">$52,00</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-bottom">--}}
                                        {{--<a class="btn-add-cart" title="Add to Cart" href="#add">Add to Cart</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- ./block best sellers  -->--}}
                {{--<!-- left silide -->--}}
                {{--<div class="col-left-slide left-module">--}}
                    {{--<div class="banner-opacity">--}}
                        {{--<a href="#"><img src="{{asset('')}}data/ads-banner.jpg" alt="ads-banner"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--./left silde-->--}}
            {{--</div>--}}
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-12" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6">
                                <!-- product-imge-->
                                <div class="product-image">
                                    <div class="product-full">
                                        @if(json_decode($data->images)[0]== null)
                                        <img id="product-zoom" src='{{$data->thumbnail}}' data-zoom-image="{{$data->thumbnail}}"/>
                                        @else
                                            <img id="product-zoom" src='{{json_decode($data->images)[0]}}' data-zoom-image="{{json_decode($data->images)[0]}}"/>
                                        @endif
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="false">
                                            {{--dd(json_decode($data->images))--}}
                                            @if(json_decode($data->images) != null)
                                                @foreach(json_decode($data->images) as $item_image)
                                                    <li>
                                                        <a href="#" data-image="{{$item_image}}" data-zoom-image="{{$item_image}}">
                                                            <img id="product-zoom"  src="{{$item_image}}" />
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!-- product-imge-->
                            </div>

                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$data->name}}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                    @for($i =1; $i<=$data->rate; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                        <!-- <i class="fa fa-star-half-o"></i> -->
                                    </div>
                                    <div class="comments-advices">
                                        <a href="#">Based  on 3 ratings</a>
                                        <a href="#"><i class="fa fa-pencil"></i> write a review</a>
                                    </div>
                                </div>
                                <div class="product-price-group">
                                    <span class="price">{{number_format($data->discounted_price, 0, ",", ".")}} {{$data->currency}}</span>
                                    <span class="old-price">{{number_format($data->price, 0, ",", ".")}} {{$data->currency}}</span>
                                    <span class="discount">{{round(($data->price-$data->discounted_price)/$data->price*100)}}%</span>
                                </div>
                                <div class="info-orther">
                                    <p>Item Code: {{$data->sku}}</p>
                                    <p>Availability: <span class="in-stock">In stock</span></p>
                                    <p>Condition: New</p>
                                </div>
                                {{--product-desc--}}
                                <div class="">
                                    {{$data->description}} 
                                </div>
                                {{-- <div class="form-option">
                                    <p class="form-option-title">Available Options:</p>
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                <li style="background:#0c3b90;"><a href="#">red</a></li>
                                                <li style="background:#036c5d;" class="active"><a href="#">red</a></li>
                                                <li style="background:#5f2363;"><a href="#">red</a></li>
                                                <li style="background:#ffc000;"><a href="#">red</a></li>
                                                <li style="background:#36a93c;"><a href="#">red</a></li>
                                                <li style="background:#ff0000;"><a href="#">red</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Qty:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                            <div class="btn-plus">
                                                <a href="#" class="btn-plus-up">
                                                    <i class="fa fa-caret-up"></i>
                                                </a>
                                                <a href="#" class="btn-plus-down">
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select>
                                                <option value="1">X</option>
                                                <option value="2">XL</option>
                                                <option value="3">XXL</option>
                                            </select>
                                            <a id="size_chart" class="fancybox" href="assets/data/size-chart.jpg">Size Chart</a>
                                        </div>
                                        
                                    </div>
                                </div> --}}
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" target="_blank" href="{{$data->link}}">BUY NOW</a>
                                    </div>
                                    {{--<div class="button-group">--}}
                                        {{--<a class="wishlist" href="#"><i class="fa fa-heart-o"></i>--}}
                                        {{--<br>Wishlist</a>--}}
                                        {{--<a class="compare" href="#"><i class="fa fa-signal"></i>--}}
                                        {{--<br>        --}}
                                        {{--Compare</a>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="form-share">
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{urlencode (url('product-detail',['id'=>$data->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($data->name)]))}}"><i class="fa fa-envelope-o fa-fw"></i> Share to facebook</a>
                                    </div>
                                    <div class="network-share">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Product Details</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#information">information</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#reviews">reviews</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#extra-tabs">Extra Tabs</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#guarantees">guarantees</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    <p>Morbi mollis tellus ac sapien. Nunc nec neque. Praesent nec nisl a purus blandit viverra. Nunc nec neque. Pellentesque auctor neque nec urna.</p>

                                    <p>Curabitur suscipit suscipit tellus. Cras id dui. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Maecenas vestibulum mollis diam.</p>

                                    <p>Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Sed lectus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Nam at tortor in tellus interdum sagittis. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.</p>
                                </div>
                                <div id="information" class="tab-panel">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td width="200">Compositions</td>
                                            <td>Cotton</td>
                                        </tr>
                                        <tr>
                                            <td>Styles</td>
                                            <td>Girly</td>
                                        </tr>
                                        <tr>
                                            <td>Properties</td>
                                            <td>Colorful Dress</td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="reviews" class="tab-panel">
                                    <div class="product-comments-block-tab">
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Jame</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <div class="comment row">
                                            <div class="col-sm-3 author">
                                                <div class="grade">
                                                    <span>Grade</span>
                                                    <span class="reviewRating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                                <div class="info-author">
                                                    <span><strong>Author</strong></span>
                                                    <em>04/08/2015</em>
                                                </div>
                                            </div>
                                            <div class="col-sm-9 commnet-dettail">
                                                Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar
                                            </div>
                                        </div>
                                        <p>
                                            <a class="btn-comment" href="#">Write your review !</a>
                                        </p>
                                    </div>
                                    
                                </div>
                                <div id="extra-tabs" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                </div>
                                <div id="guarantees" class="tab-panel">
                                    <p>Phasellus accumsan cursus velit. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Sed lectus. Sed a libero. Vestibulum eu odio.</p>

                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>

                                    <p>Maecenas nec odio et ante tincidunt tempus. Vestibulum suscipit nulla quis orci. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Aenean ut eros et nisl sagittis vestibulum. Aliquam eu nunc.</p> 
                                    <p>Maecenas vestibulum mollis diam. In consectetuer turpis ut velit. Curabitur at lacus ac velit ornare lobortis. Praesent ac sem eget est egestas volutpat. Nam eget dui.</p>
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->

                        
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                @foreach($product_relates as $product_relate)
                                <li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="{{url('product-detail',['id'=>$product_relate->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($product_relate->name)])}}">
                                                <img class="img-responsive" alt="product" src="{{asset($product_relate->thumbnail)}}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="{{$product_relate->link}}">BUY NOW</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="{{url('product-detail',['id'=>$product_relate->id.'-'.App\Http\Helpers\BladeHelper::
                                            convert_lang($product_relate->name)])}}">{{$product_relate->name}}</a></h5>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="content_price">
                                                <span class="price product-price">{{number_format($product_relate->discounted_price, 0, ",", ".")}} {{$product_relate->currency}}</span>
                                                <span class="price old-price">{{number_format($product_relate->price, 0, ",", ".")}} </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach



                            </ul>
                        </div>
                        <!-- ./box product -->
                        <!-- box product -->
                        {{--<div class="page-product-box">--}}
                            {{--<h3 class="heading">You might also like</h3>--}}
                            {{--<ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>--}}
                                {{--<li>--}}
                                    {{--<div class="product-container">--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="#">--}}
                                                {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p97.jpg" />--}}
                                            {{--</a>--}}
                                            {{--<div class="quick-view">--}}
                                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#add">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="product-container">--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="#">--}}
                                                {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p34.jpg" />--}}
                                            {{--</a>--}}
                                            {{--<div class="quick-view">--}}
                                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#add">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="product-container">--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="#">--}}
                                                {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p36.jpg" />--}}
                                            {{--</a>--}}
                                            {{--<div class="quick-view">--}}
                                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#add">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<div class="product-container">--}}
                                        {{--<div class="left-block">--}}
                                            {{--<a href="#">--}}
                                                {{--<img class="img-responsive" alt="product" src="{{asset('')}}data/p36.jpg" />--}}
                                            {{--</a>--}}
                                            {{--<div class="quick-view">--}}
                                                    {{--<a title="Add to my wishlist" class="heart" href="#"></a>--}}
                                                    {{--<a title="Add to compare" class="compare" href="#"></a>--}}
                                                    {{--<a title="Quick view" class="search" href="#"></a>--}}
                                            {{--</div>--}}
                                            {{--<div class="add-to-cart">--}}
                                                {{--<a title="Add to Cart" href="#add">Add to Cart</a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="right-block">--}}
                                            {{--<h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>--}}
                                            {{--<div class="product-star">--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star"></i>--}}
                                                {{--<i class="fa fa-star-half-o"></i>--}}
                                            {{--</div>--}}
                                            {{--<div class="content_price">--}}
                                                {{--<span class="price product-price">$38,95</span>--}}
                                                {{--<span class="price old-price">$52,00</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <!-- ./box product -->
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

@endsection