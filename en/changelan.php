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
	global $lan_yearn;
	$lan_yearn ='en';
	echo $lan_yearn;
	exit; 
}


?>