<!--Connexion à GSB -->
<br>
<br>
<div class="container">
    <div class="jumbotron">
        <div class="container">
            <div style="text-align: center;"><h2>Authentification</h2></div>
            <form method="POST" action="index.php?uc=connexion&action=valideConnexion">
                <div class="form-group">
                    <label for="nom">Login</label>
                    <input type="login" class="form-control" id="nom" name="login" placeholder="login">
                </div>

                <div class="form-group">
                    <label for="mdp">Mot de passe</label>
                    <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                </div>

                <button type="submit" value="Valider" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
</div>
