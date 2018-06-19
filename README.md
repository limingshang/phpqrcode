# phpqrcode
### 简单事例 获取内容存储为png图片
### 2018-6-19 4：22：00

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