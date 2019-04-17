
<?php

class Dispatcher extends MyObject{
	private $controller;
    private $controllerClass;
    public static function dispatch($request){
        $controller= $request->getController();
        
        $controllerClass = ucfirst($controller). 'Controller';

        if(!class_exists($controllerClass)){
            throw new Exception('$ControllerName');
        }

        return new $controllerClass($request);

		
		
		
	
	
	}
	
	
}


?>