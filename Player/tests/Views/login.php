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
            Bonjour visiteur!
        </div>

        <div class="col-xs-6">            
            <a href="../index.php?page=Login" title="Connexion">
                <img src="../Views/icons/login-password1.png" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../test_bootstrap.php" title="Inscription">
                <img src="../Views/icons/registration.png" alt="Kitten" width="25px" height ="25px">
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
        <div class="col-xs-6" style="max-height:400px;width:55%">
            <div class="container" style="width:350px;max-height:350px;overflow-y:hidden;overflow-x:hidden">
            <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
        <p style="color:#D38312"><strong>Connexion</strong></p>
        <div class="col-auto" style="margin-left:-15px">
          <label class="sr-only" for="inlineFormInputGroup">Email</label>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"style="width:175px" placeholder="Username">
          </div>
        </div>
      <label class="sr-only" for="inlineFormInput" style="margin-top:10px">Mot de Passe</label>
      <input type="password" class="form-control mb-2" id="inlineFormInput" style="width:212px" placeholder="Jane Doe">
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Se souvenir de moi
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2" required style="background:#333333;margin-left:-10px">Submit</button>
    </div>
  </div>
</form>
            </div>
        </div>
            
        <div class="col-xs-6" style="border:0.5px solid #333333;border-radius:4px;width:400px;margin-right:-5px">
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