<?php

$content = file_get_contents('resources/views/user/index.blade.php');

// Tìm section 2 (Danh mục nổi bật)
// Bắt đầu từ '<section class="mt-8">' thứ 2
$pos = strpos($content, '<section class="mt-8">', 0); // Lần 1
$pos = strpos($content, '<section class="mt-8">', $pos + 1); // Lần 2

// Kết thúc ở section tiếp theo
$nextSection = strpos($content, '<section>', $pos);
if ($nextSection === false) $nextSection = strpos($content, '<section ', $pos + 10);

$categories = substr($content, $pos, $nextSection - $pos);

// Tìm section chứa products (Bắt đầu từ "Mẫu Thiệp Bán Chạy")
// Dùng regex để tìm section đó
preg_match('/<section class="lg:my-14 my-8">.*?<\/section>/s', $content, $matches);
$products = isset($matches[0]) ? $matches[0] : '';

// Nếu regex không tìm thấy, lấy thủ công
if (!$products) {
    $prodStart = strpos($content, '<section class="lg:my-14 my-8">');
    if ($prodStart) {
        $prodEnd = strpos($content, '</section>', $prodStart);
        $products = substr($content, $prodStart, $prodEnd - $prodStart + 10);
    }
}

// Tạo file shop.blade.php
$shopBlade = "@extends('layouts.user')\n\n@section('content')\n\n";
$shopBlade .= $categories . "\n\n";
$shopBlade .= $products . "\n\n";
$shopBlade .= "@endsection\n";

file_put_contents('resources/views/user/shop.blade.php', $shopBlade);

echo "Extracted shop.blade.php successfully.\n";

?>
