<?php
    $link='<link rel="stylesheet" href="./style/commun.css">
    <link rel="stylesheet" href="./style/accueil.css">';
    $script='<script src="./script/commun.js" defer></script>
    <script src="./script/nightMode.js" defer></script>
    <script src="./script/carrousel.js" defer></script>';
    $titre='<title>MangaSky</title>';
    $metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
    $supStyle=' <style>
                    .itemupdate{
                        height: 107px;
                    }
                </style>';
    
    include './view/view_header.php';
    include './view/view_index.html';
    include "./view/view_footer1.php";
?>