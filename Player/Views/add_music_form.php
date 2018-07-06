<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="../Controllers/Functions/JS/img_preview.js"></script>
  <script type="text/javascript" src="../Controllers/Functions/JS/datepicker.js"></script>
  <script type="text/javascript" src="../Controllers/Functions/JS/body_load.js"></script>
  <style>
    body {
      font-family: 'Encode Sans Condensed', sans-serif;
      background-color :#C71585;
    }
  </style>
<body>
  <div class="container" style ="max-width: 250px">
      <form action="../Controllers/upload_music.php" method="Post" name="musics" enctype="multipart/form-data">
          <table><tr><th>Titre :</th><th>Featuring :</th><th>Fichier :</th></tr>
            <?php echo $tracks_amount;
            echo $album_name;
            echo '<br>';
            for($i=0; $i<$tracks_amount;$i++){
              echo "<tr><td>Titre : </br>
              <input type ='text' name ='title[]'><input type='hidden' name='album_name' value='".$album_name."'/></td><td>Featuring :<br>
              <input type ='text' name ='feat[]' value=' '></td><td><input type='file' style='vertical-align: middle; padding-top:20px' name ='audioFile[]'/></td></tr>";
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
  datepicker();
  body_load();
 </script>
