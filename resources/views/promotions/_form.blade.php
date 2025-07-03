<div class="mb-6">
    <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul Promosi:</label>
    <input type="text" name="title" id="title" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('title', $promotion->title ?? '') }}" required>
</div>

<div class="mb-6">
    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
    <textarea name="description" id="description" rows="6" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('description', $promotion->description ?? '') }}</textarea>
</div>

<div class="mb-8">
    <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Promosi:</label>
    <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-blue-500">
    @if(isset($promotion) && $promotion->image)
        <p class="mt-4 text-sm text-gray-600">Gambar saat ini:</p>
        <img src="{{ $promotion->image }}" alt="Current Image" class="mt-2 h-40 rounded-lg">
    @endif
</div>

<div class="flex items-center justify-end">
    <a href="{{ route('promotions.index') }}" class="text-gray-600 hover:text-gray-800 mr-6">Batal</a>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg shadow-md focus:outline-none focus:shadow-outline transform hover:scale-105 transition-transform">
        {{ $submitButtonText }}
    </button>
</div>