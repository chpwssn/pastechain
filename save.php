<?php
/**
 * User: chipwasson
 * Date: 2/25/17
 * Time: 9:04 PM
 */


/*if (!isset($_POST['data'])){
    header("HTTP/1.0 400 No Data");
    die();
}*/

require_once __DIR__."/core.php";

$hex = bin2hex(htmlentities($_POST['data']));
$mac = bin2hex(md5($hex));

$hex = str_split($hex, 5000);

$newKey = randKey();
while(sizeof($client->listStreamKeyItems(streamName(), $newKey)) != 0)
{
    $newKey = randKey();
}

$client->streamPublish(streamName(), $newKey, $mac);
foreach ($hex as $segment)
{
    $client->streamPublish(streamName(), $newKey, $segment);
}

header("Location: /{$newKey}");


function randKey() {
    global $keyLength;
    $chars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789';
    $len = strlen($chars);
    $key = '';
    for ($i = 0; $i < $keyLength; $i++) {
        $key .= $chars[rand(0,$len-1)];
    }
    return $key;
}