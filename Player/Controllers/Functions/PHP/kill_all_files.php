<?php
    function kill_all_files($dir){
        /* Set root dir of an artist */
        $check_dir = $dir.'/*';
        $i=0;
        foreach(glob($check_dir) as $filename) {
            /* Gathering albums dirs */
            $new_dir[$i] = $filename.'/*';
            $rm_dir[] = $filename;
            foreach(glob($new_dir[$i]) as $files) {
                /* Suppress each file in a dir */
                unlink($files);
            }
            $i++;
        }
        unset($new_dir,$i);
        if(isset($rm_dir)){
            $i = count($rm_dir);
            while($i > 0){
                if(is_dir($rm_dir[$i])){
                    /* Suppress each album directory */
                    rmdir($rm_dir[$i]);
                }
                $i -= 1;
            }
        }
        if(is_dir($dir)){
            /*  Suppress artist directory */
            rmdir($dir);
        }
    }
?>