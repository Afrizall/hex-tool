<?php
// Coded By Afrizal F.A - ICWR-TECH
// Str To Hex & Hex To Str
// Char Code Tool
error_reporting(0);
function strToHex($str){
$hex='';
for ($i=0; $i < strlen($str); $i++){
$hex .= "\x".dechex(ord($str[$i]));
}
return $hex;
}
function hexToStr($hex){
$str='';
for ($i=0; $i < strlen($hex)-1; $i+=2){
$str .= chr(hexdec($hex[$i].$hex[$i+1]));
}
return $str;
}
if($argv[1] == "hex"){
$gzin = $argv[2];
$char = strToHex($gzin);
echo "\n$char\n";
}
if($argv[1] == "unhex"){
$buff = str_replace('\x',"",$argv[2]);
$char = hexToStr($buff);
echo "\n$char\n";
}
?>
