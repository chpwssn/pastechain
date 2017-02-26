<?php
/**
 * User: chipwasson
 * Date: 2/25/17
 * Time: 9:28 PM
 */

require_once __DIR__."/core.php";

$result = $client->listStreamKeyItems(streamName(), $_GET['key']);

if(sizeof($result) == 0)
{
    echo "Nothing With That Key";
}
else
{
    $mac = $result[0]['data'];
    $data = "";
    for($i = 1; $i < sizeof($result);$i++)
    {
        $data .= $result[$i]['data'];
    }
    $mac = hex2bin($mac);
    if($mac == md5($data))
    {
        $data = hex2bin($data);
        echo "<pre style='white-space: pre-wrap;white-space: -moz-pre-wrap;white-space: -pre-wrap;white-space: -o-pre-wrap;word-wrap: break-word;'>{$data}</pre>";
    }
    else
    {
        echo "Problem with the MAC with this key...";
    }
}