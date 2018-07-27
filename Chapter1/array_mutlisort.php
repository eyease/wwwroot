<?php 
//array_multisort(arr1,arr2,arr3)同时对多个数组进行排序
//排序标志 sort_asc升序，sort_desc降序
$arr1=[1,2,3,4,5];
$arr2=range(5, 1);
echo '<pre>';
print_r($arr1);
print_r($arr2);
echo '</pre>';
echo '<hr>';

array_multisort($arr1,SORT_DESC,$arr2,SORT_ASC);

echo '<pre>';
echo "排序之后";
print_r($arr1);
print_r($arr2);
echo '</pre>';
 ?>