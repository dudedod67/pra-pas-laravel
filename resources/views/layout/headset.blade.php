@extends('layout.main')

@section('container')
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NAMA
                </th>
                <th scope="col" class="px-6 py-3">
                    MEREK
                </th>
                <th scope="col" class="px-6 py-3">
                    WARNA
                </th>
                <th scope="col" class="px-6 py-3">
                    ACTIONS
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($headsets as $headset)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$headset['nama']}}
                </th>
                <td class="px-6 py-4">
                    {{$headset['merek']}}
                </td>
                <td class="px-6 py-4">
                    {{$headset['warna']}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{url('/headset/' . $headset['id']) }}" class="bg-transparent hover:bg-blue-500 text-white font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">DETAIL</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
@endsection