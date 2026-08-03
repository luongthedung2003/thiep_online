<?php
$content = file_get_contents('resources/views/user/index.blade.php');
preg_match('/<main>(.*?)<\/main>/s', $content, $matches);
$main = $matches[1];
$final = "@extends('layouts.user')\n\n@section('content')\n" . $main . "\n@endsection\n";
file_put_contents('resources/views/user/index.blade.php', $final);
echo 'Done';
