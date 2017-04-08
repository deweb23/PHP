<?php
/**
 * PHP tags, variables, operators, useful functions, constants
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
$str3 = <<<HEREDOC
Lorem ipsum dolor sit amet,
consectetur adipisicing elit.
Amet animi asperiores assumenda atque aut blanditiis
dolores eligendi esse eum eveniet id illum in
ipsa laboriosam libero maxime odit perferendis
praesentium provident quis quisquam recusandae reprehenderit repudiandae sunt,
unde veniam veritatis vero voluptate voluptatibus voluptatum.
HEREDOC;

$a = array(); // array
$a = []; // array

$o = new \stdClass(); // object
$b = true; // boolean
$n = null; // null

echo "\"double quote\"" . '<br>';
echo '\'single quote\'' . '<br>';

// Operators
$tempVar = 'temp var';
unset($tempVar); // delete variable
$res = isset($tempVar); // check is variable exists

$toCopy = 1;
$copied = $toCopy; // copy variable value
$copiedByLink &= $toCopy; // copy link to the variable
// @hello(); // ignore all php errors

// Useful functions
$number = 'it is a number';
settype($number, 'string');
echo 'Now it is a - ' . gettype($number) . '<br>'; // show type of variable

var_dump($number); // show type, size and value of variable

// die(); // break script work in this line

// Constants
define('PI', 14);
const Pi = 14;
var_dump(PI);
var_dump(Pi);
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
