<?php
$content = renderTemplate("about", 1234);
$menu = renderTemplate('menu', 'Главная | О нас | Дополнения');

echo renderTemplate("layout", $content, $menu);

function renderTemplate($page, $content = '', $menu = '')
{
    ob_start();
    include $page . ".php";
    return  ob_get_clean();
}
