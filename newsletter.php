<?php
$error = null;
$email = null;
$success = null;
$directory = __DIR__ . DIRECTORY_SEPARATOR . 'emails';

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $directory = __DIR__ . DIRECTORY_SEPARATOR . 'emails';
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        $file = $directory . DIRECTORY_SEPARATOR . date('Y-m-d');
        if (file_put_contents($file, $email . PHP_EOL, FILE_APPEND) === false) {
            $error = "Failed to save the email.";
        } else {
            $success = "Your email was submitted successfully !!";
            $email = null;
        }
    } else {
        $error = "Invalid email !!";
    }
}
require 'elements/header.php';
?>

<h1>Register to the newsletter</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus deleniti esse, mollitia debitis impedit eius et accusantium tenetur assumenda voluptate cum commodi reprehenderit praesentium. Sed voluptatum fugit enim excepturi laudantium.</p>

<?php if ($error): ?>
    <div class="alert alert-danger">
        <?= htmlspecialchars($error) ?>
    </div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($success) ?>
    </div>
<?php endif; ?>

<form action="/newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input type="email" name="email" placeholder="Entre your email" class="form-control" value="<?= isset($email) ? htmlentities($email) : '' ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>

<?php require 'elements/footer.php'; ?>