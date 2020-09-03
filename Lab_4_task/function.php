<?php
$x=$y=5;
function fun(){
	$x=$y=7;
	$GlOBALS['x'];
	echo "x=$x y=$y";

}
fun();
if(7.0!==7){
	print "NI";
}
else
{
	print "I";
}

$c=array("red","bl","yel");
foreach ($c as $v) {
	if(strpos($v, "l")){
		echo "$v";
	}
	# code...
}


?>