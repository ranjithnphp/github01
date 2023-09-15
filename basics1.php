<?php
define("PHNO","987654321");

echo PHNO;
echo "<br>";
echo __LINE__;
echo "<br>";
ECHO __FILE__;
echo "<br>";

class name{
	function print_l(){
		print __LINE__;
	}
	function print_f(){
		print __FUNCTION__;
	}
	function print_c(){
		print __CLASS__;
	}
	function print_m(){
		print __METHOD__;
	}
}
$obj = new name;
echo $obj->print_f();
echo "<br>";
echo $obj->print_c();
echo "<br>";
echo $obj->print_m();
echo "<br>";
echo $obj->print_l();



?>
