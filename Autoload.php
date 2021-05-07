<?php

class Autoload
{

    public function loadClass($className) {
        
        $fileName =  ROOT_DIR . DS . $className . ".php";
        if (file_exists($fileName)) {
            include $fileName;
        }        
    }

}