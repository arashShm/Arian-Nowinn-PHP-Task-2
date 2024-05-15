<?php


require_once "./vendor/autoload.php";

use App\Banks\Mellat ;
use App\Banks\Saman ;



$mellat = new Mellat();
$mellat->setToken([
    'data' => [
        'access_token' => 'dry564tygrdhfyu8764evhrt876uv536yv35ygv'
    ]
]);
echo "The last 3 transactions Mellat Bank" . PHP_EOL;
echo $json = json_encode($mellat->getTransaction() , JSON_PRETTY_PRINT) . PHP_EOL;




$saman = new Saman();
$saman->setToken([
    "token" => "465yfghnguin86i9n64uin67im678inytujnu"
]);
echo "The last 3 transactions Saman Bank" . PHP_EOL;
echo $json = json_encode($saman->getTransaction() , JSON_PRETTY_PRINT);

