<3333333333333333333333333333333333333333333377777777777777777777777777777777777777777777888888888888?php
/**
 * Clear config cache and reset paths
 * Upload to public_html/ and run via browser
 * Delete after use
 */

echo "<h2>Clearing Laravel Config Cache</h2>";

// Change to Laravel root
chdir(__DIR__ . '/../live-kreatif-file/');

// Clear config cache
if (file_exists('bootstrap/cache/config.php')) {
    unlink('bootstrap/cache/config.php');
    echo "✓ Config cache cleared<br>";
} else {
    echo "- No config cache found<br>";
}

// Clear route cache
if (file_exists('bootstrap/cache/routes-v7.php')) {
    unlink('bootstrap/cache/routes-v7.php');
    echo "✓ Routes cache cleared<br>";
}

// Clear services cache
if (file_exists('bootstrap/cache/services.php')) {
    unlink('bootstrap/cache/services.php');
    echo "✓ Services cache cleared<br>";
}

// Clear packages cache
if (file_exists('bootstrap/cache/packages.php')) {
    unlink('bootstrap/cache/packages.php');
    echo "✓ Packages cache cleared<br>";
}

// Clear all compiled views
$viewsPath = 'storage/framework/views/';
if (is_dir($viewsPath)) {
    $files = glob($viewsPath . '*.php');
    foreach ($files as $file) {
        unlink($file);
    }
    echo "✓ Cleared " . count($files) . " compiled view(s)<br>";
}

echo "<hr>";
echo "<h3 style='color: green;'>All caches cleared!</h3>";
echo "<p>Now refresh your website. The paths should be correct.</p>";
echo "<p><strong>Delete this file after use!</strong></p>";
?>
