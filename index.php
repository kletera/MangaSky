<?php
//J'active la session
session_start();
    
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);

//test soit l'url a une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';

/*--------------------------ROUTER -----------------------------*/
// INclude dans tous les pages
include 'utils/fonction.php';

//test de la valeur $path dans l'URL et import de la ressource
switch($path){
    case $path === '/MangaSky/';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/accueil.php";
        //J'inclure mes views
        include './view/view_header.php';
        include 'view/view_index.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/nouveau';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/Random.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_autre.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/random';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/Random.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_autre.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/populaire';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/Random.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_autre.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/manga';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/manga.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_manga.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/connexion';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/connexion.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_connexion.html';
        include './view/view_footer2.php';
        break;
    case $path ==='/MangaSky/inscription';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/inscrire.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_inscrire.html';
        include './view/view_footer2.php';
        break;
    case $path === '/MangaSky/MonCompte';
        //J'inclus les fichiers model dont j'ai besoin
        // controler
        include "controler/compte.php";
        //J'inclure mes views
        include './view/view_header.php';
        include './view/view_compte.html';
        include './view/view_footer1.php';
        break;
    case $path ==='/MangaSky/Deconnexion';
        // controler
        include "controler/deco.php";
        break;
    
        
}   

?>