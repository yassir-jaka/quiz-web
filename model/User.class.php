<?php
    class User extends Model {
        
        

        protected $nom,$prenom,$mail,$id; protected $password; protected $ROLE;
        protected $PROMO;protected $INE;protected $MATRICULE;protected $INTEXT;
        protected $login;
        protected static $table_name = 'USER';

       
        
        public  static function create($login, $pwd, $mail,$nom,$prenom,$role) {
            static::db()->exec("INSERT INTO users (login,password,mail,nom,prenom,ROLE) VALUES('$login', '$pwd', '$mail','$nom','$prenom','$role')");
            return static::tryLogin($login, $pwd);
        }
                
        public static function tryLogin($login, $pwd){
            $sql = "select  * from users where login='$login' and password='$pwd'";
            $st = static::db()->query($sql);
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "User");
            $user = $st->fetch();
            
            return $user;
        }
	

        public function id(){
            return $this ->id;
            
        }

        public static function isLoginUsed ($login){
            $st = static::db()->query("select login from users where login='$login'");
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
            $user = $st-> fetch();
            return $user!=null;
        }

        public static function isMailUsed ($mail){
            $st = static::db()->query("select mail from users where mail='$mail'");
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
            $user = $st-> fetch();
            return $user!=null;
        }

        public static function getWithId($userId){
            $st = static::db()->query("select  * from users where id ='$userId'");
            $st ->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "user");
            $user = $st-> fetch();
            return $user;
                

        }
        public function login(){
            return $this ->login;

        }

        public function mail(){
            return $this ->mail;

        }

        public function prenom(){
            return $this ->prenom;

        }

        public function nom(){
            return $this ->nom;

        }

        public function role(){
            return $this ->ROLE;

        }


    
}
?>