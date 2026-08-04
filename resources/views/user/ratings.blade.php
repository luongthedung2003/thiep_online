@extends('layouts.user')

@section('title', 'Cộng đồng Thiệp Cưới')


@section('styles')
<style>
/* ─── THEME TOKENS (LIGHT & DARK COMPATIBLE) ─── */
:root {
    --bg-body: #F8F9FA;
    --bg-card: #FFFFFF;
    --bg-comment-overlay: #FFFFFF;
    --text-primary: #111111;
    --text-secondary: #4B5563;
    --text-muted: #9CA3AF;
    --border: rgba(0, 0, 0, 0.08);
    --accent: #E50914;
    --accent-dim: rgba(229, 9, 20, 0.1);
    --bg-deep: #f3f4f6;
}

.dark {
    --bg-body: #0B1A14;
    --bg-card: rgba(255, 255, 255, 0.03);
    --bg-comment-overlay: #121e1a; /* Solid dark green-black background for comment overlay in dark mode */
    --text-primary: #F3F4F6;
    --text-secondary: #D1D5DB;
    --text-muted: #9CA3AF;
    --border: rgba(255, 255, 255, 0.08);
    --accent: #3A3AFF;
    --accent-dim: rgba(58, 58, 255, 0.1);
    --bg-deep: #16241e;
}

body {
    background-color: var(--bg-body) !important;
    color: var(--text-primary) !important;
}

/* ─── SMOOTH SLIDING CREATE POST CARD STYLES ─── */
#create-post-card {
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    margin-bottom: 0;
    padding-top: 0 !important;
    padding-bottom: 0 !important;
    border-width: 0 !important;
    box-shadow: none !important;
    transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease, margin-bottom 0.4s cubic-bezier(0.4, 0, 0.2, 1), padding 0.4s cubic-bezier(0.4, 0, 0.2, 1), border-width 0.4s ease;
}

#create-post-card.show {
    max-height: 600px;
    opacity: 1;
    margin-bottom: 3rem !important;
    padding: 1.5rem !important;
    border: 1px solid var(--border) !important;
    border-color: rgba(255, 255, 255, 0.1) !important;
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1) !important;
}

/* ─── IN-POST COMMENT OVERLAY STYLES ─── */
.guide-post { 
    position: relative; 
    border: 1px solid var(--border) !important;
    background-color: var(--bg-card) !important;
    border-radius: 20px !important;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0,0,0,0.02);
    margin-bottom: 20px;
}

.comment-overlay {
    position: absolute;
    top: 40%;
    bottom: 0;
    left: 0;
    right: 0;
    background: var(--bg-comment-overlay) !important;
    z-index: 40; /* Lower than header (50) to prevent overlapping */
    display: none;
    flex-direction: column;
    border-radius: 0 0 20px 20px;
    overflow: hidden;
    box-shadow: 0 -4px 20px rgba(0,0,0,0.1);
    border-top: 1px solid var(--border);
    animation: slideDownIn 0.3s cubic-bezier(0.32, 0.72, 0, 1);
}

