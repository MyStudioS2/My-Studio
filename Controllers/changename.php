<?php
	function changename($truc)
	{
		session_start();
		require_once('../Models/search_pseudo.php');
		require_once('../Models/update.php');
		if(!isset($truc))
		{
			return 1;
		}
		else if(empty($truc))
		{
			return 2;
		}
		else if(strlen($truc) <= 5)
		{
			return 3;
		}
		else
		{
			$donnees=search_pseudo($truc);
			if(!empty($donnees['username']))
			{
				return 4;
			}
			else
			{
				update($truc, $_SESSION['ID']);
				$_SESSION['ID']=$truc;
				return 0;
			}
		}
	}
?>