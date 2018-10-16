<?php
// src/Entity/Task.php
namespace App\Entity;

class Email
{
    protected $AdresseMail;
    protected $Message;

    public function getAdresseMail()
    {
        return $this->AdresseMail;
    }

    public function setAdresseMail($AdresseMail)
    {
        $this->AdresseMail = $AdresseMail;
    }

    public function getMessage()
    {
        return $this->Message;
    }

    public function setMessage($Message)
    {
        $this->Message = $Message;
    }


}