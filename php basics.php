<?php

class number{
	function get_number(){
		return "2";
	}
}
$data_obj = new number;
echo $data_obj->get_number();

echo "<br>";

$data_int = 5;
$data_str = "hello";
$data_flt = 3.2;
$data_arr = [32,55,47];
echo "<br>";

echo $data_int." ".$data_str." ".$data_flt;

echo "<br>-----<br>";

echo $data_arr[0]." ".$data_arr[2];
$num = 25;
if($num<=10){
	echo "num is below ten";

}else{
	echo 'num is greater then ten';
}

$a = 56.9;
echo var_dump(is_float($a));
$b = "hello bro how are you?";
echo strlen ($b);echo "<br>";
echo str_word_count($b);echo "<br>";
echo strrev($b);echo "<br>";
echo strpos($b,"how");echo "<br>";
echo strpos($b,"r");echo "<br>";
echo strrpos($b,"r");echo "<br>";
$name = "hello ranjith";
$neme1 = '  hello ram  ';
echo strstr($name,"lo");echo "<br>";
echo trim($name);echo "<br>";
echo str_replace("ranjith","ragu",$name);echo "<br>";

$name2 = "a b c d";
$name3 = ["e","f","g","h"];
$arr = explode(" ",$name2);
print_r($arr);
echo "<br>";
$str = implode(" ",$name3);
print_r($str);
echo "<br>";
echo $arr[3];
echo "<br>";
echo $str;
?>
