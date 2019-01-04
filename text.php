<?php
/**
 * Created by PhpStorm.
 * User: shiqi
 * Date: 2018/12/20
 * Time: 22:48
 */
//数据：
$arr1=array("Cat","Dog","Horse","Dog","pig"); 
$arr2=array("Cat","Cat","Horse","Dog","monkey"); 
/**
     *方法一： 
     * @param type $arr1 数组1
     * @param type $arr2 数组1
     */
    function occurrenceNum($arr1,$arr2) {
        //两个数组取交集后去重
        $arr = array_unique(array_intersect($arr1,$arr2));
        
        //分别取出两个数组中各元素出现次数
        $firstNum = array_count_values($arr1);
        $secondNum = array_count_values($arr2);
        
        //两数组元素个数相加
        $resultArr = array();
        foreach ($arr as $key => $value) {
            $resultArr[$value] = $firstNum[$value]+$secondNum[$value];
        }
        
        return $resultArr;
    }
    
/**
 * 方法二：   
 * @param type $arr1 数组1
 * @param type $arr2 数组1
 */
function countNum($arr1,$arr2)
{
    // 合并两个数组
	$array    =array_merge($arr1,$arr2);
	$countNum =array_count_values($array);
	foreach ($countNum as $k => $val)
	{
		if ($val==1) 
		{
			unset($countNum[$k]);
		}
	}
	return $countNum;
}

//结果：
Array
(
    [Cat] => 3
    [Dog] => 3
    [Horse] => 2
)
