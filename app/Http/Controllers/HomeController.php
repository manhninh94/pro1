<?php

namespace App\Http\Controllers;

use App\Http\Helpers\BladeHelper;
use App\Http\Helpers\ShopHelpers;
use App\Repositories\ServerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    use ShopHelpers;
    use BladeHelper;

    /**
     * @var ServerRepository
     */
    private $server;
    private $cache;
    // private $subdomain;
    // private $country;

    /**
     * HomeController constructor.
     * @param ServerRepository $server
     */
    public function __construct(ServerRepository $server)
    {
        $this->server    = $server;
    }

    public function test($subdomain = null)
    {
        Cache::flush();
        return redirect('/');
    }

    public function checkSubdomain()
    {

    }

    public function index(Request $request)
    {
        // $shop_details = $this->getShopDetails($this->subdomain, $this->cache, ['sliders']);

        // if (isset($shop_details['shop_details']['errors'])) {
        //     return redirect()->route('home');
        // }

        // $categories = $this->getResponse($this->subdomain, 'categories', $this->cache, 'api/shops/get-categories', ['shop_id' => $shop_details['shop_details']['id']]);

        // $hot_products = $this->getResponse($this->subdomain, 'hot_products', $this->cache, 'api/guests/index', ['shop_id' => $shop_details['shop_details']['id']]);

        // $shopData = $shop_details['shop_details'];
        // $sliders  = $shop_details['shop_details']['sliders'];
        // return view('pages.home', ['categories' => $categories, 'hot_products' => $hot_products, 'shopData' => $shopData, 'sliders' => $sliders, 'request' => $request, 'country' => $this->country]);
    }

    public function category(Request $request)
    {

        // $category     = Route::input("category");
        // $shop_details = $this->getShopDetails($this->subdomain, $this->cache, []);
        // // dd($shop_details);
        // $categoryarray = explode("-", $category);
        // $category_id   = $categoryarray[0];

        // //lay san pham trong danh muc co ID=$category
        // $page         = 1;
        // $limit        = 30;
        // $orderby      = "name.asc";
        // $filter_price = null;
        // $price_min    = $price_max    = null;

        // if ($request->has('filter-price')) {
        //     $filter_price = $request->get('filter-price');
        //     $string       = explode("-", $filter_price);
        //     $price_min    = $string[0];
        //     $price_max    = $string[1];
        // }

        // if ($request->get('page') != null) {
        //     $page = $request->get('page');
        // }

        // if ($request->get('limit') != null && $request->get('limit') != 15) {
        //     $limit = $request->get('limit');
        // }

        // if ($request->get('orderby') != null) {
        //     $orderby = $request->get('orderby');
        // }

        // $data = [
        //     'category_id'         => $category_id,
        //     'shop_id'             => $shop_details['shop_details']['id'],
        //     'country'             => $this->country,
        //     'price_min'           => $price_min,
        //     'price_max'           => $price_max,
        //     'search_type'         => '',
        //     'search_value       ' => '',
        //     'search_exact'        => 'true',
        //     'order_by'            => $orderby,
        //     'limit'               => $limit,
        //     'page'                => $page,
        // ];
        // $product_of_category = json_decode($this->server->json('api/shops/get-products', $data));

        // $categories       = $this->getResponse($this->subdomain, 'categories', $this->cache, 'api/shops/get-categories', ['shop_id' => $shop_details['shop_details']['id']]);
        // $category_current = [];
        // $check1           = false;
        // if (!Cache::has('cate_' . $category_id)) {
        //     foreach ($categories as $category) {
        //         if ($check1) {
        //             break;
        //         }

        //         if ($category->id == $category_id) {

        //             $category_current = [
        //                 $category->id => ['id' => $category->id, 'name' => $category->name],

        //             ];
        //             break;
        //         }

        //         foreach ($category->children as $category2) {
        //             if ($check1) {
        //                 break;
        //             }

        //             if ($category2->id == $category_id) {
        //                 $category_current = [
        //                     $category->id  => ['id' => $category->id, 'name' => $category->name],
        //                     $category2->id => ['id' => $category2->id, 'name' => $category2->name],

        //                 ];
        //                 $check1 = true;
        //                 break;
        //             }

        //             foreach ($category2->children as $category3) {
        //                 if ($category3->id == $category_id) {
        //                     $category_current = [
        //                         $category->id  => ['id' => $category->id, 'name' => $category->name],
        //                         $category2->id => ['id' => $category2->id, 'name' => $category2->name],
        //                         $category3->id => ['id' => $category3->id, 'name' => $category3->name],
        //                     ];
        //                     $check1 = true;
        //                     break;
        //                 }
        //             }
        //         }
        //         # code...
        //     }
        //     Cache::put('cate_' . $category_id, json_encode($category_current), 100);
        // }
        // $category_current = json_decode(Cache::get('cate_' . $category_id));

        // $shop_details = $this->getShopDetails($this->subdomain, $this->cache, []);
        // if (isset($shop_details['shop_details']['errors'])) {
        //     return redirect()->route('home');
        // }
        // $shopData = $shop_details['shop_details'];
        // $country  = $this->country;

        // return view('pages.category', compact('request', 'product_of_category', 'categories', 'category_id', 'category_current', 'limit', 'page', 'price_min', 'price_max', 'orderby', 'shopData', 'country'));
    }

    public function productDetail()
    {

        // $shop_details = $this->getShopDetails($this->subdomain, $this->cache, []);
        // if (isset($shop_details['shop_details']['errors'])) {
        //     return redirect()->route('home');
        // }
        // $product_id = explode("-", Route::input("product_id"))[0];

        // $data = json_decode($this->server->json("api/products/show", ['id' => $product_id, 'shop_id' => $shop_details['shop_details']['id']]));

        // $shopData   = $shop_details['shop_details'];
        // $categories = $this->getResponse($this->subdomain, 'categories', $this->cache, 'api/shops/get-categories', ['shop_id' => $shop_details['shop_details']['id']]);

        // $product_relates = json_decode($this->server->json("api/products/relate", ['id' => $product_id, 'shop_id' => $shop_details['shop_details']['id']]));
        // $country         = $this->country;

        // return view('pages.product-detail', compact('data', 'shopData', 'categories', 'product_relates', 'country'));

    }

    public function filter_price(Request $request)
    {
        // $price_max = $request->get('price-max');
        // $price_min = $request->get('price-min');
        // echo $price_max;

    }

    public function searchProduct(Request $request)
    {
        // $page        = 1;
        // $credentials = $request->only(['page', 'limit', '_token', 'keyword', 'category', 'orderby']);

        // if ($request->get('page') != null) {
        //     $page = $request->get('page');
        // }

        // $limit = 30;

        // if ($request->get('limit') != null && $request->get('limit') != 15) {
        //     $limit = $request->get('limit');
        // }

        // $shop_details = $this->getShopDetails($this->subdomain, $this->cache, []);

        // if (isset($shop_details['shop_details']['errors'])) {
        //     return redirect()->route('home');
        // }

        // $shopData            = $shop_details['shop_details'];
        // $keyword             = $request->keyword;
        // $categories          = $this->getResponse($this->subdomain, 'categories', $this->cache, 'api/shops/get-categories', ['shop_id' => $shop_details['shop_details']['id']]);
        // $product_of_category = json_decode($this->server->json("api/guests/index",
        //     [
        //         'shop_id'      => $shop_details['shop_details']['id'],
        //         "type"         => "normal", "search_type" => "category_id",
        //         'search_value' => $request->category,
        //         'keyword'      => $request->keyword,
        //         'page'         => (!isset($credentials['page'])) ? 1 : $credentials['page'],
        //     ]));

        // $paginator = [];
        // if (!empty($product_of_category)) {
        //     $paginator = $this->generatePaginator($credentials, $product_of_category);
        // }

        // $country = $this->country;
        // return view('pages.search', compact('product_of_category', 'shopData', 'categories', 'keyword', 'limit', 'page', 'paginator', 'country','request'));
    }

}
