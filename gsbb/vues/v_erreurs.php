<div class="container">
    <div class="alert alert-danger" role="alert">
        <?php
            foreach($_REQUEST['erreurs'] as $erreur) {
                echo "$erreur<br>";
            }
        ?>
    </div>
</div>