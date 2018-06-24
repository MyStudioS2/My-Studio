<?php
	function search_pw($data)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->prepare('SELECT* FROM USERS WHERE id_user=:id');
		$reponse->execute(['id'=>$data['id']]);
		$a=0;
		while($donnees=$reponse->fetch())
	    {
	    	if($donnees['pw']==$data['pw'])
	    	{
	    		$a=1;
	    	}
		}
		return $a;	
	}
	function search_pseudo($data)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$reponse=$bdd->query('SELECT* FROM USERS');
		$a=0;
		while($donnees=$reponse->fetch()) 
	    {
	    	if($donnees['username']==$data['pseudo'])
	    	{
	    		$a=1;
	    	}
		}
		return $a;
	}
	function update($data)
	{
		$bdd=new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		//problème
		$reponse=$bdd->prepare('UPDATE USERS 
								SET username=:pseudo 
								WHERE id_user=:id');
		$reponse->execute(array(
							'pseudo'=>$data['pseudo'], 
							'id'=>$_SESSION['id']));
	}
?>
