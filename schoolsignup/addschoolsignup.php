<?php


include($_SERVER['DOCUMENT_ROOT'].'\wp-load.php' );


$model=new schoolsignup_model();
$model->name=$_REQUEST['name'];
$model->phone=$_REQUEST['phone'];
$model->student_name= isset( $_REQUEST['student_name'])? $_REQUEST['student_name']:'';
$model->student_age=$_REQUEST['student_age'];
$model->school=$_REQUEST['school'];

$model->school= '易尔小学部';


function test()
{
	echo "zjf test api";
	exit; 
}
//exit;

if(!$model->name||!$model->phone)
{
	echo "请输入姓名和手机号！";
	exit;
}

if(!$model->student_age)
{
	echo "请输入孩子的年龄！";
	exit;
}

if(!$model->school)
{
	echo "没有学校信息";
	exit;
}

	
$post = array(

'post_title' => $model->name,

'post_content' => serialize($model),
	
'post_status' => 'wait_deal',
'post_name'=> $model->phone,
'post_excerpt'=> '易尔小学部',
'post_author' => $model->name,
'post_category' => array(8,39),
'post_type'=>'schoolsignup'

);

 //var_dump($post);

//插入数据�?
if((wp_insert_post( $post))){
	echo(1);
	exit;
}
echo "失败";
?>