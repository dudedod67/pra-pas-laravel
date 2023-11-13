@extends('layout.main')

@section('container')
    <div class="p-4">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-2xl font-bold mb-4">{{ $laptop->nama }}</h1>
            <p class="mb-2">Prosesor: {{ $laptop->prosesor }}</p>
            <p class="mb-2">VGA: {{ $laptop->vga }}</p>
            <p class="mb-2">Harga: {{ $laptop->harga }}</p>
            <p class="mb-2">Tahun Rilis: {{ $laptop->rilis }}</p>
        </div>
    </div>
@endsection
