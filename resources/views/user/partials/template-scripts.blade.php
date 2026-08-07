<div id="demoModal" style="display:none; position:fixed; inset:0; z-index:99999; background:#fff;">
    <button onclick="closeDemo()" style="position:absolute; top:20px; right:20px; z-index:100000; background:rgba(255,255,255,0.9); color:#333; border:1px solid rgba(0,0,0,0.1); padding:8px 16px; border-radius:30px; cursor:pointer; font-weight:600; font-size:14px; display:flex; align-items:center; gap:6px; box-shadow:0 4px 12px rgba(0,0,0,0.15); backdrop-filter:blur(10px); transition:all 0.3s ease;" onmouseover="this.style.background='#fff'; this.style.transform='scale(1.05)';" onmouseout="this.style.background='rgba(255,255,255,0.9)'; this.style.transform='scale(1)';">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"><path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/></svg>
        Đóng
    </button>
    <div id="demoIframeContainer" style="width:100%; height:100%;"></div>
</div>

<script>
function actualCloseModal() {
    document.getElementById('demoModal').style.display = 'none';
    document.getElementById('demoIframeContainer').innerHTML = '';
    document.body.style.overflow = '';
}

function openDemo(url) {
    if (window.location.hash !== '#demo') {
        history.pushState({demoOpen: true}, null, window.location.pathname + window.location.search + "#demo");
    }
    document.getElementById('demoIframeContainer').innerHTML = '<iframe src="' + url + '" style="width:100%; height:100%; border:none;"></iframe>';
    document.getElementById('demoModal').style.display = 'block';
    document.body.style.overflow = 'hidden';
}

function closeDemo() {
    if (window.location.hash === '#demo') {
        history.back();
    } else {
        actualCloseModal();
    }
}

window.addEventListener('popstate', function(event) {
    if (window.location.hash !== '#demo') {
        actualCloseModal();
    }
});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var quickViewModal = document.getElementById('quickViewModal');
    if(quickViewModal) {
        quickViewModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var name = button.getAttribute('data-name');
            var category = button.getAttribute('data-category');
            var image = button.getAttribute('data-image');
            var id = button.getAttribute('data-id');
            var code = button.getAttribute('data-code');

            var modalTitle = quickViewModal.querySelector('h1');
            var modalCategory = quickViewModal.querySelector('a.block.text-rose-500');
            if(modalTitle) modalTitle.textContent = name;
            if(modalCategory) modalCategory.textContent = category;

            var priceSpan = quickViewModal.querySelector('.text-gray-900.font-semibold');
            if(priceSpan) {
                priceSpan.textContent = 'Miễn phí';
                priceSpan.classList.add('text-rose-500');
            }
            var oldPriceSpan = quickViewModal.querySelector('.line-through');
            if(oldPriceSpan) oldPriceSpan.style.display = 'none';
            var offSpan = quickViewModal.querySelector('.text-red-600');
            if(offSpan) offSpan.parentNode.style.display = 'none';

            var sizeBtns = quickViewModal.querySelectorAll('button.btn.border-gray-300');
            if(sizeBtns.length >= 3) {
                sizeBtns[0].textContent = 'Mẫu gốc đẹp';
                sizeBtns[1].textContent = 'Dễ tùy chỉnh';
                sizeBtns[2].textContent = 'Độ nét cao';
            }

            var tdElements = quickViewModal.querySelectorAll('td');
            tdElements.forEach(function(td) {
                if(td.textContent.trim() === 'FBB00255') td.textContent = code;
                if(td.textContent.trim() === 'In Stock') td.textContent = 'Sẵn sàng sử dụng';
                if(td.textContent.trim() === 'Fruits') td.textContent = category;
            });
            var shippingSmall = quickViewModal.querySelector('small');
            if (shippingSmall && shippingSmall.textContent.includes('01 day shipping')) {
                shippingSmall.innerHTML = '2,410 lượt xem';
            }

            var addToCartBtn = quickViewModal.querySelector('button.btn.bg-rose-500');
            if(addToCartBtn) {
                var editLink = document.createElement('a');
                editLink.href = '/mau-thiep/' + id + '/edit';
                editLink.className = 'btn bg-rose-500 text-white border-rose-500 hover:bg-rose-600 hover:border-rose-600 justify-center w-full';
                editLink.innerHTML = 'Chỉnh sửa ngay';
                addToCartBtn.parentNode.replaceChild(editLink, addToCartBtn);
            } else {
                var existingLink = quickViewModal.querySelector('a.btn.bg-rose-500');
                if(existingLink) {
                    existingLink.href = '/mau-thiep/' + id + '/edit';
                }
            }

            var iframe = document.getElementById('quickViewIframe');
            var loader = document.getElementById('quickViewLoader');
            if(iframe) {
                if (loader) loader.style.display = 'flex';
                iframe.src = '/mau-thiep/' + id + '/preview';
            }

            var qvCode = document.getElementById('qv-code');
            var qvCategory = document.getElementById('qv-category');
            if(qvCode) qvCode.textContent = code;
            if(qvCategory) qvCategory.textContent = category;
        });
    }
});

