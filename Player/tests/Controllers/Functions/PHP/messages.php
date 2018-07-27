<?php
    function alert($string) {
        echo "<div class='alert alert-danger alert-dismissible'style='background:#f83600;margin-left:370px;width:250px;color:#decba4;border:0.5px solid #decba4'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".$string."</div>";
    }
    function success($string) {
        echo "<div class='alert alert-success alert-dismissible' style='background:#7b920a;margin-left:5370px;width:250px;color:#decba4'>
        <a href='#' class='close' data-dismiss='alert'style='color:#decba4' aria-label='close'>&times;</a>".$string."</div>";
    }
?>