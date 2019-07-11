<?php
function quick_sort($my_array)
 {
	$k = $y = array();
	if(count($my_array) < 2)
	{
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val)
	{
		if($val <= $pivot)
		{
			$k[] = $val;
		}elseif ($val > $pivot)
		{
			$y[] = $val;
		}
	}
	return array_merge(quick_sort($k),array($pivot_key=>$pivot),quick_sort($y));
}
 
$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo 'Original Array : '.implode(',',$my_array).'</br>';
$my_array = quick_sort($my_array);
echo 'Sorted Array : '.implode(',',$my_array);
?>