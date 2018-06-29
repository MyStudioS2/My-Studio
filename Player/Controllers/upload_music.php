<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <body>
<div class="container" style ="max-width: 150px">
    <form action="../Controllers/add_music.php" method="post" enctype="multipart/form-data">
        Titre : </br>
        <input type ="text" name ="title"><br>
        Featuring :<br>
        <input type ="text" name ="feat">
        <br>
        Album :<br>
        <input type ="text" name ="album">
        <br>
        Date :
        <input type="text" id="datepicker" ma="" name="release_date">
        <input type="file" name ="audioFile"/><br>
        <center><input type="submit" name = "upload" value = "upload"></center>
    </form>
</div>
<audio controls>
<?php if(isset($row)){
  for($i=0;$i<count($row);$i++){
    if(!empty($row[$i]['music_path'])){
      echo "<source src='./{$row[$i]['music_path']}' type='audio/mpeg'>";
    }
  }
}?>
</audio>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({maxDate: "-1"});
   } );
 </script>
