<?php
class File {
    public function write($data){
        $file = fopen('myfile.txt','w');
        if(fwrite($file,$data)){
            fclose($file);
            return true;
        }
        else{
             return false;
        }
    }
    public function read($fname){
        $file = fopen($fname, 'r');
        $data = fread($file, filesize($fname));
        fclose($file);
            return $data;
    }
    public function delete($fname){
        if(unlink($fname)){
            return true;
        }
        else{
            return false;
        }
    }
} 
?>