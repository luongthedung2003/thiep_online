@extends('layouts.user')

@section('styles')
<style>
    .profile-dashboard-wrapper {
        background: #f4f5f7;
        min-height: 100vh;
        padding: 40px 20px;
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    .profile-outer-card {
        max-width: 1280px;
        margin: 0 auto;
        background: #ffffff;
        border-radius: 32px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02);
        border: 1px solid #e2e8f0;
        padding: 24px;
        display: flex;
        gap: 28px;
        position: relative;
    }
    .profile-sidebar-pill {
        width: 64px;
        background: #ffffff;
        border-radius: 24px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
        padding: 18px 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        flex-shrink: 0;
        min-height: 640px;
    }
    .profile-sidebar-top {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        width: 100%;
    }
    .profile-sidebar-bottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 14px;
        width: 100%;
    }
    .profile-header-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 24px;
    }
    .profile-featured-card {
        background: #ffffff;
        border-radius: 28px;
        border: 1px solid #e2e8f0;
        padding: 32px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.02);
        margin-bottom: 24px;
    }
    .profile-featured-grid {
        display: grid;
        grid-template-columns: 1fr 400px;
        gap: 36px;
        align-items: start;
    }
    .profile-stats-row {
        display: flex;
        gap: 48px;
        align-items: flex-start;
        margin-bottom: 32px;
    }
    .profile-attributes-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }
    .profile-portrait-preview {
        width: 100%;
        height: 380px;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
        background: #f1f5f9;
        border: 1px solid #e2e8f0;
    }
    .profile-bottom-cards {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 24px;
    }

    /* Responsive Breakpoint: Tablet (< 1024px) */
    @media (max-width: 1024px) {
        .profile-dashboard-wrapper {
            padding: 20px 12px;
        }
        .profile-outer-card {
            flex-direction: column;
            padding: 16px;
            border-radius: 24px;
            gap: 20px;
        }
        .profile-sidebar-pill {
            width: 100%;
            min-height: auto;
            flex-direction: row;
            padding: 10px 16px;
            border-radius: 20px;
            overflow-x: auto;
            justify-content: space-between;
        }
        .profile-sidebar-top {
            flex-direction: row;
            gap: 10px;
            width: auto;
        }
        .profile-sidebar-bottom {
            flex-direction: row;
            gap: 10px;
            width: auto;
        }
        .profile-featured-grid {
            grid-template-columns: 1fr;
            gap: 24px;
        }
        .profile-portrait-preview {
            height: 300px;
        }
        .profile-attributes-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .profile-bottom-cards {
            grid-template-columns: 1fr;
        }
    }

    /* Responsive Breakpoint: Mobile (< 640px) */
    @media (max-width: 640px) {
        .profile-header-row {
            flex-direction: column;
            gap: 16px;
        }
        .profile-stats-row {
            flex-direction: column;
            gap: 20px;
        }
        .profile-featured-card {
            padding: 18px;
            border-radius: 20px;
        }
        .profile-portrait-preview {
            height: 240px;
            border-radius: 16px;
        }
        .profile-attributes-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }
    }
</style>
@endsection

