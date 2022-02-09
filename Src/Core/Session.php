<?php
namespace App\Core;
class Session {

    public static function start():void{
        if (session_status()==PHP_SESSION_NONE) {
            session_start();
            
     }


    }

    public static function keyExist(string $key):bool{
        return isset($_SESSION[$key]);
    }


    public static function getSession(string $key):bool{
      return isset($_SESSION[$key]);

    }

    public static function removeKey($key):void{
        unset($_SESSION[$key]);
    }

    public  static function setSession(string $key , $data):void{
        $_SESSION[$key]=$data;
    }

    


    
}
   
    