// Scale preview wrappers dynamically to fill their containers
function resizeIframes() {
    document.querySelectorAll('.preview-container').forEach(container => {
        const wrap = container.querySelector('.preview-scale-wrap');
        if (wrap && container.clientWidth > 0) {
            const scale = container.clientWidth / 480;
            wrap.style.transform = `scale(${scale})`;
        }
    });
}
window.addEventListener('resize', resizeIframes);
document.addEventListener('DOMContentLoaded', resizeIframes);
setTimeout(resizeIframes, 100);
setTimeout(resizeIframes, 600);
</script>

@verbatim
<style>
.preview-container:hover .card-gradient-overlay {
    padding-top: 80px !important;
    background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(0,0,0,0.5) 75%, transparent 100%) !important;
}
.preview-container:hover .card-product-action {
    opacity: 1 !important;
    visibility: visible !important;
}
.hover-bg-green:hover {
    background: #f43f5e !important;
    color: white !important;
}

@media (min-width: 768px) {
    .action-buttons-wrap {
        width: 100% !important;
        margin-top: 4px !important;
    }
    .action-buttons-wrap .overlay-btn {
        flex: 1 !important;
    }
}

@media (max-width: 767px) {
    .mobile-grid-2 {
        display: grid !important;
        grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        gap: 0.5rem !important;
    }
    .card-gradient-overlay {
        padding: 20px 8px 8px !important;
    }
    .overlay-category { font-size: 9px !important; margin-bottom: 1px !important; }
    .overlay-title { font-size: 11px !important; margin-bottom: 2px !important; }
    .overlay-stars { font-size: 9px !important; }
    .overlay-reviews { font-size: 9px !important; }
    .overlay-btn {
        padding: 2px 6px !important;
        font-size: 9px !important;
        border-radius: 4px !important;
        white-space: nowrap !important;
    }
}
</style>
@endverbatim

<script>
// Hover-to-scroll preview animation
const IFRAME_H = 2000;

function initHoverScroll() {
    document.querySelectorAll('.preview-container').forEach(container => {
        const wrap = container.querySelector('.preview-scale-wrap');
        if (!wrap || container.dataset.hoverInit) return;
        container.dataset.hoverInit = '1';

        container.addEventListener('mouseenter', () => {
            const scale = container.clientWidth / 480;
            const visibleTemplateH = container.clientHeight / scale;
            const maxScroll = Math.max(0, IFRAME_H - visibleTemplateH);
            wrap.style.transition = 'transform 7s linear';
            wrap.style.transform = `scale(${scale}) translateY(-${maxScroll}px)`;
        });

        container.addEventListener('mouseleave', () => {
            const scale = container.clientWidth / 480;
            wrap.style.transition = 'transform 0.6s ease-out';
            wrap.style.transform = `scale(${scale}) translateY(0px)`;
        });
    });
}

document.addEventListener('DOMContentLoaded', initHoverScroll);
setTimeout(initHoverScroll, 700);
</script>

