<?php
	function changename($POST)
	{
		session_start();
		require_once('../Models/search_pseudo.php');
		require_once('../Models/update.php');
		if(!isset($_POST['pseudo']))
		{
			return 1;
		}
		else if(empty($_POST['pseudo']))
		{
			return 2;
		}
		else if(strlen($_POST['pseudo']) <= 5)
		{
			return 3;
		}
		else
		{
			$donnees=search_pseudo($_POST['pseudo']);
			if(!empty($donnees['username']))
			{
				return 4;
			}
			else
			{
				update($_POST['pseudo'], $_SESSION['ID']);
				$_SESSION['ID']=$_GET['pseudo'];
				return 0;
			}
		}
		header("location: ../Views/changename_page2.php");
	}
?>