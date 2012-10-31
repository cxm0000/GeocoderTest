<?
require 'vendor/autoload.php';


$buzz    = new \Buzz\Browser(new \Buzz\Client\Curl());
$adapter = new \Geocoder\HttpAdapter\BuzzHttpAdapter($buzz);

$geocoder = new \Geocoder\Geocoder();
$geocoder->registerProviders(array(
    new \Geocoder\Provider\YahooProvider(
        $adapter, '<YAHOO_API_KEY>', $locale
    ),
    new \Geocoder\Provider\IpInfoDbProvider(
        $adapter, '<IPINFODB_API_KEY>'
    ),
    new \Geocoder\Provider\HostIpProvider($adapter)
));


?>