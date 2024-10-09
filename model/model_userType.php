<?php
    class UserType{
        // Attributs
        private ?int $idUserType;
        private ?string $nameUserType;

        // Constructeur
        public function __construct(?string $idUserType){
            $this->idUserType=$idUserType;
        }
        // GETTER
        public function getIdUserType():?int{
            return $this->idUserType;
        }
        public function getNameUserType():?string{
            return $this->nameUserType;
        }
        // SETTER
        public function setIdUserType(?int $idUserType):self{
            $this->idUserType=$idUserType;
            return $this;
        }
        public function setNameUserType(?string $nameUserType):self{
            $this->nameUserType=$nameUserType;
            return $this;
        }

        // Methodes
    }

?>