<?php
    // Variable
    $link='<link rel="stylesheet" href="style/commun.css">
        <link rel="stylesheet" href="style/inscrireConnexion.css">';
    $script='<script src="./script/inscrireConnexion.js" defer></script>
        <script src="./script/commun.js" defer></script>';
    $titre='<title>Connexion</title>';
    $metaD='';
    $supStyle="";
    $messageCo="";

function dataConnexion(){
    //1st Security Step: Check if the required fields are empty
    if(empty($_POST["loginCo"]) || empty($_POST["passwordCo"])){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Veuillez remplir le Login ET le Mot de Passe !'];
    }

    //2nd Safety Step: Cleaning
    $loginCo = sanitize($_POST["loginCo"]);
    $passwordCo = sanitize($_POST["passwordCo"]);

    //3rd Security Step: Check that the data is in the correct format
    if(!filter_var($loginCo,FILTER_VALIDATE_EMAIL)){
        return ["loginCo"=>'',"passwordCo"=>'',"erreur"=>'Login pas au bon format !'];
    }

    return ["loginCo"=>$loginCo,"passwordCo"=>$passwordCo,"erreur"=>''];
}

if(isset($_POST['connexion'])){
    //I test the submitted login data
    $tab = dataConnexion();

    // I check if there is an error
    if($tab['erreur'] != ''){
        // If there is an error, I display it
        $messageCo = $tab['erreur'];
    }else{
        $user= new Users($tab['loginCo']);
        // If everything went well:
        // Query the database to retrieve user data based on the entered login
        $data = $user->readUserByEmail();

        // Check if there is an error (database communication issue)
        // If there is an error, I receive a string; if everything went well, I receive an array
        if(gettype($data) == 'string'){
            $messageCo = $data;
        }else{
            // Everything went well
            // I check the database response: empty or not?
            // If it’s empty: the login does not exist in the database, and I display an error message
            if(empty($data)){
                $messageCo = "Erreur de Login et/ou de Mot de Passe !";
            }else{
                // If the login is found in the database
                // I check if the passwords match
                if(!password_verify($tab['passwordCo'],$data[0]['mdp_Users'])){
                    // If the passwords do not match, I display an error message
                    
                    $messageCo = "Erreur de Login et/ou de Mot de Passe !";
                }else{
                    // If the passwords match, I save the user's data
                    // Store user data in SESSION and send the user to his account
                    $_SESSION['id_Users'] = $data[0]['id_Users'];
                    $_SESSION['pseudo_Users'] = $data[0]['pseudo_Users'];
                    $_SESSION['mdp_Users'] = $data[0]['mdp_Users'];
                    $_SESSION['email_Users'] = $data[0]['email_Users'];
                    $_SESSION['img_Users'] = $data[0]['img_Users'];
                    $_SESSION['id_Role'] = $data[0]['id_Role'];
                    
                    header('Location:/MangaSky/MonCompte');
                }
            }
        }
    }
}

?>