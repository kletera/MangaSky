<?php
class Manga{
    // Attributs
    private ?int $idManga;
    private ?string $nameManga;
    private ?string $imgManga;
    private ?TypeManga $idTypeManga;

    // Constructeurs
    public function __construct(?string $nameManga){
        $this->nameManga=$nameManga;
    }
    // GETTER

    public function getIdManga():?int{
        return $this->idManga;
    }
    public function getNameManga():?string{
        return $this->nameManga;
    }
    public function getImgManga():?string{
        return $this->imgManga;
    }
    public function getIdTypeManga():?int{
        return $this->idTypeManga;
    }
    // SETTER
    public function setIdManga(?int $idManga):self{
        $this->idManga=$idManga;
        return $this;
    }
    public function setNameManga(?string $nameManga):self{
        $this->nameManga=$nameManga;
        return $this;
    }
    public function setImgManga(?string $imgManga):self{
        $this->imgManga=$imgManga;
        return $this;
    }
    public function setIdTypeManga(?int $idTypeManga):self{
        $this->idTypeManga = $idTypeManga;
        return $this;
    }
    // Methodes
}
?>