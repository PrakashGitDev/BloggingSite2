<?php
include('includes/database.php');
/*
$post_num=new query();
$condition_arr=array('cat_id'=>1);
$cp=count($c=$post_num->getData('posts','*',$condition_arr));

$categorized=new query();
$cat_arr=array('cat_id' => 2);

print_r($categorized->getData('posts','*',$cat_arr));
*/

//$posts=new query();
#$result=$posts->getData('posts','*','','id','desc');

// $sr=new query();
// $cond_ar = array('title' => 'a');
// $a=$sr->search('posts','*',$cond_ar,'id','desc','','0','5');
// $b=$sr->getData('posts','*','','id','desc');
// $c=$sr->search('posts','*','','id','desc');
// echo "<pre>";
// print_r($a);
// print_r($b);
// print_r($c);
$post_per_page = 5;
$start = (2-1)*$post_per_page;
echo $start;
$start = '0';
$begin = (int)$start;
	$data= new query;
	$qry = $data->getData('posts','*','','id','desc',$start,$post_per_page);
    echo '<pre>';
print_r($qry);
//$result=$obj->insertData('user',$condition_arr);
//$result=$obj->deleteData('user',$condition_arr);
//$result=$obj->updateData('user',$condition_arr,'id',2);
?>