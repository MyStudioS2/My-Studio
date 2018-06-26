<?php
function list_artists($art) {
        echo"<div class='artists'>
        <table class='' border = 1 solid black>
        <tr><td>Artiste</td><td>Discothèque</td><td>En savoir plus</td></tr>";
        for($i=0;$i<count($art);$i++) {
                if($i % 2 == 0) {
                        echo "<tr id='pair'>";
                }else{
                        echo "<tr id='impair'>";
                }
		echo "<td>".$art[$i]."></td><td><a href=''>Dicographie</a></td><td><a href=''>En savoir plus</a></td></tr>";
        }
        echo"</table></div>";
}

function list_albums($alb) {
        echo"<div class='albums'>
        <table class='' border = 1 solid black>
        <tr><td>Pochette</td><td>Albums</td><td>Artiste</td><td>Date de sortie</td></tr>";
        for($i=0;$i<count($alb);$i++) {
                if($i % 2 == 0) {
                        echo "<tr id='pair'>";
                }else{
                        echo "<tr id='impair'>";
                }
			echo "<td><img width='20%' height='40%' src='".$alb[$i][0]."'></td><td><a href=''>".$alb[$i][1]."</a></td><td><a href=''>".$alb[$i][2]."</a></td><td>".$alb[$i][3]."</td></tr>";
	}
        echo"</table></div>";
}
?>
