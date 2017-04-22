<?php
/**
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

require_once 'main.php';

$galleryDir = 'uploads/';
$categories = getCategoryList($galleryDir);
?>
<?php if (!empty($categories)): ?>
<div>
    <?php foreach ($categories as $category): ?>
        <h2>
            <?= $category ?>
        </h2>
        <div>
            <?php $images = getCategoryImages($galleryDir, $category) ?>
            <?php foreach ($images as $image): ?>
                <img src="/lesson3/gallery/<?= $galleryDir . $category . DIRECTORY_SEPARATOR . $image ?>" alt="" width="200">
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
