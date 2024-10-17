<?php
class Users{
    private ?int $idUsers;
    private ?string  $pseudo;
    private ?string $email;
    private ?string $mdp;
    private ?string $img;
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
    public function getImg():?string{
        return $this->img;
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
    public function setImg(?string $img):self{
        $this->img = $img;
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
    public function addUser():string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Récupération des données de l'objet
        $email = $this->getEmail();
        $mdp = $this->getMdp();
        $img_user = $this->getImg();

        //Try...Catch
        try{
            //2nd Etape : préparer ma requête INSERT INTO
            $req = $bdd->prepare('INSERT INTO users (email_Users, mdp_Users,img_Users) VALUES (?,?,?,?)');

            //3eme Etape : Binding de Paramètre pour relier chaque ? à sa donnée
            $req->bindParam(2,$email,PDO::PARAM_STR);
            $req->bindParam(3,$mdp,PDO::PARAM_STR);
            $req->bindParam(4,$img_user,PDO::PARAM_STR);

            //4eme Etape : exécution de la requête
            $req->execute();

            //5eme Etape : Retourne un message de confirmation
            return "$email, a été enregistré avec succès !";
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }

    public function readUser(){
        
    }

}


?>