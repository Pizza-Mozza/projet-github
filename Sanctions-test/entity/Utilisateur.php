<?php

class Utilisateur
{
    private string $pseudo;
    private string $email;
    private string $motDePasse;

    public function __construct(string $pseudo, string $email, string $motDePasse)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->motDePasse = $motDePasse;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }
}
