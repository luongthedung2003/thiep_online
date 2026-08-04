<?php
$html = file_get_contents('homepage2.html');
$pos = strpos($html, 'Ưu Đãi Đặc Biệt');
echo substr($html, $pos, 4000);
