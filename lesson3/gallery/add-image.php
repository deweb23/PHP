<?php
/**
 * Image upload handler
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

require_once 'main.php';

$galleryDir = 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) &&
        $_FILES['image']['error'] === 0 &&
        (!empty($_POST['newCategory']) || !empty($_POST['category']))) {
        $targetDir = $galleryDir . ((empty($_POST['category'])) ? $_POST['newCategory'] : $_POST['category']);
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = mktime() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . DIRECTORY_SEPARATOR . $fileName)) {
            header('Location: /lesson3/gallery/add-image.php');
        }
    }
    else {
        echo 'Cannot load file!';
    }
}

$categories = getCategoryList($galleryDir);
?>
<form action="" method="post" enctype="multipart/form-data">
    <?php if (!empty($categories)): ?>
        <select name="category">
            <option value="" selected disabled>
                -- Select category --
            </option>
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category ?>">
                    <?= $category ?>
                </option>
            <?php endforeach; ?>
        </select><br><br>
    <?php endif; ?>
    <input type="text" name="newCategory" placeholder="Category"><br><br>
    <input type="file" name="image"><br><br>
    <button type="submit">Upload image</button>
</form>

