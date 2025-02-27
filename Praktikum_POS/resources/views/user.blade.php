@extends('layouts.app')

@section('title', 'User Profile')

@section('content')
  <div class="mt-8 bg-white p-6 rounded shadow">
    <h1 class="text-3xl font-bold mb-4">Profil Pengguna</h1>
    <p class="text-lg">ID: <span class="font-medium">{{ $id }}</span></p>
    <p class="text-lg">Nama: <span class="font-medium">{{ $name }}</span></p>
  </div>
@endsection
