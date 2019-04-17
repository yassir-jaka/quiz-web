<?php

class DatabasePDO extends MyObject {

  private static   $pdo = null;


    public static function getCurrentpdo() {

        if(is_null(static::$pdo)) {
          static::$pdo = new static();

        }
        static::connect();
        return static::$pdo;
      }

    public static function connect(){
      // $mysql_dbname = "vincent_belotti";
      // static::$pdo =new PDO("mysql:host=localhost;dbname=$mysql_dbname","root","");
      // static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $mysql_dbname = "vincent_belotti";
      static::$pdo =new PDO("mysql:host=localhost:3306;dbname=$mysql_dbname","root","");
      static::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    }
?>
