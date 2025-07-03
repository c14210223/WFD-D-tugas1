@extends('layouts.app')

@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-8">Edit Promosi</h1>

    <form action="#" method="POST" onsubmit="alert('Fungsi update memerlukan database!'); return false;" class="bg-white p-8 rounded-xl shadow-lg max-w-2xl mx-auto">
        @csrf
        @method('PUT')
        @include('promotions._form', ['submitButtonText' => 'Update Promosi'])
    </form>
@endsection