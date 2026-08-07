<!-- Toast Notification Container (Top Right floating above everything) -->
<div id="toast-container" style="position: fixed; top: 24px; right: 24px; z-index: 999999; display: flex; flex-direction: column; gap: 12px; pointer-events: none; width: 380px; max-width: calc(100vw - 32px);"></div>

<style>
    @keyframes toastSlideInRight {
        from {
            transform: translateX(120%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes toastSlideOutRight {
        from {
            transform: translateX(0);
            opacity: 1;
        }
        to {
            transform: translateX(120%);
            opacity: 0;
        }
    }

    @keyframes toastProgress {
        from {
            width: 100%;
        }
        to {
            width: 0%;
        }
    }

    .toast-card {
        pointer-events: auto;
        position: relative;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 16px 20px;
        border-radius: 22px;
        box-shadow: 0 14px 35px rgba(0, 0, 0, 0.12);
        animation: toastSlideInRight 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        overflow: hidden;
        transition: all 0.3s ease;
        width: 100%;
        box-sizing: border-box;
    }

    .toast-card.hiding {
        animation: toastSlideOutRight 0.35s cubic-bezier(0.7, 0, 0.84, 0) forwards;
    }

    /* Green Theme (Success) */
    .toast-card.toast-success {
        background-color: #eef9ee;
    }
    .toast-card.toast-success .toast-title {
        color: #111827;
    }
    .toast-card.toast-success .toast-sub-badge {
        background-color: #22c55e;
    }
    .toast-card.toast-success .toast-subtitle {
        color: #15803d;
    }
    .toast-card.toast-success .toast-progress {
        background-color: #22c55e;
    }

    /* Blue Theme (Info) */
    .toast-card.toast-info {
        background-color: #eef4ff;
    }
    .toast-card.toast-info .toast-title {
        color: #111827;
    }
    .toast-card.toast-info .toast-sub-badge {
        background-color: #3b82f6;
    }
    .toast-card.toast-info .toast-subtitle {
        color: #1d4ed8;
    }
    .toast-card.toast-info .toast-progress {
        background-color: #3b82f6;
    }

    /* Red Theme (Warning / Error) */
    .toast-card.toast-error {
        background-color: #fdeded;
    }
    .toast-card.toast-error .toast-title {
        color: #111827;
    }
    .toast-card.toast-error .toast-sub-badge {
        background-color: #ef4444;
    }
    .toast-card.toast-error .toast-subtitle {
        color: #b91c1c;
    }
    .toast-card.toast-error .toast-progress {
        background-color: #ef4444;
    }
</style>

<script>
    function showToast(options) {
        const type = options.type || 'success'; // 'success', 'info', 'error'
        const title = options.title || (type === 'success' ? 'Doing Great!' : (type === 'info' ? 'Doing OK' : 'Pay Attention!'));
        const subtitle = options.subtitle || '';
        const duration = options.duration || 4000; // default 4 seconds

        const container = document.getElementById('toast-container');
        if (!container) return;

        const toast = document.createElement('div');
        toast.className = `toast-card toast-${type}`;

        // SVG Pixelated Face Icons
        let faceSvg = '';
        let badgeSvg = '';

        if (type === 'success') {
            faceSvg = `
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" style="border-radius: 12px; flex-shrink: 0;">
                    <rect width="46" height="46" rx="12" fill="#4ade80"/>
                    <!-- Eyes -->
                    <rect x="13" y="15" width="5" height="5" rx="1" fill="#000000"/>
                    <rect x="28" y="15" width="5" height="5" rx="1" fill="#000000"/>
                    <!-- Smile Mouth -->
                    <rect x="13" y="27" width="4" height="4" fill="#000000"/>
                    <rect x="17" y="30" width="12" height="4" fill="#000000"/>
                    <rect x="29" y="27" width="4" height="4" fill="#000000"/>
                </svg>
            `;
            badgeSvg = `
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m18 15-6-6-6 6"/>
                </svg>
            `;
        } else if (type === 'info') {
            faceSvg = `
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" style="border-radius: 12px; flex-shrink: 0;">
                    <rect width="46" height="46" rx="12" fill="#60a5fa"/>
                    <!-- Eyes -->
                    <rect x="13" y="17" width="5" height="5" rx="1" fill="#000000"/>
                    <rect x="28" y="17" width="5" height="5" rx="1" fill="#000000"/>
                    <!-- Neutral Mouth -->
                    <rect x="15" y="29" width="16" height="4" rx="1" fill="#000000"/>
                </svg>
            `;
            badgeSvg = `
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="4" stroke-linecap="round">
                    <line x1="5" y1="12" x2="19" y2="12"/>
                </svg>
            `;
        } else {
            // Error / Warning
            faceSvg = `
                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" style="border-radius: 12px; flex-shrink: 0;">
                    <rect width="46" height="46" rx="12" fill="#f87171"/>
                    <!-- Eyes -->
                    <rect x="13" y="17" width="5" height="5" rx="1" fill="#000000"/>
                    <rect x="28" y="17" width="5" height="5" rx="1" fill="#000000"/>
                    <!-- Sad Mouth -->
                    <rect x="13" y="31" width="4" height="4" fill="#000000"/>
                    <rect x="17" y="28" width="12" height="4" fill="#000000"/>
                    <rect x="29" y="31" width="4" height="4" fill="#000000"/>
                </svg>
            `;
            badgeSvg = `
                <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"/>
                </svg>
            `;
        }

        toast.innerHTML = `
            ${faceSvg}
            <div style="flex-grow: 1; padding-right: 12px;">
                <h5 class="toast-title" style="font-size: 15.5px; font-weight: 800; margin: 0; line-height: 1.2;">${title}</h5>
                <div style="display: flex; align-items: center; gap: 6px; margin-top: 3px;">
                    <span class="toast-sub-badge" style="width: 17px; height: 17px; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; flex-shrink: 0;">
                        ${badgeSvg}
                    </span>
                    <span class="toast-subtitle" style="font-size: 13px; font-weight: 700; line-height: 1.2;">${subtitle}</span>
                </div>
            </div>
            <!-- Close Button -->
            <button onclick="closeToast(this.parentElement)" style="background: none; border: none; cursor: pointer; padding: 4px; opacity: 0.5; transition: opacity 0.2s; color: #374151; flex-shrink: 0;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.5'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
            <!-- Progress Line -->
            <div class="toast-progress" style="position: absolute; bottom: 0; left: 0; height: 3px; animation: toastProgress ${duration}ms linear forwards;"></div>
        `;

        container.appendChild(toast);

        // Auto close after duration
        const timer = setTimeout(() => {
            closeToast(toast);
        }, duration);

        toast._timer = timer;
    }

    function closeToast(toastElement) {
        if (!toastElement || toastElement.classList.contains('hiding')) return;
        if (toastElement._timer) clearTimeout(toastElement._timer);
        toastElement.classList.add('hiding');
        toastElement.addEventListener('animationend', () => {
            if (toastElement.parentNode) {
                toastElement.parentNode.removeChild(toastElement);
            }
        });
    }

    // Trigger toast on page load if Laravel session messages exist
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
            showToast({
                type: 'success',
                title: 'Doing Great!',
                subtitle: '{{ session('success') }}',
                duration: 4000
            });
        @endif

        @if(session('info'))
            showToast({
                type: 'info',
                title: 'Doing OK',
                subtitle: '{{ session('info') }}',
                duration: 4000
            });
        @endif

        @if(session('error') || $errors->any())
            showToast({
                type: 'error',
                title: 'Pay Attention!',
                subtitle: '{{ session('error') ?? $errors->first() }}',
                duration: 4000
            });
        @endif
    });
</script>
