<?php
/**
 * Fix Laravel Storage Permissions
 * Upload this to your server root and access via browser
 * Delete this file after use for security
 */

echo "<h2>Laravel Storage Permissions Fix</h2>";

$directories = [
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/testing',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache',
];

echo "<h3>Creating Directories...</h3>";
foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        if (mkdir($dir, 0775, true)) {
            echo "✓ Created: $dir<br>";
        } else {
            echo "✗ Failed to create: $dir<br>";
        }
    } else {
        echo "- Already exists: $dir<br>";
    }
}

echo "<h3>Setting Permissions...</h3>";
$storagePaths = [
    'storage',
    'bootstrap/cache',
];

foreach ($storagePaths as $path) {
    if (chmod($path, 0775)) {
        echo "✓ Set permissions on: $path<br>";
    } else {
        echo "✗ Failed to set permissions on: $path<br>";
    }
    
    // Recursively set permissions
    if (is_dir($path)) {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($path, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::SELF_FIRST
        );
        
        foreach ($iterator as $item) {
            $permission = $item->isDir() ? 0775 : 0664;
            if (chmod($item, $permission)) {
                echo "✓ " . $item->getPathname() . "<br>";
            }
        }
    }
}

echo "<h3>Creating .gitignore files...</h3>";
$gitignores = [
    'storage/framework/cache/.gitignore' => '*' . PHP_EOL . '!.gitignore',
    'storage/framework/sessions/.gitignore' => '*' . PHP_EOL . '!.gitignore',
    'storage/framework/testing/.gitignore' => '*' . PHP_EOL . '!.gitignore',
    'storage/framework/views/.gitignore' => '*' . PHP_EOL . '!.gitignore',
];

foreach ($gitignores as $file => $content) {
    if (file_put_contents($file, $content)) {
        echo "✓ Created: $file<br>";
    } else {
        echo "✗ Failed to create: $file<br>";
    }
}

echo "<hr>";
echo "<h3 style='color: green;'>Done! Please delete this file (fix-permissions.php) for security.</h3>";
echo "<p>Try accessing your Laravel application again.</p>";
?>
