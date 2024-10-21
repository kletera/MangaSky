<?php
// Déclaration de variable
$link='<link rel="stylesheet" href="style/commun.css">
    <link rel="stylesheet" href="style/inscrireConnexion.css">';
$script='<script src="./script/inscrireConnexion.js" defer></script>
    <script src="./script/inscription2.js" defer></script>
    <script src="script/commun.js" defer></script>';
$titre='<title>Inscription</title>';
$metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
$supStyle="";
$mesage="";

function dataInscription(){
    //1er Etape de sécurité : vérifie si les champs obligatoires sont vides
    if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["verifpassword"])){
        return ["email"=>'',"password"=>'',"verifpassword"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
    }
    if($_POST["password"] !== $_POST["verifpassword"]){
        return ["email"=>'',"mdp"=>'',"erreur"=>'Mot de passe différent'];
    }

    //2nd Etape de sécurité : nettoyage
    $email = sanitize($_POST['email']);
    $password = sanitize($_POST['password']);
    $verifpassword = sanitize($_POST["verifpassword"]);

    //3eme Etape de sécurité : Vérifier que les données sont au bon format
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return ["email"=>'',"password"=>'',"verifpassword"=>'',"erreur"=>'Login pas au bon format !'];
    }

    //4eme Etape de sécurité : hasher le mot de passe
    $mdp = password_hash($verifpassword,PASSWORD_BCRYPT);

    return ["email"=>$email,"password"=>$password,"verifpassword"=>$mdp,"erreur"=>''];
}
// Enregistrement de l'utilisateur
//Tester si le formulaire d'inscription m'est envoyé
if(isset($_POST["inscription"])){
    //Je lance le test de mes données
    $tab = dataInscription();

    //Je vérifie si je suis dans un cas d'erreur
    if($tab['erreur'] != ''){
        $mesage=$tab['erreur'];
    }else{
        //Création de mon $user à partir de ManagerUser
        $user= new Users($tab['email']);
        
        //J'utilise les Setter pour donner à mon objet le nameUSer, firstNameUser et mdpUser
        $user->setEmail($tab['email'])->setMdp($tab['verifpassword']);


        //Je vérifie que le login est diponible
        if(empty($user->readUserByEmail())){
            //Si la réponse de la BDD est vide, alors le Login est disponible (car non trouvé en BDD), je peux donc l'utiliser.
            //Je lance l'ajout de mon utilisateur en BDD
            $mesage=$user->addUser();
            header('Location:/MangaSky/connexion');
            

        }else{
            //Si la réponse de la BDD n'est pas vide, alors ce le login est trouvé en BDD, donc le login n'est pas disponible, et je renvoie un message d'erreur
            $mesage="Ce Login existe déjà en BDD !";
        }
    }
}

?>