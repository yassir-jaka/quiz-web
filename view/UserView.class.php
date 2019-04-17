
<?php

class UserView extends View{
    protected  $user;
    public function __construct($controller,$templateName) {
        parent::__construct($controller,$templateName);
        $this->templateNames['navBar'] = 'topUser';
        
    }
    
    public function setUser($user){
        $this->user = $user;

    }
}


?>