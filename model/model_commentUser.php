<?php
class CommentUser{
    // Attributs
    private ?int $idCommentUser;
    private ?string $textComment;
    private ?int $idUser;

    // Constructeurs
    public function __construct(){

    }

    // GETTER
    public function getIdCommentUser():?int{
        return $this->idCommentUser;
    }
    public function getTextComment():?string{
        return $this->textComment;
    }
    public function getIdUser():?int{
        return $this->idUser;
    }

    // SETTER
    public function setIdCommentUser(?int $idCommentUser):self{
        $this->idCommentUser=$idCommentUser;
        return $this;
    }
    public function setTextComment(?string $textComment):self{
        $this->textComment=$textComment;
        return $this;
    }
    public function setIdUser(?string $idUser):self{
        $this->idUser=$idUser;
        return $this;
    }
    // Methodes
}

?>