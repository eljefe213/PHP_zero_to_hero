<?php 
$toGuess =  150;
require('header.php');
?>

<?php if ($_GET['number'] > $toGuess): ?>
    Your number is too big
<?php elseif ($_GET['number'] < $toGuess) : ?>
    Your number is too small
<?php else: ?>
    Great !!! Your number is the right number <?= $toGuess; ?>
<?php endif ?>


<form action="/game.php" method="GET">
    <input type="number" name="number" placeholder="enter 0 and 1000" value="<?= htmlentities($_GET['number']) ?>">
    <button type="submit">Guess</button>
</form>

<?php require 'footer.php'; ?>