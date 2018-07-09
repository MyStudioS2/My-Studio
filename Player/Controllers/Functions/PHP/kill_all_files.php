<?php
    function kill_all_files($dir){
        /* Set root dir of an artist */
        $check_dir = $dir.'/*';
        foreach(glob($check_dir) as $filename) {
            /* Gathering albums dirs */
            $new_dir[] = $filename.'/*';
            $rm_dir[] = $filename;
            foreach(glob($new_dir[$i]) as $files) {
                /* Kill each file in a dir */
                unlink($files);
            }
        }
        if(isset($rm_dir)){
            $i = count($rm_dir);
            while($i > 0){
                if(is_dir($rm_dir[$i])){
                    /* Kills each album directory */
                    rmdir($rm_dir[$i]);
                }
                $i -= 1;
            }
        }
        if(is_dir($dir)){
            /*  Kills artist directory */
            rmdir($dir);
            unset($new_dir,$i,$check_dir,$rm_dir);
        }
        return "Mission accomplished, user have been erased from database";
    }
?>