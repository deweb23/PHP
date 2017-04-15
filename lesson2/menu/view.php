<?php
/**
 * This is partial view file
 *
 * @var array $menu
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

include 'item.php';
//include_once 'item.php';

//require 'item.php';
//require_once 'item.php';
?>
<ul>
    <?php foreach ($menu as $item): ?>
        <li>
            <a href="<?= $item['url'] ?>" target="_blank">
                <?= $item['label'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
