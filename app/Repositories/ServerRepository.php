<?php
/**
 * Created by PhpStorm.
 * User: Optiplex 790
 * Date: 10/19/2016
 * Time: 11:24 AM
 */
namespace App\Repositories;

use anlutro\cURL\cURL;

class ServerRepository
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var cURL|\anlutro\cURL\Laravel\cURL|cURL
     */
    private $curl;

    /**
     * ServerRepository constructor.
     * @param cURL $cURL
     * @internal param cURL $cUrl
     * @internal param string $url
     */
    public function __construct(cURL $cURL)
    {
        $this->url = env('SERVER_BACK', 'http://tn2.joomexp.com/');
        $this->curl = $cURL;
        $this->curl->setDefaultHeaders(['Accept' => 'application/json']);
    }

    public function json($query, $data)
    {
        return $this->curl->jsonPost($this->url . $query, $data)->body;
    }

    /**
     * @param $method
     * @param $query
     * @param $data
     * @param $token
     * @return \anlutro\cURL\Response
     */
    function curl_request($method, $query, $data, $token)
    {
        $request = $this->curl->newJsonRequest($method, $this->url . $query, $data)
            ->setHeader('Authorization', 'Bearer ' . $token);
        $response = $this->curl->sendRequest($request);
        return $response;
    }

}