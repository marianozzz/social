<?php
namespace App\Clases;

class Auth {


    public function encryptation($password)
    {
        $passby_hash = password_hash($password,PASSWORD_DEFAULT);
        return $passby_hash;
    }

    public function auth($user){

         $user = self::encryptation($user);
         return $user;
    }

    public function query($link, $username,$pass)
    {
        $contador =0;
        
        $sql = " select *from users where email = '$username'";
        
        $resulado = \mysqli_query($link,$sql);

        while($registro = $resulado->fetch_assoc())
        {
            if (\password_verify($pass, $registro['Pass']))
            {
                $contador++;
            }

        }

        if($contador > 0)
        {
          
           return $resulado;
           
        }
        else
        {
          
            return $resulado;
        }
        //return $resulado;

       // return $sql;
         //https://www.youtube.com/watch?v=xp9wTWJuYhk
        
    }


}

?>