<?php
include "phpqrcode.php";

$value = @$_GET['random_code']; //二维码内容

if(!$value)
    exit('error');
$errorCorrectionLevel = 'L';//容错级别
$matrixPointSize = 6;//生成图片大小
//生成二维码图片
if(file_exists('random_code/'.$value.'.png'))
    exit("success");
QRcode::png( "http://www.cuccpg.com/?code=".$value, 'random_code/'.$value.'.png', $errorCorrectionLevel, $matrixPointSize, 2);
exit("success");
