<?php
$name = null;
if (!empty($_COOKIE['user'])) {
    $name = $_COOKIE['user'];
}
if (!empty($_POST['name'])) {
    setcookie('user', $_POST['name']);
    $name = $_POST['name'];
}
require 'elements/header.php';
?>

<?php if ($name): ?>
    <h1>Hello <?= htmlentities($name) ?></h1>
<?php else: ?>
    <form action="" method="post">
        <div class="form-group">
            <input class="form-control" name="name" placeholder="Enter your name">
        </div>
        <button class="btn btn-primary">Connexion</button>
    </form>
<?php endif; ?>

<?php require 'elements/footer.php'; ?>