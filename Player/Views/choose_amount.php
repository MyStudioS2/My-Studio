<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <body>
    <center><div class="container" style ="max-width: 250px; text-align:center">
      <form action="" method="GET" name="album_choice">
        Album :<br>
        <input type="text" style ="text-align:center" name="album" placeholder="Nom de l'album"><br>
        Nombre de pistes :<br>
        <input type="number" style ="width:35px " min ="1" max="30" step="1" name="track_count"value="1"><br>
        <input type="submit" name="confirmer" value="Confirmer">
      </form>
    </div></center>
  </body>
</html>
