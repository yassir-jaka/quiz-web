<?php
    class EnseignantController extends Controller {
        protected $user,$args;
        
        
        public function __construct($request) {
            parent::__construct($request);
           
            session_start();
            
            if(!isset($_SESSION['userid']))
                throw new Exception("user id in session is mandatory for User Controller");
                
            $userId = $_SESSION['userid'];

            $this->user = User::getWithId( $userId);
        }

        public function defaultAction(){
            $view = new EnseignantView($this,'accueilEnseignant');
            $view -> setUser($this->user);
            $view->render();
            
        }

        public function prepareQuestion(){
            $view = new EnseignantView($this,'preparationQuestion');
            $view -> setUser($this->user);
            $view->render();
            
        }

        public function createQuestion(){
            $typeQuestion = $this->request->read("typeQuestion");
            $_SESSION["matiereQuestion"]=$this->request->read("matiereQuestion");
            $view = new EnseignantView($this,'creationQuestion'.$typeQuestion);
            $view -> setUser($this->user);
            $view->render();
        }

        public function validateCreationTextQuestion(){
            $matiere = $_SESSION["matiereQuestion"];
            $DUREE = $this->request->read("DUREE");
            $ENONCER = $this->request->read("ENONCER");
            $CORRECTION = $this->request->read("CORRECTION");
            $question =  Question::create($ENONCER, "texte", $CORRECTION, $DUREE,$this->user,$matiere);
            echo("<script>alert('Question crée avec succès');</script>");
            header("Location:".__BASE_URL."/index.php?controller=enseignant");
        }
        
        public function validateCreationQcmQuestion(){
            print_r($_POST);
            $matiere = $_SESSION["matiereQuestion"];
            $DUREE = $this->request->read("DUREE");
            $ENONCER = $this->request->read("ENONCER");
            $question =  Question::create($ENONCER, "QCM", "NULL", $DUREE,$this->user,$matiere);
            $ID_QUESTION = $question->ID_QUESTION();
            $nbrOption = (($this->request->nbrArg())- 2)/2;
            echo ($nbrOption);
            echo('<br>');
            $c=0;$i=1;
            while($c<$nbrOption){
                if($this->request->read("Option".$i)!=null){
                    echo($i);echo('<br>');
                    $TEXTE = $this->request->read("Option".$i);
                    echo($TEXTE);echo('<br>');
                    $COLONNE="0";
                    $valeur=$this->request->read("checkbox".$i);
                    echo($valeur);echo('<br>');

                    $choix=Choix::create($ID_QUESTION,$TEXTE,$COLONNE,$valeur);
                    $c++;
                }
                $i++;
            }
            
            header("Location:".__BASE_URL."/index.php?controller=enseignant");


        }

        public function disconnect() {
            if(isset($_SESSION))
                session_destroy();
            //echo  "URL = " . __BA::SE_URL;
            header("Location:".__BASE_URL."/index.php?");
        }

    }

?>