# phpqrcode
### 简单事例 获取内容存储为png图片
    public static function save_png(){
        spl_autoload_register(function ($class_name) {
            require_once 'class/'.$class_name . '.php';
        });
        $value = @$_GET['random_code']?"hello":"hello"; //二维码内容
        $errorCorrectionLevel = 'L';//容错级别
        $matrixPointSize = 6;//生成图片大小
        //生成二维码图片
        if(file_exists('random_code/'.$value.'.png'))
            return ['status'=>0,'info'=>"success",'url'=>__FILE__.'/class/'.$value . '.php'];
        QRcode::png( "http://www.cuccpg.com/?code=".$value, 'random_code/'.$value.'.png', $errorCorrectionLevel, $matrixPointSize, 2);
        return ['status'=>0,'info'=>"success",'url'=>__FILE__.'/class/'.$value . '.php'];
    }