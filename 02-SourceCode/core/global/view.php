<?php
include_once __DIR__."/../views/View.php";

/**
 * Global view function
 */
function view(string $viewName, ?string $path = null, ?array $datas = null) : View
{
    $view = new view($path);
    return $view;
}
?>