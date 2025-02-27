@extends('layouts.app')

@section('title', 'Products')

@section('content')
  <div class="mt-8">
    <h1 class="text-3xl font-bold text-center">Daftar Produk: {{ $category }}</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
      <!-- Contoh card produk -->
      <div class="bg-white p-4 rounded shadow hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-xl font-semibold">Nama Produk</h2>
        <p class="mt-2 text-gray-600">Deskripsi singkat produk.</p>
      </div>
      <!-- Tambahkan card produk lainnya sesuai kebutuhan -->
    </div>
  </div>
@endsection
