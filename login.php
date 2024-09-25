<?php
require 'elements/header.php';
?>

<form action="" method="post">
    <div class="form-group">
        <input type="text" name="username" placeholder="Enter your username">
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>

<?php require 'elements/footer.php'; ?>