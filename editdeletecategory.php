<?php
include('inc_session.php');
include('functions.php');
if (isset($_POST['update']))
 {
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];
	$ustatus=$_POST['ustatus'];
	updatecategory($uid,$uname,$ustatus);
}
if(isset($_GET['id'])&& isset($_GET['action']))
{
	//do something
	$id=$_GET['id'];
	$action=$_GET['action'];
	if($action=='edit')
	{
		editcategory($id);

	}
	elseif($action=='delete')
	{
		$res=deletecategory($id);
		if($res==1)
		{
			header("Location:allcategory.php?message='Delete Success'");
		}
		else
		{
			header("Location:allcategory.php?message='Delete Fial'");
		}
		

	}
	else{
		header('location:allcategory.php');
	}
}
else{
	header('location:allcategory.php');
}
?>


