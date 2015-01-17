<?php

class Direktori {
    public $name;
    private $_dir = array();
    private $_files = array();
    
    public function AddDir($dir){
        $_dir[] = $dir;
    }
    
    public function AddFile($file) {
        $_files[] = $file;
    }
}

class File {
    public $name;
}

?>

