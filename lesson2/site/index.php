<?php
/**
 * Bootstrap file
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

require_once 'library/main.php';

// site/index.php?page=home
// site/index.php?page=contacts

$pageDir = 'pages';
$pageName = 'home';

$requestPage = (!empty($_GET['page'])) ? $_GET['page'] : $pageName;
$pathToPage = $pageDir . DIRECTORY_SEPARATOR . $requestPage . '.php';

renderTemplate('header');
renderPage($requestPage);
renderTemplate('footer');
