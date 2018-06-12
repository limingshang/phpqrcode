<?php
/**
 * Created by  ： PhpStorm.
 * User:       ： lims
 * Date:       ： 2018/6/12
 * Time:       ： 上午10:02
 */

include "../QRcode.php";
/**
 * Function Name: return_img
 * Create   User: lims
 * Create   Time: 2018/6/12 上午10:22
 * ---------------------------------
 * 输出图片内容
 */
function return_img($value){
    QRcode::png("http://www.qq.com");
}

/**
 * Function Name: save_img
 * Create   User: lims
 * Create   Time: 2018/6/12 上午10:22
 * ---------------------------------
 * @param $vlaue    图片内容
 * @param $path     需要存储图片路径
 */

function save_img($value,$file_path)
{
    QRcode::png($value, $file_path, QR_ECLEVEL_H, 4);
}


return_img("http://www.baidu.com");

//save_img("http://www.qq.com","'random_code/qq.png'");