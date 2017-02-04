<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">


                <a class="first-item" href="#"><img alt="phone" src="{{url('/images/phone.png')}}" />00-62-658-658</a>
                <a href="mailto:{{isset($shopData['email']) ? $shopData['email'] : ""}}"><img alt="email" src="{{url('/images/email.png')}}" />Contact us today!</a>


            </div>
            <!-- CURRENCY -->
           {{--  <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">

                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>

                      </ul>
                </div>
            </div> 
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="{{asset('images/fr.jpg')}}" />French
                      
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="{{asset('images/en.jpg')}}" />English</a></li>
                        <li><a href="#"><img alt="email" src="{{asset('images/fr.jpg')}}" />French</a></li>
                    </ul>
                </div>
            </div>--}}
            
            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>

           {{--  <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="{{url('/')}}">Login</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->

    
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{url('/'.$country)}}">
                <img alt="{{isset($shopData['title']) ? $shopData['title'] : 'Salevia'}}" src="{{(isset($shopData['logo']) && isset(json_decode($shopData['logo'])->image) && \App\Http\Helpers\BladeHelper::isImage(json_decode($shopData['logo'])->image)) ? json_decode($shopData['logo'])->image : asset('images/logo.png')}}" style="max-height: 64px; max-width: 255px;" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline" method="get" action="{{url($country.'/search')}}">
                      <div class="form-group form-category">
                        <select name="category" class="select-category" style="width: 110px">
                            <?php
                            $cate_all = $categories;
                            $category_search =[];

                             foreach($cate_all as $item){
                                 $category_search[] =  $item;
                                 if(!empty($item->children)){
                                     foreach($item->children as $item_ch){
                                         $category_search[] =  $item_ch;
                                         if(!empty($item_ch->children)){
                                             foreach($item_ch->children as $item_ch2){
                                                 $category_search[] =  $item_ch2;
                                             }
                                         }
                                     }
                                 }
                             }
                            ?>
                            <option value="0">All Categories</option>
                            @if($category_search != '')
                                @foreach($category_search as $item_category_search)
                                    <option value="{{$item_category_search->id}}">{{$item_category_search->name}}</option>
                                @endforeach
                            @endif
                        </select>
                      </div>
                    {{csrf_field()}}
                      <div class="form-group input-serach">
                        <input type="text" name="keyword"  placeholder="{{ (!empty($keyword))? $keyword : 'Keyword here...' }}">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <!--CART -->
            {{-- <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="order.html">
                    <span class="title">Shopping cart</span>
                    <span class="total">2 items - 122.38 €</span>
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{asset('data/product-100x122.jpg')}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{asset('data/product-s5-100x122.jpg')}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <!-- Navbar -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                        <div class="vertical-menu-content is-home">
                            <ul class="vertical-menu-list">    
                            <?php $i=0; ?>                          
    
                                @forelse($cate_all as $category)
                                    <li @if($i++>=10) class="cat-link-orther" @endif>
                                        <a class="{{!empty($category->children)? 'parent' : ''}}" href="{{ url($country.'/category', ['category'=>$category->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($category->name)]) }}">{{$category->name}}</a>
                                        @if(!empty($category->children))
                                        <div class="vertical-dropdown-menu">
                                            <div class="vertical-groups col-sm-12">
                                                    @foreach($category->children as $sub_cate)
                                                        <div class="mega-group col-sm-4">
                                                            <h4 class="mega-group-header"><span><a href="{{ url($country.'/category', ['category'=>$sub_cate->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($sub_cate->name)]) }}">{{$sub_cate->name}}</a></span></h4>
                                                            <ul class="group-link-default">
                                                                @if($sub_cate->children)
                                                                    @foreach($sub_cate->children as $sub_cate2)
                                                                        <li><a href="{{ url($country.'/category', ['category'=>$sub_cate2->id.'-'.App\Http\Helpers\BladeHelper::convert_lang($sub_cate2->name)]) }}">{{$sub_cate2->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            </ul>
                                                        </div>
                                                    @endforeach

                                                @if(!empty($category->children))
                                                    <div class="mega-custom-html col-sm-12">
                                                        <a href="#"></a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        @endif
                                    </li>
                                @empty
                                @endforelse
                           
                               
                            </ul>
                            <div class="all-category"><span class="open-cate">All Categories</span></div>
                        </div>
                    </div>
                </div>

                <!-- Holider -->
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Home</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="index.html">Home Style 1</a></li>
                                                    <li class="link_container"><a href="index2.html">Home Style 2</a></li>
                                                    <li class="link_container"><a href="index3.html">Home Style 3</a></li>
                                                    <li class="link_container"><a href="index4.html">Home Style 4</a></li>
                                                    <li class="link_container"><a href="index5.html">Home Style 5</a></li>
                                                    <li class="link_container"><a href="index6.html">Home Style 6</a></li>
                                                    <li class="link_container"><a href="index7.html">Home Style 7</a></li>
                                                    <li class="link_container"><a href="index8.html">Home Style 8</a></li></ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('data/men.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">MEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('data/women.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">WOMEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('data/kid.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Shoes</a></li>
                                                    <li class="link_container"><a href="#">Clothing</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset('data/trending.png')}}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">TRENDING</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Men's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Women's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html">Sports</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Foods</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Asian</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">European</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="{{asset('data/banner-topmenu.jpg')}}" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Digital</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul> 
                                    </li>
                                    <li><a href="category.html">Furniture</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="category.html">Category Left Sidebar</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="category2.html">Category Right Sidebar</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="detail.html">Product Left Sidebar</a>
                                                    </li>
                                                    
                                                    <li class="link_container">
                                                        <a href="detail2.html">Product Full width</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="detail3.html">Product Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="order.html">Order</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="login.html">Login</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="blog.html">Blog</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="blog-detail.html">Blog Post</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="contact.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
        </div>
    </div>