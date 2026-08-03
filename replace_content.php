<?php

function updateFile($filePath, $replacements, $regexReplacements = []) {
    if (!file_exists($filePath)) return;
    $content = file_get_contents($filePath);
    foreach ($replacements as $search => $replace) {
        $content = str_replace($search, $replace, $content);
    }
    foreach ($regexReplacements as $pattern => $replace) {
        $content = preg_replace($pattern, $replace, $content);
    }
    file_put_contents($filePath, $content);
}

// 1. Thay đổi index.blade.php
$indexReplacements = [
    'Dairy, Bread & Eggs' => 'Thiệp Truyền Thống',
    'Snack & Munchies' => 'Thiệp Tối Giản',
    'Bakery & Biscuits' => 'Thiệp Hoa Lá',
    'Instant Food' => 'Thiệp Sang Trọng',
    'Tea, Coffee & Drinks' => 'Thiệp Vintage',
    'Atta, Rice & Dal' => 'Thiệp Acrylic',
    'Baby Care' => 'Thiệp Kraft',
    'Chicken, Meat & Fish' => 'Thiệp Ép Kim',
    'Cleaning Essentials' => 'Thiệp Cắt Laser',
    'Pet Care' => 'Phụ Kiện Thiệp',
    'Fruits & Vegetables' => 'Bộ Sưu Tập Mùa Thu',
    'Freshly Baked Buns' => 'Thiệp Theo Yêu Cầu',
    "Haldiram's Sev Bhujia" => 'Mẫu Thiệp Minimalist M01',
    'NutriChoice Digestive' => 'Thiệp Hoa Hồng Pastel H02',
    'Cadbury 5 Star Chocolate' => 'Thiệp Ép Kim Sang Trọng E05',
    'Onion Flavour Potato' => 'Thiệp Đỏ Chữ Hỷ T09',
    'Salted Instant Popcorn' => 'Thiệp Cưới Dập Nổi D01',
    'Blueberry Greek Yogurt' => 'Thiệp Cưới Bìa Cứng C03',
    'Britannia Cheese Slices' => 'Thiệp Phong Cách Tây T07',
    "Kellogg's Original Cereals" => 'Thiệp Cắt Laser L04',
    'Slurrp Millet Chocolate' => 'Sáp Niêm Phong S02',
    'Amul Roaster Dosa' => 'Thiệp Mica Trong Suốt M05',
];

$indexRegex = [
    '/Opening\s+Sale\s+Discount\s+50%/' => 'Ưu Đãi Mùa Cưới Giảm 50%',
    '/SuperMarket\s+For\s+Fresh\s+Grocery/' => 'Thiết Kế Thiệp Cưới Hiện Đại & Tinh Tế',
    '/Introduced\s+a\s+new\s+model\s+for\s+online\s+grocery\s+shopping\s+and\s+convenient\s+home\s+delivery\./' => 'Mang đến những bộ sưu tập thiệp cưới đa dạng phong cách, giúp ngày trọng đại của bạn thêm phần hoàn hảo.',
    '/Free\s+Shipping\s+-\s+orders\s+over\s+\$100/' => 'Miễn Phí In Ấn & Giao Hàng Toàn Quốc',
    '/Free\s+Shipping\s+on\s*<br \/>\s*orders\s+over\s*<span\s+class="text-green-600">\$100<\/span>/' => 'Miễn Phí In Ấn<br />đơn từ<span class="text-green-600">500 thiệp</span>',
    '/Free\s+Shipping\s+to\s+First-Time\s+Customers\s+Only,\s+After\s+promotions\s+and\s+discounts\s+are\s+applied\./' => 'Áp dụng cho đơn hàng từ 500 thiệp trở lên trong mùa cưới này.',
    '/Get\s+Upto\s*<span\s+class="font-bold\s+text-gray-800">30%<\/span>\s*Off/' => 'Nhận ngay ưu đãi <span class="font-bold text-gray-800">30%</span>',
    '/Get\s+Upto\s*<span\s+class="font-bold\s+text-gray-800">25%<\/span>\s*Off/' => 'Nhận ngay ưu đãi <span class="font-bold text-gray-800">25%</span>',
    '/Popular\s+Products/' => 'Mẫu Thiệp Bán Chạy',
    '/Featured\s+Categories/' => 'Danh Mục Nổi Bật',
];
updateFile('resources/views/user/index.blade.php', $indexReplacements, $indexRegex);

// 3. Thay đổi navbar.blade.php
$navbarReplacements = [
    'Search for products' => 'Tìm kiếm mẫu thiệp cưới...',
    'Freshcart' => 'WeddingCard',
    'Departments' => 'Danh mục',
    'Home' => 'Trang Chủ',
    'Shop' => 'Mẫu Thiệp',
    'Stores' => 'Bộ Sưu Tập',
    'Mega menu' => 'Khuyến Mãi',
    'Pages' => 'Về Chúng Tôi',
    'Account' => 'Tài Khoản',
    'Dashboard' => 'Bảng điều khiển',
    'Docs' => 'Tài liệu',
    'Dairy, Bread & Eggs' => 'Thiệp Truyền Thống',
    'Snack & Munchies' => 'Thiệp Tối Giản',
    'Bakery & Biscuits' => 'Thiệp Hoa Lá',
    'Instant Food' => 'Thiệp Sang Trọng',
    'Tea, Coffee & Drinks' => 'Thiệp Vintage',
    'Atta, Rice & Dal' => 'Thiệp Acrylic',
    'Baby Care' => 'Thiệp Kraft',
    'Chicken, Meat & Fish' => 'Thiệp Ép Kim',
    'Cleaning Essentials' => 'Thiệp Cắt Laser',
    'Pet Care' => 'Phụ Kiện Thiệp',
];
updateFile('resources/views/user/partials/navbar.blade.php', $navbarReplacements);

// 4. Thay đổi footer.blade.php
$footerReplacements = [
    'Freshcart' => 'WeddingCard',
    'Categories' => 'Danh Mục',
    'Get to know us' => 'Về Chúng Tôi',
    'For Consumers' => 'Dịch Vụ Khách Hàng',
    'Become a Shopper' => 'Đại Lý Phân Phối',
    'Dairy, Bread & Eggs' => 'Thiệp Truyền Thống',
    'Snack & Munchies' => 'Thiệp Tối Giản',
    'Bakery & Biscuits' => 'Thiệp Hoa Lá',
    'Instant Food' => 'Thiệp Sang Trọng',
    'Tea, Coffee & Drinks' => 'Thiệp Vintage',
    'Atta, Rice & Dal' => 'Thiệp Acrylic',
    'Baby Care' => 'Thiệp Kraft',
    'Chicken, Meat & Fish' => 'Thiệp Ép Kim',
];
updateFile('resources/views/user/partials/footer.blade.php', $footerReplacements);

echo "Done replacing content.\n";

?>
