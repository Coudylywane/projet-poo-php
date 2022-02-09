<?php 
namespace App\Core;

class Request {
    //controlleurs et action

    public  function getUrl():array{
      $url =  $this->formatUrl();
      return [$url[0],$url[1]];
    }


    public function formatUrl():array{
        $url=explode('/',$_SERVER['REQUEST_URI']);
        unset($url[0]);
        return array_values($url);
    }

    public function isPost():bool{
      return $_SERVER['REQUEST_METHOD']=='POST';
    }

    public function isGet():bool{
        return $_SERVER['REQUEST_METHOD']=='GET';
    }



    //requete get
//recuperer des parametre 
    public function query():array{
        $url =  $this->formatUrl();
        unset( $url[0]);
        unset( $url[1]);
        return array_values($url);
    }

    public function request():array{
        return $_POST;
    }

    public function destroySession(){
        session_destroy();
    }

}




