<?php
    class Role{
        // Attributs
        private ?int $idRole;
        private ?string $nameRole;

        // Constructeur
        public function __construct(?string $idRole){
            $this->idRole=$idRole;
        }
        // GETTER
        public function getIdRole():?int{
            return $this->idRole;
        }
        public function getNameRole():?string{
            return $this->nameRole;
        }
        // SETTER
        public function setIdRole(?int $idRole):self{
            $this->idRole=$idRole;
            return $this;
        }
        public function setNameRole(?string $nameRole):self{
            $this->nameRole=$nameRole;
            return $this;
        }

        // Methodes
    }

?>