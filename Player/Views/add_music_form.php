<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <body>
<div class="container" style ="max-width: 250px">
    <form action="../Controllers/upload_music.php" method="post" enctype="multipart/form-data">
        <table><tr><th>Titre :</th><th>Featuring :</th><th>Fichier :</th></tr>
          <?php echo $tracks_amount;
          echo $album_name;
          echo '<br>';
          for($i=0; $i<$tracks_amount;$i++){
            echo "<tr><td>Titre : </br>
            <input type ='text' name ='title{$i}'></td><td>Featuring :<br>
            <input type ='text' name ='feat{$i}'></td><td><input type='file' name ='audioFile{$i}'/></td></tr>";
          }
          ?>
        </table>
        <center><input type="submit" name = "upload" value = "upload"></center>
    </form>
</div>
<audio controls>
<?php if(isset($row)){
  for($i=0;$i<count($row);$i++){
    if(!empty($row[$i]['music_path'])){
      echo "<source src='../{$row[$i]['music_path']}' type='audio/mpeg'>";
    }
  }
}?>
</audio>
<script>
  $( function() {
    $( "#datepicker" ).datepicker({maxDate: "-1"});
   } );
 </script>
