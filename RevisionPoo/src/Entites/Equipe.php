<?php

namespace App\Entites;

class Equipe {
    private string $nom;
    private int $nombreLikes;

    /**
     * @param string $nom
     */
    public function __construct(string $nom)
    {
        $this->nom = $nom;
        $this->nombreLikes = 0;
    }


    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    public function getNombreLikes(): int
    {
        return $this->nombreLikes;
    }
    public function incrementerNombreLikes() : void {
        $this->nombreLikes++;
    }
}