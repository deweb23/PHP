<?php
/**
 * File system
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

$pathToFile = 'data/students.txt';
$error = '';
$students = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = 'name:' . (isset($_POST['Student']['name']) ? $_POST['Student']['name'] : '-');
    $data .= ';email:' . (isset($_POST['Student']['email']) ? $_POST['Student']['email'] : '-');
    $data .= ';phone:' . (isset($_POST['Student']['phone']) ? $_POST['Student']['phone'] : '-');
    $data .= "\r\n";

    if (file_put_contents($pathToFile, $data, FILE_APPEND)) {
        header('Location: /lesson3/file-system.php');
    }
    else {
        $error = 'Cannot write to data file';
    }
}

if (file_exists($pathToFile)) {
    $serializedData = file($pathToFile);

    foreach ($serializedData as $serializedString) {
        $tmp = explode(';', $serializedString);
        foreach ($tmp as $data) {
            $keyValue = explode(':', $data);
            $students[][$keyValue[0]] = $keyValue[1];
        }
    }
}
?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td, th {
        text-align: center;
        padding: 10px 20px;
        border: 1px solid #000;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>
<?php if (!empty($error)): ?>
<div>
    <h2 style="color: darkred;">
        <?= $error ?>
    </h2>
</div>
<?php endif; ?>
<form action="" method="post">
    <div class="form-group">
        <input type="text" name="Student[name]" placeholder="Name">
    </div>
    <div class="form-group">
        <input type="text" name="Student[email]" placeholder="E-mail">
    </div>
    <div class="form-group">
        <input type="text" name="Student[phone]" placeholder="Phone">
    </div>
    <button type="submit">Add  student</button>
</form>
<?php if (!empty($students)): ?>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($students as $student): ?>
        <tr>
            <td>
                <?= $student['name'] ?>
            </td>
            <td>
                <?= $student['email'] ?>
            </td>
            <td>
                <?= $student['phone'] ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
