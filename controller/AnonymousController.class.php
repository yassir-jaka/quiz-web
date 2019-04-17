
<?php
    class AnonymousController extends Controller {
        
        
        public function __construct($currentRequest) {
            parent::__construct($currentRequest);  
        }


        public function defaultAction(){
            $view1 = new AnonymousView($this,'inscription');
            $view1->render();
        }

        public function inscription(){
            $view = new AnonymousView($this,'inscription');
            $view->render();
        }

        public function signIn(){
            $view = new AnonymousView($this,'signIn');
            $view->render();
        }

        public function validateInscription() {
            $currentRequest = $this->request;
            $login = $currentRequest->read('inscLogin');
            $mail =$currentRequest ->read('mail');
            $password = $currentRequest -> read('inscPassword');

            if ($login ==''){
                $this->loadView('inscription');
                echo("<script>swal('Erreur', 'Veuillez renseigner un login!');</script>");
            }

            else if ($password ==''){
                $this->loadView('inscription');
                echo("<script>swal('Erreur', 'Veuillez renseigner un login et mot de passe!');</script>");
            }
            
            else if ($mail ==''){
                $this->loadView('inscription');
                echo("<script>swal('Erreur', 'Veuillez renseigner votre adresse electronique!');</script>");
            }
            else if(User::isLoginUsed($login)) {
                $this->loadView('inscription');
                echo("<script>swal('Erreur!', 'ce login existe déjà!', 'error');</script>");
            }
            else if(User::isMailUsed($mail)) {
                $this->loadView('inscription');
                echo("<script>swal('Erreur!', 'cette adresse mail existe déjà!', 'error');</script>");
            }
            else {
                $password = $currentRequest->read('inscPassword');
                $nom = $currentRequest->read('nom');
                $prenom = $currentRequest->read('prenom');
                $mail = $currentRequest->read('mail');
                $role = $currentRequest->read('ROLE');;
                $user = User::create($login, $password,$mail,$nom,$prenom,$role);
                if(!isset($user)) {
                    $this->loadView('inscription');
                    echo("<script>swal('Erreur!', 'Erreur de création', 'error');</script>");
                }
                else {
                    $this->redirectToUserControllerForUser($user);
                }
            }
        }

        public function validateConnection() {
            $currentRequest = $this->request;
            $user = User::tryLogin($currentRequest->read('inscLogin'),$currentRequest->read('inscPassword'));
            
            if(is_object($user)) {
                $this->redirectToUserControllerForUser($user);               
            }
            else {
                $this->loadView('signIn');
                echo("<script>swal('Erreur!', 'mauvais mot de passe ou login', 'error');</script>");

            }
        }

        protected function loadView($arg){
            $view = new AnonymousView($this,$arg);    
            $view->render();
        }

        protected function redirectToUserControllerForUser($user){
            session_start();
            $_SESSION['userid'] = $user->id();
            $role = $user->role();
            header("Location:".__BASE_URL."/index.php?controller=$role");
        }

        
    }

    ?>
