<?php 


class Livre
{
    /**
     * Initialise une nouvelle instance de la classe Livre.
     *
     * @param int $id L'identifiant du livre.
     * @param string $title Le titre du livre.
     * @param string $urlImage L'URL de l'image du livre.
     * @param int $nb_pages Le nombre de pages du livre.
     */

    private int $id;
    private string $title;
    private string $urlImage;
    private int $nb_pages;

    public function __construct(int $id, string $title, string $urlImage, int $nb_pages)
    {
        $this->id = $id;
        $this->title = $title;
        $this->urlImage = $urlImage;
        $this->nb_pages = $nb_pages;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
    
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    public function setImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    public function getNb_pages()
    {
        return $this->nb_pages;
    }

    public function setNb_pages($nb_pages)
    {
        $this->nb_pages = $nb_pages;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}
