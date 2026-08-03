<style>
@import url('https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&family=Noto+Sans+KR:wght@300;400;500;700&display=swap');

.blp-wrap {
    background-color: #F7F7F7;
    width: 100%; max-width: 100%;
    margin: 0 auto;
    font-family: 'Noto Sans KR', sans-serif;
    color: #191c21;
    overflow-x: hidden;
    position: relative;
    padding-bottom: 6px;
}

/* ── Sakura Canvas ── */
.blp-snow {
    position: absolute;
    top: -10px;
    width: 15px; height: 15px;
    pointer-events: none;
    z-index: 15;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23ffc0cb"><path d="M12 2C9 5 6 9 6 13c0 3 2.5 6 6 6s6-3 6-6c0-4-3-8-6-11z"/></svg>');
    background-size: contain;
    background-repeat: no-repeat;
}

/* ── Animations ── */
.blp-animate {
    opacity: 0; transform: translateY(30px);
    transition: opacity 1.2s ease, transform 1.2s ease;
}
.blp-animate.blp-visible {
    opacity: 1; transform: translateY(0);
}

/* ── Banner ── */
.blp-banner {
    display: flex; justify-content: center; align-items: center;
    position: relative; width: 100%;
}
.blp-banner .image-wrap {
    position: relative; width: 100%; z-index: 1; overflow: hidden;
}
.blp-banner .content-image {
    aspect-ratio: 16 / 9; height: 75vh; width: 100%;
    object-fit: cover;
    transform: translateY(-20px); opacity: 0;
    transition: opacity 1.2s ease, transform 1.2s ease;
}
.blp-banner .content-image.blp-img-visible { opacity: 1; transform: translateY(0); }
.blp-banner .content-main-font {
    position: absolute; top: 40%; z-index: 10; width: 100%; text-align: center;
    opacity: 0; transform: translateY(20px);
    transition: opacity 1.2s ease, transform 1.2s ease;
}
.blp-banner .content-main-font.blp-text-visible { opacity: 1; transform: translateY(0); }
.blp-banner .content-main-font p {
    font-weight: 400; font-size: 38px; line-height: 1.8;
    color: #ffffff; -webkit-text-stroke: 1px #FFC0CB; margin: 0;
    font-family: 'Love Ya Like A Sister', sans-serif;
}
.blp-banner .dim {
    position: absolute; z-index: 7; width: 100%; height: 200px;
    left: 0; bottom: 0;
    background: linear-gradient(180deg, rgba(217, 217, 217, 0) 0%, #F7F7F7 100%);
}

/* ── Intro Date ── */
.blp-intro-date {
    padding: 100px 68px; text-align: center;
}
.blp-intro-date-box {
    padding: 30px 0; min-width: 233px; margin: 0 auto;
    font-family: 'Love Ya Like A Sister', sans-serif;
    font-size: 32px; color: #FF69B4;
    border-top: 2px solid #FF69B4; border-bottom: 2px solid #FF69B4;
}

/* ── Photos ── */
.blp-photo { width: 100%; padding: 0 24px; box-sizing: border-box; }
.blp-photo img { width: 100%; height: 400px; object-fit: cover; border-radius: 4px; }
.blp-photo-list { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; padding: 24px; }
.blp-photo-list img { width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 4px; }

/* ── Text Intro ── */
.blp-text-intro { text-align: center; padding: 4rem 2rem; font-size: 16px; line-height: 2; color: #333; }

/* ── Info Sections ── */
.blp-info-section { padding: 3rem 2rem; text-align: center; }
.blp-info-title { font-size: 20px; font-weight: 700; margin-bottom: 1rem; color: #191c21; }
.blp-info-desc { font-size: 15px; color: #666; margin-bottom: 2rem; line-height: 1.6; }
.blp-map-placeholder { width: 100%; height: 250px; background: #e0e0e0; display: flex; align-items: center; justify-content: center; color: #888; border-radius: 8px; margin-bottom: 1.5rem; }
.blp-btn { display: inline-block; padding: 12px 30px; background: #FF69B4; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; transition: 0.3s; }
.blp-btn:hover { opacity: 0.8; }

</style>

<div class="blp-wrap" id="blp-wrap">
    {{-- Banner --}}
    <div class="blp-banner">
        <div class="image-wrap">
            <img class="content-image"
                 id="blp-banner-img"
                 src="{{ isset($data->cover_image) ? asset($data->cover_image) : asset('assets/images/banner/grocery-banner-2.jpg') }}"
                 alt="Ảnh cưới"
                 {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
            <div class="content-main-font" id="blp-banner-text">
                <p>Our Story<br/> Begins Here</p>
            </div>
        </div>
        <div class="dim"></div>
    </div>

    {{-- Intro Date --}}
    <div class="blp-intro-date blp-animate">
        <div class="blp-intro-date-box"
             id="wedding_date"
             class="{{ isset($editable) && $editable ? 'editable' : '' }}"
             {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ isset($data->wedding_date) ? $data->wedding_date : '25.11.21' }}
        </div>
    </div>

    {{-- Photos --}}
    <div class="blp-photo blp-animate">
        <img src="{{ asset('assets/images/banner/grocery-banner.png') }}" alt="Gallery 1">
    </div>
    <div class="blp-photo-list blp-animate">
        <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Gallery 2">
        <img src="{{ asset('assets/images/banner/grocery-banner.png') }}" alt="Gallery 3">
        <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Gallery 4">
        <img src="{{ asset('assets/images/banner/grocery-banner.png') }}" alt="Gallery 5">
    </div>

    {{-- Text Intro --}}
    <div class="blp-text-intro blp-animate">
        <p id="love_story"
           class="{{ isset($editable) && $editable ? 'editable' : '' }}"
           {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->love_story ?? 'Tình yêu là một cuộc phiêu lưu tuyệt vời. Chúng tôi rất mong được chia sẻ niềm hạnh phúc này cùng quý vị trong ngày cưới của chúng tôi.' }}
        </p>
        <div style="margin-top: 2rem; font-weight: bold; color: #FF69B4; font-size: 20px;">
            <span id="groom_name"
                  class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                  {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</span>
            &amp; 
            <span id="bride_name"
                  class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                  {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</span>
        </div>
    </div>

    {{-- Address --}}
    <div class="blp-info-section blp-animate">
        <h3 class="blp-info-title">Wedding Venue</h3>
        <div class="blp-info-desc">
            <strong id="restaurant_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->restaurant_name ?? 'Nhà Hàng Trống Đồng Palace' }}</strong><br>
            <span id="restaurant_address" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM' }}</span>
        </div>
        <div class="blp-map-placeholder">
            Bản đồ hiển thị tại đây
        </div>
        <a href="#" class="blp-btn">Hướng dẫn chỉ đường</a>
    </div>

    {{-- Footer/Closing --}}
    <div class="blp-info-section blp-animate" style="background: #fff; padding-bottom: 100px;">
        <h3 class="blp-info-title" style="font-family: 'Love Ya Like A Sister', sans-serif; font-size: 32px; color: #FF69B4;">Thank You</h3>
        <p>Xin chân thành cảm ơn quý vị đã đến chung vui.</p>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Banner Anim
    setTimeout(() => {
        document.getElementById('blp-banner-img').classList.add('blp-img-visible');
        setTimeout(() => {
            document.getElementById('blp-banner-text').classList.add('blp-text-visible');
        }, 400);
    }, 200);

    // Sakura Snow
    const wrap = document.getElementById('blp-wrap');
    for(let i = 0; i < 40; i++){
        const snow = document.createElement('div');
        snow.className = 'blp-snow';
        snow.style.cssText = [
            'left:' + Math.random()*100 + '%',
            'opacity:' + (Math.random()*0.5+0.5),
            'animation:blp-fall-'+i+' '+(Math.random()*15+10)+'s '+(Math.random()*-15)+'s linear infinite',
            'transform: scale('+(Math.random()*0.5 + 0.5)+') rotate('+(Math.random()*360)+'deg)'
        ].join(';');
        wrap.appendChild(snow);
    }

    const style = document.createElement('style');
    let keyframes = '';
    for(let i = 0; i < 40; i++){
        const xEnd = (Math.random()*150) - 75;
        const rotEnd = (Math.random()*720) - 360;
        keyframes += '@keyframes blp-fall-'+i+'{0%{transform:translateY(-20px) translateX(0) rotate(0deg)}100%{transform:translateY('+wrap.scrollHeight+'px) translateX('+xEnd+'px) rotate('+rotEnd+'deg)}}';
    }
    style.textContent = keyframes;
    document.head.appendChild(style);

    // Scroll Anim
    const obs = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) entry.target.classList.add('blp-visible');
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.blp-animate').forEach(sec => obs.observe(sec));
});
</script>

@if(isset($editable) && $editable)
<style>
    .editable { border-bottom: 1px dashed transparent; transition: .3s; outline: none; cursor: text; }
    .editable:hover, .editable:focus { border-bottom: 1px dashed #FF69B4; background: rgba(255,105,180,.05); }
</style>
@endif
