<?php
$error = null;
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] === 'John' && $_POST['password'] === 'Doe') {    
        // Connect the user
} else {
        // Display an error
        $error = 'Invalid username or password';
}
}
require 'elements/header.php';
?>
<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= $error; ?>
    </div>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="username" placeholder="Enter your username">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
<?php require 'elements/footer.php'; ?>