<?php 

namespace App; 

class Email
{
    private string $email; 

    public function getEmail(): string 
    {
        return $this->email;
    }

    public function setEmail(string $email): self 
    {
        $this->email = $email;
        return $this; 
    }
}