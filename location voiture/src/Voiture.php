<?php

class Voiture
{
    private int $nombrePortes;
    private string $typeCarburant;

    /**
     * @param int $nombrePortes
     * @param string $typeCarburant
     */
    public function __construct(int $nombrePortes, string $typeCarburant)
    {
        $this->nombrePortes = $nombrePortes;
        $this->typeCarburant = $typeCarburant;
    }

    /**
     * @return int
     */
    public function getNombrePortes(): int
    {
        return $this->nombrePortes;
    }

    /**
     * @param int $nombrePortes
     */
    public function setNombrePortes(int $nombrePortes): void
    {
        $this->nombrePortes = $nombrePortes;
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
     */
    public function setTypeCarburant(string $typeCarburant): void
    {
        $this->typeCarburant = $typeCarburant;
    }



}