<?php
/**
 * Run fix-permissions from the correct directory
 * Upload to public_html/ and access via browser
 * Delete after use
 */

chdir(__DIR__ . '/../live-kreatif-file/');
require __DIR__ . '/../live-kreatif-file/fix-permissions.php';
?>
