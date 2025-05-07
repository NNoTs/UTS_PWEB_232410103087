@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="min-h-screen flex justify-center items-start pt-10">
    <div class="bg-white shadow-md rounded-xl p-6 w-full max-w-3xl">
        <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">Daftar Produk Coklat</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-3 px-4 bg-red-500 text-left text-sm font-semibold text-gray-700">Nama Produk</th>
                    <th class="py-3 px-4 bg-red-500 text-left text-sm font-semibold text-gray-700">Kategori</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $index => $item)
                <tr class="border-b">
                    <td class="py-3 px-4">{{ $item['nama'] }}</td>
                    <td class="py-3 px-4">{{ $item['kategori'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
