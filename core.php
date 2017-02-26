<?php
/**
 * User: chipwasson
 * Date: 2/25/17
 * Time: 9:05 PM
 */

use be\kunstmaan\multichain\MultichainClient;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/config.php";

$client = new MultichainClient($rpchost, $rpcuser, $rpcpass, 3);


function streamName(){
    global $dev, $devChainName, $productionChainName;
    return ($dev?$devChainName:$productionChainName);
}