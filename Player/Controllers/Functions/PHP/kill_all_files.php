<?php
    $dir = '../../../data/mystudio/musics/Joey Bad4$$';
    function kill_all_files($dir){
        $check_dir = $dir.'/*';
        $i=0;
        foreach(glob($check_dir) as $filename) {
            $new_dir[$i] = $filename.'/*';
            $rm_dir[] = $filename;
            foreach(glob($new_dir[$i]) as $files) {
                unlink($files);
            }
            $i++;
            unset($new_dir);
        }
        if(isset($rm_dir)){
        $i = count($rm_dir) - 1;
            while($i >= 0){
                if(is_dir($rm_dir[$i])){
                    rmdir($rm_dir[$i]);
                }
                $i -= 1;
            }
        }
        if(is_dir($dir)){
            rmdir($dir);
        }
    }
    kill_all_files($dir);
?>