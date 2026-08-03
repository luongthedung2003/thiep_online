<div class="birthday-card bg-blue-50 border-4 border-dashed border-blue-200 p-8 text-center max-w-md mx-auto my-8 shadow-lg rounded-3xl relative">
    
    <div class="party-decoration mb-6 flex justify-center">
        <span class="text-6xl">🎉🎂🎈</span>
    </div>

    <!-- Cover Image -->
    <div class="cover-photo mb-6">
        <img id="preview-image" src="{{ isset($data->cover_image) ? asset($data->cover_image) : 'https://via.placeholder.com/300x300?text=Upload+Ảnh+Bé' }}" alt="Ảnh bé" class="editable-image mx-auto w-48 h-48 object-cover rounded-full border-4 border-white shadow-md {{ isset($editable) && $editable ? 'cursor-pointer hover:opacity-80 transition' : '' }}" {{ isset($editable) && $editable ? 'onclick=triggerUpload()' : '' }}>
    </div>

    <h1 class="text-3xl font-bold text-blue-600 mb-2 uppercase tracking-wide">Mừng Sinh Nhật</h1>
    
    <!-- Names -->
    <h2 id="birthday_name" class="names text-4xl font-extrabold text-indigo-800 my-4 {{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>
        {{ $data->birthday_name ?? 'Bé Tròn Tròn' }}
    </h2>

    <p class="text-gray-600 mb-2 text-lg">Mời bạn đến chung vui cùng gia đình tại:</p>
    
    <div class="bg-white p-4 rounded-xl shadow-inner my-4">
        <h3 id="date" class="text-xl font-bold text-gray-800 mb-2 {{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->date ?? '18:00 - Thứ 7, 15/08/2026' }}</h3>
        <h3 id="address" class="text-md font-medium text-gray-600 {{ isset($editable) && $editable ? 'editable' : '' }}" {{ isset($editable) && $editable ? 'contenteditable=true' : '' }}>{{ $data->address ?? 'Khu vui chơi TiniWorld, Vincom' }}</h3>
    </div>

    <p class="text-sm text-gray-500 italic mt-6">Sự hiện diện của bạn là niềm vui lớn nhất!</p>
</div>

<style>
    .editable {
        border-bottom: 2px dotted transparent;
        transition: 0.3s;
        outline: none;
    }
    .editable:hover, .editable:focus {
        border-bottom: 2px dotted #4f46e5;
        background-color: rgba(79, 70, 229, 0.05);
    }
</style>
