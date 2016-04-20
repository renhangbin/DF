<?php
/**
 * Created by PhpStorm.
 * User: hangbin
 * Date: 2016/4/20
 * Time: 15:31
 */
header("content-type:text/html;charset=utf-8");
$b=string2bytes("昆山二手车ello,world");
var_dump($b);
$c = count($b);
for($a = 0;$a<$c;$a++){
    $d = base_convert($b[$a] , 16, 2);//16进制转成2进制
    echo "[".$b[$a]."]=".$d;
}
function string2bytes($str){//字符串转换成阿斯卡码值（16进制）
    $bytes=array();
    echo $str."</br>";
    for ($i=0; $i < strlen($str); $i++) {
        $tmp=substr($str, $i,1);
        $bytes[]=bin2hex($tmp);
    }
    return $bytes;
}