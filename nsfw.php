<?php

$age = null;

if (!empty($_POST['birthday'])) {
    setcookie('birthday', $_POST['birthday']);
    $_COOKIE['birthday'] = $_POST['birthday'];
}

if (!empty($_COOKIE['birthday'])) {
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}



require 'elements/header.php'; ?>

<?php if ($age && $age >= 18) : ?>
    <h1>This content is for adult only</h1>
<?php elseif ($age !== null) : ?>
    <div class="alert alert-danger">You don't have the required age to see this content</div>
<?php else : ?>


    <form action="" method="post">
        <div class="form-group">
            <label for="birthday">Adult only, enter your birthday :</label>
            <select name="birthday" id="birthday" class="form-control">
                <?php for ($i = 2010; $i > 1919; $i--) : ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor ?>
            </select>
        </div>
        <button type="submit">Send</button>
    </form>

<?php endif; ?>

<?php require 'elements/footer.php'; ?>