@verbatim
<style>
.showcase-3d-section {
    background: #e6e8eb;
    position: relative;
    padding: 3rem 0 3.5rem;
    overflow: hidden;
}
.showcase-3d-swiper {
    padding-top: 1.5rem !important;
    padding-bottom: 2.5rem !important;
    overflow: visible !important;
}
.showcase-3d-slide {
    width: 250px !important;
    height: 490px !important;
    transition: all 0.35s ease;
}
@media (min-width: 768px) {
    .showcase-3d-slide {
        width: 280px !important;
        height: 540px !important;
    }
}
.showcase-card-frame {
    width: 100%;
    height: 100%;
    background: #ffffff;
    border-radius: 18px;
    box-shadow: 0 25px 50px -10px rgba(0, 0, 0, 0.25);
    position: relative;
    overflow: hidden;
}
.showcase-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 30;
    background: #ec4899;
    color: #ffffff;
    font-size: 11px;
    font-weight: 700;
    padding: 3px 10px;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(236, 72, 153, 0.4);
}
.showcase-iframe-wrap {
    width: 100%;
    height: 100%;
    position: relative;
    overflow: hidden;
    background: #ffffff;
}
.showcase-iframe {
    width: 480px;
    height: 2000px;
    border: none;
    pointer-events: none;
    transform-origin: 0 0;
}
.showcase-hover-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 24px 14px 14px;
    background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.3) 65%, transparent 100%);
    z-index: 25;
    display: flex;
    gap: 8px;
    opacity: 0;
    transition: opacity 0.3s ease;
}
.showcase-card-frame:hover .showcase-hover-overlay {
    opacity: 1;
}
.showcase-btn-demo {
    flex: 1;
    padding: 8px 10px;
    background: rgba(31, 41, 55, 0.9);
    color: #ffffff !important;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    backdrop-filter: blur(4px);
    transition: all 0.2s;
    text-decoration: none;
}
.showcase-btn-demo:hover {
    background: #111827;
}
.showcase-btn-select {
    flex: 1;
    padding: 8px 10px;
    background: #f43f5e;
    color: #ffffff !important;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 700;
    text-align: center;
    backdrop-filter: blur(4px);
    transition: all 0.2s;
    text-decoration: none;
}
.showcase-btn-select:hover {
    background: #e11d48;
}
.showcase-prev-btn, .showcase-next-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 35;
    width: 44px;
    height: 44px;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 18px rgba(0,0,0,0.15);
    border: 1px solid rgba(0,0,0,0.06);
    cursor: pointer;
    transition: all 0.2s ease;
}
.showcase-prev-btn:hover, .showcase-next-btn:hover {
    background: #ffffff;
    transform: translateY(-50%) scale(1.1);
}
.showcase-prev-btn { left: 20px; }
.showcase-next-btn { right: 20px; }

/* Swiper Pagination Bullets */
.showcase-pagination {
    position: relative !important;
    bottom: 0 !important;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    margin-top: 1.5rem;
}
.showcase-pagination .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background: #94a3b8;
    opacity: 0.6;
    border-radius: 50%;
    transition: all 0.3s ease;
    margin: 0 !important;
}
.showcase-pagination .swiper-pagination-bullet-active {
    width: 28px;
    height: 8px;
    border-radius: 4px;
    background: #ec4899;
    opacity: 1;
}
</style>
@endverbatim

<script>
document.addEventListener('DOMContentLoaded', function() {
    function init3DShowcase() {
        if (typeof Swiper !== 'undefined' && document.querySelector('.showcase-3d-swiper')) {
            new Swiper('.showcase-3d-swiper', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                initialSlide: 2,
                loop: true,
                coverflowEffect: {
                    rotate: 26,
                    stretch: -30,
                    depth: 230,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: '.showcase-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.showcase-next-btn',
                    prevEl: '.showcase-prev-btn',
                },
                autoplay: {
                    delay: 3500,
                    disableOnInteraction: false,
                }
            });
        }

        function resizeShowcaseIframes() {
            document.querySelectorAll('.showcase-card-frame').forEach(frame => {
                const iframe = frame.querySelector('.showcase-iframe');
                if (iframe && frame.clientWidth > 0) {
                    const scale = frame.clientWidth / 480;
                    iframe.style.transform = `scale(${scale})`;
                }
            });
        }
        window.addEventListener('resize', resizeShowcaseIframes);
        resizeShowcaseIframes();
        setTimeout(resizeShowcaseIframes, 300);
        setTimeout(resizeShowcaseIframes, 800);
    }

    init3DShowcase();
});
</script>