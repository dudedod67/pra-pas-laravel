@extends('layout.main')

@section('container')
    <div class="p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $headset->nama }}</h1>
            <p class="mb-2">Merek: {{ $headset->merek }}</p>
            <p class="mb-2">Warna: {{ $headset->warna }}</p>
            <p class="mb-2">Harga: {{ $headset->harga }}</p>
            <p class="mb-2">Tahun Rilis: {{ $headset->release_date }}</p>
        </div>
    </div>
@endsection
