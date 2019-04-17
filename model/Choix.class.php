<?php
    class Choix extends Model {
        
        protected $ID_CHOIX,$ID_QUESTION,$TEXTE,$COLONNE,$valeur;

        public  static function create($ID_QUESTION,$TEXTE,$COLONNE,$valeur) {
            
            static::db()->exec("INSERT INTO choix (ID_QUESTION,TEXTE,COLONNE,valeur) VALUES('$ID_QUESTION', '$TEXTE','$COLONNE','$valeur')");
            
            return static::findChoix($TEXTE,$ID_QUESTION);
        }

        public static function findChoix($TEXTE,$ID_QUESTION){
            
            $sql = "select  * FROM choix WHERE TEXTE='$TEXTE' AND ID_QUESTION='$ID_QUESTION'";
            $st = static::db()->query($sql);
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Choix");
            $choix = $st->fetch();
            
            return $choix;
        }

        

        public function ID_CHOIX(){
            return $this ->ID_CHOIX	;
            
        }

        public function ID_QUESTION(){
            return $this ->ID_QUESTION	;
            
        }

        public function TEXTE(){
            return $this ->TEXTE	;
            
        }

        public function COLONNE(){
            return $this ->COLONNE	;
            
        }

        public function valeur(){
            return $this ->valeur	;
            
        }
    }
?>