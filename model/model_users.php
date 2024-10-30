<?php
class Users{
    private ?int $idUsers;
    private ?string $pseudo;
    private ?string $email;
    private ?string $mdp;
    private ?string $img;
    private ?string $isActive;
    private Manga $idManga;
    private UserType $idTypeUsers;

    // Constructeur
    public function __construct(?string $email){
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
    public function getIsActive():?string{
        return $this->isActive;
    }
    public function getIdManga():Manga{
        return $this->idManga;
    }
    public function getIdTypeUsers():UserType{
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
    public function setIsActive(?string $isActive):self{
        $this->isActive = $isActive;
        return $this;
    }
    public function setIdManga( Manga $idManga):self{
        $this->idManga = $idManga;
        return $this;
    }
    public function setIdTypeUsers(UserType $idTypeUsers):self{
        $this->idTypeUsers = $idTypeUsers;
        return $this;
    }

    // METHODE
    function addUser():string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
        //Récupération des données de l'objet
        $email = $this->getEmail();
        $mdp = $this->getMdp();
        $img="https://www.pngall.com/wp-content/uploads/5/Profile-Male.png";

        //Try...Catch
        try{
            //2nd Etape : préparer ma requête INSERT INTO
            $req = $bdd->prepare('INSERT INTO users(email_Users, mdp_Users, img_Users) VALUE (?,?,?)');

            //3eme Etape : Binding de Paramètre pour relier chaque ? à sa donnée
            $req->bindParam(1,$email,PDO::PARAM_STR);
            $req->bindParam(2,$mdp,PDO::PARAM_STR);
            $req->bindParam(3,$img,PDO::PARAM_STR);

            //4eme Etape : exécution de la requête
            $req->execute();

            //5eme Etape : Retourne un message de confirmation
            return "$email, a été enregistré avec succès !";
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }

    function readUsers():array | string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


        //Try...Catch
        try{
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_Users, email_Users, mdp_Users FROM users');

            //3eme Etape : executer la requête
            $req->execute();

            //4eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //5eme Etape : je retourne mes $data
            return $data;
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }

    //Fonction pour récupérer un utilisateurs en BDD selon un login précis
    //Param : string
    //Return : array | string
    function readUserByEmail():array | string{
        //1Er Etape : Instancier l'objet de connexion PDO
        $bdd = new PDO('mysql:host=localhost;dbname=mangasky','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        //Récupération du login depuis l'objet
        $email = $this->getEmail();

        //Try...Catch
        try{
            //2nd Etape : préparer ma requête SELECT
            $req = $bdd->prepare('SELECT id_Users, email_Users, mdp_Users FROM users WHERE email_Users = ?');

            //3Eme Etape : introduire le login de l'utilisateur dans ma requête avec du Binding de Paramètre
            $req->bindParam(1,$email,PDO::PARAM_STR);

            //4eme Etape : executer la requête
            $req->execute();

            //5eme Etape : Récupère les réponses de la BDD
            $data = $req->fetchAll(PDO::FETCH_ASSOC);

            //6eme Etape : je retourne mes $data
            return $data;
        }catch(EXCEPTION $error){
            return $error->getMessage();
        }
    }
}
?>