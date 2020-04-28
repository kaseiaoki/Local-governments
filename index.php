    <?php
    /**
     * Created by PhpStorm.
     * User: kaseiaoki
     * Date: 2020/04/28
     * Time: 23:14
     */

    require('./vendor/autoload.php');
    require('./src/client.php');
    require('./src/jsonParse.php');

    $client = new client;
    $data = $client->basic_request();
    $jsonParse = new jsonParse($data);
    $jsonParse->csv();
