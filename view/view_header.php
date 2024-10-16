<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo $link?>
    <?php echo $script?>
    <?php echo $titre?>
    <?php echo $metaD?>
    <?php echo $supStyle?>
</head>
<body>
    <header>
        <nav class="navBarUp">
        <a href="/MangaSky/"><img src="./Image/LOGO Manga.png" class="logo" alt="Logo MangaSky"></a>
        <div style="margin: auto 0;">
            <ul class="effectNav">
                <div></div>
                <li>
                    <a href="/MangaSky/">Accueil</a>
                </li>
                <li>
                    <div></div>
                    <a href="/MangaSky/nouveau">Nouveau</a>
                </li>
                <li>
                    <div></div>
                    <a href="/MangaSky/random">Random</a>
                </li>
                <li>
                    <div></div>
                    <a href="/MangaSky/populaire">Populaire</a>
                </li>
            </ul>
            <button id="btMenuBurger">
                <span style="margin: 0 4px;">MENU</span>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
            </button>
            <ul id="burger" class="dis_none">
                <button type="button" class="close"></button>
                <li>
                    <a href="/MangaSky/">Accueil <span class="barreYellow"></span></a>
                </li>
                <li>
                    <a href="/MangaSky/nouveau">Nouveau <span class="barreYellow"></span></a>
                </li>
                <li>
                    <a href="/MangaSky/random">Random <span class="barreYellow"></span></a>
                </li>
                <li>
                    <a href="/MangaSky/populaire">Populaire <span class="barreYellow"></span></a>
                </li>
            </ul>
        </div>
        </nav>
        <nav class="navBarDown">
            <form class="barSearch">
                <img src="./Image/Icons/pngegg.png" alt="Item Rechercher" id="imgSearch">
                <input type="search" name="search" id="search" placeholder="Rechercher Manga">
            </form>
            <div class="space">
                <ul style="list-style: none; display: flex; padding-left: 0;">
                    <li class="btLogin">
                        <a href="/MangaSky/inscription"><span>S'incrire</span>
                            <img src="./Image/Icons/edit_square.png" height="25px" alt="Image inscription">
                        </a>
                    </li>
                    <li class="btLogin">
                        <a href="/MangaSky/connexion"><span>Connexion</span>
                            <img src="./Image/Icons/login_24dp_000000_FILL0_wght400_GRAD0_opsz24.png" height="25px" alt="Image Connexion">
                        </a>
                    </li>
                </ul>
                <div class="themeSwich">
                    <button disabled><img src="./Image/Icons/nights_stay_24dp_000000_FILL1_wght400_GRAD0_opsz24.png" alt="" height="25px"></button>
                </div>
            </div>
        </nav>
    </header>