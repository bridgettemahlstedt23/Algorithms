<?php

//Put the 53 random numbers into an array of the number 12 - 27. 
//Create another array where all the numbers are divided by 2 and all the odd numbers are multiplied by 2. 
//use Insertion Sort 

$ranArray = array(12,18,23,14,18,27,25,22,19,16,15,24,17,20,21,26,13,27,27,12,18,24,23,21,26,14,13,17,19,15,24,20,21,22,12,14,18,17,16,20,23,22,25,24,20,21,20);
echo "<p>Orginal Array: </p>";
echo implode(',' , $ranArray);
$factor = 2;
$divArray = array_map(function($val, $factor) 
	{
		return $val / $factor;
	}, 
	$ranArray, 
	array_fill(0, count($ranArray), 2)
);
echo "<p>Array numbers Divided by 2: </p>";
echo implode(',' , $divArray);

$multArray =array_map(function($val, $factor) 
	{
		return $val * $factor;
	}, 
	$ranArray, 
	array_fill(0, count($ranArray), 2)
);
echo "<p>Array numbers Multipled by 2: </p>";
echo implode(',' , $multArray);

echo "<p>Original Array Sorted Using Insertion Sort: </p>";
function insertion_Sort($ranArray)
{
	for($i=0;$i<count($ranArray);$i++){
		$val = $ranArray[$i];
		$j = $i-1;
		while($j>=0 && $ranArray[$j] > $val){
			$ranArray[$j+1] = $ranArray[$j];
			$j--;
		}
		$ranArray[$j+1] = $val;
	}
return $ranArray;
}
echo implode(',' , insertion_sort($ranArray));


?>
