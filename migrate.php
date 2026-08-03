<?php
function replace_paths($content) {
    $content = str_replace('@@webRoot/node_modules/', '{{ asset(\'assets/libs/\') }}/', $content);
    $content = str_replace('node_modules/', '{{ asset(\'assets/libs/\') }}/', $content);
    $content = str_replace('@@webRoot/assets/', '{{ asset(\'assets/\') }}/', $content);
    $content = str_replace('assets/images/', '{{ asset(\'assets/images/\') }}/', $content);
    $content = str_replace('assets/css/', '{{ asset(\'assets/css/\') }}/', $content);
    $content = str_replace('assets/js/', '{{ asset(\'assets/js/\') }}/', $content);
    $content = str_replace('@@include("partials/', '@include("user.partials.', $content);
    $content = str_replace('.html")', '")', $content);
    return $content;
}

$partials = glob('src/partials/*.html');
foreach ($partials as $p) {
    $content = file_get_contents($p);
    $content = replace_paths($content);
    $name = basename($p, '.html');
    file_put_contents('resources/views/user/partials/' . $name . '.blade.php', $content);
}

$index = file_get_contents('src/index.html');
$index = replace_paths($index);
file_put_contents('resources/views/user/index.blade.php', $index);
echo 'Done';
