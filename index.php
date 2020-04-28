<?php
/**
 * Created by PhpStorm.
 * User: kaseiaoki
 * Date: 2020/04/28
 * Time: 23:14
 */

require('./vendor/autoload.php');
require('./src/client.php');

$client = new client();
$client->basic_request();

