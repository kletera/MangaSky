    <main>
        <div class="grid_h1">
            <h1>créer un compte</h1>
        </div>
        <form id="formIn" method="POST">
            <img src="./Image/LOGO Manga.png" alt="Logo">
            <h2>S'inscrire</h2>
            <div class="label_incription">
                <input type="email" name="email" id="email" maxlength="50">
                <label for="email" class="labelDow">E-mail</label>
                <div class="messageError"></div>
            </div>
            <div class="label_incription">
                <input type="password" name="password" id="password">
                <label for="password" class="labelDow">Mot de passe</label>
                <ul class="messageError dis_none">
                    <li class="txtError"></li>
                    <li class="txtError"></li>
                    <li class="txtError"></li>
                </ul>
            </div>
            <div class="label_incription">
                <input type="password" name="verifpassword" id="verifpassword">
                <label for="verifpassword" class="labelDow">Confirmation mot de passe</label>
                <div class="messageError"></div>
            </div>
            <input type="submit" value="Inscription" name="inscription">
            <p>Vous avez déjà un compte ?<a href="/MangaSky/connexion">Connexion</a></p>
            <p><?php $mesage ?></p>
        </form>
    </main>