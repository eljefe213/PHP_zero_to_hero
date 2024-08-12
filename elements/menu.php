<?php
if (!function_exists('nav_link')) {
    function nav_link (string $link, string $title, string $linkClass = ''): string
    {
    $class = 'nav-link';
    if($_SERVER['SCRIPT_NAME'] === $link) {
        $class .= ' active';
    }
    return <<<HTML
    <li class="nav-item">
        <a class="$linkClass" href="$link">$title</a>
        </li>
HTML;
    }
} 

?>


<?= nav_link('/index.php', 'Home', $class); ?>
<?= nav_link('/contact.php', 'Contact', $class); ?>