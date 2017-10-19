<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 9:33
 */
function buidRandomString($type = 1, $length = 4){
    if ($type == 1) {
        $chars = join("", range(0, 9));
    } else if($type == 2) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z")));
    } else if($type == 3) {
        $chars = join("", array_merge(range("a", "z"), range("A", "Z"), range(0, 9)));
    }
    if ($length>strlen($chars)) {
        exit("字符串长度不够");
    }
    $chars = str_shuffle($chars);//打乱数组
    return substr($chars, 0, $length);
}