<?php
    class Model extends MyObject {
        
		protected $props;
		
		public function __construct($props = array()) {
			$this->props = $props;
		}
		

		protected static function db(){
			
			return DatabasePDO::getCurrentpdo();
		}

			// Exécute la requête $sql et retourne des objets modèles
		protected static function query($sql){
			$st = static::db()->query($sql) or die("sql query error ! request : " . $sql);
			$st->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, get_called_class());
			return $st;
			}

		public function __get($prop) {
			return $this->props[$prop];
		}
	
		public function __set($prop, $val) {
			$this->props[$prop] = $val;
		}	
	
    }
?>