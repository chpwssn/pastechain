<?php
/**
 * User: chipwasson
 * Date: 2/25/17
 * Time: 5:16 PM
 */

require_once __DIR__."/vendor/autoload.php";

$client = new MultichainClient("http://localhost:2692", 'multichainrpc', 'DmWtEWJfoWZN8A3e6c96RxdE8YszNhzvWnjfC6hNUMp7', 3);
$address = $client->setDebug(true)->listStreams();
var_dump($address);