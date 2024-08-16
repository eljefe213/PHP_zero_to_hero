<?php
$error = null;
$email = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    } else {
        $error = "Invalid email !!";
    }
}
require 'elements/header.php';
?>

<h1>Register to the newsletter</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus deleniti esse, mollitia debitis impedit eius et accusantium tenetur assumenda voluptate cum commodi reprehenderit praesentium. Sed voluptatum fugit enim excepturi laudantium.</p>

<form action="/newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" placeholder="Entre your email" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php require 'elements/footer.php'; ?>