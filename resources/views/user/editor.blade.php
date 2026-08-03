@extends('layouts.user')

@section('content')
<section class="my-10">
    <div class="container mx-auto">
        <style>
            @media (max-width: 1024px) {
                .editor-layout {
                    display: flex;
                    flex-direction: column-reverse;
                }
                .editor-sidebar, .editor-canvas {
                    width: 100% !important;
                }
            }
            @media (min-width: 1025px) {
                .editor-layout {
                    display: flex;
                    flex-direction: row;
                }
                .editor-sidebar {
                    width: 33.333333% !important;
                }
                .editor-canvas {
                    width: 66.666667% !important;
                }
            }
        </style>

        <!-- Hướng dẫn trên Mobile (Chỉ hiện trên điện thoại/tablet) -->
        <div class="block lg:hidden bg-white p-6 rounded-lg shadow-md border mb-8">
            <h2 class="text-2xl font-bold mb-4">Chỉnh sửa thiệp</h2>
            <p class="text-gray-600 mb-6 text-sm">Hướng dẫn: Hãy click trực tiếp vào <b class="text-green-600">tên, ngày tháng, địa chỉ hoặc hình ảnh</b> trên mẫu thiệp bên dưới để thay đổi thông tin của bạn.</p>
            
            <hr class="my-4">
            
            <div class="bg-blue-50 p-4 rounded-lg border border-blue-100">
                <h3 class="font-semibold text-blue-800 mb-2">Đang chỉnh sửa:</h3>
                <p class="text-sm">{{ $template->name }}</p>
                <span class="inline-block mt-2 px-2 py-1 bg-blue-200 text-blue-800 text-xs rounded-full">{{ $template->category->name }}</span>
            </div>
        </div>

        <div class="editor-layout gap-8">
            <!-- Cột Công Cụ Bên Trái -->
            <div class="editor-sidebar w-full lg:w-1/3">
                <div class="bg-white p-6 rounded-lg shadow-md border sticky top-24">
                    <!-- Hướng dẫn trên Desktop (Bị ẩn trên điện thoại) -->
                    <div class="hidden lg:block">
                        <h2 class="text-2xl font-bold mb-4">Chỉnh sửa thiệp</h2>
                        <p class="text-gray-600 mb-6 text-sm">Hướng dẫn: Hãy click trực tiếp vào <b class="text-green-600">tên, ngày tháng, địa chỉ hoặc hình ảnh</b> trên mẫu thiệp bên cạnh để thay đổi thông tin của bạn.</p>
                        
                        <hr class="my-4">
                        
                        <div class="bg-blue-50 p-4 rounded-lg mb-6 border border-blue-100">
                            <h3 class="font-semibold text-blue-800 mb-2">Đang chỉnh sửa:</h3>
                            <p class="text-sm">{{ $template->name }}</p>
                            <span class="inline-block mt-2 px-2 py-1 bg-blue-200 text-blue-800 text-xs rounded-full">{{ $template->category->name }}</span>
                        </div>
                    </div>

                    <!-- Input ẩn để upload ảnh -->
                    <input type="file" id="image-upload" style="display: none;" accept="image/*" onchange="previewFile()">

                    <button type="button" id="save-btn" onclick="saveInvitation()" class="w-full py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg transition-colors shadow-lg flex justify-center items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy" width="20" height="20" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                            <circle cx="12" cy="14" r="2" />
                            <polyline points="14 4 14 8 8 8 8 4" />
                        </svg>
                        Hoàn tất & Tạo Thiệp
                    </button>
                    
                    <p id="loading-msg" class="text-sm text-center text-gray-500 mt-3 hidden">Đang xử lý, vui lòng đợi...</p>
                </div>
            </div>

            <!-- Cột Hiển Thị Thiệp (Canvas) Bên Phải -->
            <div class="editor-canvas w-full lg:w-2/3 bg-gray-100 rounded-lg shadow-inner flex justify-center items-start py-10 overflow-hidden">
                <div class="scale-100 origin-top">
                    @include($template->view_file, ['editable' => true, 'data' => (object)[]])
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Xử lý JavaScript cho chức năng WYSIWYG -->
<script>
    // Xử lý upload ảnh preview
    function triggerUpload() {
        document.getElementById('image-upload').click();
    }

    function previewFile() {
        const file = document.getElementById('image-upload').files[0];
        if (file) {
            const tempUrl = URL.createObjectURL(file);
            document.getElementById('preview-image').src = tempUrl;
            markAsEdited();
        }
    }

    // Đánh dấu đã chỉnh sửa
    function markAsEdited() {
        const btn = document.getElementById('save-btn');
        if (btn) {
            btn.classList.remove('bg-green-600', 'hover:bg-green-700');
            btn.classList.add('bg-red-600', 'hover:bg-red-700');
        }
    }

    // Lắng nghe sự kiện input trên các vùng editable
    document.addEventListener('DOMContentLoaded', function() {
        const editables = document.querySelectorAll('.editable');
        editables.forEach(el => {
            el.addEventListener('input', markAsEdited);
        });
    });

    // Xử lý thu thập dữ liệu và gửi lên Server
    function saveInvitation() {
        const btn = document.querySelector('button[onclick="saveInvitation()"]');
        const msg = document.getElementById('loading-msg');
        
        btn.disabled = true;
        btn.classList.add('opacity-75', 'cursor-not-allowed');
        msg.classList.remove('hidden');

        // Tạo FormData để gửi text và file ảnh
        const formData = new FormData();
        
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('template_id', '{{ $template->id }}');

        // Quét toàn bộ các element có class 'editable' để lấy dữ liệu
        const editableElements = document.querySelectorAll('.editable');
        editableElements.forEach(el => {
            const fieldName = el.id;
            if(fieldName) {
                formData.append(fieldName, el.innerText.trim());
            }
        });

        // Lấy ảnh
        const fileInput = document.getElementById('image-upload');
        if (fileInput.files.length > 0) {
            formData.append('cover_image', fileInput.files[0]);
        }

        // Gửi qua Fetch API (AJAX)
        fetch('/save-invitation', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                // Thành công -> chuyển hướng sang trang thiệp cuối cùng
                window.location.href = data.url;
            } else {
                alert('Có lỗi xảy ra, vui lòng thử lại.');
                btn.disabled = false;
                btn.classList.remove('opacity-75', 'cursor-not-allowed');
                msg.classList.add('hidden');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Lỗi kết nối server.');
            btn.disabled = false;
            btn.classList.remove('opacity-75', 'cursor-not-allowed');
            msg.classList.add('hidden');
        });
    }
</script>
@endsection
