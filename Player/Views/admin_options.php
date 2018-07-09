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
<body style="width:98%;overflow-x:hidden" onload="startTime(),datepicker()">
    
    <table style="width:102.1%;height:95%;margin-left:-0.8%;margin-top:-10px">
            <tr style="width:100%;height:60px">
                <td>
                    <a href="../Player/index.php?page=administration" title="Retour à l'accueil"style="margin-top:-2px">
                    <img src="../Player/Views/icons/icons8-cat-profile-96.svg" alt="Kitten" width="50px" height ="50px" class ="kitten_icon" ></a>
                        <div class="hello" id="hello"><span class="hello_text" id="hello_text">Bonjour Utilisateur! Nous sommes le <?php echo $actual_date; ?>.
                            <br>Il est <span id="txt" on load="startTime()"style="color:#a2ab58"></span>. Amusez-vous bien !</span> 
                        </div>
                </td>

                <td style="text-align:left">
                    <div id="show_hide" style="margin-top:-46px;margin-left:-85px;position:absolute">
                        <div class="search_form" style="position:relative;padding-right:25px">
                            <form action="../Player/index.php?page=administration" class="search-form" id="target"name="search_form" method="POST">
                                <input type="search" autofocus id="search_in" class = "search" optional results="5" size="40"style="margin-left:-95px;margin-top:40px;width:250px;height:25px"name="search"title="Appuyez sur Entrée pour lancer la requête" placeholder="Rechercher un artiste, un album..."/>
                            </form>    
                    </div>
                </div>
                <div id="show_hide" style="margin-top:-20px;position:absolute">
                    <a href="../Player/index.php?page=administration">
                        <img src="../Player/Views/icons/cogs-solid.svg" alt="Kitten" width="40px" height ="40px" style="margin-left:90px" class ="kitten_icon"></a>
                    <a href="../Player/index.php?page=administration" >
                        <img src="../Player/Views/icons/address-book-solid.svg" alt="Kitten" width="35px" height ="35px" class ="kitten_icon">
                    </a>
                </div>
            </td>
        </tr>

        <tr style="height:10%">
            <td class="body_zone" colspan="2"style="margin-top:10%;text-align:center;float:middle;height:auto">
                <div class="cop" style="width:380px;margin-left:150px;margin-right:10%;margin-top:15px;background-color:#780206;padding-right:1px;float:center;border-radius:6px;overflow-x:hidden">
                    <div style="border-color:#decba4">        
                        <br><span title="Liste des évènements, vous pouvez scroll pour en récupèrer d'avantage" style="float:center;margin-top:10px;text-align:justify;color:#FFFFF5">
                        Évènements à venir, la liste continue vers le bas :</span>
                        <br>
                        <br>
</div>
                    <div class ="parent" style="float:center;margin-left:30%display:block;color:#333333;background-color:#FFFFF5;border-radius:3px;text-align:center;height:100%;width:395px;padding-right:17px;overflow-hidden;margin-right:-10px">
                        <div class='child' style='float:center;width:465px; margin-top:0; width:100%; height:100px;overflow-y:scroll;box-sizing:content-box;padding-right:17px'>
                                <span class="events" style="text-align:indent;vertical-align:super">Concert de Lomepal à Paris</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                                <span class="events" style="text-align:indent">Concert de Sid dans toute la France</span><br>
                        </div>
                    </div>
                </div>
            </td>
            <td class="options_zone" rowspan="2"style="text-align:center;width:11%;margin:left:10px;height:auto">
                <form action="../Player/index.php?page=administration" name="options" method="POST">
                    <ul ss-container style="padding:0px;margin-top:-275px;background-color:#3C3B3F;height:310px;width:170px;border-radius:6px;margin-right:15px" class="ulol">
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
        <td><div class="container" style ="float:left; margin-left:30%; margin-top:10px ; display: inline;max-width: 350px; text-align:center">
                <br>
            <form action="../Controllers/upload_music.php" style="margin-top:50px" method="POST" name="album_choice" enctype="multipart/form-data">
                Titre de l'album :<br>
                <input type="text" class="album_form" style ="text-align:center" required name="album" placeholder="Nom de l'album"><br>
                Nombre de pistes :<br>
                <input type="number" class="album_form"style ="width:50px; text-align:center " required min ="1" max="30" step="1" name="track_count" placeholder="0"><br>
                Date (jj/mm/aaaa) :<br>
                <input type="date" class="album_form" onclick="datepicker()" id="datepicker" required style="width:70px" name="release_date"><br>
                <div style="display:inline-block; text-align:center">
                Cover : <br>
                <input type='file' class="album_form_file" name ='coverFile' optional onchange="readURL(this);" /><br>
                <img id="blah" style="max-width:100px; max-height:100px;vertical-align:middle; position:relative;opacity: 0.7;filter: alpha(opacity=50)" alt="Prévisualisation" />
                </div><br>
                <input type="submit" class="album_form" name="confirmer" value="Confirmer">
            </form>
            </div>
 </td>
        <td></td>
    </tr>
    <tr>
        <td style="text-align:center;margin-top:-55px">
        
            
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
    <div style="position:fixed;
  bottom:0;
  z-index:50000;background:#3f4c6b;height:50px;width:100%;color:#decba4;margin-left:-10px"><div class="player" style="margin-left:50px"> dskqhd s doisgd uosqgd soqgduosg dsq igdsqiodg sqogds uoqg<br>
player</div></d
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