@keyframes slideDownIn {
    from { transform: translateY(20px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.comment-overlay.show { display: flex; }

.overlay-header { 
    padding: 12px 16px; 
    border-bottom: 1px solid var(--border); 
    display: flex; 
    justify-content: center; 
    position: relative; 
}
.overlay-header h3 { font-size: 0.95rem; font-weight: 700; color: var(--text-primary); }
.overlay-close { position: absolute; right: 15px; top: 50%; transform: translateY(-50%); background: none; border: none; font-size: 1.4rem; color: var(--text-muted); cursor: pointer; }

.overlay-content { 
    flex: 1; 
    overflow-y: auto; 
    padding: 15px; 
    scrollbar-width: none;
}
.overlay-content::-webkit-scrollbar { 
    display: none;
}

/* Mobile Adaptation (standard bottom sheet) */
@media (max-width: 768px) {
    .comment-overlay {
        position: fixed;
        inset: auto 0 0 0;
        height: 75vh;
        border-radius: 24px 24px 0 0;
        z-index: 20000 !important; /* Đè lên hoàn toàn thanh menu điều hướng di động (z-index 10000) và header */
        box-shadow: 0 -10px 40px rgba(0,0,0,0.3);
        padding-bottom: calc(15px + env(safe-area-inset-bottom));
    }
}

/* Comment UI Shared */
.sheet-comment-item { display: flex; gap: 10px; margin-bottom: 15px; align-items: flex-start; }
.sc-avatar { width: 32px; height: 32px; border-radius: 50% !important; overflow: hidden; flex-shrink: 0; border: 1px solid var(--border); background: #f1f5f9; display: flex; align-items: center; justify-content: center; }
.sc-avatar img { width: 100%; height: 100%; object-fit: cover; display: block; }
.sc-body { flex: 1; }
.sc-user { font-size: 0.85rem; font-weight: 600; color: var(--text-primary); display: flex; align-items: center; gap: 4px; white-space: nowrap; }
.sc-time { font-weight: 400; color: var(--text-muted); margin-left: 6px; font-size: 0.7rem; }
.sc-text { font-size: 0.82rem; color: var(--text-primary); line-height: 1.4; }
.sc-actions { font-size: 0.7rem; color: var(--text-muted); font-weight: 700; margin-top: 6px; cursor: pointer; }

.sheet-input-area { padding: 12px 15px; border-top: 1px solid var(--border); background: inherit; }
.sheet-form { display: flex; align-items: center; gap: 10px; }
.sheet-user-avatar { width: 28px; height: 28px; border-radius: 50% !important; }
.sheet-form input { flex: 1; background: none; border: none; color: var(--text-primary); font-size: 0.82rem; outline: none; }
.sheet-form input:focus { outline: none !important; box-shadow: none !important; border-color: transparent !important; }
.sheet-form button { background: none; border: none; color: #3a3aff; font-weight: 700; font-size: 0.82rem; cursor: pointer; outline: none; }
.sheet-login-hint { font-size: 0.8rem; color: var(--text-muted); text-align: center; }

/* ─── STORY MODAL STYLES ─── */
.story-modal { position: fixed; inset: 0; background: #000; z-index: 3000000; display: none; flex-direction: column; align-items: center; justify-content: center; }
.story-progress-container { position: absolute; top: 15px; left: 10px; right: 10px; height: 3px; background: rgba(255,255,255,0.3); border-radius: 2px; }
.story-progress-fill { height: 100%; width: 0; background: #FFF; border-radius: 2px; transition: width 0.1s linear; }
.story-header-overlay { position: absolute; top: 30px; left: 15px; right: 15px; display: flex; justify-content: space-between; align-items: center; z-index: 10; }
.story-user-info { display: flex; items-center; gap: 10px; }
.story-avatar { width: 36px; height: 36px; border-radius: 50% !important; background: #e50914; color: #FFF; display: flex; items-center; justify-content: center; font-weight: 800; font-size: 0.9rem; }
.story-user-name { color: #FFF; font-weight: 700; font-size: 0.9rem; }
.story-close { background: none; border: none; color: #FFF; font-size: 2rem; cursor: pointer; line-height: 1; }
.story-video-content { width: 100%; height: 100%; object-fit: contain; }

/* ─── VIDEO MODAL STYLES ─── */
.video-modal { position: fixed; inset: 0; background: rgba(0,0,0,0.8); z-index: 5000000; display: none; align-items: center; justify-content: center; padding: 20px; }
.modal-content { position: relative; width: 100%; max-width: 800px; aspect-ratio: 16/9; background: #000; border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); }
.close-modal { position: absolute; top: 15px; right: 15px; color: #FFF; font-size: 2rem; font-weight: 700; cursor: pointer; z-index: 10; }

/* ─── GENERAL GUIDE STYLING ─── */
.guide-container { max-width: 600px; margin: 0 auto; padding: 0 16px 80px 16px; transition: max-width 0.3s ease; }
.guide-stories { display: flex; gap: 16px; overflow-x: auto; padding: 10px 0 20px 0; margin-bottom: 20px; scrollbar-width: none; }
.guide-stories::-webkit-scrollbar { display: none; }
.story-item { display: flex; flex-direction: column; align-items: center; cursor: pointer; flex-shrink: 0; }
.story-circle { width: 66px; height: 66px; border-radius: 50% !important; padding: 3px; display: flex; align-items: center; justify-content: center; border: 2px solid transparent; transition: all 0.3s ease; }
.story-circle.active { border-color: #3b82f6; }
.story-circle img { width: 100%; height: 100%; border-radius: 50% !important; object-fit: cover; border: 2px solid var(--bg-body); }
.story-item span { font-size: 0.7rem; font-weight: 600; color: var(--text-secondary); margin-top: 6px; }

.post-header { display: flex; justify-content: space-between; align-items: center; padding: 14px 16px; }
.post-user { display: flex; align-items: center; gap: 12px; }
.user-avatar { width: 38px; height: 38px; border-radius: 50% !important; background: #e50914; color: #FFF; display: flex; items-center; justify-content: center; font-weight: 800; font-size: 0.85rem; }
.user-meta { display: flex; flex-direction: column; }
.user-name { font-size: 0.85rem; font-weight: 800; color: var(--text-primary); }
.post-time { font-size: 0.72rem; color: var(--text-muted); margin-top: 2px; }
.post-more { background: none; border: none; color: var(--text-muted); cursor: pointer; }

.post-content { position: relative; width: 100%; aspect-ratio: 1/1; overflow: hidden; background: #000; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
.content-thumb { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1); }
.post-content:hover .content-thumb { transform: scale(1.03); }
.video-wrapper { position: relative; width: 100%; height: 100%; }
.play-overlay { position: absolute; inset: 0; background: rgba(0,0,0,0.15); display: flex; align-items: center; justify-content: center; cursor: pointer; }
.play-btn-circle { width: 60px; height: 60px; border-radius: 50% !important; background: rgba(255,255,255,0.25); backdrop-filter: blur(10px); display: flex; align-items: center; justify-content: center; border: 1.5px solid rgba(255,255,255,0.4); transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
.play-overlay:hover .play-btn-circle { transform: scale(1.1); background: rgba(255,255,255,0.4); }

.post-footer { padding: 14px 16px; }
.post-actions { display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px; }
.actions-left { display: flex; gap: 16px; }
.action-btn { background: none; border: none; color: var(--text-primary); padding: 0; cursor: pointer; transition: transform 0.2s ease; }
.action-btn:active { transform: scale(0.9); }
.action-btn svg { display: block; transition: fill 0.2s ease, stroke 0.2s ease; }
.btn-like.liked .heart-icon { fill: #ef4444; stroke: #ef4444; }
.post-stats { font-size: 0.8rem; font-weight: 800; color: var(--text-primary); margin-bottom: 8px; }
.post-caption { font-size: 0.82rem; line-height: 1.45; color: var(--text-primary); margin-bottom: 8px; }
.caption-user { font-weight: 800; margin-right: 6px; }
.caption-text { color: var(--text-primary); font-weight: 500; }
.caption-dots { font-weight: 600; color: var(--text-muted); }

.comment-list-preview { margin-top: 10px; margin-bottom: 8px; border-left: 2px solid var(--border); padding-left: 10px; }
.comment-item-mini { font-size: 0.78rem; line-height: 1.5; margin-bottom: 4px; }
.comment-item-mini .c-user { font-weight: 800; color: var(--text-primary); margin-right: 6px; }
.comment-item-mini .c-text { color: var(--text-secondary); font-weight: 500; }

.post-comments-preview { font-size: 0.78rem; font-weight: 700; color: var(--text-muted); cursor: pointer; transition: color 0.2s ease; }
.post-comments-preview:hover { color: var(--text-secondary); }

/* ─── DESKTOP/LAPTOP 3-COLUMNS GRID (EQUAL HEIGHT) ─── */
@media (min-width: 1024px) {
    .guide-container {
        max-width: 1200px !important;
    }
    .guide-feed {
        display: grid !important;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 24px;
        align-items: stretch;
    }
    .guide-post {
        display: flex;
        flex-direction: column;
        margin-bottom: 0 !important;
        height: 100%;
    }
    .guide-post .post-footer {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .guide-post .post-comments-preview {
        margin-top: auto;
    }
}
</style>
@endsection

@section('content')
<main class="mt-28 md:mt-40">
    <div class="guide-container">
        
        <!-- ─── STORIES BAR (Full-screen Video Stories) ─── -->
        <div class="guide-stories" style="display: flex; gap: 15px; overflow-x: auto; padding: 10px 5px 20px;">
            @php
                $stories = [
                    ['name' => 'Mẫu Mới', 'icon' => 'shin1.webp', 'video' => 'story_caidat.mp4'],
                    ['name' => 'Khách Đặt', 'icon' => 'shin2.jpg', 'video' => 'story_thanhtoan.mp4'],
                    ['name' => 'Ưu Đãi', 'icon' => 'shin3.jpg', 'video' => 'story_giahan.mp4'],
                    ['name' => 'Feedback', 'icon' => 'shin4.jpg', 'video' => 'story_meohay.mp4'],
                    ['name' => 'Thiết Kế', 'icon' => 'shin5.jpg', 'video' => 'story_hotro.mp4'],
                    ['name' => 'In Ấn', 'icon' => 'shin1.webp', 'video' => 'story_baohanh.mp4'],
                    ['name' => 'Freeship', 'icon' => 'shin2.jpg', 'video' => 'story_appleid.mp4'],
                    ['name' => 'Sự Kiện', 'icon' => 'shin3.jpg', 'video' => 'story_loiapp.mp4'],
                    ['name' => 'Giao Hàng', 'icon' => 'shin4.jpg', 'video' => 'story_khuyenmai.mp4'],
                    ['name' => 'Đánh Giá', 'icon' => 'shin5.jpg', 'video' => 'story_review.mp4'],
                ];
            @endphp
            @foreach($stories as $index => $story)
            <div class="story-item" onclick="openStory('{{ asset('videos/' . $story['video']) }}', '{{ $story['name'] }}')">
                <div class="story-circle {{ $index == 0 ? 'active' : '' }}" style="width: 66px; height: 66px; flex-shrink: 0;">
                    <img src="{{ asset('images/' . $story['icon']) }}" alt="{{ $story['name'] }}" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;" onerror="this.src='https://api.dicebear.com/7.x/avataaars/svg?seed={{ $story['name'] }}'">
                </div>
                <span>{{ $story['name'] }}</span>
            </div>
            @endforeach
        </div>

        <!-- ─── COMMUNITY HEADER & TRIGGER ─── -->
        <div class="flex items-center justify-between mb-6 px-2 w-full">
            <!-- <h2 class="text-lg md:text-2xl font-black uppercase tracking-wider text-[var(--text-primary)]">Cộng đồng</h2> -->
            @auth
            <button onclick="toggleCreatePostCard()" class="px-5 py-3 bg-rose-500 hover:bg-rose-600 text-white font-black uppercase text-[11px] tracking-widest rounded-2xl shadow-lg shadow-rose-500/20 active:scale-95 transition-all flex items-center shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-plus" style="margin-right: 6px;" width="18" height="18" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="9" /><line x1="9" y1="12" x2="15" y2="12" /><line x1="12" y1="9" x2="12" y2="15" /></svg>
                Đăng bài mới
            </button>
            @endauth
        </div>

        <!-- ─── FEED SECTION ─── -->
        @auth
        <!-- ─── CREATE POST BOX (Premium Glassmorphism - Collapsible Smooth) ─── -->
        <div id="create-post-card" class="guide-post glass-card relative overflow-hidden guest-cta text-left">
                <div class="flex items-center justify-between mb-4 pb-2 border-b border-[var(--border)]">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden border border-white/20 bg-slate-100 flex-shrink-0">
                            @if(auth()->user()->avatar)
                                <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://api.dicebear.com/7.x/adventurer/svg?seed={{ auth()->user()->name }}" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="flex-grow">
                            <span class="text-xs font-extrabold uppercase tracking-wider text-[var(--text-secondary)]">Chia sẻ bài viết</span>
                            <h4 class="text-sm font-black text-[var(--text-primary)] uppercase tracking-tight leading-tight">{{ auth()->user()->name }}</h4>
                        </div>
                    </div>
                    <button onclick="toggleCreatePostCard()" class="w-8 h-8 rounded-full bg-[var(--border)] flex items-center justify-center text-[var(--text-primary)] font-black text-lg hover:scale-105 active:scale-95 transition-all outline-none">&times;</button>
                </div>

                <form action="{{ route('community.post') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <div>
                        <textarea name="content" rows="3" required
                            placeholder="Bạn đang nghĩ gì? Chia sẻ trải nghiệm Thiệp Cưới của bạn cùng cộng đồng..."
                            class="w-full bg-transparent border-0 px-2 py-3 text-gray-800 text-sm outline-none focus:ring-0 resize-none placeholder-gray-400 font-medium"></textarea>
                    </div>

                    <!-- Additional Media Inputs -->
                    <div class="mt-2">
                        <!-- Image Upload -->
                        <div class="relative">
                            <label class="block text-[10px] font-black uppercase tracking-widest text-gray-500 mb-2">Đính kèm ảnh</label>
                            <div class="relative flex items-center justify-center border-0 rounded-xl p-4 bg-gray-50 hover:bg-gray-100 cursor-pointer transition-colors">
                                <input type="file" name="image" accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" onchange="previewImage(this)">
                                <div id="image-upload-placeholder" class="flex items-center text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo" style="margin-right: 8px;" width="22" height="22" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8h.01" /><path d="M3 6a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-12z" /><path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l5 5" /><path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l3 3" /></svg>
                                    <span class="text-[11px] font-extrabold uppercase tracking-wide">Chọn ảnh từ thiết bị</span>
                                </div>
                                <div id="image-upload-preview" class="hidden w-full h-24 rounded-xl overflow-hidden relative">
                                    <img src="" class="w-full h-full object-cover">
                                    <button type="button" onclick="removeImagePreview(event)" class="absolute top-1 right-1 w-6 h-6 rounded-full bg-black/60 flex items-center justify-center text-white text-xs hover:bg-black/80 transition-colors">&times;</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-2">
                        <button type="submit"
                            class="px-6 py-3 bg-rose-500 hover:bg-rose-600 text-white font-black uppercase text-[11px] tracking-widest rounded-xl shadow-lg shadow-rose-500/20 active:scale-95 transition-all flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" style="margin-right: 8px;" width="16" height="16" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 14l11 -11" /><path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
                            Đăng bài viết
                        </button>
                    </div>
                </form>
            </div>
            @endauth

            @guest
            <!-- Guest Call To Action -->
            <div class="guest-cta w-full flex flex-col items-center justify-center gap-4 py-2 mt-4 text-center" style="margin-bottom: 60px;">
                <div>
                    <h4 class="text-sm font-black text-[var(--text-primary)] uppercase tracking-tight mb-1">Tham gia cộng đồng Thiệp Cưới</h4>
                    <p class="text-xs text-[var(--text-secondary)] font-bold">Vui lòng đăng nhập để chia sẻ cảm xúc, hình ảnh và video của bạn cùng mọi người.</p>
                </div>
                <a href="{{ route('login') }}" class="bg-rose-500 hover:bg-rose-600 text-white font-black uppercase tracking-widest rounded-2xl shadow-lg shadow-rose-500/20 active:scale-95 transition-all shrink-0" style="padding: 14px 32px; font-size: 12px;">
                    Đăng nhập ngay
                </a>
            </div>
            @endguest

            <div class="guide-feed">
            @forelse($posts as $post)
            <div class="guide-post glass-card" data-post-id="{{ $post->id }}">
                <div class="post-header">
                    <div class="post-user">
                        <div class="user-avatar overflow-hidden border border-white/10 flex items-center justify-center bg-slate-100">
                            @if($post->user && $post->user->avatar)
                                <img src="{{ asset('storage/' . $post->user->avatar) }}" alt="{{ $post->user->name }}" class="w-full h-full object-cover">
                            @else
                                <img src="https://api.dicebear.com/7.x/adventurer/svg?seed={{ $post->user ? $post->user->name : 'Admin' }}" alt="Avatar" class="w-full h-full object-cover">
                            @endif
                        </div>
                        <div class="user-meta text-left">
                            <span class="user-name flex items-center gap-1.5">
                                {{ $post->user ? $post->user->name : 'Thiệp Cưới Team' }}
                                @if(!$post->user || $post->user->role === 'admin')
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="#3a3aff" class="shrink-0 ml-3"><path d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.79L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/></svg>
                                    <span class="px-1.5 py-0.5 rounded text-[8px] font-black uppercase bg-blue-500/10 text-blue-500 tracking-wider shrink-0 ml-1">Admin</span>
                                @elseif($post->user && $post->user->role === 'employee')
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="#10B981" class="shrink-0 ml-3"><path d="M23,12L20.56,9.22L20.9,5.54L17.29,4.72L15.4,1.54L12,3L8.6,1.54L6.71,4.72L3.1,5.53L3.44,9.21L1,12L3.44,14.78L3.1,18.47L6.71,19.29L8.6,22.47L12,21L15.4,22.46L17.29,19.28L20.9,18.46L20.56,14.79L23,12M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z"/></svg>
                                    <span class="px-1.5 py-0.5 rounded text-[8px] font-black uppercase bg-emerald-500/10 text-emerald-500 tracking-wider shrink-0 ml-1">Đại sứ</span>
                                @else
                                    <span class="px-1.5 py-0.5 rounded text-[8px] font-black uppercase bg-rose-500/10 text-rose-500 tracking-wider shrink-0 ml-3">Thành viên</span>
                                @endif
                            </span>
                            <span class="post-time">{{ $post->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                    @if(auth()->check() && auth()->id() == ($post->user_id ?? -1))
                    <div class="relative group" onclick="toggleDropdown({{ $post->id }}, event)">
                        <button class="post-more"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg></button>
                        <div id="dropdown-{{ $post->id }}" class="absolute right-0 mt-2 w-36 bg-[var(--bg-card)] border border-[var(--border)] rounded-xl shadow-lg hidden z-50 overflow-hidden">
                            <button type="button" onclick="confirmDelete({{ $post->id }})" class="w-full text-left px-4 py-3 text-sm font-semibold text-red-500 hover:bg-red-500/10 flex items-center gap-2">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                Xóa bài viết
                            </button>
                        </div>
                    </div>
                    @else
                    <button class="post-more"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg></button>
                    @endif
                </div>

                @if($post->image || $post->video_url)
                <div class="post-content">
                    @if($post->video_url)
                    <div class="video-wrapper">
                        <img src="{{ str_starts_with($post->image, 'http') ? $post->image : (str_starts_with($post->image, 'community/') ? asset('storage/' . $post->image) : asset('images/' . $post->image)) }}" class="content-thumb" alt="Hình ảnh bài viết" onerror="this.src='{{ asset('images/shin4.jpg') }}'">
                        <div class="play-overlay" onclick="openVideoModal('{{ $post->video_url }}')">
                            <div class="play-btn-circle">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="white"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    @else
                    <img src="{{ str_starts_with($post->image, 'http') ? $post->image : (str_starts_with($post->image, 'community/') ? asset('storage/' . $post->image) : asset('images/' . $post->image)) }}" class="content-thumb" alt="Hình ảnh bài viết" onerror="this.src='{{ asset('images/shin5.jpg') }}'">
                    @endif
                </div>
                @else
                <!-- Bài viết chỉ có chữ -->
                <div class="border-t border-[var(--border)]"></div>
                @endif

                <div class="post-footer">
                    <div class="post-actions">
                        <div class="actions-left">
                            <button class="action-btn btn-like {{ $post->is_liked ? 'liked' : '' }}" onclick="toggleLike(this, {{ $post->id }})">
                                <svg width="24" height="24" viewBox="0 0 24 24" class="heart-icon"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                            </button>
                            <button class="action-btn btn-comment" onclick="openCommentSheet({{ $post->id }})"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg></button>
                            <button class="action-btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polyline points="22 2 15 22 11 13 2 9 22 2"/></svg></button>
                        </div>
                        <button class="action-btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg></button>
                    </div>
                    <div class="post-stats text-left">
                        <span class="likes-count" id="likes-count-{{ $post->id }}">{{ number_format($post->likes_count) }}</span> lượt thích
                    </div>
                    <div class="post-caption text-left">
                        <span class="caption-user">{{ $post->user ? $post->user->name : 'Thiệp Cưới Team' }}</span>
                        <span class="caption-text" id="caption-text-{{ $post->id }}">{{ Str::limit($post->content, 80, '') }}</span>
                        @if(strlen($post->content) > 80)
                            <span class="caption-dots" id="caption-dots-{{ $post->id }}">...</span>
                            <button class="see-more-btn text-primary font-semibold ml-1 text-[11px] hover:underline" onclick="toggleCaption(this, {{ $post->id }}, '{{ addslashes($post->content) }}', '{{ addslashes(Str::limit($post->content, 80, '')) }}')">Xem thêm</button>
                        @endif
                    </div>
                    
                    <!-- Comment Preview (Show 2 earliest) -->
                    <div class="comment-list-preview" id="comment-preview-list-{{ $post->id }}">
                        @php $earliestComments = $post->comments->sortBy('created_at')->take(2); @endphp
                        @foreach($earliestComments as $comment)
                        <div class="comment-item-mini text-left">
                            <span class="c-user">{{ $comment->user->name ?? 'Người dùng' }}</span>
                            <span class="c-text">{{ $comment->content }}</span>
                        </div>
                        @endforeach
                    </div>

                    @if($post->comments->count() > 2)
                    <div class="post-comments-preview text-left" id="comment-preview-trigger-{{ $post->id }}" onclick="openCommentSheet({{ $post->id }})">Xem tất cả {{ $post->comments->count() }} bình luận</div>
                    @elseif($post->comments->count() > 0)
                    <div class="post-comments-preview text-left" id="comment-preview-trigger-{{ $post->id }}" onclick="openCommentSheet({{ $post->id }})">Thêm bình luận...</div>
                    @else
                    <div class="post-comments-preview text-left" id="comment-preview-trigger-{{ $post->id }}" onclick="openCommentSheet({{ $post->id }})">Hãy là người đầu tiên bình luận...</div>
                    @endif
                </div>

                <!-- ─── IN-POST COMMENT OVERLAY (Contextual) ─── -->
                <div id="comment-overlay-{{ $post->id }}" class="comment-overlay">
                    <div class="overlay-header">
                        <h3>Bình luận</h3>
                        <button class="overlay-close" onclick="closeCommentOverlay({{ $post->id }})">&times;</button>
                    </div>
                    <div class="overlay-content">
                        <div class="sheet-comments-list" id="sheet-comments-list-{{ $post->id }}">
                            @foreach($post->comments->sortBy('created_at') as $comment)
                            <div class="sheet-comment-item">
                                <div class="sc-avatar">
                                    @if($comment->user && $comment->user->avatar)
                                        <img src="{{ asset('storage/' . $comment->user->avatar) }}" alt="{{ $comment->user->name }}">
                                    @else
                                        <img src="https://api.dicebear.com/7.x/adventurer/svg?seed={{ $comment->user ? $comment->user->name : 'User' }}" alt="Avatar">
                                    @endif
                                </div>
                                <div class="sc-body text-left">
                                    <div class="sc-user">{{ $comment->user->name ?? 'Người dùng' }} <span class="sc-time">{{ $comment->created_at->diffForHumans() }}</span></div>
                                    <div class="sc-text">{{ $comment->content }}</div>
                                    <div class="sc-actions">Trả lời</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="sheet-input-area">
                        <form action="#" method="POST" class="sheet-form" onsubmit="event.preventDefault(); submitComment({{ $post->id }}, this);">
                            @csrf
                            <div class="sc-avatar">
                                @auth
                                    @if(auth()->user()->avatar)
                                        <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="sheet-user-avatar">
                                    @else
                                        <img src="https://api.dicebear.com/7.x/adventurer/svg?seed={{ auth()->user()->name }}" class="sheet-user-avatar">
                                    @endif
                                @else
                                    <img src="https://api.dicebear.com/7.x/adventurer/svg?seed=Guest" class="sheet-user-avatar">
                                @endauth
                            </div>
                            <input type="text" name="content" placeholder="Bình luận cho bài viết..." required>
                            <button type="submit">Đăng</button>
                        </form>
                    </div>
                </div>
            </div>
            @empty
            <div class="guide-post glass-card p-12 text-center guest-cta">
                <div class="text-slate-300 mb-4">
                    <iconify-icon icon="solar:chat-line-broken" class="text-5xl"></iconify-icon>
                </div>
                <h4 class="text-base font-black text-[var(--text-primary)] uppercase tracking-wider mb-2">Chưa có bài viết nào</h4>
                <p class="text-xs text-[var(--text-secondary)] font-bold">Hãy là người đầu tiên đăng bài chia sẻ cùng cộng đồng Thiệp Cưới!</p>
            </div>
            @endforelse

        </div>

    </div>
</main>

<!-- ─── FULL SCREEN STORY MODAL ─── -->
<div id="storyModal" class="story-modal">
    <div class="story-progress-container">
        <div id="storyProgress" class="story-progress-fill"></div>
    </div>
    <div class="story-header-overlay">
        <div class="story-user-info">
            <div class="story-avatar">LG</div>
            <span id="storyTitle" class="story-user-name"></span>
        </div>
        <button class="story-close" onclick="closeStory()">&times;</button>
    </div>
    <video id="storyVideo" class="story-video-content" playsinline></video>
</div>

<!-- Video Modal (Existing Feed Video) -->
<div id="videoModal" class="video-modal">
    <div class="modal-content">
        <span class="close-modal" onclick="closeVideoModal()">&times;</span>
        <iframe id="videoFrame" width="100%" height="100%" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<!-- Custom Delete Confirmation Modal -->
<div id="deleteConfirmModal" class="fixed inset-0 z-[100] flex items-center justify-center hidden">
    <div class="absolute inset-0 bg-black/60 backdrop-blur-sm" onclick="closeDeleteModal()"></div>
    <div class="relative bg-[var(--bg-card)] border border-[var(--border)] w-[320px] rounded-2xl shadow-2xl p-6 flex flex-col items-center text-center transform scale-95 opacity-0 transition-all duration-300" id="deleteModalContent">
        <div class="w-14 h-14 rounded-full bg-red-500/10 flex items-center justify-center text-red-500 mb-4">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </div>
        <h3 class="text-lg font-black text-[var(--text-primary)] mb-2 uppercase tracking-wide">Xóa bài viết?</h3>
        <p class="text-[0.82rem] font-bold text-[var(--text-secondary)] mb-6 leading-relaxed">Bạn có chắc chắn muốn xóa bài viết này không?<br>Hành động này không thể hoàn tác.</p>
        <div class="w-full flex gap-3">
            <button onclick="closeDeleteModal()" class="flex-1 py-3 rounded-xl bg-[var(--bg-body)] text-[var(--text-primary)] font-bold text-sm border border-[var(--border)] transition active:scale-95">Hủy</button>
            <form id="deleteForm" method="POST" class="flex-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full py-3 rounded-xl bg-red-500 text-white font-bold text-sm shadow-[0_4px_15px_rgba(239,68,68,0.3)] hover:bg-red-600 transition active:scale-95">Xóa ngay</button>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
<script>
function toggleCreatePostCard() {
    const card = document.getElementById('create-post-card');
    if (card) {
        card.classList.toggle('show');
        if (card.classList.contains('show')) {
            setTimeout(() => {
                card.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }, 200);
        }
    }
}

function previewImage(input) {
    const placeholder = document.getElementById('image-upload-placeholder');
    const preview = document.getElementById('image-upload-preview');
    const previewImg = preview.querySelector('img');
    
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            placeholder.classList.add('hidden');
            preview.classList.remove('hidden');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function removeImagePreview(event) {
    event.preventDefault();
    event.stopPropagation();
    const input = document.querySelector('input[name="image"]');
    const placeholder = document.getElementById('image-upload-placeholder');
    const preview = document.getElementById('image-upload-preview');
    
    input.value = '';
    placeholder.classList.remove('hidden');
    preview.classList.add('hidden');
}

function openCommentSheet(postId) {
    const overlay = document.getElementById(`comment-overlay-${postId}`);
    overlay.classList.add('show');
    if (window.innerWidth <= 768) {
        document.body.style.overflow = 'hidden';
    }
}

function closeCommentOverlay(postId) {
    const overlay = document.getElementById(`comment-overlay-${postId}`);
    overlay.classList.remove('show');
    document.body.style.overflow = '';
}

function openVideoModal(url) {
    const modal = document.getElementById('videoModal');
    const frame = document.getElementById('videoFrame');
    frame.src = url;
    modal.style.display = 'flex';
}

function closeVideoModal() {
    const modal = document.getElementById('videoModal');
    const frame = document.getElementById('videoFrame');
    frame.src = '';
    modal.style.display = 'none';
}

function toggleLike(btn, postId) {
    @if(!auth()->check())
        window.location.href = '{{ route("login") }}';
        return;
    @endif

    btn.classList.toggle('liked');
    const likesCountEl = document.getElementById(`likes-count-${postId}`);
    let currentLikes = parseInt(likesCountEl.innerText.replace(/,/g, ''));
    let newLikes = btn.classList.contains('liked') ? currentLikes + 1 : currentLikes - 1;
    likesCountEl.innerText = newLikes.toLocaleString();

    fetch(`/community/${postId}/like`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    })
    .then(res => res.json())
    .then(data => {
        if (data.error) {
            btn.classList.toggle('liked');
            likesCountEl.innerText = currentLikes.toLocaleString();
        } else if (data.success) {
            if (data.is_liked) {
                btn.classList.add('liked');
            } else {
                btn.classList.remove('liked');
            }
            likesCountEl.innerText = data.likes_count.toLocaleString();
        }
    })
    .catch(err => console.error(err));
}

function toggleCaption(btn, postId, fullText, shortText) {
    const textSpan = document.getElementById(`caption-text-${postId}`);
    const dotsSpan = document.getElementById(`caption-dots-${postId}`);
    
    if (textSpan && dotsSpan) {
        if (btn.innerText === 'Xem thêm') {
            textSpan.innerText = fullText;
            dotsSpan.style.display = 'none';
            btn.innerText = 'Ẩn bớt';
        } else {
            textSpan.innerText = shortText;
            dotsSpan.style.display = 'inline';
            btn.innerText = 'Xem thêm';
        }
    }
}

function submitComment(postId, form) {
    const input = form.querySelector('input[name="content"]');
    const content = input.value.trim();
    if (!content) return;

    // Check if user is logged in
    @if(!auth()->check())
        window.location.href = '{{ route("login") }}';
        return;
    @endif

    const userName = @json(auth()->check() ? auth()->user()->name : 'Bạn');
    const userAvatar = @json(auth()->check() && auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : null);
    const defaultAvatar = `https://api.dicebear.com/7.x/adventurer/svg?seed=${encodeURIComponent(userName)}`;
    const avatarSrc = userAvatar || defaultAvatar;

    // Append comment dynamically to the contextual overlay list
    const commentsList = document.getElementById(`sheet-comments-list-${postId}`);
    const commentItem = document.createElement('div');
    commentItem.className = 'sheet-comment-item';
    commentItem.innerHTML = `
        <div class="sc-avatar">
            <img src="${avatarSrc}" alt="${escapeHtml(userName)}">
        </div>
        <div class="sc-body">
            <div class="sc-user">${escapeHtml(userName)} <span class="sc-time">Vừa xong</span></div>
            <div class="sc-text">${escapeHtml(content)}</div>
            <div class="sc-actions">Trả lời</div>
        </div>
    `;
    commentsList.appendChild(commentItem);

    // Append to the post footer mini preview list
    const previewList = document.getElementById(`comment-preview-list-${postId}`);
    if (previewList) {
        const miniComment = document.createElement('div');
        miniComment.className = 'comment-item-mini text-left';
        miniComment.innerHTML = `
            <span class="c-user">${escapeHtml(userName)}</span>
            <span class="c-text">${escapeHtml(content)}</span>
        `;
        previewList.appendChild(miniComment);
    }

    // Update count/text trigger
    const trigger = document.getElementById(`comment-preview-trigger-${postId}`);
    if (trigger) {
        trigger.innerText = 'Thêm bình luận...';
    }

    // Reset input
    input.value = '';
    
    // Auto-scroll overlay content to bottom
    const contentContainer = commentsList.closest('.overlay-content');
    contentContainer.scrollTop = contentContainer.scrollHeight;

    // Post to live database backend
    fetch(`/community/${postId}/comment`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ content: content })
    }).catch(err => console.error(err));
}

function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}

// ─── STORIES SYSTEM ───
let storyTimer = null;
let currentStoryProgress = 0;

function openStory(videoUrl, title) {
    const modal = document.getElementById('storyModal');
    const video = document.getElementById('storyVideo');
    const titleEl = document.getElementById('storyTitle');
    const progress = document.getElementById('storyProgress');

    titleEl.innerText = title;
    video.src = videoUrl;
    modal.style.display = 'flex';
    document.body.style.overflow = 'hidden';

    // Start video and timer progress simulation
    video.currentTime = 0;
    video.play().catch(err => console.log("Video autoplay blocked", err));
    
    currentStoryProgress = 0;
    progress.style.width = '0%';
    
    if (storyTimer) clearInterval(storyTimer);
    storyTimer = setInterval(() => {
        if (video.duration) {
            currentStoryProgress = (video.currentTime / video.duration) * 100;
            progress.style.width = currentStoryProgress + '%';
            if (video.ended) {
                closeStory();
            }
        }
    }, 100);
}

function closeStory() {
    const modal = document.getElementById('storyModal');
    const video = document.getElementById('storyVideo');
    const progress = document.getElementById('storyProgress');

    if (storyTimer) clearInterval(storyTimer);
    video.pause();
    video.src = '';
    progress.style.width = '0%';
    modal.style.display = 'none';
    document.body.style.overflow = '';
}

// ─── DROPDOWN MENU (DELETE POST) ───
function toggleDropdown(id, event) {
    event.stopPropagation();
    const el = document.getElementById('dropdown-' + id);
    if(el.classList.contains('hidden')) {
        document.querySelectorAll('[id^=dropdown-]').forEach(d => d.classList.add('hidden'));
        el.classList.remove('hidden');
    } else {
        el.classList.add('hidden');
    }
}

document.addEventListener('click', function(e) {
    if (!e.target.closest('.relative.group')) {
        document.querySelectorAll('[id^=dropdown-]').forEach(d => d.classList.add('hidden'));
    }
});

// ─── DELETE CONFIRMATION MODAL ───
function confirmDelete(postId) {
    // Hide dropdown first
    document.querySelectorAll('[id^=dropdown-]').forEach(d => d.classList.add('hidden'));
    
    const modal = document.getElementById('deleteConfirmModal');
    const content = document.getElementById('deleteModalContent');
    const form = document.getElementById('deleteForm');
    
    // Set form action dynamically
    form.action = `/community/post/${postId}`;
    
    // Show modal with animation
    modal.classList.remove('hidden');
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 10);
}

function closeDeleteModal() {
    const modal = document.getElementById('deleteConfirmModal');
    const content = document.getElementById('deleteModalContent');
    
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}
</script>
@endsection
