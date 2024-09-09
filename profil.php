<?php
require 'elements/header.php';
?>

<?php if ($name): ?>
    <h1>Hello <?= htmlentities($name) ?></h1>
    <a href="profil.php?action=deconnexion">Deconnexion</a>
<?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Enter your name">
        </div>
        <button class="btn btn-primary">Connexion</button>
    </form>
<?php endif; ?>

<?php require 'elements/footer.php'; ?>