
<?php

class EnseignantView extends View{
    protected  $user;

	public function __construct($controller,$templateName) {
        parent::__construct($controller,$templateName);
        $this->templateNames['navBar'] = 'enseignantNavBar';
        
    }

    public function setUser($user){
        $this->user = $user;

    }
	
}


?>