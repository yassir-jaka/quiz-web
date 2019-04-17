<?php
class Request extends MyObject {
    private static   $Request = null;
    public static function getCurrentRequest() {
 
        if(is_null(static::$Request)) {
          static::$Request = new static();  
        }
    
        return static::$Request;
      }
    public function getController(){
        if (isset($_GET['controller'])){
            return $_GET['controller'];
        }
        return 'Anonymous';
        
    }

    public function getAction(){
        
        if (isset($_GET['action'])){
            return $_GET['action'];
        }
        
    }

    public function read($arg){
        
        if (isset($_POST[$arg])){
            return$_POST[$arg];
        }
        
    }

    public function changeController($value){
        $_GET['controller']=$value;
        

    }

    public function write($key,$value){
        $_POST[$key]=$value;
        

    }

    
    public function nbrArg(){
        return(count($_POST));
        

    }

}
?>