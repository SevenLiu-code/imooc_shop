<?php session_start();
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 9:32
 */
require_once 'string.func.php';
function verifyImage($type = 1, $length = 4, $pixel = 0, $sess_name = 'verify'){
    //通过GD库做验证码
    //创建画布
    $width = 80;
    $height = 28;
    $image = imagecreatetruecolor($width, $height);
    $white = imagecolorallocate($image,255,255,255); //为一幅图像分配颜色
    $black = imagecolorallocate($image, 0,0,0);
    //用填充矩形填充画布
    imagefilledrectangle($image, 1,1, $width-2,$height-2, $white);
    $chars = buidRandomString($type, $length);
    $_SESSION[$sess_name] = $chars;
    $fontfiles = array("msyh.ttf","msyhbd.ttf","simfang.ttf","simhei.ttf","simkai.ttf","simsun.ttc");
    for($i=0; $i<$length; $i++) {
        $size = mt_rand(14, 18);
        $angle = mt_rand(-15, 15);
        $x = 5 + $i*$size;
        $y = mt_rand(20,26);
        $color = imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180));
        $fontfile = "../fonts/".$fontfiles[mt_rand(0, count($fontfiles)-1)];
        $text = substr($chars, $i, 1);
        imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);
    }
    if ($pixel){
        for ($i=0; $i<$pixel; $i++){
            imagesetpixel($image, mt_rand(1, $width-1), mt_rand(1, $height-1), imagecolorallocate($image, mt_rand(50, 90), mt_rand(80, 200), mt_rand(90, 180)));
        }
    }
        header("content-type:image/gif;charset='utf-8'");
        imagegif($image);
        imagedestroy($image);
}   
?>