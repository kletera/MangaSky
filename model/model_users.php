<?php
class Users{
    private ?int $idUsers;
    private ?string  $pseudo;
    private ?string $email;
    private ?string $mdp;
    private ?int $idManga;
    private ?int $idTypeUsers;

    // Constructeur
    public function __construct(?string  $pseudo,?string $email){
        $this->pseudo=$pseudo;
        $this->email=$email;
    }
    // GETTER
    public function getIdUsers():?int{
        return $this->idUsers;
    }
    public function getPseudo():?string{
        return $this->pseudo;
    }
    public function getEmail():?string{
        return $this->email;
    }
    public function getMdp():?string{
        return $this->mdp;
    }
    public function getIdManga():?int{
        return $this->idManga;
    }
    public function getIdTypeUsers():?int{
        return $this->idTypeUsers;
    }

    // SETTER
    public function setIdUsers(?int $idUsers):self{
        $this->idUsers = $idUsers;
        return $this;
    }
    public function setPseudo(?string  $pseudo):self{
        $this->pseudo = $pseudo;
        return $this;
    }
    public function setEmail(?string $email):self{
        $this->email = $email;
        return $this;
    }
    public function setMdp(?string $mdp):self{
        $this->mdp = $mdp;
        return $this;
    }
    public function setIdManga(?int $idManga):self{
        $this->idManga = $idManga;
        return $this;
    }
    public function setIdTypeUsers(?int $idTypeUsers):self{
        $this->idTypeUsers = $idTypeUsers;
        return $this;
    }

    // METHODE
}


?>