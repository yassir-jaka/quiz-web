<?php
// Load my root class
require_once(__ROOT_DIR . '/classes/MyObject.class.php');
class AutoLoader extends MyObject {
public function __construct() {
spl_autoload_register(array($this, 'load'));
}
// This method will be automatically executed by PHP whenever it encounters
// an unknown class name in the source code
private function load($className) {
$repo = array ('/classes/','/model/','/controller/','/view/');
$fileToLoad = null;
$i =0;
do{
    $fileToLoad =__ROOT_DIR . $repo[$i] . ucfirst($className . '.class.php');
    $i++;
}while(! is_readable($fileToLoad) && $i< count($repo));
if(! is_readable($fileToLoad)){
    throw new Exception('Unknown Class  '. $className);
}
require_once($fileToLoad);
if (strlen(strstr($fileToLoad,'/model/'))>0){
    $sqlfileToLoad = __ROOT_DIR . '/sql/' . ucfirst($className) . 'sql.php';
    if(is_readable($sqlfileToLoad)){
        require_once($sqlfileToLoad);
        $this -> log(__CLASS__ . 'load: '. ucfirst($className) . 'sql.php');
    }
}




}
}
$__LOADER = new AutoLoader();
?>