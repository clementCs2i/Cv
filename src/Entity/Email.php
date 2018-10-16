<?php
// src/Entity/Task.php
namespace App\Entity;

class Email
{
    protected $NomPrenom;
    protected $AdresseMail;
    protected $Message;

    public function getNomPrenom()
    {
        return $this->NomPrenom;
    }

    public function setNomPrenom($NomPrenom)
    {
        $this->NomPrenom = $NomPrenom;
    }

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