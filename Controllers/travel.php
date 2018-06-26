<?php
	session_start();
	echo "<center><h1>Parcourir</h1><br>";
	require('./Models/scan.php');
	$data=search_style();
	for($i=0;$i<sizeof($data);$i++)
	{
		echo "<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='parcourir'>
		<input type='hidden' name='genre' value='".$data[$i]."'>
		<button>".$data[$i]."</button>
		</form>";
	}
	/*$data=search_music();
	for($i=0;$i<sizeof($data);$i++)
	{ 
		echo "<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='parcourir'>
		<input type='hidden' name='music' value='".$data[$i]."'>
		<button>".strtoupper($data[$i])."</button>
		</form>";
	}*/
	echo "</center>";
?>