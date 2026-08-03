<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Great+Vibes&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Lato:wght@300;400&display=swap');

.wedding-card-wrap {
    background: #f9f5ef;
    width: 100%; max-width: 100%;
    margin: 0 auto;
    font-family: 'Lato', sans-serif;
    color: #1a2a4a;
}

/* ── Cover ── */
.wc-cover {
    position: relative;
    height: 580px;
    background: #d6e4f0;
    overflow: hidden;
    display: flex;
    align-items: flex-end;
}
.wc-cover img {
    position: absolute; inset: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center top;
}
.wc-cover-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, rgba(20,40,90,0.45) 0%, rgba(20,40,90,0.1) 40%, rgba(20,40,90,0.55) 100%);
}
.wc-cover-text {
    position: relative; z-index: 2;
    text-align: center; width: 100%;
    padding: 0 24px 36px;
    color: #fff;
}
.wc-cover-text .label {
    font-family: 'Lato', sans-serif;
    font-size: 12px; letter-spacing: 4px;
    text-transform: uppercase; opacity: 0.9;
}
.wc-cover-text .names {
    font-family: 'Great Vibes', cursive;
    font-size: 68px; line-height: 1.1;
    text-shadow: 0 2px 12px rgba(0,0,0,0.3);
}
.wc-cover-text .amp {
    font-family: 'Great Vibes', cursive;
    font-size: 36px; display: block;
    opacity: 0.85;
}
.wc-cover-monogram {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%,-50%);
    z-index: 2;
    width: 120px; height: 120px;
    border: 2px solid rgba(255,255,255,0.6);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.85);
    font-family: 'Playfair Display', serif;
    font-size: 42px; font-style: italic;
}

/* ── Section commons ── */
.wc-section {
    padding: 40px 32px;
    border-bottom: 1px solid #dde8f5;
    text-align: center;
}
.wc-section-title {
    font-family: 'Great Vibes', cursive;
    font-size: 44px; color: #1e3a6e;
    margin-bottom: 4px;
}
.wc-section-sub {
    font-family: 'Cormorant Garamond', serif;
    font-size: 13px; letter-spacing: 3px;
    text-transform: uppercase; color: #5a7ab5;
    margin-bottom: 20px;
}
.wc-divider {
    width: 60px; height: 2px;
    background: #2855a0;
    margin: 16px auto;
}
.wc-floral {
    font-size: 22px; color: #5a7ab5;
    letter-spacing: 6px;
}

/* ── Date block ── */
.wc-date {
    background: #1e3a6e;
    color: #fff;
    padding: 28px 32px;
    text-align: center;
}
.wc-date .month {
    font-family: 'Lato', sans-serif;
    font-size: 13px; letter-spacing: 6px;
    text-transform: uppercase; opacity: 0.8;
}
.wc-date .day {
    font-family: 'Playfair Display', serif;
    font-size: 72px; line-height: 1;
}
.wc-date .year {
    font-family: 'Lato', sans-serif;
    font-size: 13px; letter-spacing: 6px; opacity: 0.8;
}
.wc-date .verse {
    font-family: 'Cormorant Garamond', serif;
    font-style: italic; font-size: 13px;
    opacity: 0.75; margin-top: 12px;
    padding: 0 16px;
}

/* ── Program ── */
.wc-program-list {
    list-style: none; padding: 0; margin: 20px 0 0;
    text-align: left;
}
.wc-program-list li {
    display: flex; align-items: center;
    padding: 10px 0;
    border-bottom: 1px dashed #c5d5ec;
    font-family: 'Cormorant Garamond', serif;
    font-size: 16px;
}
.wc-program-list li:last-child { border: none; }
.wc-program-list .time {
    width: 80px; font-weight: 700;
    color: #1e3a6e;
}
.wc-program-list .event { color: #2c3e6b; }

/* ── Story ── */
.wc-story-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 16px; line-height: 1.8;
    color: #3d4f72; text-align: left;
}

