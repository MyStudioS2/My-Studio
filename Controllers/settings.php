<?php
	if(isset($_SESSION['type']))
	{
		if(isset($_GET['nb']))
		{
			switch($_GET['nb']):
				case 'un';
					include './Views/html_top.html';
					include './Views/navbar.php';
					include './Views/change_page.php';
					break;
				case 'deux';
					include './Views/html_top.html';
					include './Views/navbar.php';
					include './Views/change2_page.php';
					break;
				default:
					include './error/404/404.php';
				endswitch;
		}
		else
		{
			switch($_SESSION['type']):
				case 'artiste';
					include './Views/html_top.html';
					include './Views/navbar.php';
					include './Controllers/artist_settings.php';
					break;
				case 'auditeur';
					include './Views/html_top.html';
					include './Views/navbar.php';
					include './Controllers/auditor_settings.php';
					break;
				default:
					include './error/404/404.php';
			endswitch;
		}
	}
	else
	{
		include './Views/html_top.html';
		include './Views/navbar.php';
		include './Controllers/home.php';
	}
?>