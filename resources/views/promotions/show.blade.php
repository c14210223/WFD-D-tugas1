@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-xl shadow-lg p-8 mx-auto max-w-4xl">
        <a href="{{ route('promotions.index') }}" class="text-blue-500 hover:underline mb-8 inline-block">&larr; Kembali ke Daftar Promosi</a>
        <img src="{{ $promotion->image }}" alt="{{ $promotion->title }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg mb-6 shadow-md">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4">{{ $promotion->title }}</h1>
        <p class="text-gray-500 text-sm mb-6">Dipublikasikan pada: {{ $promotion->created_at->format('d F Y') }}</p>
        <div class="prose max-w-none text-lg text-gray-800 leading-relaxed">
            {!! nl2br(e($promotion->description)) !!}
        </div>
    </div>
@endsection