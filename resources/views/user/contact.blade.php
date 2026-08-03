@extends('layouts.user')

@section('title', 'Liên hệ - Thiệp Cưới')

@section('styles')
<style>
/* ─── THEME TOKENS ─── */
:root {
    --bg-body: #F8F9FA;
    --bg-card: #FFFFFF;
    --text-primary: #111111;
    --text-secondary: #4B5563;
    --border: rgba(0, 0, 0, 0.08);
    --accent: #f43f5e;
}
.dark {
    --bg-body: #0B1A14;
    --bg-card: rgba(255, 255, 255, 0.03);
    --text-primary: #F3F4F6;
    --text-secondary: #D1D5DB;
    --border: rgba(255, 255, 255, 0.08);
}

body { background-color: var(--bg-body); color: var(--text-primary); }

.contact-hero {
    position: relative;
    padding: 100px 20px 80px;
    background: linear-gradient(to bottom, rgba(244, 63, 94, 0.05), transparent);
    text-align: center;
    border-bottom: 1px solid var(--border);
}
.contact-title {
    font-size: 2.5rem;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: -0.02em;
    margin-bottom: 1rem;
}
.contact-subtitle {
    font-size: 1.1rem;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.contact-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 40px;
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}
@media (min-width: 992px) {
    .contact-grid { grid-template-columns: 1fr 1fr; }
}

.info-card {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.02);
    display: flex;
    flex-direction: column;
    gap: 30px;
}
.info-item {
    display: flex;
    align-items: flex-start;
    gap: 20px;
}
.info-icon {
    width: 50px;
    height: 50px;
    border-radius: 16px;
    background: rgba(244, 63, 94, 0.1);
    color: var(--accent);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.info-text h5 {
    font-size: 1.1rem;
    font-weight: 800;
    margin-bottom: 5px;
}
.info-text p {
    font-size: 0.95rem;
    color: var(--text-secondary);
    margin: 0;
    line-height: 1.5;
}

.contact-form {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 40px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.02);
}
.form-group { margin-bottom: 24px; }
.form-label {
    display: block;
    font-size: 0.85rem;
    font-weight: 800;
    margin-bottom: 8px;
    color: var(--text-primary);
    text-transform: uppercase;
    letter-spacing: 0.05em;
}
.form-control {
    width: 100%;
    background: transparent;
    border: 2px solid var(--border);
    border-radius: 16px;
    padding: 16px 20px;
    font-size: 0.95rem;
    color: var(--text-primary);
    transition: all 0.2s ease;
}
.form-control:focus {
    border-color: var(--accent);
    outline: none;
    box-shadow: 0 0 0 4px rgba(244, 63, 94, 0.1);
}
textarea.form-control { resize: vertical; min-height: 120px; }

.submit-btn {
    width: 100%;
    padding: 18px;
    background: var(--accent);
    color: white;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    border-radius: 16px;
    border: none;
    cursor: pointer;
    transition: all 0.2s;
}
.submit-btn:hover { background: #e11d48; transform: translateY(-2px); box-shadow: 0 10px 20px rgba(244, 63, 94, 0.2); }
.submit-btn:active { transform: translateY(0); }

.map-container {
    max-width: 1200px;
    margin: 0 auto 80px;
    padding: 0 20px;
}
.map-frame {
    width: 100%;
    height: 450px;
    border-radius: 24px;
    border: 1px solid var(--border);
    overflow: hidden;
}

/* ─── SOCIAL BUTTONS ─── */
.social-btn {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 28px;
    border-radius: 50px;
    font-weight: 800;
    font-size: 0.95rem;
    color: var(--text-primary) !important;
    background: var(--bg-card);
    border: 1px solid var(--border);
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s;
    box-shadow: 0 4px 15px rgba(0,0,0,0.03);
    z-index: 1;
}

.social-btn img {
    width: 24px;
    height: 24px;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    z-index: 2;
}

.social-btn span {
    position: relative;
    z-index: 2;
}

.social-btn:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
}
.social-btn:hover img {
    transform: scale(1.2) rotate(8deg);
}

/* Lớp màu chạy mượt mà bên trong nút (Soft moving wave) */
.social-btn::before {
    content: "";
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    z-index: -1;
    background-size: 200% auto;
    animation: move-bg 3s linear infinite;
    opacity: 0.7; /* Make the gradient wave visible but soft */
}

@keyframes move-bg {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
}

