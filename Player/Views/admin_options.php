<!doctype>

<html>
    
    <head>
        
        <title>MyStudio, admin</title>
        <meta content='http-equiv' content-type='text/html'/>
        <meta charset="UTF-8">
        <link type="text/CSS" rel="stylesheet" href="../Player/Views/CSS/stylesheet.css">
        <script type="text/javascript" src="../Controllers/Functions/JS/startTime().js"></script>
    <script type="text/javascript" src="../Controllers/Functions/JS/body_load.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    
</head>
<body style="width:98%" onLoad="startTime()">
    
    <table style="width:102.1%;height:95%;margin-left:-0.8%;margin-top:-10px">
            <tr style="width:100%;height:60px">
                <td>
                    <a href="../Player/index.php?page=administration" title="Retour à l'accueil"style="margin-top:-2px">
                    <img src="../Player/Views/icons/icons8-cat-profile-96.svg" alt="Kitten" width="50px" height ="50px" class ="kitten_icon" ></a>
                        <div class="hello"><span class="hello_text">Bonjour Maître! Dobby vous salue ! Nous sommes le <?php echo $actual_date; ?>.
                            <br>Il est <span id="txt" style="color:#a2ab58"></span>. Amusez-vous bien !</span> 
                        </div>
                </td>

                <td style="text-align:left">
                    <div id="show_hide" style="margin-top:-46px;margin-left:-85px;position:absolute">
                        <div class="search_form" style="position:relative;padding-right:25px">
                            <form action="../Player/index.php?page=administration" class="search-form" id="target"name="search_form" method="POST">
                                <input type="search" autofocus id="search_in" class = "search" optional results="5" size="40"style="margin-left:-87px;margin-top:40px;width:250px;height:25px"name="search"title="Appuyez sur Entrée pour lancer la requête" placeholder="Rechercher un artiste, un album..."/>
                            </form>    
                    </div>
                </div>
                <div id="show_hide" style="margin-top:-20px;position:absolute">
                    <a href="../Player/index.php?page=administration">
                        <img src="../Player/Views/icons/cogs-solid.svg" alt="Kitten" width="40px" height ="40px" style="margin-left:90px" class ="kitten_icon">
                    </a>
                    <a href="../Player/index.php?page=administration" >
                        <img src="../Player/Views/icons/address-book-solid.svg" alt="Kitten" width="35px" height ="35px" class ="kitten_icon">
                    </a>
                </div>
            </td>
        </tr>

        <tr style="height:10%">
            <td class="body_zone"style="text-align:center;float:middle">
                <div class="corpse" id="corpse">
                    Lorem Ipsum Dolor Sit Amet
                </div>
            </td>
            <td class="options_zone" colspan ="2"rowspan="2"style="text-align:center;width:11%;height:auto">
                <form action="../Player/index.php?page=administration" name="options" method="POST">
                    <ul ss-container style="padding:0px;margin-top:25px;background-color:#3C3B3F;height:310px;width:170px;border-radius:6px;margin-right:15px" class="ulol">
                        <div class="options_choice"style="margin-top:5px">
                                <li>
                                    <div class="option_choice">
                                        <br>
                                            <span class="options">
                                                Vos options :
                                            </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="option_choice">
                                        <input class = "button1" type="submit" name="add_style" value="Ajouter un Genre">
                                    </div>
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
        </td>
    </tr>
    <tr>
        <td style="text-align:center">Petites infos
        </td>
    </tr>
        <tfoot class="footer_zone" style="width:101.45%;height:10%;margin-left:-15px">
            <tr>
                <td colspan="2"style="text-align:center;margin-top:-10px">
                    Footer il semble que sid ait compris bootstrap et soit capable d'appliquer le concept a plein plein de choses
                </td>
            </tr>
        </tfoot>
    </table>   
</body>

</html>

<script>
    search();
    body_load();
        function startTime() {
            var today = new Date();
            var h = today.getHours(); /* Recupère l'heure */
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            h = checkTime(h);
            s = checkTime(s);
            document.getElementById('txt').innerHTML =
            h + ":" + m ;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // Affiche une heure à deux chiffres en cas d'heure inférieure à 10 mamène
            return i;
        }
    
</script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Controllers/Functions/JS/search.js"></script>