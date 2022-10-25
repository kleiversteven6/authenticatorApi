<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");

require_once __DIR__ . '/vendor/autoload.php';
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();
$oneCode=$_GET['code'];
$secret=$_GET['secret'];
$checkResult = $ga->verifyCode($secret, $oneCode, 2);    // 2 = 2*30sec clock tolerance

if ($checkResult) {
    $resp= 'true';
    $code=1;
} else {
    $resp= 'false';
    $code=0;
}
echo json_encode(array("response"=>$resp,"code"=>$code));
?>
