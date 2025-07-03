@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Tambah Promosi Baru</h1>

    <form action="#" method="POST" onsubmit="alert('Fungsi simpan memerlukan database!'); return false;" class="bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto">
        @csrf
        @include('promotions._form', [
            'promotion' => new \App\Models\Promotion(), // Objek kosong untuk form
            'submitButtonText' => 'Simpan Promosi'
        ])
    </form>
@endsection