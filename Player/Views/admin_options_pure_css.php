<!doctype>

<html>
    
    <head>
        
        <title>MyStudio, admin</title>
        <meta content='http-equiv' content-type='text/html'/>
        <meta charset="UTF-8">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link type="text/CSS" rel="stylesheet" href="../Player/Views/CSS/stylesheet.css">
        <script type="text/javascript" src="../Player/Controllers/Functions/JS/startTime.js"></script>
        <script type="text/javascript" src="../Player/Controllers/Functions/JS/datepicker.js"></script>
        <script type="text/javascript" src="../Player/Controllers/Functions/JS/body_load.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
        <script src="scrollBar.js"></script>
        
</head>
<body onload="startTime();datepicker()" style="margin-left:-2px;height:100%">
    
    <table class="mystudio_table">
        <thead style="max-height:72px;position:fixed;z-index:2">
          <div class="fix_it" style="position:fixed">
        <!-- First Row -->
        <tr class="row_one">
        <!-- First division -->
            <th class="first_row">
                <div class="first_icon">
                    <a class="nav_icons" href="../Player/index.php?page=administration" title="Retour à l'accueil">
                        <img src="../Player/Views/icons/icons8-cat-profile-96.svg" alt="Kitten" width="50px" height ="50px" class ="kitten_icon" >
                    </a>
                </div>
                <div class="hello" id="hello">
                    <span class="hello_text" id="hello_text">
                        Bonjour Utilisateur! Nous sommes le <?php echo $actual_date; ?>.<br>
                            Il est 
                                <span id="txt" on load="startTime()"style="color:#a2ab58">
                                </span>
                            . Amusez-vous bien sur Mystudio!
                    </span> 
                </div>
</th>

        <!-- Second division -->
                
                    <th class="first_row1">
                    <div class="show_hide">
                        <form action="../Player/index.php?page=administration" class="search_form" id="target" name="search_form" method="POST" style="margin-top:10px;margin-left:0px">
                            <input type="search" autofocus id="search_in" class ="search" optional result="5" size="40"name="search"title="Appuyez sur Entrée pour lancer la requête" placeholder="Rechercher un artiste, un album..."/>
                        </form>    
                        <div class="boum">
                            <a href="../Player/index.php?page=administration">
                            <img src="../Player/Views/icons/cogs-solid.svg" alt="Kitten" width="40px" height ="40px">
                        </a>
                        </div>
                        <div class="boum-2">
                        <a href="../Player/index.php?page=administration">
                        <img src="../Player/Views/icons/address-book-solid.svg" alt="Kitten" width="35px" height ="35px">
                    </a>
                </div>
            </div>
</th>
</div>
        </tr>
    
</thead></table>
<div style="position:relative;height:500px;width:75%;top:80;left:10;z-index:1">
<div>dsqjdh djskq gdd squgd dsuiqg d<br></div>
<div>dsqjdh djskq gdd squgd dsuiqg d<br></div>
<div style="position:absolute;top:15">
<div style="position:absolute;left:5;top:10; width:200px">Date (jj/mm/aaaa) :</div></div><br>
<form action="../Player/index.php?page=administration" name="options" method="POST">
                    <ul ss-container class="ulol">
                        <div class="options_choice"style="margin-top:5px">
                                <li>
                                    <div class="option_choice1">
                                        <br>
                                            <span class="options">
                                                Vos options:
                                            </span>
                                    </div>
                                </li>
                                <li>
                                    
                                        <input class = "button1" style="right:40;width:140px;" type="submit" name="add_style" value="Ajouter un Genre">
                                    
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button2" type="submit" name="add_lyrics" value="Ajouter des Paroles">
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button1" type="submit" name="add_album" value="Nouvel Album">
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button2" type="submit" name="add_artist" value="Nouvel Artiste">
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button1" type="submit" name="remove_album" value="Supprimer un Album">
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button2" type="submit" name="remove_artist" value="Supprimer un Artiste">
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button1" type="submit" name="suppress_music" value="Supprimer une musique">
                                    </div>
                            </li>
                    </div>
                </ul>
</form>
       
    
</body>

</html>

<script>
    search();
    body_load();
    datepicker();
    startTime();
</script>

<script type="text/javascript" src="../Player/Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Player/Controllers/Functions/JS/search.js"></script>