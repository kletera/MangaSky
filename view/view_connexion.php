    <main class="mainCo">
        <form id="formCo" style="justify-content: space-evenly;" method="POST">
            <img src="./Image/LOGO Manga.png" alt="Logo">
            <h2>Connexion</h2>
            <div class="label_incription">
                <input type="email" name="loginCo" id="loginCo" maxlength="50" required>
                <label for="emailCo" class="labelDow">E-mail</label>
                <div class="messageError"></div>
            </div>
            <div class="label_incription">
                <input type="password" name="passwordCo" id="passwordCo" maxlength="50" required>
                <label for="passwordCO" class="labelDow">Mot de passe</label>
                <ul class="messageError dis_none">
                    <li class="txtError"></li>
                    <li class="txtError"></li>
                    <li class="txtError"></li>
                </ul>
                <span style="color:red"><?php echo $messageCo?></span>
            </div>
            <input type="submit" value="Connexion" name="connexion" style="padding: 12px;">
            <p style="display: flex; justify-content: space-between;">Mot de passe oublié ?
                <a href="/MangaSky/inscription">Créer un compte</a>
            </p>
        </form>
    </main>