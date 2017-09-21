<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 9:32
 */
//通过GD库做验证码
//创建画布
$width = 80;
$height = 20;
$image = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($image,255,255,255); //为一幅图像分配颜色
$black = imagecolorallocate($image, 0,0,0);
//用填充矩形填充画布



