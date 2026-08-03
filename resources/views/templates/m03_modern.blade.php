<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,300;0,400;1,300;1,400&family=Inter:wght@300;400;500&display=swap');

.modern-wrapper {
    font-family: 'Inter', sans-serif;
    background: #000;
    color: #fff;
    width: 100%; max-width: 100%;
    margin: 0 auto;
    overflow-x: hidden;
}

/* ── Loading ── */
.mw-loader {
    position: fixed; top: 0; left: 0;
    width: 100%; height: 100%;
    background: #000;
    display: flex; align-items: center; justify-content: center;
    z-index: 9999;
    transition: opacity 1s ease;
}
.mw-loader.hidden { opacity: 0; pointer-events: none; }
.mw-loader-text {
    font-family: 'Playfair Display', serif;
    font-size: 2rem; font-weight: 300;
    letter-spacing: 3px;
    animation: mw-pulse 2s infinite;
}
@keyframes mw-pulse { 0%,100%{opacity:0.3} 50%{opacity:1} }

/* ── Floating dots ── */
.mw-floating-dot {
    position: fixed; width: 2px; height: 2px;
    background: #fff; border-radius: 50%;
    opacity: 0.3; pointer-events: none; z-index: 1;
    animation: mw-float 8s infinite linear;
}
@keyframes mw-float {
    0%   { transform: translateY(100vh) rotate(0deg); }
    100% { transform: translateY(-100px) rotate(360deg); }
}

