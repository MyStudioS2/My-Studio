<!doctype>

<html>

<head>
    
    <title>MyStudio, admin</title>
    <meta content='http-equiv' content-type='text/html'/>
    <meta charset="UTF-8">
    <link type="text/CSS" rel="stylesheet" href="../Player/Views/CSS/stylesheet.css">
    <script type="text/javascript" src="../Controllers/Functions/JS/body_load.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    
</head>
<body style="width:98%">
    
    <table style="width:102.1%;height:95%;margin-left:-0.8%;margin-top:-10px">
        <tr style="width:100%;height:60px">
            <td><a href="../Player/index.php?page=administration">
            <img src="../Player/Views/icons/icons8-cat-profile-96.svg" alt="Kitten" width="50px" height ="50px" class ="kitten_icon"></a>
            <div class="hello"><span class="hello_text">Bonjour Admin [id]  Nous sommes le <?php echo $actual_date; ?>.</span> </div></td>

            <td style="text-align:left">
                <div id="show_hide" style="margin-top:-46px;margin-left:-85px;position:absolute">
                    <div class="search_form" style="position:relative;padding-right:15px">
                        <form action="../Player/index.php?page=administration" id="target"name="search_form" method="POST">
                        <input type="search" autofocus id="search" class = "search" results="5" required style="border-radius:2px;background:color=white"name="search" placeholder="Rechercher un artiste..."/>
                    </form>    
            </div>
        </div>
        <div id="show_hide" style="margin-top:-20px;position:absolute">
            <a href="../Player/index.php?page=administration">
            <img src="../Player/Views/icons/cogs-solid.svg" alt="Kitten" width="40px" height ="40px" style="margin-left:90px" class ="kitten_icon"></a>
            <a href="../Player/index.php?page=administration">
            <img src="../Player/Views/icons/address-book-solid.svg" alt="Kitten" width="35px" height ="35px" class ="kitten_icon"></a>
        </div>
    </td>
</tr>
<tr style="height:10%">
    <td class="body_zone"style="text-align:center;float:middle"><div class="corpse">Lorem Ipsum Dolor Sit Amet</div></td>
    <td class="options_zone" colspan ="2"rowspan="2"style="text-align:center;width:12%;height:auto">
        
        <form action="../Player/index.php?page=administration" name="options" method="POST">
        <ul ss-container style="padding:5px;margin-top:5px">
            <li><div class="options_choice">Vos options :</div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="add_style" value="Ajouter un Genre"></div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="add_lyrics" value="Ajouter des Paroles"></div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="add_artist" value="Nouvel Artiste"></div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="add_album" value="Nouvel Album"></div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="remove_album" value="Supprimer un Album"></div></li>
            <li><div class="button_choice"><input class = "button" type="submit" name="remove_artist" value="Supprimer un Artiste"></div></li>
                        <li><div class="button_choice"><input class = "button" type="submit" name="suppress_music" value="Supprimer une musique"></div></li>
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
                <td colspan="2"style="text-align:center">
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
</script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript" src="../Controllers/Functions/JS/img_preview.js"></script>
<script type="text/javascript" src="../Controllers/Functions/JS/search.js"></script>