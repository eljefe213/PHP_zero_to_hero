<?php 
require_once 'functions.php';
// Checkbox 
$flavours = [
    'Strawberry' => 4,
    'Chocolate' => 5,
    'Vanilla' => 3
];
//Radio 
$cones = [
    'Tub' => 2,
    'Cone' =>3
];
// Checkbox
$supplements = [
    'chocolate chips' => 1,
    'Sweet whipped cream' => 0.5
];
$title = 'compose your ice cream';
$ingredients = [];
$total = 0;
if (isset($_GET['flavour'])) {
    foreach($_GET['flavour'] as $flavour) {
        if(isset($flavours[$flavour])) {
            $ingredients[] = $flavour;
            $total += $flavours[$flavour];
        }
    }
}
if (isset($_GET['supplement'])) {
    foreach($_GET['supplement'] as $supplement) {
        if(isset($supplements[$supplement])) {
            $ingredients[] = $supplement;
            $total += $supplements[$supplement];
        }
    }
}
if (isset($_GET['supplement'])) {
    $cone = $_GET['cone'];
    if(isset($cones[$cone])) {
        $ingredients[] = $cone;
        $total += $cones[$cone];
    }
    
}
require('header.php');
?>

<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Your ice cream :</h5>
                <ul>
                    <?php foreach($ingredients as $ingredient): ?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach; ?>    
                </ul>
                <p>
                    <strong>price : </strong> <?= $total ?> €
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <form action="/game.php" method="GET">
            <h2>Choose your flavours :</h2>
            <?php foreach($flavours as $flavour => $price): ?>
            <div type="checkbox">
                <label>
                    <?= checkbox('flavour', $flavour, $_GET) ?>
                    <?= $flavour ?> - <?= $price ?> €
                </label>
            </div>
            <?php endforeach ?>
            <h2>Choose your cone :</h2>
            <?php foreach($cones as $cone => $price): ?>
            <div type="radio">
                <label>
                    <?= radio('cone', $cone, $_GET) ?>
                    <?= $cone ?> - <?= $price ?> €
                </label>
            </div>
            <?php endforeach ?>
            <h2>Choose your supplement :</h2>
            <?php foreach($supplements as $supplement => $price): ?>
            <div class="checkbox">
                <label>
                    <?= checkbox('supplement', $supplement, $_GET) ?>
                    <?= $supplement ?> - <?= $price ?> € 
                </label>
            </div>
            <?php endforeach ?>
            <button type="submit" class="btn btn-primary">Compose your ice cream</button>
        </form>
    </div>
</div>
   




<h2>$_GET</h2>
<pre>
    <?php var_dump($_GET); ?>
</pre>

<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST); ?>
</pre>
<?php require 'footer.php'; ?>