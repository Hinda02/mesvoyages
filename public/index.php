<?php

use App\Kernel;
/*use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;*/

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';
//require dirname(__DIR__).'/config/bootstrap.php';

/*if($_SERVER['APP_DEBUG']){
    unmask(0000);
    
    Debug::enable();
}

if($trustedProxies = $_SERVER['TRUSTED_PROXIES']?? $_ENV['TRUSTED_PROXIES'] ?? false){
    Request::setTrustedProxies(explode(',', $trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if($trustedHosts = $_SERVER['TRUSTED_HOSTS']?? $_ENV['TRUSTED_HOSTS'] ?? false){
    Request::setTrustedHosts([$trustedHosts]);
}*/

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

/*$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$request = Request::createFromGlobals();
$response = $kernel->send();
$kernel->terminate($request, $response);*/
