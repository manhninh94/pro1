<?php 
	
namespace App\Http\Helpers;

use cURL;
/**
* 
*/
class HelperCategory{
	// protected $data;


	public function getCategories(){
		$curl = new cURL;

        $response = $curl->post("http://tn2.joomexp.com/api/categories/index", ['api_key' => 'my_key', 'post' => 'data']);
        return $data =  json_decode($response);
        
	}
	public function getProductInCategory($category){
		$curl = new cURL;
        // $category = $item->id;
       	$response = $curl->post("http://tn2.joomexp.com/api/products/index", ['category' => $category]);
        return $data =  json_decode($response);
	}
	
}