/* ── Hero ── */
.mw-hero {
    min-height: 100vh;
    display: flex; flex-direction: column;
    justify-content: center; align-items: center;
    position: relative;
    background: linear-gradient(45deg, #000 0%, #111 50%, #000 100%);
}
.mw-hero-content {
    text-align: center; z-index: 2;
    animation: mw-heroFadeIn 2s ease 0.5s both;
}
@keyframes mw-heroFadeIn { from{transform:translateY(50px);opacity:0} to{transform:translateY(0);opacity:1} }
.mw-hero-date {
    font-size: 0.9rem; letter-spacing: 4px;
    margin-bottom: 2rem; opacity: 0.7; font-weight: 300;
}
.mw-hero-names {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem; font-weight: 300;
    margin-bottom: 1rem; letter-spacing: 2px; line-height: 1.1;
}
.mw-hero-subtitle {
    font-size: 1rem; letter-spacing: 3px; opacity: 0.8; font-weight: 300;
}
.mw-scroll-indicator {
    position: absolute; bottom: 30px; left: 50%;
    transform: translateX(-50%);
    display: flex; flex-direction: column; align-items: center;
    opacity: 0.6;
    animation: mw-bounce 2s infinite;
}
@keyframes mw-bounce {
    0%,20%,50%,80%,100%{transform:translateX(-50%) translateY(0)}
    40%{transform:translateX(-50%) translateY(-10px)}
    60%{transform:translateX(-50%) translateY(-5px)}
}
.mw-scroll-line { width: 1px; height: 30px; background:#fff; margin-bottom:10px; }
.mw-scroll-text { font-size:0.7rem; letter-spacing:2px; }

/* ── Common Section ── */
.mw-section {
    min-height: 100vh; padding: 4rem 2rem;
    display: flex; flex-direction: column; justify-content: center;
}
.mw-section-title {
    font-family: 'Playfair Display', serif;
    font-size: 2.5rem; font-weight: 300;
    text-align: center; margin-bottom: 3rem;
    opacity: 0; transform: translateY(50px);
    transition: all 0.8s ease;
}
.mw-section-title.mw-visible { opacity: 1; transform: translateY(0); }

/* ── Greeting ── */
.mw-greeting { background: #fff; color: #000; }
.mw-greeting-text {
    font-size: 1.1rem; line-height: 2; text-align: center;
    max-width: 350px; margin: 0 auto;
    opacity: 0; transform: translateY(30px);
    transition: all 0.8s ease 0.3s;
}
.mw-greeting-text.mw-visible { opacity: 1; transform: translateY(0); }
.mw-greeting-text p { margin-bottom: 2rem; }
.mw-signature {
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem; font-weight: 400;
    margin-top: 3rem; font-style: italic;
}

/* ── Couple ── */
.mw-couple { background: #000; color: #fff; }
.mw-couple-container { display: flex; flex-direction: column; gap: 4rem; }
.mw-person {
    text-align: center;
    opacity: 0; transform: translateX(-50px);
    transition: all 0.8s ease;
}
.mw-person:nth-child(2) { transform: translateX(50px); }
.mw-person.mw-visible { opacity: 1; transform: translateX(0); }
.mw-person-photo {
    width: 200px; height: 200px; border-radius: 50%;
    object-fit: cover; margin: 0 auto 2rem auto;
    border: 3px solid #fff; display: block;
    transition: transform 0.5s ease;
}
.mw-person-photo:hover { transform: scale(1.05); }
.mw-person-name { font-family:'Playfair Display',serif; font-size:2rem; font-weight:400; margin-bottom:1rem; }
.mw-person-info { font-size:0.9rem; opacity:0.7; letter-spacing:1px; }

/* ── Gallery ── */
.mw-gallery { background: #fff; color: #000; }
.mw-gallery-grid {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 1rem; margin-top: 2rem;
    opacity: 0; transform: translateY(30px);
    transition: all 0.8s ease;
}
.mw-gallery-grid.mw-visible { opacity: 1; transform: translateY(0); }
.mw-gallery-item {
    aspect-ratio: 1; overflow: hidden; cursor: pointer;
    opacity: 0; transform: scale(0.8); transition: all 0.6s ease;
}
.mw-gallery-item.mw-visible { opacity: 1; transform: scale(1); }
.mw-gallery-item:hover { transform: scale(1.02); }
.mw-gallery-item img { width:100%; height:100%; object-fit:cover; transition:transform 0.5s ease; }
.mw-gallery-item:hover img { transform: scale(1.1); }

/* ── Event ── */
.mw-event { background: #000; color: #fff; text-align: center; }
.mw-event-info {
    opacity: 0; transform: translateY(50px); transition: all 0.8s ease;
}
.mw-event-info.mw-visible { opacity: 1; transform: translateY(0); }
.mw-event-date { font-family:'Playfair Display',serif; font-size:3rem; font-weight:300; margin-bottom:1rem; letter-spacing:2px; }
.mw-event-time { font-size:1.2rem; margin-bottom:3rem; opacity:0.8; letter-spacing:2px; }
.mw-event-location { font-size:1.5rem; font-weight:500; margin-bottom:0.5rem; }
.mw-event-address { font-size:1rem; opacity:0.7; margin-bottom:3rem; }
.mw-event-buttons { display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; }
.mw-btn {
    padding: 1rem 2rem; background: transparent;
    border: 1px solid #fff; color: #fff;
    text-decoration: none; font-size: 0.9rem;
    letter-spacing: 1px; transition: all 0.3s ease;
    cursor: pointer; font-family: inherit;
    display: inline-block;
}
.mw-btn:hover { background:#fff; color:#000; transform:translateY(-2px); }
.mw-btn-filled { background: #fff; color: #000; }
.mw-btn-filled:hover { background: transparent; color: #fff; }

/* ── Account ── */
.mw-account { background: #fff; color: #000; }
.mw-account-list { max-width:350px; margin:0 auto; opacity:0; transform:translateY(30px); transition:all 0.8s ease; }
.mw-account-list.mw-visible { opacity:1; transform:translateY(0); }
.mw-account-item {
    padding: 2rem; border: 1px solid #eee;
    margin-bottom: 1rem; text-align: center;
    opacity: 0; transform: translateY(30px); transition: all 0.6s ease;
}
.mw-account-item.mw-visible { opacity:1; transform:translateY(0); }
.mw-account-name { font-size:1.1rem; font-weight:500; margin-bottom:1rem; }
.mw-account-number { font-size:1rem; margin-bottom:1rem; letter-spacing:1px; }
.mw-account-holder { font-size:0.9rem; opacity:0.7; margin-bottom:1rem; }
.mw-copy-btn {
    display:inline-block; margin-top:0.5rem; padding:0.6rem 1.4rem;
    font-size:0.9rem; color:#fff; background:#000;
    border:1px solid #000; border-radius:4px; cursor:pointer;
    transition: all 0.3s ease;
}
.mw-copy-btn:hover { background:#fff; color:#000; transform:translateY(-2px); }

/* ── Message ── */
.mw-message { background: #000; color: #fff; }
.mw-message-form {
    max-width:350px; margin:0 auto;
    opacity:0; transform:translateY(30px); transition:all 0.8s ease;
}
.mw-message-form.mw-visible { opacity:1; transform:translateY(0); }
.mw-form-group { margin-bottom:2rem; }
.mw-form-input, .mw-form-textarea {
    width:100%; padding:1rem; background:transparent;
    border:none; border-bottom:1px solid #333; color:#fff;
    font-size:1rem; font-family:inherit; transition:border-color 0.3s ease;
}
.mw-form-input:focus, .mw-form-textarea:focus { outline:none; border-bottom-color:#fff; }
.mw-form-input::placeholder, .mw-form-textarea::placeholder { color:#666; }
.mw-form-textarea { resize:vertical; min-height:120px; }

/* ── Closing ── */
.mw-closing { background: #000; color: #fff; text-align: center; min-height: 80vh; }
.mw-closing-text {
    font-family:'Playfair Display',serif;
    font-size:1.2rem; font-weight:300; line-height:2;
    opacity:0; transform:translateY(30px); transition:all 0.8s ease;
}
.mw-closing-text.mw-visible { opacity:1; transform:translateY(0); }
.mw-final-signature { font-size:2rem; margin-top:3rem; font-style:italic; }

@media (max-width:480px) {
    .mw-hero-names { font-size: 2.8rem; }
    .mw-section { padding: 3rem 1.5rem; }
    .mw-section-title { font-size: 2rem; }
    .mw-person-photo { width:150px; height:150px; }
}
</style>

<div class="modern-wrapper">

    {{-- Loading --}}
    <div class="mw-loader" id="mw-loader">
        <div class="mw-loader-text">LOADING</div>
    </div>

    {{-- Floating dots --}}
    <div class="mw-floating-dot" style="left:10%;animation-delay:0s;"></div>
    <div class="mw-floating-dot" style="left:30%;animation-delay:2s;"></div>
    <div class="mw-floating-dot" style="left:50%;animation-delay:4s;"></div>
    <div class="mw-floating-dot" style="left:70%;animation-delay:6s;"></div>
    <div class="mw-floating-dot" style="right:10%;animation-delay:1s;"></div>

    {{-- Hero --}}
    <section class="mw-hero">
        <div class="mw-hero-content">
            <div class="mw-hero-date"
                id="wedding_date"
                class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->wedding_date ?? '2026.12.20' }}
            </div>
            <h1 class="mw-hero-names">
                <span id="groom_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</span>
                <br>&<br>
                <span id="bride_name"
                    class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                    {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</span>
            </h1>
            <div class="mw-hero-subtitle">WEDDING</div>
        </div>
        <div class="mw-scroll-indicator">
            <div class="mw-scroll-line"></div>
            <div class="mw-scroll-text">SCROLL</div>
        </div>
    </section>

    {{-- Greeting --}}
    <section class="mw-section mw-greeting">
        <h2 class="mw-section-title">Invitation</h2>
        <div class="mw-greeting-text">
            <p id="invitation_text"
               class="{{ isset($editable) && $editable ? 'editable' : '' }}"
               {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->invitation_text ?? 'Chúng tôi trân trọng kính mời quý vị đến tham dự lễ cưới của chúng tôi. Sự hiện diện của quý vị là niềm vinh hạnh lớn nhất đối với chúng tôi.' }}
            </p>
            <div class="mw-signature">
                {{ $data->groom_name ?? 'Hải Long' }} & {{ $data->bride_name ?? 'Ngọc Lan' }}
            </div>
        </div>
    </section>

    {{-- Gallery --}}
    <section class="mw-section mw-gallery">
        <h2 class="mw-section-title">Gallery</h2>
        <div class="mw-gallery-grid">
            <div class="mw-gallery-item">
                <img src="{{ isset($data->cover_image) ? asset($data->cover_image) : asset('assets/images/banner/grocery-banner.png') }}"
                     id="preview-image"
                     alt="Ảnh cưới 1"
                     class="{{ isset($editable) && $editable ? 'cursor-pointer hover:opacity-80 transition' : '' }}"
                     {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
            </div>
            <div class="mw-gallery-item">
                <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Ảnh cưới 2">
            </div>
            <div class="mw-gallery-item">
                <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Ảnh cưới 3">
            </div>
            <div class="mw-gallery-item">
                <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Ảnh cưới 4">
            </div>
        </div>
    </section>

    {{-- Wedding Day --}}
    <section class="mw-section mw-event">
        <h2 class="mw-section-title">Wedding Day</h2>
        <div class="mw-event-info">
            <div class="mw-event-date">12.20</div>
            <div class="mw-event-time">PM 12:00</div>
            <div class="mw-event-location"
                 id="restaurant_name"
                 class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                 {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->restaurant_name ?? 'Nhà Hàng Trống Đồng Palace' }}
            </div>
            <div class="mw-event-address"
                 id="restaurant_address"
                 class="{{ isset($editable) && $editable ? 'editable' : '' }}"
                 {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
                {{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM' }}
            </div>
            <div class="mw-event-buttons">
                <a href="#" class="mw-btn">Đường đi</a>
                <button class="mw-btn mw-btn-filled">Thêm lịch</button>
            </div>
        </div>
    </section>

    {{-- Account --}}
    <section class="mw-section mw-account">
        <h2 class="mw-section-title">Tặng Quà</h2>
        <div class="mw-account-list">
            <div class="mw-account-item">
                <div class="mw-account-name">Nhà Trai</div>
                <div class="mw-account-number">Vietcombank 1234 5678 9012</div>
                <div class="mw-account-holder">{{ $data->groom_name ?? 'Hải Long' }}</div>
                <button class="mw-copy-btn" data-account="1234 5678 9012">Sao chép</button>
            </div>
            <div class="mw-account-item">
                <div class="mw-account-name">Nhà Gái</div>
                <div class="mw-account-number">Techcombank 9876 5432 1098</div>
                <div class="mw-account-holder">{{ $data->bride_name ?? 'Ngọc Lan' }}</div>
                <button class="mw-copy-btn" data-account="9876 5432 1098">Sao chép</button>
            </div>
        </div>
    </section>

    {{-- Message --}}
    <section class="mw-section mw-message">
        <h2 class="mw-section-title">Lời Chúc</h2>
        <form class="mw-message-form" onsubmit="return false;">
            <div class="mw-form-group">
                <input type="text" class="mw-form-input" placeholder="Họ và tên của bạn">
            </div>
            <div class="mw-form-group">
                <textarea class="mw-form-textarea" placeholder="Lời chúc mừng..."></textarea>
            </div>
            <div style="text-align:center;">
                <button type="submit" class="mw-btn mw-btn-filled">Gửi lời chúc</button>
            </div>
        </form>
    </section>

    {{-- Closing --}}
    <section class="mw-section mw-closing">
        <div class="mw-closing-text">
            <p>Cảm ơn quý vị đã dành thời gian quý báu<br>đến tham dự lễ cưới của chúng tôi.</p>
            <br>
            <p>Chúng tôi sẽ mãi trân trọng<br>tình cảm và sự hiện diện của quý vị.</p>
            <div class="mw-final-signature">
                {{ $data->groom_name ?? 'Hải Long' }} ♥ {{ $data->bride_name ?? 'Ngọc Lan' }}
            </div>
        </div>
    </section>

</div>

<script>
(function(){
    // Loading screen
    window.addEventListener('load', function(){
        const l = document.getElementById('mw-loader');
        if(l) l.classList.add('hidden');
    });
    setTimeout(function(){
        const l = document.getElementById('mw-loader');
        if(l) l.classList.add('hidden');
    }, 2500);

    // Scroll animation
    const obs = new IntersectionObserver(function(entries){
        entries.forEach(function(entry){
            if(entry.isIntersecting){
                entry.target.classList.add('mw-visible');
                if(entry.target.classList.contains('mw-gallery-grid')){
                    entry.target.querySelectorAll('.mw-gallery-item').forEach(function(item, i){
                        setTimeout(function(){ item.classList.add('mw-visible'); }, i * 200);
                    });
                }
                if(entry.target.classList.contains('mw-account-list')){
                    entry.target.querySelectorAll('.mw-account-item').forEach(function(item, i){
                        setTimeout(function(){ item.classList.add('mw-visible'); }, i * 300);
                    });
                }
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.mw-section-title, .mw-greeting-text, .mw-event-info, .mw-closing-text, .mw-gallery-grid, .mw-account-list, .mw-message-form').forEach(function(el){
        obs.observe(el);
    });

    // Scroll indicator hide
    window.addEventListener('scroll', function(){
        const ind = document.querySelector('.mw-scroll-indicator');
        if(ind) ind.style.opacity = window.pageYOffset > 100 ? '0' : '0.6';
    });

    // Copy account
    document.querySelectorAll('.mw-copy-btn').forEach(function(btn){
        btn.addEventListener('click', function(){
            const account = this.dataset.account;
            navigator.clipboard.writeText(account).then(function(){
                btn.textContent = 'Đã sao chép!';
                setTimeout(function(){ btn.textContent = 'Sao chép'; }, 2000);
            });
        });
    });
})();
</script>

@if(isset($editable) && $editable)
<style>
    .editable { border-bottom: 1px dashed transparent; transition: .3s; outline: none; }
    .editable:hover, .editable:focus { border-bottom: 1px dashed #ffffff80; background: rgba(255,255,255,.08); }
</style>
@endif
