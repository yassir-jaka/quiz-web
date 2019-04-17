<?php
abstract class Controller extends MyObject {
    protected $request;
    protected $action;
    public function __construct($currentRequest) {
        $this->request = $currentRequest;
    }
    
    Abstract function defaultAction();

    public function execute(){
        if(is_null($this->request->getAction()) || $this->request->getAction()=='' ){
            $this->defaultAction($this->request);
        }
        else {
            $action = $this->request->getAction();

            $this-> $action();
        }
    }
}
?>