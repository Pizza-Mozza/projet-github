<?php

class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $vitesseMax;
    protected float $prixJournalier;

    /**
     * @param string $marque
     * @param string $modele
     * @param int $vitesseMax
     * @param float $prixJournalier
     */
    public function __construct($marque, $modele, $vitesseMax, $prixJournalier)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->vitesseMax = $vitesseMax;
        $this->prixJournalier = $prixJournalier;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * @param string $modele
     */
    public function setModele($modele)
    {
        $this->modele = $modele;
    }

    /**
     * @return int
     */
    public function getVitesseMax()
    {
        return $this->vitesseMax;
    }

    /**
     * @param int $vitesseMax
     */
    public function setVitesseMax($vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
    }

    /**
     * @return float
     */
    public function getPrixJournalier()
    {
        return $this->prixJournalier;
    }

    /**
     * @param float $prixJournalier
     */
    public function setPrixJournalier($prixJournalier)
    {
        $this->prixJournalier = $prixJournalier;
    }


}