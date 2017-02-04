<?php
namespace App\Http\Helpers;

use App\Repositories\ServerRepository;
use Illuminate\Support\Facades\Cache;

trait ShopHelpers
{
    public function __construct(ServerRepository $server)
    {
        $this->server = $server;

    }

    public function getResponse($subdomain, $name, $cache, $url, $data)
    {
        $cache_name = $subdomain . '_' . $name;

        $shop_details = Cache::get($subdomain . '_details');
        $oldCache     = $shop_details['cache'];
        $shopData     = $shop_details['shop_details'];

        if ((isset($cache['products'])) && ((!isset($oldCache['products'])) || ($cache['products'] != $oldCache['products']))) {

            Cache::forever($subdomain . '_categories', json_decode($this->server->json("api/shops/get-categories", $data)));

            Cache::forever($subdomain . '_hot_products', json_decode($this->server->json("api/guests/index", $data)));

            $oldCache['products'] = $cache['products'];

            Cache::forever($subdomain . '_details', ['cache' => $oldCache, 'shop_details' => $shopData]);
            // Cache::forever($subdomain . '_product_of_'.$data['category_id'], json_decode($this->server->json("api/shops/get-products", $data)));
        }
        if (!Cache::has($cache_name)) {
            Cache::forever($cache_name, json_decode($this->server->json($url, $data)));
        }
        return Cache::get($cache_name);
    }

    public function updateShopDetails($subdomain, $cache)
    {
        // Check cache to get the first data
        if (!isset($cache['shop_details'])) {

            $shop_details = json_decode($this->server->json('api/guests/shop-details', ['subdomain' => $subdomain]), true);
            Cache::forever($subdomain . '_details', ['cache' => [], 'shop_details' => $shop_details]);

        } elseif (!Cache::has($subdomain . '_details')) {
            // Get shop details
            $shop_details             = json_decode($this->server->json('api/guests/shop-details', ['subdomain' => $subdomain]), true);
            $oldCache['shop_details'] = $cache['shop_details'];

            Cache::forever($subdomain . '_details', ['cache' => $oldCache, 'shop_details' => $shop_details]);
        } else {
            // Up to date data to the cache
            $details = Cache::get($subdomain . '_details');
            // If it already has check the new cache from back server

            if (isset($details['cache']['shop_details']) && $details['cache']['shop_details'] != $cache['shop_details']) {

                $details['cache']['shop_details'] = $cache['shop_details'];
                $shop_details                     = json_decode($this->server->json('api/guests/shop-details', ['subdomain' => $subdomain]), true);

                Cache::forever($subdomain . '_details', ['cache' => $details['cache'], 'shop_details' => $shop_details]);
            }
        }
    }

    public function getShopDetails($subdomain, $cache, $options = array())
    {
        $this->updateShopDetails($subdomain, $cache);
        $cache = Cache::get($subdomain . '_details');
        // dd($cache);
        // Checking for decode the slider
        if (in_array('sliders', $options)) {
            if (isset($cache['shop_details']['sliders']) && !is_array($cache['shop_details']['sliders'])) {
                $sliders = json_decode(base64_decode($cache['shop_details']['sliders']));

                $cache['shop_details']['sliders'] = $sliders;
            }
        }
        return $cache;
    }

    // public function getShopData($value = '')
    // {
    //     if ($details['cache']['products'] != $cache['products']) {

    //         $catgories = json_decode($this->server->json("api/shops/get-categories", ['shop_id' => $details['shop_details']->id]));

    //         Cache::forever($subdomain . '_categories', $catgories);

    //         $product_of_category = json_decode($this->server->json('api/guests/index', ['shop_id' => $details['shop_details']->id]));

    //         Cache::forever($subdomain . '_product_of_category', $product_of_category);
    //     }
    // }
}
