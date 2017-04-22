<?php
/**
 * Main functions
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */

/**
 * Get gallery categories list
 *
 * @param string $baseDir
 * @return array
 */
function getCategoryList($baseDir) {
    $categories = [];
    $d = opendir($baseDir);
    while ($entry = readdir($d)) {
        if (!is_dir($baseDir . DIRECTORY_SEPARATOR . $entry) || $entry == '.' || $entry == '..') {
            continue;
        }
        $categories[] = $entry;
    }

    return $categories;
}

/**
 * Get images from category
 *
 * @param string $baseDir
 * @param string $categoryName
 * @return array
 */
function getCategoryImages($baseDir, $categoryName) {
    $images = [];
    $path = $baseDir . $categoryName;

    if (is_dir($path)) {
        $d = opendir($path);
        while ($entry = readdir($d)) {
            if (!is_file($path . DIRECTORY_SEPARATOR . $entry)) {
                continue;
            }
            $images[] = $entry;
        }
    }

    return $images;
}
