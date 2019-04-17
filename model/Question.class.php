<?php
    class Question extends Model {
        
        protected $ENONCER, $TYPE, $CORRECTION, $DUREE, $ID_QUESTION	;

        public  static function create($ENONCER, $TYPE, $CORRECTION, $DUREE,$user,$matiere) {
            $iduser=$user->id();
            $idmatiere= static::findMatiere($matiere);
            static::db()->exec("INSERT INTO question (ENONCER,TYPE,CORRECTION,DUREE,idCreateur,idMatiere) VALUES('$ENONCER', '$TYPE', '$CORRECTION','$DUREE','$iduser','$idmatiere')");
            
            return static::findQuestion($ENONCER,$user);
        }

        public static function findQuestion($ENONCER,$user){
            $id=$user->id();
            $sql = "select  * FROM question WHERE ENONCER='$ENONCER' AND idCreateur='$id'";
            $st = static::db()->query($sql);
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "Question");
            $question = $st->fetch();
            
            return $question;
        }

        public static function findMatiere($matiere){
            
            $sql = "select  ID_MATIERE FROM matiere WHERE INTITULE='$matiere'";
            $st = static::db()->query($sql);
            $m= $st->fetch();
            return $m[0];
        }
        public function ID_QUESTION(){
            return $this ->ID_QUESTION	;
            
        }

        public function ENONCER(){
            return $this ->ENONCER	;
            
        }

        public function TYPE(){
            return $this ->TYPE	;
            
        }

        public function CORRECTION(){
            return $this ->CORRECTION	;
            
        }

        public function DUREE(){
            return $this ->DUREE	;
            
        }
    }
?>