<?php 

class LivreManager
{

    private array $livres = [];

    /**
     * Ajoute un nouveau livre à la liste des livres.
     *
     * @param object $nouveauLivre Le nouveau livre à ajouter
     */
    public function addLivre(object $nouveauLivre)
    {
        $this->livres[] = $nouveauLivre;
    }

    public function getLivres() : array
    {
        return $this->livres;
    }
}