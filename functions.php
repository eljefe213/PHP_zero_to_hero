<?php 
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

function nav_menu (string $linkClass = '') : string 
{
    return 
        nav_link('/index.php', 'Home', $linkClass) .
        nav_link('/contact.php', 'Contact', $linkClass);
}

function checkbox (string $name, string $value, array $data): string
{
    $attribute = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attribute .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value">
HTML;
}