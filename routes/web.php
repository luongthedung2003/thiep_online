<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\TemplateController;
use App\Models\Template;

Route::get('/', function () {
    $templates = Template::with('category')->take(10)->get();
    return view('user.index', compact('templates'));
});

Route::get('/mau-thiep', [TemplateController::class, 'index']);
Route::get('/mau-thiep/{id}/edit', [TemplateController::class, 'edit']);
Route::get('/mau-thiep/{id}/preview', [TemplateController::class, 'preview']);
Route::post('/save-invitation', [TemplateController::class, 'save']);
Route::get('/thiep/{slug}', [TemplateController::class, 'show']);

Route::get('/lien-he', function () {
    return view('user.contact');
})->name('contact');

Route::get('/danh-gia', function () {
    $posts = collect([
        (object)[
            'id' => 1,
            'user' => (object)['name' => 'Ngọc Linh', 'avatar' => null, 'role' => 'member'],
            'created_at' => now()->subHours(2),
            'image' => 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'video_url' => null,
            'content' => 'Mình vừa in xong bộ thiệp ép kim bên shop, thực sự quá ưng ý luôn! Giấy dày dặn, màu ép kim sáng bóng sang trọng vô cùng. Cảm ơn team đã hỗ trợ nhiệt tình nhé ❤️',
            'is_liked' => true,
            'likes_count' => 124,
            'comments' => collect([
                (object)[
                    'user' => (object)['name' => 'Thiệp Cưới Team', 'avatar' => null],
                    'content' => 'Cảm ơn bạn đã tin tưởng dịch vụ của shop ạ!',
                    'created_at' => now()->subHours(1)
                ]
            ])
        ],
        (object)[
            'id' => 2,
            'user' => (object)['name' => 'Hoàng Nam', 'avatar' => null, 'role' => 'member'],
            'created_at' => now()->subDays(1),
            'image' => 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'video_url' => null,
            'content' => 'Thiết kế thiệp online rất tiện lợi, mình và vợ đã tự thiết kế mẫu thiệp mang phong cách riêng của hai đứa. Rất khuyến khích mọi người trải nghiệm thử!',
            'is_liked' => false,
            'likes_count' => 89,
            'comments' => collect([])
        ],
        (object)[
            'id' => 3,
            'user' => (object)['name' => 'Thu Hà', 'avatar' => null, 'role' => 'member'],
            'created_at' => now()->subDays(2),
            'image' => 'https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'video_url' => null,
            'content' => 'Mẫu thiệp truyền thống bên mình rất đẹp, font chữ rõ nét. Gia đình hai bên đều khen nức nở.',
            'is_liked' => true,
            'likes_count' => 256,
            'comments' => collect([
                (object)[
                    'user' => (object)['name' => 'Phương Anh', 'avatar' => null],
                    'content' => 'Mẫu này mã bao nhiêu vậy bạn?',
                    'created_at' => now()->subDays(1)
                ],
                (object)[
                    'user' => (object)['name' => 'Thu Hà', 'avatar' => null],
                    'content' => 'Mã T05 nha bạn ơi',
                    'created_at' => now()->subHours(12)
                ]
            ])
        ]
    ]);
    return view('user.ratings', compact('posts'));
});
Route::post('/danh-gia/post', function () {
    return redirect()->back()->with('success', 'Đã đăng bài viết (tính năng đang phát triển)');
})->name('community.post');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
