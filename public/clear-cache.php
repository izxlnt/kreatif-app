<?php
/**
 * Clear Laravel Cache via Browser
 * Upload to public/ folder and access via browser
 * Delete after use for security
 */

echo "<h2>Laravel Cache Clear</h2>";

// Clear config cache
if (file_exists('../bootstrap/cache/config.php')) {
    unlink('../bootstrap/cache/config.php');
    echo "✓ Config cache cleared<br>";
}

// Clear route cache
if (file_exists('../bootstrap/cache/routes-v7.php')) {
    unlink('../bootstrap/cache/routes-v7.php');
    echo "✓ Routes cache cleared<br>";
}

// Clear compiled views
$viewsPath = '../storage/framework/views/';
if (is_dir($viewsPath)) {
    $files = glob($viewsPath . '*');
    foreach ($files as $file) {
        if (is_file($file) && basename($file) !== '.gitignore') {
            unlink($file);
        }
    }
    echo "✓ Compiled views cleared<br>";
} else {
    echo "✗ Views directory doesn't exist!<br>";
}

// Clear cache files
$cachePath = '../storage/framework/cache/data/';
if (is_dir($cachePath)) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($cachePath, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    foreach ($files as $file) {
        if (basename($file) !== '.gitignore') {
            $file->isDir() ? rmdir($file) : unlink($file);
        }
    }
    echo "✓ Application cache cleared<br>";
}

echo "<hr>";
echo "<h3 style='color: green;'>Cache cleared! Delete this file now.</h3>";
?>
