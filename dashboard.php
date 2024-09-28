<?php
require_once 'functions/auth.php';
connected_user();
require_once 'functions/counter.php';
$year = (int)date('Y');
$selected_year = empty($_GET['year']) ? null : (int)$_GET['year'];
$selected_month = empty($_GET['month']) ? null : (int)$_GET['month'];
if ($selected_year && $selected_month) {
    $total = number_view_monthly($selected_year, $selected_month);
    $details = number_view_monthly_details($selected_year, $selected_month);
} else {
    $total = number_view();
}
$months = [
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December'
];
require_once 'elements/header.php';
?>
<div class="row">
    <div class="col-md-4">
        <div class="list-group">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <a class="list-group-item <?= $year - $i === $selected_year ? 'active' : ''; ?>" href="dashboard.php?year=<?= $year - $i ?>"><?= $year - $i ?></a>
                <?php if ($year - $i === $selected_year) : ?>
                    <div class="list-group">
                        <?php foreach ($months as $k => $month): ?>
                            <a class="list-group-item <?= $k === $selected_month ? 'active' : ''; ?>" href="dashboard.php?year=<?= $selected_year ?>&month=<?= $k ?>">
                                <?= $month ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                <?php endif ?>
            <?php endfor ?>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-body">
                <strong style="font-size: 3em;"><?= $total ?></strong><br>
                Total visit<?= $total > 1 ? 's' : '' ?>
            </div>
        </div>
        <?php if (isset($details)) : ?>
            <h2>details of visits for the month</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Day</th>
                        <th>Number of visits</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($details as $detail) : ?>
                        <tr>
                            <td><?= $detail['day'] ?></td>
                            <td><?= $detail['visits'] ?> visit<?= $detail['visits'] > 1 ? 's' : '' ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>
</div>

<?php require 'elements/footer.php'; ?>