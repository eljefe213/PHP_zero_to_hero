<?php
$error = null;
$password = '$2y$14$ewojS9nNW6zi2DzyKhISk.5AkR99bQb6oJQdRo/bdAtGmBt.NPzo6';
if (!empty($_POST)) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "All fields are required";
    } elseif ($_POST['username'] === 'John' && password_verify($_POST['password'], $password)) {
        // connect the user 
        session_start();
        $_SESSION['connected'] = 1;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "Wrong username or password";
    }
}
require_once 'functions/auth.php';
if (is_connected()) {
    header('Location: dashboard.php');
    exit;
}
require_once 'elements/header.php';
?>
<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= $error; ?>
    </div>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Connexion</button>
</form>
<?php require_once 'elements/footer.php'; ?>