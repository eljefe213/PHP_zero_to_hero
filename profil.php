<?php
// $name = null;
// if (!empty($_GET['action']) && $_GET['action'] === 'deconnexion') {
//     unset($_COOKIE['user']);
//     setcookie('user', '', time() - 10);
// }
// if (!empty($_COOKIE['user'])) {
//     $name = $_COOKIE['user'];
// }
// if (!empty($_POST['name'])) {
//     setcookie('user', $_POST['name']);
//     $name = $_POST['name'];
// }
$user = [
    'lastname' => 'John',
    'name' => 'Doe',
    'age' => 18
];
var_dump(serialize($user));
 die();
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