1 lines (17 sloc)  476 Bytes
 <?php

define('ROOT_DIR', dirname(__DIR__));
define('DS', DIRECTORY_SEPARATOR);

class Autoload
{

    public function loadClass($className) {
        
        $fileName =  ROOT_DIR . DS . 'task2' . DS . $className . ".php";
        if (file_exists($fileName)) {
            include $fileName;
        }        
    }

}