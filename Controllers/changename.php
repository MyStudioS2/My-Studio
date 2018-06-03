<?php
	session_start();
	$_SESSION['ID']="Clotilde";
	function changename($POST)
	{
		require_once('../Models/search_pseudo.php');
		require_once('../Models/update.php');
	
		if(!isset($_POST['pseudo2']))
		{
			return 1;
		}
		else if(empty($_POST['pseudo2']))
		{
			return 2;
		}
		else if(strlen($_POST['pseudo2']) <= 5)
		{
			return 3;
		}
		else
		{
			$donnees=search_pseudo($_POST['pseudo2']);
			if(!empty($donnees['username']))
			{
				return 4;
			}
			else
			{
				$_POST['pseudo']=$_SESSION['pseudo2'];
				update($_POST['pseudo2'], $_SESSION['ID']);
				return 0;
			}
		}
		header("location: changename_page.php");
	}

?>