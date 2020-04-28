<?php
/**
 * Created by PhpStorm.
 * User: s1321
 * Date: 2020/04/28
 * Time: 23:35
 */

class client
{

    function __constructor(){
        
    }
    public function basic_request() {
        $request = new \GuzzleHttp\Psr7\Request('GET', 'http://ja.dbpedia.org/sparql?default-graph-uri=http%3A%2F%2Fja.dbpedia.org&query=SELECT+%3Fcode%2C%3Fname%2C%3Fhomepage+WHERE+%7B%0D%0A+%3Fs+%3Chttp%3A%2F%2Fdbpedia.org%2Fontology%2FareaCode%3E+%3Fcode+%3B%0D%0A++%3Chttp%3A%2F%2Fja.dbpedia.org%2Fproperty%2Fname%3E+%3Fname+.%0D%0A+OPTIONAL+%7B%0D%0A++%3Fs+%3Chttp%3A%2F%2Fxmlns.com%2Ffoaf%2F0.1%2Fhomepage%3E+%3Fhomepage+.%0D%0A+%7D%0D%0A+FILTER+regex%28%3Fcode%2C+%22%5B0-9%5D%7B5%7D-%5B0-9%5D%22%29%0D%0A%7D%0D%0AORDER+BY+%3Fcode&should-sponge=&format=application%2Fsparql-results%2Bjson&timeout=0&debug=on\'');
        $promise = $client->sendAsync($request)->then(function ($response) {
            echo $response->getBody();
        });

        $promise->wait();
    }

}