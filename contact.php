
<?php 
$title = 'Nous contacter';
require_once 'functions.php';
require_once 'config.php';
date_default_timezone_set('Europe/Paris');
$hour = (int)date('G');
$slots = SLOTS[date('N') - 1];
//$slots = slots_html(SLOTS);
$open = in_slots($hour, $slots);
$color = 'green';
if (!$open) {
    $color = 'red';
}
require 'header.php'; 

?>

<div class="row">
    <div class="col-md-8">
        <h2>Contact us</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, ullam. Dicta minima alias aperiam ut vero!</p>
    </div>
    <div class="col-md-4">
        <h2>Opening hours</h2>
        <?php if ($open): ?>
        <div class="alert alert-success">
            The store is open
        </div>
        <?php else: ?>
        <div class="alert alert-danger">
            The store is close
        </div>
        <?php endif ?>
        <ul>
            <?php foreach(DAYS as $k => $day): ?>
                <li <?php if ($k + 1 === (int)date('N')): ?> style="<?= $color; ?>" <?php endif ?>>
                    <strong><?= $day ?></strong> : 
                    <?= slots_html(SLOTS[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php require 'footer.php'; ?>