/* ── Entourage ── */
.wc-entourage-col {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 8px 16px; text-align: left;
    margin-top: 12px;
}
.wc-entourage-col .role {
    font-size: 11px; letter-spacing: 2px;
    text-transform: uppercase; color: #5a7ab5;
    font-weight: 700;
}
.wc-entourage-col .person {
    font-family: 'Cormorant Garamond', serif;
    font-size: 15px; color: #1e3a6e;
}
.wc-entourage-group {
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 1px dashed #c5d5ec;
}
.wc-entourage-group:last-child { border: none; }
.wc-entourage-group-title {
    font-family: 'Playfair Display', serif;
    font-size: 13px; letter-spacing: 2px;
    text-transform: uppercase; color: #2855a0;
    margin-bottom: 10px;
}

/* ── Gallery ── */
.wc-gallery-title {
    font-family: 'Great Vibes', cursive;
    font-size: 44px; color: #1e3a6e;
    text-align: center; margin-bottom: 16px;
}
.wc-gallery-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
}
.wc-gallery-grid img {
    width: 100%; aspect-ratio: 1/1;
    object-fit: cover; border-radius: 4px;
}
.wc-gallery-grid .wide {
    grid-column: span 2;
    aspect-ratio: 16/7;
}

/* ── Venue ── */
.wc-venue-img {
    width: 100%; border-radius: 8px;
    margin: 12px 0; aspect-ratio: 16/9;
    object-fit: cover;
}
.wc-venue-name {
    font-family: 'Playfair Display', serif;
    font-size: 22px; color: #1e3a6e;
    text-transform: uppercase; letter-spacing: 3px;
}
.wc-venue-detail {
    font-family: 'Cormorant Garamond', serif;
    font-size: 15px; color: #3d4f72; line-height: 1.7;
}

/* ── RSVP ── */
.wc-rsvp {
    background: #1e3a6e; color: #fff;
    padding: 40px 32px; text-align: center;
}
.wc-rsvp .title {
    font-family: 'Great Vibes', cursive;
    font-size: 60px;
}
.wc-rsvp .subtitle {
    font-size: 12px; letter-spacing: 4px;
    text-transform: uppercase; opacity: 0.75;
    margin-bottom: 16px;
}
.wc-rsvp .body {
    font-family: 'Cormorant Garamond', serif;
    font-style: italic; font-size: 15px;
    opacity: 0.85; line-height: 1.7;
}
.wc-rsvp .monogram-box {
    width: 100px; height: 100px;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 20px auto;
    font-family: 'Playfair Display', serif;
    font-size: 36px; font-style: italic;
}

/* ── Footer ── */
.wc-footer {
    padding: 32px; text-align: center;
    background: #f9f5ef;
}
.wc-footer .couple {
    font-family: 'Great Vibes', cursive;
    font-size: 36px; color: #1e3a6e;
}
.wc-footer .date-small {
    font-size: 12px; letter-spacing: 3px;
    color: #5a7ab5; margin-top: 4px;
}
</style>

