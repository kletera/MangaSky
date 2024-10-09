<?php
class TypeManga{
    // Attributs
    private ?int $idTypeManga;
    private ?string $nameType;

    // Constructeurs
    public function __construct(?int $idTypeManga){
        $this->idTypeManga=$idTypeManga;
    }

    // GETTER
    public function getIdTypeManga():?int{
        return $this->idTypeManga;
    }
    public function getNameType():?string{
        return $this->nameType;
    }

    // SETTER
    public function setIdTypeManga(?int $idTypeManga):self{
        $this->idTypeManga=$idTypeManga;
        return $this;
    }
    public function setNameType(?string $nameType):self{
        $this->nameType=$nameType;
        return $this;
    }

    // Methodes
}

?>