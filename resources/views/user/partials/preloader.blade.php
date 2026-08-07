<!-- Fullscreen Preloader -->
<div id="page-preloader" style="position: fixed; inset: 0; background-color: #ffffff; z-index: 999999999; display: flex; align-items: center; justify-content: center; opacity: 1; transition: opacity 0.4s ease-out, visibility 0.4s ease-out;">
    <div class="preloader-text-wrapper" style="font-family: 'Inter', system-ui, -apple-system, sans-serif; font-size: 2.25rem; font-weight: 700; letter-spacing: 0.5px; display: flex; align-items: center; justify-content: center;">
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.0s;">L</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.12s;">o</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.24s;">a</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.36s;">d</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.48s;">i</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.60s;">n</span>
        <span class="p-letter" style="display: inline-block; color: #1e2952; animation: letterSweep 1.6s ease-in-out infinite; animation-delay: 0.72s;">g</span>
    </div>
</div>

<style>
@keyframes letterSweep {
    0%, 100% {
        color: #1e2952;
        transform: translateY(0);
    }
    30% {
        color: #3b82f6;
        transform: translateY(-2px);
    }
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
            }, 400);
        }
    }

    if (document.readyState === 'complete') {
        setTimeout(hidePreloader, 300);
    } else {
        window.addEventListener('load', function() {
            setTimeout(hidePreloader, 300);
        });
        setTimeout(hidePreloader, 2500);
    }
})();
</script>
