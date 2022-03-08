<?php

//Two arrays between the numbers 2 - 13
//Merge two sorted list into on list after they are sorted

$array1 = range(2,13,1);
echo "First Array: ";
foreach ($array1 as $a) {
    echo "$a ";
}
echo "<br>";
$array2 = range(2,13,2);
echo "Second Array: ";
foreach ($array2 as $b) {
    echo "$b ";
}
echo "<br>";
function mergeArrays(&$arr1, &$arr2,
					$n1, $n2, &$arr3)
{
	$i = 0;
	$j = 0;
	$k = 0;
	while ($i < $n1 && $j < $n2)
	{
		if ($arr1[$i] < $arr2[$j])
			$arr3[$k++] = $arr1[$i++];
		else
			$arr3[$k++] = $arr2[$j++];
	}//end while
	while ($i < $n1)
		$arr3[$k++] = $arr1[$i++];
	while ($j < $n2)
		$arr3[$k++] = $arr2[$j++];
}
$arr1 = $array1;
$n1 = sizeof($arr1);

$arr2 = $array2;
$n2 = sizeof($arr2);

$arr3[$n1 + $n2] = array();
mergeArrays($arr1, $arr2, $n1,
				$n2, $arr3);

echo "Array after merging \n" ;
for ($i = 0; $i < $n1 + $n2; $i++)
	echo $arr3[$i] . " ";


?>
