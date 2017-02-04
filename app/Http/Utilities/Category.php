<?php 
	/**
	* 
	*/
namespace App\Http\Utilities;
use cURL;
use App\Repositories\ServerRepository;
use Illuminate\Support\Facades\Cache;

class Category {
	static $category_name;
	var $server;

	/**
	 * AuthController constructor.
	 * @param $server
	 */
	public function __construct(ServerRepository $server)
	{
		$this->server = $server;
	}
	public static function all()
	{
		$curl = new cURL;

        $response = $curl->post("http://tn2.joomexp.com/api/categories/index", ['api_key' => 'my_key', 'post' => 'data']);
//			static::$category_name =  json_decode($response);
		if(Cache::has('all_category')){
			return Cache::get('all_category');
		}else{
			Cache::put('all_category', json_decode($response), 100);
			return Cache::get('all_category');
		}
	}

	public function get_quantity_product_in_category($category){
		$curl = new cURL;
		 $data = [
        'category'     => $category,
        'search_exact' => 'true',
        'order_by'     => 'id.desc',
        'limit'        => 15,
        'page'         => 1
    ];
		$response = json_decode($curl->post("http://tn2.joomexp.com/api/products/index", $data));
		return $response;
	}


	public	function stripUnicode($str){
		if (!$str) {
			return false;
		}
		$unicode = array(
			'a'=>'á|à|ạ|ả|á|ã|â|ấ|ầ|ậ|ẩ|ẫ|ă|ẵ|ặ|ắ|ằ',
			'A'=>'Á|À|Â|Ä|Ă|Ā|Ã|Å|Ą|Ạ|Ă|Ẳ|Ằ|Ắ|Ặ|Ẵ|Ấ|Ầ|Ẩ|Ậ|Ẫ',
			'AE'=>'Æ',
			'd'=>'đ',
			'D'=>'Đ',
			'E'=>'É|È|Ė|Ễ|Ế|Ề|Ệ|Ể|Ẻ|Ẹ|Ê|Ë|Ě|Ē|Ę|Ə',
			'e'=>'é|è|ẻ|ẹ|ẽ|ê|ế|ề|ể|ệ|ễ',
			'i'=>'í|ì|i|î|ï|ī|į|ỉ|ị|ĩ',
			'I'=>'|Í|Ị|Ì|Ỉ|Ĩ|',
			'o'=>'ó|ò|ỏ|ọ|ó|ồ|ố|ô|ộ|ổ|ö|õ|ő|ø|ơ|œ|ơ|ờ|ở|ợ|ỡ|ớ|ộ',
			'O'=>'Ó|Ò|Ô|Ö|Õ|Ő|Ø|Ơ',
			'u'=>'ú|ù|ủ|ụ|û|ü|ŭ|ū|ů|ų|ű|ư|ừ|ử|ữ|ự|ứ|ũ',
			'U'=>'Ú|Ù|Û|Ü|Ŭ|Ū|Ů|Ų|Ű|Ư|Ụ|Ứ|Ừ|Ử|Ự|Ữ',
			'y'=>'ý|ý|ỵ|ỷ|ỹ',
			'Y'=>'Ý|Ỳ|Ỷ|Ỵ|Ỹ',
			'-'=>'/|',
			''=>')|/|&|,|+|(|-|.',
			);
		foreach ($unicode as $khongdau => $codau) {
			$arr=explode("|", $codau);
			$str=str_replace($arr, $khongdau, $str);
		}
		return $str;
	}
	public function convert_lang($str){
		$str=trim($str);
		if ($str=="") {
			return "";
		}
		$str=str_replace('"', '', $str);
		$str=str_replace("'", '', $str);
		$str=$this->stripUnicode($str);
		$str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
		$str=str_replace(' ', '-', $str);
		$str=str_replace('--', '-', $str);
		$str=str_replace('---', '-', $str);
		return $str;

	}


	public function the_excerpt($text, $string = 60) {
		$sanitized = htmlentities($text, ENT_COMPAT, 'UTF-8');
        if(strlen($sanitized) > $string) {
            $cutString = substr($sanitized,0,$string);
            $words = substr($sanitized, 0, strrpos($cutString, ' '));
			if(strlen($words)<1){
				return $sanitized;
			}
            return $words."...";
        } else {
            return $sanitized;
        }
    } // End the_excerpt

}
 ?>