<?php
    $link='<link rel="stylesheet" href="./style/commun.css">
    <link rel="stylesheet" href="./style/manga.css">';
    $script='<script src="script/commun.js" defer></script>
    <script src="script/manga.js" defer></script>';
    $titre='<title>Manga</title>';
    $metaD='<meta name="description" content="Retrouvez les derniers scan de vos Manga préférer traduits en Français(fr) sur MangaSky.  Sans pub lisser en toute tranquillité." />';
    $supStyle="";

    include './view/view_header.php';
    include './view/view_manga.html';
    include "./view/view_footer1.php";
?>