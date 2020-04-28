<?php
/**
 * Created by PhpStorm.
 * User: s1321
 * Date: 2020/04/29
 * Time: 1:11
 */

class jsonParse
{
    private $json;

    function __construct($data){
        $this->json = null;
      if(is_string($data) && is_array(json_decode($data, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false){
          $this->json = $data;
        }

    }

    public function csv() {
        $json = $this->json;
        $json_array = json_decode($json, true);
        foreach ($json_array as $json_object) {
            var_dump($json_object);
            exit;
        }
    }
}