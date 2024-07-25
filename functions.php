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
function radio (string $name, string $value, array $data): string
{
    $attribute = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attribute .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value">
HTML;
}
function dump($variable) {
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}
function slots_html (array $slots) {
    if (empty($slots)) {
        return 'Close';
    }
    $sentences = [];
    foreach($slots as $slot) {
        $sentences[] = "<strong>{$slot[0]}h</strong> to <strong>{$slot[1]}h</strong>";
    }
    //dump($sentences);
    return 'Open from ' . implode(' and ', $sentences);
}
function in_slots (int $hour, array $slots): bool 
{
    foreach ($slots as $slot) {
        $start = $slot[0];
        $end = $slot[1];
        if ($hour >= $start && $hour <= $end) {
            return true;
        }
    }
    return false;
}