<?php
namespace App\Core;

class Role{

    const KEY_SESSION_USER="user_connect";
    const ROLE_USER_1="ROLE_ETUDIANT";
    const ROLE_USER_2="ROLE_PROF";
    const ROLE_USER_3="ROLE_RP";
    const ROLE_USER_4="ROLE_AT";
    const COLUMN_USER_ROLE="role";

    public static function isConnected(){
        return Session::KeyExist(self::KEY_SESSION_USER);
    }

    public static function isEtudiant(){
       return Role::isConnected()&& Session::getSession(self::KEY_SESSION_USER)[self::COLUMN_USER_ROLE]==self::ROLE_USER_1;
    }

    public static function isProfesseur(){
        return Role::isConnected()&& Session::getSession(self::KEY_SESSION_USER)[self::COLUMN_USER_ROLE]==self::ROLE_USER_2;
     }

}