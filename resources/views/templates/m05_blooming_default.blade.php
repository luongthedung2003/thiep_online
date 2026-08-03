<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500;700&display=swap');
@import url('https://unpkg.com/swiper/swiper-bundle.min.css');

.bld-wrap {
    background-color: #F7F7F7;
    width: 100%; max-width: 100%;
    margin: 0 auto;
    font-family: 'Noto Sans KR', sans-serif;
    color: #191c21;
    overflow-x: hidden;
}

/* ── Section Snap / Fade ── */
.bld-section {
    width: 100%;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
    padding: 3rem 0;
}
.bld-section.bld-visible {
    opacity: 1; transform: translateY(0);
}

/* ── Big Banner ── */
.bld-banner .image-wrap {
    position: relative; width: 100%; height: 50vh;
    overflow: hidden;
}
.bld-banner .content-image {
    outline: double 0.6px #666;
    position: absolute; width: 100%; height: 100%;
    object-fit: cover; object-position: center;
    -webkit-mask-image: radial-gradient(ellipse 80% 100% at 50% 0, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
    mask-image: radial-gradient(ellipse 80% 100% at 50% 0, rgba(0,0,0,1) 50%, rgba(0,0,0,0) 100%);
}
.bld-banner .content-description {
    margin-top: 4rem; font-size: 16px; color: #333; text-align: center;
}
.bld-banner .description-header {
    display: flex; gap: 9px; justify-content: center; align-items: flex-end; padding-bottom: 26px;
}
.bld-banner .description-header h2 { font-weight: 700; font-size: 24px; color: #191c21; }
.bld-banner .description-info { line-height: 2.4rem; font-size: 14px; }

/* ── Intro ── */
.bld-intro { margin-top: 2rem; text-align: center; }
.bld-intro .content-title { font-weight: 700; font-size: 24px; padding: 1rem 0 26px; }
.bld-intro .content p { margin-bottom: 6px; font-size: 15px; }
.bld-intro .content-fmInfo {
    margin: 2.5rem 2rem 2rem; padding: 1.2rem 1rem;
    border-top: 1px solid #ddd; border-bottom: 1px solid #ddd;
}
.bld-intro .fmInfo { display: flex; justify-content: center; gap: 0.5rem; align-items: center; }
.bld-intro .fmInfo:first-child { padding-bottom: 1rem; }
.bld-intro .fmInfo p:first-child { color: #666; font-size: 14px; }
.bld-intro .fmInfo span { color: #999; font-size: 13px; }
.bld-intro .fmInfo p:last-child { font-weight: 700; font-size: 18px; color: #191c21; }

/* ── Photo (Swiper) ── */
.bld-photo { width: 100%; position: relative; padding: 2rem 0; }
.bld-photo .swiper-slide { display: flex; justify-content: center; align-items: center; }
.bld-photo .image-item { width: 100%; height: 65vh; object-fit: cover; }
.bld-photo .scroll-instruction { text-align: center; padding: 2.1rem 24px; font-size: 14px; color: #666; }
.bld-photo .scroll-arrow { animation: bld-moveLeftRight 1.5s infinite alternate ease-in-out; margin-bottom: 1rem; }
@keyframes bld-moveLeftRight {
    0% { transform: translateX(0) scale(1); }
    50% { transform: translateX(-15px) scale(1.05); }
    100% { transform: translateX(15px) scale(1); }
}

/* ── Calendar ── */
.bld-calendar { text-align: center; padding: 4rem 2rem; background: #fff; }
.bld-calendar h3 { font-size: 20px; font-weight: 700; margin-bottom: 2rem; }
.bld-calendar-table { width: 100%; max-width: 300px; margin: 0 auto; border-collapse: collapse; }
.bld-calendar-table th { font-weight: 400; color: #999; padding: 10px 0; font-size: 14px; }
.bld-calendar-table td { padding: 10px 0; font-size: 15px; color: #333; }
.bld-highlight-day { background: #FFC0CB; color: #fff !important; border-radius: 50%; font-weight: bold; width: 30px; height: 30px; display: inline-flex; align-items: center; justify-content: center; }

/* ── Address & Gift ── */
.bld-info-section { padding: 3rem 2rem; text-align: center; }
.bld-info-title { font-size: 20px; font-weight: 700; margin-bottom: 1rem; color: #191c21; }
.bld-info-desc { font-size: 15px; color: #666; margin-bottom: 2rem; line-height: 1.6; }
.bld-map-placeholder { width: 100%; height: 250px; background: #e0e0e0; display: flex; align-items: center; justify-content: center; color: #888; border-radius: 8px; margin-bottom: 1.5rem; }
.bld-btn { display: inline-block; padding: 12px 30px; background: #191c21; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: 0.3s; }
.bld-btn:hover { background: #333; }

.bld-gift-box { background: #fff; border: 1px solid #eee; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem; text-align: left; }
.bld-gift-name { font-weight: 700; font-size: 16px; margin-bottom: 0.5rem; }
.bld-gift-bank { font-size: 14px; color: #666; margin-bottom: 1rem; }
.bld-copy { float: right; padding: 5px 15px; border: 1px solid #ddd; background: transparent; border-radius: 4px; cursor: pointer; font-size: 12px; }
.bld-copy:hover { background: #f0f0f0; }
</style>

<div class="bld-wrap">
    {{-- Banner --}}
    <div class="bld-section bld-banner">
        <div class="image-wrap">
            <img class="content-image"
                 src="{{ isset($data->cover_image) ? asset($data->cover_image) : asset('assets/images/banner/grocery-banner.png') }}"
                 id="preview-image"
                 alt="Ảnh cưới"
                 {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
        </div>
        <div class="content-description">
            <div class="description-header">
                <h2 id="groom_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</h2>
                <p>·</p>
                <h2 id="bride_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</h2>
            </div>
            <div class="description-info">
                <span id="wedding_date"
                      class="location {{ isset($editable) && $editable ? 'editable' : '' }}"
                      {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                    {{ $data->wedding_date ?? 'Thứ 7, 21 Tháng 11 Năm 2025 · 14:00' }}
                </span>
                <p id="restaurant_name"
                   class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                   {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->restaurant_name ?? 'Nhà Hàng Trống Đồng Palace' }}</p>
            </div>
        </div>
    </div>

    {{-- Intro --}}
    <div class="bld-section bld-intro">
        <div class="content-title">Chúng tôi kết hôn</div>
        <div class="content">
            <p id="love_story"
               class="{{ isset($editable) && $editable ? 'editable' : '' }}"
               {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->love_story ?? 'Tình yêu lớn lên từ những điều bình dị nhất. Chúng tôi đã chọn nhau và cùng nhau bước vào một hành trình mới. Rất mong sự hiện diện của quý vị.' }}
            </p>
        </div>
        <div class="content-fmInfo">
            <div class="fmInfo">
                <p>Ông Bà Nhà Trai</p>
                <span>Trưởng nam</span>
                <p>{{ $data->groom_name ?? 'Hải Long' }}</p>
            </div>
            <div class="fmInfo">
                <p>Ông Bà Nhà Gái</p>
                <span>Út nữ</span>
                <p>{{ $data->bride_name ?? 'Ngọc Lan' }}</p>
            </div>
        </div>
    </div>

    {{-- Photo Swiper --}}
    <div class="bld-section bld-photo">
        <div class="swiper-container bld-swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="{{ asset('assets/images/banner/grocery-banner.png') }}" class="image-item" /></div>
                <div class="swiper-slide"><img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" class="image-item" /></div>
                <div class="swiper-slide"><img src="{{ asset('assets/images/banner/grocery-banner.png') }}" class="image-item" /></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="scroll-instruction">
            <svg class="scroll-arrow" width="24" height="24" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="25" cy="25" r="24" stroke="#999" stroke-width="2" fill="none"/>
                <path d="M15 25L35 25M25 15L15 25L25 35" stroke="#999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p>Vuốt để xem thêm ảnh</p>
        </div>
    </div>

    {{-- Calendar --}}
    <div class="bld-section bld-calendar">
        <h3>THÁNG 11 2025</h3>
        <table class="bld-calendar-table">
            <thead>
                <tr><th>CN</th><th>T2</th><th>T3</th><th>T4</th><th>T5</th><th>T6</th><th>T7</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td></td><td></td><td></td><td></td><td></td><td></td><td>1</td>
                </tr>
                <tr>
                    <td>2</td><td>3</td><td>4</td><td>5</td><td>6</td><td>7</td><td>8</td>
                </tr>
                <tr>
                    <td>9</td><td>10</td><td>11</td><td>12</td><td>13</td><td>14</td><td>15</td>
                </tr>
                <tr>
                    <td>16</td><td>17</td><td>18</td><td>19</td><td>20</td>
                    <td><span class="bld-highlight-day">21</span></td>
                    <td>22</td>
                </tr>
                <tr>
                    <td>23</td><td>24</td><td>25</td><td>26</td><td>27</td><td>28</td><td>29</td>
                </tr>
                <tr>
                    <td>30</td><td></td><td></td><td></td><td></td><td></td><td></td>
                </tr>
            </tbody>
        </table>
    </div>

    {{-- Address --}}
    <div class="bld-section bld-info-section">
        <h3 class="bld-info-title">Đường đi</h3>
        <div class="bld-info-desc"
             id="restaurant_address"
             class="{{ isset($editable) && $editable ? 'editable' : '' }}"
             {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM' }}
        </div>
        <div class="bld-map-placeholder">
            Bản đồ Google Maps
        </div>
        <a href="#" class="bld-btn">Mở bản đồ lớn</a>
    </div>

    {{-- Gift --}}
    <div class="bld-section bld-info-section" style="background: #fff;">
        <h3 class="bld-info-title">Tặng Quà</h3>
        <div class="bld-info-desc">Mọi lời chúc và món quà đều là niềm vinh hạnh của chúng tôi.</div>
        
        <div class="bld-gift-box">
            <div class="bld-gift-name">Đến Chú Rể: {{ $data->groom_name ?? 'Hải Long' }}</div>
            <div class="bld-gift-bank">Vietcombank - 1234 5678 9012</div>
            <button class="bld-copy" data-account="123456789012">Sao chép</button>
            <div style="clear:both;"></div>
        </div>

        <div class="bld-gift-box">
            <div class="bld-gift-name">Đến Cô Dâu: {{ $data->bride_name ?? 'Ngọc Lan' }}</div>
            <div class="bld-gift-bank">Techcombank - 9876 5432 1098</div>
            <button class="bld-copy" data-account="987654321098">Sao chép</button>
            <div style="clear:both;"></div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Swiper Init
    new Swiper('.bld-swiper', {
        loop: true,
        pagination: { el: '.swiper-pagination', clickable: true }
    });

    // Scroll Anim
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                entry.target.classList.add('bld-visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.bld-section').forEach(sec => obs.observe(sec));

    // Copy Account
    document.querySelectorAll('.bld-copy').forEach(btn => {
        btn.addEventListener('click', function() {
            navigator.clipboard.writeText(this.dataset.account);
            this.innerText = "Đã chép";
            setTimeout(() => this.innerText = "Sao chép", 2000);
        });
    });
});
</script>

@if(isset($editable) && $editable)
<style>
    .editable { border-bottom: 1px dashed transparent; transition: .3s; outline: none; cursor: text; }
    .editable:hover, .editable:focus { border-bottom: 1px dashed #b0b0b0; background: rgba(0,0,0,.03); }
</style>
@endif
