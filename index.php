<?php
//J'active la session
session_start();

// Include dans tous les pages
include 'utils/fonction.php';
include 'model/model_commentUser.php';
include 'model/model_manga.php';
include 'model/model_typeManga.php';
include 'model/model_users.php';
include 'model/model_userType.php';


//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/


//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    case  '/MangaSky/':
        // controler
        include "controler/accueil.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_index.html';
        include 'view/view_footer1.php';
        break;
    case '/MangaSky/nouveau':
    case '/MangaSky/random':
    case '/MangaSky/populaire':
        // controler
        include "controler/Random.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_autre.html';
        include 'view/view_footer1.php';
        break;
    case '/MangaSky/manga':
        // controler
        include "controler/manga.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_manga.html';
        include 'view/view_footer1.php';
        break;
    case '/MangaSky/manga/chapitre':
        // controler
        include "controler/chapitre.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_chapitre.php';
        include 'view/view_footer1.php';
    break;
    case '/MangaSky/connexion':
        // controler
        include "controler/connexion.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_connexion.php';
        include 'view/view_footer2.php';
        break;
    case '/MangaSky/inscription':
        // controler
        include "controler/inscrire.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_inscrire.php';
        include 'view/view_footer2.php';
        break;
    case '/MangaSky/MonCompte':
        // controler
        include "controler/compte.php";
        //J'inclure mes views
        include 'view/view_header.php';
        include 'view/view_compte.html';
        include 'view/view_footer1.php';
        break;
    case '/MangaSky/Deconnexion':
        // controler
        include "controler/deco.php";
        break;
    //page pardefault
    default :
        echo '404';
        break;
}   

?>