<?php
require 'functions/counter.php';
$total = number_view();
$year = (int)date('Y');
require 'elements/header.php';
?>
<div class="row">
    <div class="col-md-4">
        <ul class="list-group">

        </ul>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <strong style="font-size: 3em;"><?= $total ?></strong><br>
                Total visit<?= $total > 1 ? 's' : '' ?>
            </div>
        </div>
    </div>
</div>

<?php require 'elements/footer.php'; ?>