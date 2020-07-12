<?php
namespace App\Models;

class User{

protected $name;
protected $lastname;
protected $email;
protected $password;

    public function __construct($name, $lastname, $email, $password)
        {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->email= $email;
            $this->password = $password;
        }

        

    public function getName()
        {
            return $this->name;
        }
    public function getLastname()
        {
            return $this->lastname;
        }
    public function getEmail()
        {
            return $this->email;
        }
    public function getPassword()
        {
            return $this->password;
        }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function __toString()
    {
        try 
        {
            return (string) $this->name.', '.(string) $this->lastname.', '.
                   (string) $this->email.', '.(string) $this->password;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }

}

?>