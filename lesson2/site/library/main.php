<?php
/**
 * File with main functions
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

/**
 * Renders template file
 * @param string $templateName Name of the template
 */
function renderTemplate($templateName)
{
    include "templates/$templateName.tpl.php";
}

/**
 * Renders page file
 * @param string $pageName Name of the page
 */
function renderPage($pageName)
{
    include 'pages' . DIRECTORY_SEPARATOR . $pageName . '.php';
}
