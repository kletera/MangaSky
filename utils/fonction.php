<?php
    $class="";
    $classNav="dis_none";
    
    function sanitize($data){
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }

    if(isset($_SESSION['id_user'])){
        //Si je suis connecté, je passe la class displayNone à la section possédant mes formulaires Inscription et Connexion pour les enlever
        //Et j'efface cette class de mes liens Mon Compte et Déconnexion, pour les afficher
        $class = "dis_none";
        $classNav = "";
    }
?>
