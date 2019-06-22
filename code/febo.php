<?php  

$a=0;
$b=1;
$num=0;
echo $a." ".$b." ";
while($num<=8)
{
	$new=$a+$b;
	echo $new." ";
	$a=$b;
	$b=$new;
	$num++;

}


?>