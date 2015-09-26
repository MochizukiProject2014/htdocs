<?php

if(isset($_POST['disp'])==true)
{
	if(isset($_POST['member_id'])==false)
	{
		header('Location:member_ng.php');
		exit();
	}
	$member_id=$_POST['member_id'];
	header('Location:member_disp.php?member_id='.$member_id);
	exit();
}

if(isset($_POST['add'])==true)
{
	header('Location:member_add.php');
	exit();
}

if(isset($_POST['edit'])==true)
{
	if(isset($_POST['member_id'])==false)
	{
		header('Location:member_ng.php');
		exit();
	}
	$member_id=$_POST['member_id'];
	header('Location:member_edit.php?member_id='.$member_id);
	exit();
}

if(isset($_POST['delete'])==true)
{
	if(isset($_POST['member_id'])==false)
	{
		header('Location:member_ng.php');
		exit();
	}
	$member_id=$_POST['member_id'];
	header('Location:member_delete.php?member_id='.$member_id);
	exit();
}


?>