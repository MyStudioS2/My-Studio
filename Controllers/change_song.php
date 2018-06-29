<?php
	session_start();
	if(isset($_GET['change'])==false)
	{
		header("location: ../index.php?page=settings");
	}
	else if($_GET['change']=='sup' || $_GET['change']=='mod')
	{
		if(isset($_GET['id'])==false)
		{
			header("location: ../index.php?page=settings");
		}
		else if($_GET['change']=='sup')
		{
			
		}
		else
		{

		}
	}
	else if($_GET['change']=='add')
	{
		
	}
?>