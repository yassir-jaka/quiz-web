<?php
    class UserController extends Controller {
        protected $user;
        
        
        public function __construct($request) {
            parent::__construct($request);
           
            session_start();
            
            if(!isset($_SESSION['userid']))
                throw new Exception("user id in session is mandatory for User Controller");
                
            $userId = $_SESSION['userid'];

            $this->user = User::getWithId( $userId);
        }

        public function defaultAction(){
            //echo(get_class(UserView::$user));
            $view = new UserView($this,'user');
            $view -> setUser($this->user);
            $view->render();
            
        }


       

        public function disconnect() {
            if(isset($_SESSION))
                session_destroy();
            //echo  "URL = " . __BA::SE_URL;
            header("Location: http://localhost/index.php");
        }

    }

?>