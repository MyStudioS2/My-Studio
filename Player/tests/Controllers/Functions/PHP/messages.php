<?php
    function alert($string) {
        echo "<div class='alert alert-danger alert-dismissible'style='background:#f83600;text-align:center;margin-left:360px;height:80px;font-size:13px;width:210px;color:#FFFFFF;border:0.5px solid #decba4'>"
        .$string."</div>";
    }
    function success($string) {
        echo "<div class='alert alert-success alert-dismissible' style='margin-left:370px;width:250px;height:100px;color:#FFFFFF'>".$string."</div>";
    }
?>