<?php
require('../Controllers/registration.php');

if(inscription($_POST['pseudo'], $_POST['password']) == 0) {

	header("refresh:6;url=login_page.php");
echo"<center><h3>Mystudio</h3></center><br><center>L'inscription est une réussite<br>
<img src='../Views/LOGO.jpg'width='200' height='150'></center><br>
<center>Nom : ".$_POST['pseudo']."<br>Mot de passe : ".$_POST['password']."<br>Compte : ".$_POST['type']."</center>";

} else {

echo"<img src='../Views/LOGO.jpg'width='100' height='90'>

<center><br><br><br><h1>S'inscrire sur Mystudio</h1></center><p><img src='My.PNG' width='400' height='340' class='cache'>
        <form class='form' action='' method='POST'>
        <input type='text' class='champ' id='pseudo' placeholder='Pseudo**' name='pseudo' value='".$_POST['pseudo']."'>
        <br/>
        <input type='text' class='champ' id='mdp' placeholder='Mot de passe**' name='password' value='".$_POST['password']."'>
        <br/>
        <table><tr><td>M'inscrire en tant que:<td><td><input type='radio' name='type' value='artiste'checked>artiste</td><br>
        <td><input type='radio' name='type' value='auditeur'>auditeur<br></td></tr></table>
        <input type='submit' name='send' value='Envoyer'class='verif'>
        </form><br>
	<p class='msg'>as tu bien completer le formulaire avant de cliquer</p>

        <a class='href' href='login_page.php'>Retour à la page de connexion</a>
        <br>";

if(inscription($_POST['pseudo'], $_POST['password']) == 1) {

} else if(inscription($_POST['pseudo'], $_POST['password']) == 2) {
	echo "<center>Les champs ont mal été rempli</center>";

} else if(inscription($_POST['pseudo'], $_POST['password']) == 3) {
	echo "<center>Votre Pseudo doit contenir un minimum de 5 caractere</center>";
} else if(inscription($_POST['pseudo'], $_POST['password']) == 4) {
	echo "<center>Votre Pseudo existe déja</center>";
}
}
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Mettre des commentaires</title>
    <title>Mystudio</title>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

       <style>
        .form {
        margin-left:42%;
        }
        .msg {
        margin-left:37%;
        }
        .href {
        margin-left:45%;
        }
        .cache {
        float: right;
        }
        .verif {
        margin-left:6%;
        padding:5px 25px;
        border: none;
        border-radius: 4px;
        color: black;
        background: grey;

        }
        input.champ {
        Border-Color: red;
        margin-top:12px;
        margin-left: 2%;
        line-height: 80px;
        height:45px;
        max-height: 25px;
        color : grey;
        }
        body {
        Background-Color: black;
        font-family: 'Josefin Sans',sans serif;
        font-size : 16px;
        color : white;
        }
     /*Barre de naviguation horizontale*/
      ul.horizontale
      {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: DimGrey;
        /*Reste statique, même quand on défile la page*/
        position: fixed;
        top: 0;
        width: 100%;
      }
      li.horizontale
      {
        float: left;
      }
      li a.horizontale
      {
        display: block;
        color: white;
        text-align: center;
        padding: 44px 46px;
        text-decoration: none;
      }
      li a.horizontale:hover
      {
        background-color: #4CAF50;
      }
      li a.horizontale1
      {
        display: block;
        color: white;
        text-align: center;
        padding: 44px 46px;
        text-decoration: none;
      }
      li a.horizontale1:hover
      {
        background-color: #4CAF50;
      }
      .active
      {
        width:120px;
      }
    input
      {
      }
        </style>

</head>
<body>
<!--Barre horizontale-->
<ul class="horizontale">
<li class="horizontale">
<a class="horizontale active" href="">MyStudio</a>
</li>
<li class="horizontale">
<img src='../Views/LOGO.jpg'width='100' height='90'>
</li>
<li style="float:right">
<a class="horizontale1" href="">MyStudio, C'est quoi ?<!--Image--></a>
</li>
</ul>

<script src="../../test/jquery.js"></script>
<script src="style.js"></script>

</head>
<body>
</body>
</html>
