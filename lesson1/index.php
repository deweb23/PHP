<?php
/**
 * PHP tags, variables
 *
 * PHP config:
 * 1) php.ini file
 * 2) server configuration - nginx, apache etc.
 * 3) php_set() function
 *
 * PHPStorm hot keys
 * Double shift
 * Ctrl + Shift + N - search files
 * Ctrl + Shift + Alt + N - search function by name
 * Ctrl + Shift + F - search code
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

/*
 * Data types:
 * integer
 * float
 * string
 * boolean
 * array
 * object
 * resource
 * null
 */

//Create a variables
$i = 2; // integer
$f = 2.0; // float

$str1 = '$i\n'; // string
$str2 = "$i\n"; // string

$a = array(); // array
$a = []; // array

$o = new \stdClass(); // object
$b = true; // boolean
$n = null; // null

echo "\"double quote\"";
echo '\'single quote\'';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
    <h1>
        <?php echo 'Hello, World!' ?>
    </h1>
    <p>
        <?= 'This short version of the \'echo\' operator' ?>
    </p>
</body>
</html>
