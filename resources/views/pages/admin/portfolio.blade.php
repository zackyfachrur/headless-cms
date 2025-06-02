@extends('layouts.admin')

@section('admin-content')
    {{-- Create Data Form --}}
    <x-form-portfolio-admin />

    {{-- Title --}}
    <div class="flex justify-between w-full">
        <h2 class="text-3xl font-bold capitalize">Data Portfolio</h2>
        <div class="flex gap-4">
            <div class="hidden" id="category-group">
                <button onclick="filterCategory('all')" class="px-3 py-1 bg-gray-300 border-2 border-gray-400 hover:bg-gray-400 rounded-2xl">Semua</button>
                <button onclick="filterCategory('Web Aplikasi')"
                    class="px-3 py-1 text-white border-2 bg-blue-500/80 hover:bg-blue-600 border-blue-500/80 rounded-2xl">Web
                    Aplikasi</button>
                <button onclick="filterCategory('Aplikasi Mobile')"
                    class="px-3 py-1 text-white border-2 bg-green-500/80 hover:bg-green-600 border-green-500/80 rounded-2xl">Aplikasi
                    Mobile</button>
                <button onclick="filterCategory('Websites')"
                    class="px-3 py-1 text-white border-2 border-purple-500 hover:bg-purple-600 bg-purple-500/80 rounded-2xl">Websites</button>
                <button onclick="filterCategory('Internet of Things')"
                    class="px-3 py-1 text-white border-2 border-gray-500 hover:bg-gray-600 bg-gray-500/80 rounded-2xl">Internet of Things</button>
            </div>
            <button onclick="toggleCategoryOption()"><i
                    class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 active:scale-95 fa-solid fa-sliders rounded-2xl"></i></button>
        </div>
    </div>

    {{-- Button Toggle Form --}}
    <button
        class="fixed flex w-[170px] items-center justify-between px-4 py-2 font-semibold text-white bg-blue-500 rounded-2xl bottom-8 right-8"
        onclick="toggleFormPortfolio()"><i class="fas fa-plus"></i> Tambah Data</button>

    {{-- Portfolio Table --}}
    @include('components.admin.portfolio-table')
@endsection
