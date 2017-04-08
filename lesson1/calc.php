<?php
/**
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

// Enable all php errors
error_reporting(-1);

$result = null;
$errors = [];
if (isset($_GET['operation'])) {
    $a = isset($_GET['a']) ? $_GET['a'] : null;
    $b = isset($_GET['b']) ? $_GET['b'] : null;

    if (!empty($a) && !is_numeric($a)) {
        $errors['a'][] = 'The value must be a number!';
    }
    if (!empty($b) && !is_numeric($b)) {
        $errors['b'][] = 'The value must be a number!';
    }

    if (empty($a)) {
        $errors['a'][] = 'Field cannot be blank!';
    }
    if (empty($b)) {
        $errors['b'][] = 'Field cannot be blank!';
    }

    if (empty($errors)) {
        switch ($_GET['operation']) {
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $a / $b;
                break;
            default:
                $result = 'Undefined operation';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" name="a" value="<?= isset($_GET['a']) ? $_GET['a'] : '' ?>">
        <select name="operation">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="b" value="<?= isset($_GET['b']) ? $_GET['b'] : '' ?>">
        <button type="submit">Calculate</button>
    </form>
    <h3>
        <?= isset($result) ? "Result: $result" : '' ?>
    </h3>
    <?php if (!empty($errors)): ?>
        <?php foreach ($errors as $number => $messages): ?>
            <h4>Number [<?= $number ?>]</h4>
            <?php foreach ($messages as $message): ?>
                <p style="color: darkred"><?= $message ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
