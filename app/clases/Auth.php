<?php
namespace App\Clases;



class Auth {


    public function encryptation($password)
    {
        $passby_hash = password_hash($password, PASSWORD_BCRYPT);
        return $passby_hash;
    }

    public function auth($user){

         $user = self::encryptation($user);
         return $user;
    }

    public function query($link, $username,$pass)
    {
        
        $sql = "select *from users where email = '$username' and pass = '$pass'";
        
        $resulado = \mysqli_query($link,$sql);

        //return $resulado;

        return $sql;
         //https://www.youtube.com/watch?v=xp9wTWJuYhk
        
    }


}

?>