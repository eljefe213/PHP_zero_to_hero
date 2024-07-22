<?php 
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
require('header.php');
?>
   


<form action="/game.php" method="GET">
    <?php foreach($flavours as $flavour => $price): ?>
    <div type="checkbox">
        <label>
            <?= checkbox('flavour', $flavour, $_GET) ?>
            <?= $flavour ?> - <?= $price ?> €
        </label>
    </div>
    <?php endforeach ?>
    <?php foreach($cones as $cone => $price): ?>
    <div type="radio">
        <label>
            <?= radio('cone', $cone, $_GET) ?>
            <?= $cone ?> - <?= $price ?> €
        </label>
    </div>
    <?php endforeach ?>
    <?php foreach($supplements as $supplement => $price): ?>
    <div class="checkbox">
        <label>
            <?= checkbox('supplement', $supplement, $_GET) ?>
            <?= $supplement ?> - <?= $price ?> € 
        </label>
    </div>
    <?php endforeach ?>
    <button type="submit">Compose your ice cream</button>
</form>

<h2>$_GET</h2>
<pre>
    <?php var_dump($_GET); ?>
</pre>

<h2>$_POST</h2>
<pre>
    <?php var_dump($_POST); ?>
</pre>
<?php require 'footer.php'; ?>