<div class="wedding-card-wrap">

    {{-- ══ COVER ══ --}}
    <div class="wc-cover">
        <img src="{{ isset($data->cover_image) ? asset($data->cover_image) : asset('assets/images/banner/grocery-banner.png') }}"
             alt="Ảnh cưới"
             id="preview-image"
             class="{{ isset($editable) && $editable ? 'cursor-pointer hover:opacity-80 transition editable-image' : '' }}"
             {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
        <div class="wc-cover-overlay"></div>
        <div class="wc-cover-monogram">
            <span id="monogram">O&R</span>
        </div>
        <div class="wc-cover-text">
            <div class="label">The Wedding of</div>
            <div class="names">
                <span id="groom_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</span>
                <span class="amp">và</span>
                <span id="bride_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</span>
            </div>
        </div>
    </div>

    {{-- ══ DATE ══ --}}
    <div class="wc-date">
        <div class="month">Tháng Mười Hai</div>
        <div class="day" id="day">20</div>
        <div class="year">2 0 2 5</div>
        <div class="verse">"Hai người không cùng nhau đi được sao, nếu không đã hẹn nhau trước?"</div>
    </div>

    {{-- ══ LỜI MỜI ══ --}}
    <div class="wc-section">
        <div class="wc-floral">✿ ✿ ✿</div>
        <div class="wc-section-title">Trân Trọng Kính Mời</div>
        <div class="wc-divider"></div>
        <p style="font-family:'Cormorant Garamond',serif; font-size:16px; line-height:1.8; color:#3d4f72;">
            Chúng tôi trân trọng kính mời<br>
            <strong id="invitees" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->invitees ?? 'Quý vị & Gia đình' }}</strong><br>
            đến tham dự lễ cưới của chúng tôi.
        </p>
    </div>

    {{-- ══ CHƯƠNG TRÌNH ══ --}}
    <div class="wc-section">
        <div class="wc-section-title">Chương Trình</div>
        <div class="wc-section-sub">Wedding Program</div>
        <div class="wc-divider"></div>
        <ul class="wc-program-list">
            <li>
                <span class="time">2:00 CH</span>
                <span class="event">Lễ Rước Dâu</span>
            </li>
            <li>
                <span class="time">4:00 CH</span>
                <span class="event">Tiệc Đãi Khách</span>
            </li>
            <li>
                <span class="time">5:00 CH</span>
                <span class="event">Lễ Cắt Bánh</span>
            </li>
            <li>
                <span class="time">6:00 CH</span>
                <span class="event">Chụp Ảnh Lưu Niệm</span>
            </li>
        </ul>
    </div>

    {{-- ══ CÂU CHUYỆN TÌNH YÊU ══ --}}
    <div class="wc-section">
        <div class="wc-section-title">Our Love Story</div>
        <div class="wc-divider"></div>
        <p class="wc-story-text" id="love_story" style="{{ isset($editable) && $editable ? 'border-bottom:1px dashed #aaa' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->love_story ?? 'Chúng tôi gặp nhau trong một buổi chiều tà bên bờ biển, khi những đám mây hồng nhuộm cả chân trời. Từ ánh mắt đầu tiên đó, hai trái tim đã cùng nhịp đập và viết nên câu chuyện tình yêu đẹp nhất đời mình.' }}
        </p>
    </div>

    {{-- ══ TIỆC CƯỚI ══ --}}
    <div class="wc-section">
        <div class="wc-section-title">The Venue</div>
        <div class="wc-section-sub">Địa điểm tổ chức</div>
        <div class="wc-divider"></div>

        <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="Địa điểm" class="wc-venue-img">

        <div class="wc-venue-name" id="restaurant_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->restaurant_name ?? 'Nhà Hàng Trống Đồng Palace' }}
        </div>
        <div class="wc-divider"></div>
        <div class="wc-venue-detail" id="restaurant_address" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
            {{ $data->restaurant_address ?? '123 Đường Tình Yêu, Quận 1, TP.HCM' }}
        </div>
    </div>

    {{-- ══ GALLERY ══ --}}
    <div class="wc-section">
        <div class="wc-gallery-title">Gallery</div>
        <div class="wc-gallery-grid">
            <img class="wide" src="{{ asset('assets/images/banner/grocery-banner.png') }}" alt="">
            <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="">
            <img src="{{ asset('assets/images/banner/grocery-banner-2.jpg') }}" alt="">
        </div>
    </div>

    {{-- ══ RSVP ══ --}}
    <div class="wc-rsvp">
        <div class="subtitle">Kindly Reply By</div>
        <div class="title">R.S.V.P</div>
        <div class="monogram-box">O&R</div>
        <div class="body">
            Vui lòng xác nhận tham dự trước ngày <strong>01/12/2025</strong>.<br>
            Chúng tôi rất mong được gặp bạn trong ngày trọng đại này.
        </div>
        <div style="margin-top:20px; font-size:12px; letter-spacing:3px; opacity:.7;">
            SĐT: 0901 234 567
        </div>
    </div>

    {{-- ══ FOOTER ══ --}}
    <div class="wc-footer">
        <div class="wc-floral">✿ ✿ ✿</div>
        <div class="couple">
            {{ $data->groom_name ?? 'Hải Long' }} &amp; {{ $data->bride_name ?? 'Ngọc Lan' }}
        </div>
        <div class="date-small">20 · 12 · 2025</div>
    </div>

</div>

@if(isset($editable) && $editable)
<style>
    .editable { border-bottom: 1px dashed transparent; transition: .3s; outline: none; }
    .editable:hover, .editable:focus { border-bottom: 1px dashed #2855a0; background: rgba(40,85,160,.05); }
</style>
@endif
