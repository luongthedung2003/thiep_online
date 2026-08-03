<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Serif+KR:wght@300;400;700&family=Noto+Sans+KR:wght@300;400;500&display=swap');

.bl-wrap {
    position: relative;
    background-color: #ffffff;
    width: 100%; max-width: 100%;
    margin: 0 auto;
    font-family: 'Noto Sans KR', sans-serif;
    color: #191c21;
    overflow: hidden;
}

/* ── Snow Effect ── */
.bl-snow {
    position: absolute;
    top: -10px;
    width: 6px; height: 6px;
    border-radius: 50%;
    pointer-events: none;
    z-index: 10;
}

/* ── Banner ── */
.bl-banner {
    padding: 84px 0 64px;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
    text-align: center;
}
.bl-banner.bl-visible { opacity: 1; transform: translateY(0); }

.bl-banner-date {
    width: 140px; margin: 0 auto;
    padding-bottom: 4px;
    border-bottom: 0.6px solid #b0b0b0;
    font-weight: 700; font-size: 21px;
    color: #191c21;
}
.bl-banner-image-wrap {
    padding: 54px 20px; overflow: hidden;
}
.bl-banner-image {
    border-radius: 4px; max-height: 475px;
    width: 100%; object-fit: cover;
    cursor: {{ isset($editable) && $editable ? 'pointer' : 'default' }};
}
.bl-banner-names {
    margin-top: 8px; font-size: 16px; color: #333;
}
.bl-banner-names-row {
    display: flex; gap: 14px;
    justify-content: center; align-items: flex-end;
    font-weight: 500; padding-bottom: 26px;
}
.bl-banner-names-row h2 { font-weight: 700; font-size: 26px; color: #191c21; }
.bl-banner-names-row p { color: #b0b0b0; }
.bl-banner-venue { color: #191c21; line-height: 1.6; }

/* ── Scroll Line ── */
.bl-scroll-line {
    margin: 0 auto; width: 0.6px; height: 0;
    background: #b0b0b0; border-radius: 2px;
    transition: height 1.5s ease;
}
.bl-scroll-line.bl-line-grow { height: 52px; }

/* ── Intro ── */
.bl-intro {
    padding: 0 24px 48px;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.5s ease, transform 1.5s ease;
    text-align: center;
}
.bl-intro.bl-visible { opacity: 1; transform: translateY(0); }
.bl-intro-title {
    color: #191c21; font-weight: 700;
    font-size: 21px; padding: 52px 0 24px;
}
.bl-intro-quote {
    font-style: italic; font-size: 12px;
    color: #999; padding: 0 24px 24px;
    line-height: 1.8;
}
.bl-intro-body p {
    color: #191c21; font-size: 16px;
    line-height: 1.8; margin-bottom: 6px;
}

/* ── Divider ── */
.bl-divider {
    width: 60px; height: 0.6px;
    background: #b0b0b0; margin: 32px auto;
}

/* ── Calendar ── */
.bl-calendar {
    padding: 48px 24px;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
    background: #fafafa; text-align: center;
}
.bl-calendar.bl-visible { opacity: 1; transform: translateY(0); }
.bl-calendar-title {
    font-size: 13px; letter-spacing: 4px;
    color: #b0b0b0; text-transform: uppercase;
    margin-bottom: 8px;
}
.bl-calendar-date {
    font-family: 'Noto Serif KR', serif;
    font-size: 48px; font-weight: 300;
    color: #191c21; line-height: 1;
}
.bl-calendar-month-year {
    font-size: 14px; color: #666;
    margin-top: 8px; letter-spacing: 2px;
}
.bl-calendar-grid {
    display: grid; grid-template-columns: repeat(7, 1fr);
    gap: 4px; margin-top: 24px;
    max-width: 280px; margin-left: auto; margin-right: auto;
}
.bl-calendar-day-label {
    font-size: 11px; color: #b0b0b0; padding: 4px 0;
}
.bl-calendar-day {
    font-size: 13px; color: #333; padding: 6px 0;
}
.bl-calendar-day.bl-highlight {
    background: #191c21; color: #fff;
    border-radius: 50%; font-weight: 700;
}

/* ── Address ── */
.bl-address {
    padding: 48px 24px;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
    text-align: center;
}
.bl-address.bl-visible { opacity: 1; transform: translateY(0); }
.bl-address-title {
    font-size: 18px; font-weight: 700;
    color: #191c21; margin-bottom: 12px;
}
.bl-address-detail {
    font-size: 14px; color: #666;
    line-height: 1.8; margin-bottom: 24px;
}
.bl-map-box {
    width: 100%; height: 200px; background: #f0f0f0;
    border-radius: 8px; display: flex;
    align-items: center; justify-content: center;
    margin-bottom: 16px; font-size: 14px; color: #999;
}
.bl-address-btn {
    display: inline-block; padding: 10px 28px;
    border: 1px solid #191c21; color: #191c21;
    text-decoration: none; font-size: 14px;
    border-radius: 2px; transition: all 0.3s;
}
.bl-address-btn:hover { background: #191c21; color: #fff; }

/* ── Gift ── */
.bl-gift {
    padding: 48px 24px; background: #fafafa;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
    text-align: center;
}
.bl-gift.bl-visible { opacity: 1; transform: translateY(0); }
.bl-gift-title { font-size: 18px; font-weight: 700; margin-bottom: 8px; }
.bl-gift-sub { font-size: 13px; color: #999; margin-bottom: 24px; }
.bl-gift-item {
    border: 0.6px solid #e0e0e0; border-radius: 4px;
    padding: 20px; margin-bottom: 12px;
    background: #fff; text-align: left;
}
.bl-gift-item-name { font-size: 14px; font-weight: 600; color: #191c21; margin-bottom: 4px; }
.bl-gift-item-bank { font-size: 13px; color: #888; margin-bottom: 8px; }
.bl-gift-item-account { font-size: 14px; color: #191c21; letter-spacing: 1px; }
.bl-copy-btn {
    float: right; padding: 4px 14px;
    border: 0.6px solid #b0b0b0; border-radius: 2px;
    font-size: 12px; cursor: pointer; background: transparent;
    transition: all 0.3s;
}
.bl-copy-btn:hover { background: #191c21; color: #fff; border-color: #191c21; }

/* ── Letter ── */
.bl-letter {
    padding: 48px 24px; text-align: center;
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
}
.bl-letter.bl-visible { opacity: 1; transform: translateY(0); }
.bl-letter-title { font-size: 18px; font-weight: 700; margin-bottom: 20px; }
.bl-letter-input {
    width: 100%; padding: 12px; font-size: 14px;
    border: 0.6px solid #e0e0e0; border-radius: 4px;
    margin-bottom: 12px; font-family: inherit;
    box-sizing: border-box;
}
.bl-letter-textarea {
    width: 100%; padding: 12px; font-size: 14px;
    border: 0.6px solid #e0e0e0; border-radius: 4px;
    min-height: 100px; resize: vertical;
    font-family: inherit; box-sizing: border-box;
    margin-bottom: 12px;
}
.bl-letter-btn {
    padding: 10px 32px; background: #191c21;
    color: #fff; border: none; border-radius: 2px;
    font-size: 14px; cursor: pointer; transition: opacity 0.3s;
}
.bl-letter-btn:hover { opacity: 0.8; }
</style>

<div class="bl-wrap" id="bl-wrap">

    {{-- ══ BANNER ══ --}}
    <div class="bl-banner" data-bl-animate>
        <div class="bl-banner-date">
            {{ isset($data->wedding_date) ? $data->wedding_date : '25.02.08' }}
        </div>
        <div class="bl-banner-image-wrap">
            <img class="bl-banner-image"
                 src="{{ isset($data->cover_image) ? asset($data->cover_image) : asset('assets/images/banner/grocery-banner.png') }}"
                 id="preview-image"
                 alt="Ảnh cưới"
                 {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
        </div>
        <div class="bl-banner-names">
            <div class="bl-banner-names-row">
                <h2 id="groom_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</h2>
                <p>và</p>
                <h2 id="bride_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</h2>
            </div>
            <div class="bl-banner-venue">
                <div id="restaurant_name"
                     class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                     {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->restaurant_name ?? 'Nhà Hàng Trống Đồng Palace' }}</div>
                <p id="restaurant_address"
                   class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                   {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM · 13:00' }}</p>
            </div>
        </div>
    </div>

    {{-- ══ INTRO ══ --}}
    <div class="bl-intro" data-bl-animate>
        <div class="bl-scroll-line" id="bl-scroll-line"></div>
        <div class="bl-intro-title">저희 두 사람이 결혼합니다.</div>
        <div class="bl-intro-quote">
            Chúng tôi xin trân trọng kính mời<br>
            quý vị cùng chia vui trong ngày trọng đại
        </div>
        <div class="bl-intro-body">
            <p id="love_story"
               class="{{ isset($editable) && $editable ? 'editable' : '' }}"
               {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->love_story ?? 'Tình yêu lớn lên từ những điều bình dị nhất. Chúng tôi đã chọn nhau và cùng nhau bước vào một hành trình mới.' }}
            </p>
        </div>
    </div>

    <div class="bl-divider"></div>

    {{-- ══ CALENDAR ══ --}}
    <div class="bl-calendar" data-bl-animate>
        <div class="bl-calendar-title">Wedding Day</div>
        <div class="bl-calendar-date">20</div>
        <div class="bl-calendar-month-year">THÁNG MƯỜI HAI · 2025</div>
        <div class="bl-calendar-grid">
            @foreach(['CN','T2','T3','T4','T5','T6','T7'] as $d)
                <div class="bl-calendar-day-label">{{ $d }}</div>
            @endforeach
            @for($i = 1; $i <= 31; $i++)
                @php $startDay = 0; /* Dec 2025 starts on Monday (index 1) */ @endphp
                @if($i === 1)
                    <div></div>{{-- Sun --}}
                @endif
                <div class="bl-calendar-day {{ $i === 20 ? 'bl-highlight' : '' }}">{{ $i }}</div>
            @endfor
        </div>
    </div>

    <div class="bl-divider"></div>

    {{-- ══ ADDRESS ══ --}}
    <div class="bl-address" data-bl-animate>
        <div class="bl-address-title">오시는 길 · Đường đến</div>
        <div class="bl-address-detail"
             id="restaurant_address_detail"
             class="{{ isset($editable) && $editable ? 'editable' : '' }}"
             {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM' }}
        </div>
        <div class="bl-map-box">📍 Bản đồ hiển thị tại đây</div>
        <a href="#" class="bl-address-btn">Xem đường đi</a>
    </div>

    <div class="bl-divider"></div>

    {{-- ══ GIFT ══ --}}
    <div class="bl-gift" data-bl-animate>
        <div class="bl-gift-title">축의금 · Tặng quà</div>
        <div class="bl-gift-sub">Cảm ơn tấm lòng của quý vị</div>
        <div class="bl-gift-item">
            <div class="bl-gift-item-name">Nhà Trai · {{ $data->groom_name ?? 'Hải Long' }}</div>
            <div class="bl-gift-item-bank">Vietcombank</div>
            <div class="bl-gift-item-account">1234 5678 9012</div>
            <button class="bl-copy-btn" data-account="1234 5678 9012">Sao chép</button>
            <div style="clear:both;"></div>
        </div>
        <div class="bl-gift-item">
            <div class="bl-gift-item-name">Nhà Gái · {{ $data->bride_name ?? 'Ngọc Lan' }}</div>
            <div class="bl-gift-item-bank">Techcombank</div>
            <div class="bl-gift-item-account">9876 5432 1098</div>
            <button class="bl-copy-btn" data-account="9876 5432 1098">Sao chép</button>
            <div style="clear:both;"></div>
        </div>
    </div>

    <div class="bl-divider"></div>

    {{-- ══ LETTER ══ --}}
    <div class="bl-letter" data-bl-animate>
        <div class="bl-letter-title">편지 · Lời chúc</div>
        <form onsubmit="return false;">
            <input class="bl-letter-input" type="text" placeholder="Họ và tên">
            <textarea class="bl-letter-textarea" placeholder="Lời chúc mừng đến cặp đôi..."></textarea>
            <button class="bl-letter-btn" type="submit">Gửi lời chúc ♡</button>
        </form>
    </div>

</div>

<script>
(function(){
    // Snow effect
    const wrap = document.getElementById('bl-wrap');
    const colors = ['#ffc0cb','#ffb6c1','#ff69b4','#ff1493','#db7093','#ffe4e1','#fff0f5'];
    for(let i = 0; i < 80; i++){
        const snow = document.createElement('div');
        snow.className = 'bl-snow';
        snow.style.cssText = [
            'left:' + Math.random()*100 + '%',
            'background:' + colors[Math.floor(Math.random()*colors.length)],
            'opacity:' + (Math.random()*0.5+0.2),
            'animation:bl-fall-'+i+' '+(Math.random()*20+10)+'s '+(Math.random()*-20)+'s linear infinite',
            'width:'+(Math.random()*4+2)+'px',
            'height:'+(Math.random()*4+2)+'px',
        ].join(';');
        wrap.appendChild(snow);
    }

    // Generate random fall keyframes
    const style = document.createElement('style');
    let keyframes = '';
    for(let i = 0; i < 80; i++){
        const xEnd = (Math.random()*100) - 50;
        keyframes += '@keyframes bl-fall-'+i+'{0%{transform:translateY(-10px) translateX(0)}100%{transform:translateY('+wrap.scrollHeight+'px) translateX('+xEnd+'px)}}';
    }
    style.textContent = keyframes;
    document.head.appendChild(style);

    // Scroll reveal
    const obs = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                entry.target.classList.add('bl-visible');
                const sl = entry.target.querySelector('#bl-scroll-line');
                if(sl) sl.classList.add('bl-line-grow');
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('[data-bl-animate]').forEach(function(el){ obs.observe(el); });

    // Copy account
    document.querySelectorAll('.bl-copy-btn').forEach(function(btn){
        btn.addEventListener('click', function(){
            navigator.clipboard.writeText(this.dataset.account).then(function(){
                btn.textContent = '✓ Đã sao chép';
                setTimeout(function(){ btn.textContent = 'Sao chép'; }, 2000);
            });
        });
    });
})();
</script>

@if(isset($editable) && $editable)
<style>
    .editable { border-bottom: 1px dashed transparent; transition: .3s; outline: none; cursor: text; }
    .editable:hover, .editable:focus { border-bottom: 1px dashed #b0b0b0; background: rgba(0,0,0,.03); }
</style>
@endif