@section('content')
<div class="profile-dashboard-wrapper">
    
    <!-- Outer Frame Window Card -->
    <div class="profile-outer-card">
        
        <!-- Left Vertical Sidebar Capsule Pill -->
        <div class="profile-sidebar-pill">
            
            <!-- Top Section: Brand Icon & Nav Links -->
            <div class="profile-sidebar-top">
                <!-- Brand Logo Symbol -->
                <div style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center; margin-bottom: 4px;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="#000000">
                        <path d="M12 2L2 22h20L12 2zm0 4.5l6.5 13.5h-13L12 6.5z"/>
                    </svg>
                </div>

                <!-- Nav Button 1 (Active) -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; background: #ff0066; color: white; display: flex; align-items: center; justify-content: center; text-decoration: none; box-shadow: 0 8px 16px rgba(255, 0, 102, 0.3); transition: all 0.2s;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                </a>

                <!-- Nav Button 2 -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/><path d="m10 15 5-3-5-3v6z"/>
                    </svg>
                </a>

                <!-- Nav Button 3 -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <circle cx="12" cy="12" r="3" fill="currentColor"/>
                </a>

                <!-- Nav Button 4 -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2z"/>
                    </svg>
                </a>

                <!-- Nav Button 5 -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="7" height="7" x="3" y="3" rx="1"/><rect width="7" height="7" x="14" y="3" rx="1"/><rect width="7" height="7" x="14" y="14" rx="1"/><rect width="7" height="7" x="3" y="14" rx="1"/>
                    </svg>
                </a>

                <!-- Nav Button 6 -->
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" x2="18" y1="20" y2="10"/><line x1="12" x2="12" y1="20" y2="4"/><line x1="6" x2="6" y1="20" y2="14"/>
                    </svg>
                </a>
            </div>

            <!-- Bottom Section: Profile Avatar & Settings -->
            <div class="profile-sidebar-bottom">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80" alt="Profile" style="width: 34px; height: 34px; border-radius: 50%; object-fit: cover; border: 2px solid #e2e8f0; cursor: pointer;">
                
                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.38a2 2 0 0 0-.73-2.73l-.15-.1a2 2 0 0 1-1-1.72v-.51a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"/><circle cx="12" cy="12" r="3"/>
                    </svg>
                </a>

                <a href="#!" style="width: 40px; height: 40px; border-radius: 14px; color: #64748b; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'" onmouseout="this.style.background='transparent'">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                    </svg>
                </a>
            </div>

        </div>

        <!-- Main Content Area -->
        <div style="flex: 1; min-width: 0;">
            
            <!-- Dashboard Header Row -->
            <div class="profile-header-row">
                <div>
                    <div style="display: flex; align-items: center; gap: 8px;">
                        <span style="display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; border-radius: 6px; border: 1.5px solid #0f172a; color: #0f172a; font-size: 11px; font-weight: 800;">
                            &#8690;
                        </span>
                        <h1 style="font-size: 26px; font-weight: 900; color: #0f172a; letter-spacing: -0.02em; margin: 0; font-family: 'Inter', system-ui, sans-serif;">
                            Hoạt động mới nhất
                        </h1>
                    </div>
                    <p style="font-size: 14px; color: #64748b; margin-top: 4px; font-weight: 500;">
                        Theo dõi thiệp cưới và bộ sưu tập cá nhân của bạn
                    </p>
                </div>

                <!-- Filter Dropdown Button -->
                <div style="position: relative;">
                    <button style="display: inline-flex; align-items: center; gap: 8px; padding: 10px 18px; border-radius: 9999px; background: #f8fafc; border: 1px solid #e2e8f0; font-size: 13px; font-weight: 700; color: #1e293b; cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#f1f5f9'">
                        Mới nhất - Phổ biến nhất
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Featured Highlight Card (Exact Grid Layout as Reference Photo) -->
            <div class="profile-featured-card">
                <div class="profile-featured-grid">
                    
                    <!-- Left Details Column -->
                    <div>
                        <!-- Author/Product Header -->
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="width: 40px; height: 40px; border-radius: 50%; background: #000000; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 11px; font-weight: 900; letter-spacing: -0.5px;">
                                THIỆP
                            </div>
                            <div>
                                <h3 style="font-size: 18px; font-weight: 900; color: #0f172a; margin: 0; line-height: 1.2; letter-spacing: -0.01em;">
                                    BẢO & MINH ANH #4081
                                </h3>
                                <div style="font-size: 13px; color: #64748b; font-weight: 500; margin-top: 2px;">
                                    Bởi Thiệp Cưới Prime
                                </div>
                            </div>
                        </div>

                        <!-- Main Stats Row -->
                        <div class="profile-stats-row">
                            <div>
                                <div style="font-size: 24px; font-weight: 900; color: #0f172a; line-height: 1.1; letter-spacing: -0.02em;">
                                    1,450.06 LƯỢT
                                </div>
                                <div style="font-size: 12px; color: #64748b; font-weight: 500; margin-top: 4px;">
                                    Tổng xem trực tuyến
                                </div>
                                <div style="font-size: 12px; color: #94a3b8; font-weight: 500; margin-top: 8px;">
                                    25 phút trước
                                </div>
                            </div>

                            <div>
                                <div style="font-size: 20px; font-weight: 900; color: #0f172a; line-height: 1.1; letter-spacing: -0.02em;">
                                    THIEP-88923
                                </div>
                                <div style="font-size: 12px; color: #64748b; font-weight: 500; margin-top: 4px;">
                                    Mã thiệp định danh (ID)
                                </div>
                                <div style="display: flex; gap: 8px; margin-top: 10px; flex-wrap: wrap;">
                                    <a href="#!" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 9999px; background: #ff0066; color: #ffffff; font-size: 12px; font-weight: 700; text-decoration: none; box-shadow: 0 6px 16px rgba(255, 0, 102, 0.3); transition: all 0.2s;" onmouseover="this.style.background='#e6005c'">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/>
                                        </svg>
                                        Xem Thiệp
                                    </a>
                                    <button onclick="navigator.clipboard.writeText('THIEP-88923'); alert('Đã sao chép mã thiệp!');" style="display: inline-flex; align-items: center; gap: 6px; padding: 8px 16px; border-radius: 9999px; background: #f1f5f9; color: #1e293b; border: none; font-size: 12px; font-weight: 700; cursor: pointer; transition: all 0.2s;" onmouseover="this.style.background='#e2e8f0'">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/>
                                        </svg>
                                        Sao chép
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Attributes Header -->
                        <h4 style="font-size: 15px; font-weight: 800; color: #0f172a; margin: 0 0 12px 0;">
                            Thuộc tính thiệp
                        </h4>

                        <!-- 8 Attributes Grid -->
                        <div class="profile-attributes-grid">
                            
                            <!-- Box 1 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Ngày cưới</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">1.6%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    29.12.2026
                                </div>
                            </div>

                            <!-- Box 2 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Trang phục</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">3.2%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                    Veston & Áo Dài
                                </div>
                            </div>

                            <!-- Box 3 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Tông màu</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">5%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    Hồng Pastel
                                </div>
                            </div>

                            <!-- Box 4 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Âm nhạc</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">9.1%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    Piano Love
                                </div>
                            </div>

                            <!-- Box 5 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Hình ảnh</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">4.9%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    12 Ảnh HD
                                </div>
                            </div>

                            <!-- Box 6 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Bản đồ</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">5.2%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    Google Map
                                </div>
                            </div>

                            <!-- Box 7 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Mừng cưới</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">1.4%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    Mã QR Bank
                                </div>
                            </div>

                            <!-- Box 8 -->
                            <div style="background: #f8fafc; border-radius: 12px; padding: 10px 12px; border: 1px solid #f1f5f9;">
                                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 11px; color: #64748b; font-weight: 600;">
                                    <span>Xác nhận</span>
                                    <span style="background: #ffffff; padding: 1px 5px; border-radius: 9999px; font-size: 10px; border: 1px solid #e2e8f0; color: #475569;">6%</span>
                                </div>
                                <div style="font-size: 13px; font-weight: 800; color: #0f172a; margin-top: 4px;">
                                    Form RSVP
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Right Portrait Preview Column -->
                    <div style="height: 100%; width: 100%; position: relative;">
                        <div class="profile-portrait-preview">
                            <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80" alt="Wedding Card Preview" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>

                </div>
            </div>

            <!-- Bottom Row Cards -->
            <div class="profile-bottom-cards">
                
                <!-- Bottom Card 1 -->
                <div style="background: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; padding: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 13px; color: #94a3b8; font-weight: 500;">
                            12 ngày trước
                        </span>
                        <span style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 12px; border-radius: 9999px; background: #e0e7ff; color: #4338ca; font-size: 12px; font-weight: 700;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.028z"/>
                            </svg>
                            Thông báo
                        </span>
                    </div>

                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0 0 8px 0;">
                        Giao diện thử nghiệm tính năng mới đã sẵn sàng!
                    </h3>

                    <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0; font-weight: 400;">
                        Tùy chỉnh màn hình khóa thiệp cưới của riêng bạn với các phương thức hoàn toàn mới. Trưng bày hình ảnh yêu thích, tùy chỉnh kiểu chữ và tiện ích thống kê lượt xem theo thời gian thực.
                    </p>
                </div>

                <!-- Bottom Card 2 -->
                <div style="background: #ffffff; border-radius: 24px; border: 1px solid #e2e8f0; padding: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 13px; color: #94a3b8; font-weight: 500;">
                            15 ngày trước
                        </span>
                        <span style="display: inline-flex; align-items: center; gap: 6px; padding: 4px 12px; border-radius: 9999px; background: #e0e7ff; color: #4338ca; font-size: 12px; font-weight: 700;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.061 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.028z"/>
                            </svg>
                            Cập nhật
                        </span>
                    </div>

                    <h3 style="font-size: 16px; font-weight: 800; color: #0f172a; margin: 0 0 8px 0;">
                        Cá nhân hóa là sức mạnh sáng tạo
                    </h3>

                    <p style="font-size: 13.5px; color: #64748b; line-height: 1.6; margin: 0; font-weight: 400;">
                        Bây giờ bạn có thể tạo nhiều mẫu thiệp cưới khác nhau, mỗi mẫu có hình nền và phong cách độc đáo riêng. Dễ dàng chuyển đổi giữa các mẫu và duyệt bộ sưu tập hình nền gợi ý.
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>
@endsection
