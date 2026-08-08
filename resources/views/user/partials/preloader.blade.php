<!-- Fullscreen Preloader -->
<div id="page-preloader" style="position: fixed; inset: 0; background: linear-gradient(135deg, #fff0f6 0%, #ffe4ef 30%, #f3e8ff 70%, #fce7f3 100%); z-index: 999999999; display: flex; flex-direction: column; align-items: center; justify-content: center; opacity: 1; transition: opacity 0.6s ease-out, visibility 0.6s ease-out; overflow: hidden;">

    <!-- Petal particles -->
    <div class="pl-petal" style="--x:10%;--delay:0s;--size:8px;"></div>
    <div class="pl-petal" style="--x:25%;--delay:0.5s;--size:6px;"></div>
    <div class="pl-petal" style="--x:45%;--delay:1.2s;--size:10px;"></div>
    <div class="pl-petal" style="--x:65%;--delay:0.3s;--size:7px;"></div>
    <div class="pl-petal" style="--x:80%;--delay:0.9s;--size:9px;"></div>
    <div class="pl-petal" style="--x:90%;--delay:1.6s;--size:5px;"></div>
    <div class="pl-petal" style="--x:35%;--delay:2.1s;--size:11px;"></div>
    <div class="pl-petal" style="--x:55%;--delay:1.8s;--size:6px;"></div>

    <!-- Icon nhẫn / trái tim -->
    <div class="pl-icon-wrap">
        <svg class="pl-heart" viewBox="0 0 60 55" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M30 51S3 34 3 16.5C3 9.6 8.6 4 15.5 4c4.4 0 8.3 2.2 10.5 5.6C28.2 6.2 32.1 4 36.5 4 43.4 4 49 9.6 49 16.5 49 34 30 51 30 51Z"
                  stroke="url(#hg)" stroke-width="2.5" stroke-linejoin="round"/>
            <defs>
                <linearGradient id="hg" x1="3" y1="4" x2="49" y2="51" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#f472b6"/>
                    <stop offset="1" stop-color="#a855f7"/>
                </linearGradient>
            </defs>
        </svg>
        <!-- Ring shimmer -->
        <div class="pl-ring"></div>
    </div>

    <!-- Brand text -->
    <div class="pl-brand">Thiệp Cưới Online</div>

    <!-- Shimmer subtitle -->
    <div class="pl-sub">Đang chuẩn bị điều kỳ diệu cho bạn...</div>

    <!-- Progress bar -->
    <div class="pl-bar-wrap">
        <div class="pl-bar-fill"></div>
    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Inter:wght@300;400&display=swap');

/* Petal */
.pl-petal {
    position: absolute;
    top: -20px;
    left: var(--x, 50%);
    width: var(--size, 8px);
    height: var(--size, 8px);
    background: radial-gradient(circle, #f9a8d4 0%, #e879f9 100%);
    border-radius: 50% 0 50% 0;
    opacity: 0.7;
    animation: plFall 4s ease-in infinite;
    animation-delay: var(--delay, 0s);
    pointer-events: none;
}
@keyframes plFall {
    0%   { transform: translateY(0) rotate(0deg); opacity: 0.8; }
    80%  { opacity: 0.5; }
    100% { transform: translateY(110vh) rotate(360deg); opacity: 0; }
}

/* Icon wrap */
.pl-icon-wrap {
    position: relative;
    width: 90px; height: 90px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1.5rem;
}
.pl-heart {
    width: 58px; height: 54px;
    animation: plHeartBeat 1.4s ease-in-out infinite;
    filter: drop-shadow(0 0 12px #f472b680);
}
@keyframes plHeartBeat {
    0%, 100% { transform: scale(1); }
    14%       { transform: scale(1.12); }
    28%       { transform: scale(1); }
    42%       { transform: scale(1.08); }
    56%       { transform: scale(1); }
}

/* Ring spinner */
.pl-ring {
    position: absolute;
    inset: 0;
    border-radius: 50%;
    border: 2.5px solid transparent;
    border-top-color: #f472b6;
    border-right-color: #a855f7;
    animation: plSpin 1.2s linear infinite;
}
@keyframes plSpin { to { transform: rotate(360deg); } }

/* Brand */
.pl-brand {
    font-family: 'Playfair Display', serif;
    font-size: 1.7rem;
    font-style: italic;
    background: linear-gradient(90deg, #db2777, #9333ea, #ec4899, #7c3aed);
    background-size: 300% 100%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: plShimmer 2.5s linear infinite;
    margin-bottom: 0.5rem;
    letter-spacing: 0.5px;
}
@keyframes plShimmer {
    0%   { background-position: 0% 50%; }
    100% { background-position: 300% 50%; }
}

/* Subtitle */
.pl-sub {
    font-family: 'Inter', sans-serif;
    font-size: 0.8rem;
    color: #be185d;
    letter-spacing: 0.5px;
    opacity: 0.75;
    margin-bottom: 2rem;
    font-weight: 300;
}

/* Progress bar */
.pl-bar-wrap {
    width: 160px; height: 3px;
    background: rgba(244,114,182,0.2);
    border-radius: 99px;
    overflow: hidden;
}
.pl-bar-fill {
    height: 100%;
    width: 0%;
    border-radius: 99px;
    background: linear-gradient(90deg, #f472b6, #a855f7);
    animation: plProgress 0.9s ease-out forwards;
}
@keyframes plProgress {
    0%   { width: 0%; }
    80%  { width: 90%; }
    100% { width: 100%; }
}
</style>

<script>
(function() {
    function hidePreloader() {
        const preloader = document.getElementById('page-preloader');
        if (preloader && preloader.style.opacity !== '0') {
            preloader.style.opacity = '0';
            preloader.style.visibility = 'hidden';
            setTimeout(function() {
                preloader.style.display = 'none';
            }, 600);
        }
    }

    if (document.readyState === 'complete') {
        setTimeout(hidePreloader, 200);
    } else {
        window.addEventListener('load', function() {
            setTimeout(hidePreloader, 200);
        });
        setTimeout(hidePreloader, 1200);
    }
})();
</script>
