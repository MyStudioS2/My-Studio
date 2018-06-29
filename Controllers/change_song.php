<?php
	session_start();
	if(isset($_POST['change'])==false)
	{
		header("location: ../index.php?page=settings");
	}
	else
	{
		if($_POST['change']=='sup')
		{
			if(isset($_POST['id'])==false)
			{
				header("location: ../index.php?page=settings");
			}
			else
			{
				
			}
		}
		else if($_POST['change']=='add')
		{
				if($_POST['table']=='song')
				{
					# code...
				}
				else if($_POST['table']=='album')
				{
					# code...
				}
		}
	}
?>