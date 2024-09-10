<?php
session_start();
$title = 'Contact us';
require_once './functions.php';
require_once './data/config.php';
date_default_timezone_set('Europe/Paris');
$hour = (int)($_GET['hour'] ?? date('G'));
$day = (int)($_GET['day'] ?? date('N') - 1);
$slots = SLOTS[$day];
//$slots = slots_html(SLOTS);
$open = in_slots($hour, $slots);
$color = $open ? 'green' : 'red';
require './elements/header.php';

?>

<div class="row">
    <div class="col-md-8">
        <h2>Debug</h2>
        <pre>
            <?= var_dump($_SESSION); ?>
        </pre>
        <h2>Contact us</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi, ullam. Dicta minima alias aperiam ut vero!</p>
    </div>
    <div class="col-md-4">
        <h2>Opening hours</h2>
        <?php if ($open): ?>
            <div class="alert alert-success">
                The store will be open
            </div>
        <?php else: ?>
            <div class="alert alert-danger">
                The store will be close
            </div>
        <?php endif ?>

        <form action="" method="GET">
            <div class="form-group">
                <?= select('day', $day, DAYS) ?>
            </div>
            <div class="form-group">
                <input class="form-control" type="number" name="hour" value="<?= $hour ?>">
            </div>
            <button class="btn btn-primary" type="submit">Check if the store is open</button>
        </form>

        <ul>
            <?php foreach (DAYS as $k => $day): ?>
                <li>
                    <strong><?= $day ?></strong> :
                    <?= slots_html(SLOTS[$k]); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>



<?php require './elements/footer.php'; ?>