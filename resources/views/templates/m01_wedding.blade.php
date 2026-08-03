<div class="wedding-card bg-[#fff9f9] border border-gray-300 p-8 text-center max-w-md mx-auto my-8 shadow-lg rounded-xl relative">
    <div class="floral-decoration mb-4">
        <img src="{{ asset('assets/images/category/category-bakery-biscuits.jpg') }}" alt="Floral" class="w-full h-auto opacity-80 mix-blend-multiply">
    </div>

    <!-- Cover Image -->
    <div class="cover-photo mb-6">
        <img id="preview-image" src="{{ isset($data->cover_image) ? asset($data->cover_image) : 'https://via.placeholder.com/400x300?text=Upload+Ảnh+Cưới' }}" alt="Ảnh cưới" class="editable-image mx-auto w-full object-cover rounded-lg h-[250px] shadow-sm {{ isset($editable) && $editable ? 'cursor-pointer hover:opacity-80 transition' : '' }}" {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
    </div>

    <p class="text-gray-500 italic mb-2">Trân trọng kính mời tới dự tiệc cưới của chúng tôi</p>

    <!-- Names -->
    <h1 class="names text-4xl font-serif text-pink-700 my-4 flex justify-center items-center gap-3">
        <span id="groom_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->groom_name ?? 'Hải Long' }}</span>
        <span class="text-2xl text-gray-400">&</span>
        <span id="bride_name" class="{{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->bride_name ?? 'Ngọc Lan' }}</span>
    </h1>

    <div class="divider w-16 h-1 bg-pink-300 mx-auto my-6"></div>

    <p class="text-gray-600 mb-2">Vào lúc:</p>
    <h3 id="date" class="text-xl font-bold text-gray-800 mb-4 {{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->date ?? 'Chủ Nhật, 20/10/2026 | 17:30' }}</h3>

    <p class="text-gray-600 mb-2">Tại địa điểm:</p>
    <h3 id="address" class="text-lg font-medium text-gray-800 {{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->address ?? 'Nhà Hàng Trống Đồng Palace, Hà Nội' }}</h3>
</div>

<style>
    .editable {
        border-bottom: 1px dashed transparent;
        transition: 0.3s;
        outline: none;
    }
    .editable:hover, .editable:focus {
        border-bottom: 1px dashed #ff6b6b;
        background-color: rgba(255, 107, 107, 0.05);
    }
</style>
