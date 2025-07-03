@extends('layouts.app')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-bold text-gray-900">Promosi Terbaru</h1>
        <a href="{{ route('promotions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg shadow-md transition-transform transform hover:scale-105">
            + Tambah Promosi
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($promotions as $promo)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <img src="{{ $promo->image }}" alt="{{ $promo->title }}" class="w-full h-56 object-cover">
                <div class="p-6">
                    <h2 class="font-bold text-2xl mb-2 text-gray-900">{{ $promo->title }}</h2>
                    <p class="text-gray-700 text-base mb-4">
                        {{ Str::limit($promo->description, 100) }}
                    </p>
                    <div class="flex items-center justify-between mt-6">
                         <a href="{{ route('promotions.show', $promo->id) }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-lg">Lihat Detail</a>
                         <div>
                             <a href="{{ route('promotions.edit', $promo->id) }}" class="text-yellow-500 hover:text-yellow-700 mr-4 font-semibold">Edit</a>
                             <a href="#" onclick="alert('Fungsi hapus memerlukan database!')" class="text-red-500 hover:text-red-700 font-semibold">Hapus</a>
                         </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-700 col-span-3 text-center text-xl">Belum ada promosi yang tersedia.</p>
        @endforelse
    </div>
@endsection