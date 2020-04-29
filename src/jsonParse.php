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
        $results_array = $json_array["results"]["bindings"];
        foreach ($results_array as $value) {
            $code     = $value["code"]["value"];
            $name     = $value["name"]["value"];
            $homepage = array_key_exists($value["homepage"]) ? $value["homepage"]["value"] : "";
            $row      = str_replace("-",  "" ,$value["code"]["value"]) . "," . $value["name"]["value"] . "," . $value["homepage"]["value"] . "\n";
            file_put_contents ("homepage.csv", $row, FILE_APPEND);
        }
    }
}
