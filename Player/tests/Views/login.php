<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/startTime.js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/datepicker.js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/body_load.js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/javastreets.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="../Views/CSS/stylesheet.css" type="text/css" rel="stylesheet">
</head>


<body onload="startTime();datepicker()">

    
    <div class="row navbar">
        <div class="col-xs-2">
            <a href="../Views/test_bootstrap.php" title="Retour à l'accueil">
                <img src="../Views/icons/icons8-cat-profile-96.svg" alt="Kitten" style="margin-left:-25px; margin-top:-2px;margin-bottom:2px" width="30px" height ="30px" class ="kitten_icon" >
            </a>
        
            <span style="float:right;margin-top:3px;color:#decba4" >
                    <?php 
                        include('../Models/db_connect.php');
                        include('../Models/actual_date.php');
                        $actual_date = get_date($db);
                        echo $actual_date; 
                    ?>
                <br>
                    <span id="txt" onload="startTime()"style="color:#a2ab58">
                    </span>
            </span>
        </div>
        
        <div class="col-xs-6" style="color:#FFFFFF" id="hide">
            <a href="../Player/index.php?page=administration" title="Rendez-Vous">
                <img src="../Views/icons/icons8-schedule-64.png" alt="Kitten" width="30px" height ="30px" title="Rendez-vous">
            </a>
            <a href="../Player/index.php?page=administration">
                <img src="../Views/icons/address-book-solid.svg" alt="Kitten" width="25px" height ="25px" title="Suivi">
            </a>
            <a href="../Player/index.php?page=administration">
                <img src="../Views/icons/address-book-solid.svg" alt="Kitten" width="25px" height ="25px">
            </a>
        </div>

        <div class="col-xs-6">
            <form action="../test_bootstrap.php" class="search_form" id="target" name="search_form" method="POST" style="margin-top:10px;margin-left:0px;margin-right:5px;float:left">
                    <input type="search" autofocus id="search_in" class ="search" optional result="5" size="40"name="search"title="Appuyez sur Entrée pour lancer la requête" placeholder="Rechercher un animal..."/>
            </form>
            <a href="../test_bootstrap.php" title="Messagerie">
                <img src="../Views/icons/address-book-solid.svg" alt="Kitten" width="25px" height ="25px" >
            </a>
            <a href="../test_bootstrap.php" title="Paramètres">
                <img src="../Views/icons/cogs-solid.svg" alt="Kitten" width="30px" height ="30px">
            </a>
            
            <a href="../test_bootstrap.php" title="Déconnexion">
                <img src="../Views/icons/sign-out-alt-solid.svg" alt="Kitten" width="25px" height ="25px">
            </a>
        </div>

        
    </div>

    <div class="row">

        <div class="col-xs-8">
            
        </div>
        <div class="col-xs-4">
        
        </div>
    </div>
    <div class="row">
        <div class="col-xs-4" style="max-height:400px">
            <div class="container" style="width:350px;max-height:350px;overflow-y:hidden;overflow-x:hidden">
                <form role="form" class="form container-fluid border border-dark rounded" action="index.php?page=Inscription" method="POST" style="overflow-y:scroll;overflow-x:hidden;height:350px" name="register_form" >
                        
                    <fieldset class="well" >
                        <h4 style="position:relative;padding:8px;left:25%">Inscription</h4>
                        <div class="form-group">
                            <label class="label" for="name" style='margin-top:5px'>Email</label>
                            <input type="email" class="form-control space-bottom" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required value="" />
                        
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Prénom</label>
                            <input type="text" class="form-control space-bottom" name="first_name" placeholder="Prénom" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Nom</label>
                            <input type="text" class="form-control space-bottom" name="last_name" placeholder="Nom" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Adresse</label>
                            <input type="text" class="form-control space-bottom" name="address" placeholder="Adresse" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Code Postal</label>
                            <input type="text" class="form-control space-bottom" name="postal_code" placeholder="Code Postal" pattern=".{2,5}" title="Entrez un code postal valide" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Ville</label>
                            <input type="text" class="form-control space-bottom" name="city" placeholder="Ville" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Téléphone</label>
                            <input type="tel" class="form-control space-bottom" name="phone_number" placeholder="Numéro de téléphone" minlength="10" maxlength="12" pattern="^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$" title="ENtrez un numéro de téléphone valide" required value="" />
                        </div>
                        <div class="form-group">
                            <label class="label"for="name">Mot de passe</label>
                            <input type="password" class="form-control space-bottom" name="password" placeholder="Mot de passe" pattern=".{6,}" title="Au moins 6 charactères" required/>
                            
                        </div>
                        <div class="form-group">
                            <label class="label" for="name">Confirmation mot de passe</label>
                            <input type="password" class="form-control space-bottom" name="cpassword" placeholder="Mot de passe" required/>
                            
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block btn-primary space-bottom" name="register" value="Register" />
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
            
        <div class="col-xs-8" style="border:0.5px solid #333333;border-radius:4px">
            <div class="container" style="width:400px;max-height:350px;overflow-y:scroll;overflow-x:hidden;color:#decba4">
                <p class="first_sentence">Bienvenue sur le site de Heal mon Bichon</p>
                <p class="first_sentence">Votre clinique vétérinaire de référence à Ivry-sur-Seine</p>

                <p>Le cabinet est ouvert tous les jours de la semaine, de 8h à 19h30. Nocturne le premier dimanche de chaque mois.</p>
                <p>Nous sommes situés au 74, avenue Maurice Thorez à Ivry-sur-Seine</p>
                <p> Vous pouvez facilement accèder à notre clinique via le métro ligne 7 (arrêt Pierre et Marie Curie).</p>
                <p>Des correspondances vers le tramway sont disponibles aux stations :</p>
                    <ul>
                        <li> Porte d'Italie</li> 
                        <li> Porte de Choisy</li>
                    </ul> 
                <P>Des métros et RER (ligne 1/7/14 RER A/B/C/D) sont accessibles sur l'ensemble de la ligne 7.</p>
        <div id="map" class="map"  name="map_canvas"></div>
        </div>
</div>
    </div>
</body>
<script>
    search();
    body_load();
    datepicker();
    startTime();
    initMap();
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8SryylEF5v_C1_pTMszfi0wofkCpxbrE&callback=initMap">
    </script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/search.js"></script>
</html>