.social-btn.fb::before { background-image: linear-gradient(90deg, rgba(24,119,242,0.02), rgba(24,119,242,0.15), rgba(24,119,242,0.02)); }
.social-btn.zl::before { background-image: linear-gradient(90deg, rgba(0,104,255,0.02), rgba(0,104,255,0.15), rgba(0,104,255,0.02)); }
.social-btn.tt::before { background-image: linear-gradient(90deg, rgba(0,0,0,0.02), rgba(0,0,0,0.12), rgba(0,0,0,0.02)); }
.social-btn.ig::before { background-image: linear-gradient(90deg, rgba(225,48,108,0.02), rgba(240,148,51,0.15), rgba(225,48,108,0.02)); }
.dark .social-btn.tt::before { background-image: linear-gradient(90deg, rgba(255,255,255,0.02), rgba(255,255,255,0.15), rgba(255,255,255,0.02)); }


</style>
@endsection

@section('content')
<main class="mt-20 md:mt-24">
    
    <!-- Hero Banner -->
    <section class="contact-hero">
        <h1 class="contact-title">Liên hệ với chúng tôi</h1>
        <p class="contact-subtitle">Chúng tôi luôn sẵn sàng lắng nghe và hỗ trợ bạn thiết kế những tấm thiệp cưới hoàn hảo nhất cho ngày trọng đại.</p>
        
        <!-- Social Media Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-4 mt-10 relative z-10">
            <button type="button" onclick="openSocialModal('facebook')" class="social-btn fb">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b8/2021_Facebook_icon.svg" alt="Facebook">
                <span>Facebook</span>
            </button>
            <button type="button" onclick="openSocialModal('zalo')" class="social-btn zl">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo">
                <span>Zalo</span>
            </button>
            <button type="button" onclick="openSocialModal('tiktok')" class="social-btn tt">
                <img src="https://upload.wikimedia.org/wikipedia/en/a/a9/TikTok_logo.svg" alt="Tiktok">
                <span>Tiktok</span>
            </button>
            <button type="button" onclick="openSocialModal('instagram')" class="social-btn ig">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e7/Instagram_logo_2016.svg" alt="Instagram">
                <span>Instagram</span>
            </button>
        </div>
    </section>

    <!-- Main Content -->
    <section class="contact-grid">
        
        <!-- Contact Information -->
        <div class="info-card">
            <h3 class="text-2xl font-black mb-2">Thông tin liên hệ</h3>
            <p class="text-sm text-[var(--text-secondary)] font-medium mb-4">Mọi thắc mắc về dịch vụ, vui lòng liên hệ với chúng tôi qua các kênh dưới đây.</p>
            
            <div class="info-item">
                <div class="info-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </div>
                <div class="info-text">
                    <h5>Hotline tư vấn</h5>
                    <p>0987 654 321 (Zalo/Viber 24/7)</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                </div>
                <div class="info-text">
                    <h5>Email hỗ trợ</h5>
                    <p>contact@thiepcuoivn.com<br>hotro@thiepcuoivn.com</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                </div>
                <div class="info-text">
                    <h5>Địa chỉ văn phòng</h5>
                    <p>123 Đường Nguyễn Trãi, Phường Bến Thành,<br>Quận 1, TP. Hồ Chí Minh</p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <div class="info-text">
                    <h5>Giờ làm việc</h5>
                    <p>Thứ 2 - Thứ 7: 08:00 AM - 09:00 PM<br>Chủ Nhật: 09:00 AM - 05:00 PM</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form">
            <h3 class="text-2xl font-black mb-2">Gửi lời nhắn</h3>
            <p class="text-sm text-[var(--text-secondary)] font-medium mb-8">Hãy để lại thông tin, đội ngũ CSKH của chúng tôi sẽ liên hệ lại với bạn trong vòng 24h.</p>
            
            <form action="#" method="POST">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Họ và tên của bạn</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Vd: Nguyễn Văn A" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="phone">Số điện thoại</label>
                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Vd: 0912 345 678" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="message">Nội dung cần tư vấn</label>
                    <textarea id="message" name="message" class="form-control" placeholder="Bạn cần hỗ trợ thiết kế thiệp, báo giá in ấn hay tư vấn chọn mẫu? Hãy cho chúng tôi biết..." required></textarea>
                </div>
                
                <button type="submit" class="submit-btn flex items-center justify-center gap-2">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4Z"></path><path d="M22 2 11 13"></path></svg>
                    Gửi yêu cầu ngay
                </button>
            </form>
        </div>

    </section>

    <!-- Google Map -->
    <section class="map-container">
        <div class="map-frame">
            <iframe src="https://maps.google.com/maps?q=H%E1%BA%A3i%20Ch%C3%A2u%2C%20%C4%90%C3%A0%20N%E1%BA%B5ng&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

</main>
@endsection
