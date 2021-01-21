<?php

$file = 'cache.json';

$fileinfo = filetime($file);

if (!file_exists($file)) {
    $data = file_get_contents('https://hltv-api.vercel.app/api/matche')
    $json = json_decode($data, true);
    file_put_contents('cache.json', json_encode($json));
}

$json = json_decode(file_get_contents($file));

print_r($json);
print_r(date("Y-m-d, H:i:s", $fileinfo));