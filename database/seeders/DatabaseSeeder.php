<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $wedding = \App\Models\Category::create(['name' => 'Thiệp Cưới', 'slug' => 'thiep-cuoi', 'description' => 'Mẫu thiệp cưới sang trọng']);
        $birthday = \App\Models\Category::create(['name' => 'Sinh Nhật', 'slug' => 'sinh-nhat', 'description' => 'Mẫu thiệp sinh nhật vui nhộn']);
        $baby = \App\Models\Category::create(['name' => 'Thôi Nôi', 'slug' => 'thoi-noi', 'description' => 'Thiệp đầy tháng, thôi nôi']);

        \App\Models\Template::create([
            'category_id' => $wedding->id,
            'name' => 'Mẫu Thiệp Minimalist M01',
            'thumbnail' => '/assets/images/products/product-img-1.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $birthday->id,
            'name' => 'Thiệp Sinh Nhật S01',
            'thumbnail' => '/assets/images/products/product-img-2.jpg',
            'view_file' => 'templates.m02_birthday'
        ]);

        \App\Models\Template::create([
            'category_id' => $wedding->id,
            'name' => 'Thiệp Cưới Cổ Điển C03',
            'thumbnail' => '/assets/images/products/product-img-3.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $baby->id,
            'name' => 'Thiệp Thôi Nôi T04',
            'thumbnail' => '/assets/images/products/product-img-4.jpg',
            'view_file' => 'templates.m02_birthday'
        ]);

        \App\Models\Template::create([
            'category_id' => $wedding->id,
            'name' => 'Thiệp Ép Kim Sang Trọng E05',
            'thumbnail' => '/assets/images/products/product-img-5.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $birthday->id,
            'name' => 'Thiệp Sinh Nhật Hiện Đại S06',
            'thumbnail' => '/assets/images/products/product-img-6.jpg',
            'view_file' => 'templates.m02_birthday'
        ]);

        \App\Models\Template::create([
            'category_id' => $baby->id,
            'name' => 'Thiệp Đầy Tháng D07',
            'thumbnail' => '/assets/images/products/product-img-7.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $wedding->id,
            'name' => 'Thiệp Hoa Hồng Pastel H08',
            'thumbnail' => '/assets/images/products/product-img-8.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $wedding->id,
            'name' => 'Thiệp Đỏ Chữ Hỷ T09',
            'thumbnail' => '/assets/images/products/product-img-9.jpg',
            'view_file' => 'templates.m01_wedding'
        ]);

        \App\Models\Template::create([
            'category_id' => $birthday->id,
            'name' => 'Thiệp Sinh Nhật Đáng Yêu S10',
            'thumbnail' => '/assets/images/products/product-img-10.jpg',
            'view_file' => 'templates.m02_birthday'
        ]);
    }
}
