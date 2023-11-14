@extends('layout.main')

@section('container')
    <div class="p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $handphone->nama }}</h1>
            <p class="mb-2">Prosesor: {{ $handphone->merek }}</p>
            <p class="mb-2">VGA: {{ $handphone->chipset }}</p>
            <p class="mb-2">Harga: {{ $handphone->harga }}</p>
            <p class="mb-2">Tahun Rilis: {{ $handphone->release_date }}</p>
        </div>
    </div>
@endsection
