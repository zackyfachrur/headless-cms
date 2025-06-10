@extends('layouts.admin')

@section('admin-content')
    @include('components.admin.form-karir-admin')

    {{-- Button Toggle Form --}}
    <button
        class="fixed flex w-[170px] items-center justify-between px-4 py-2 font-semibold text-white bg-blue-500 rounded-2xl bottom-8 right-8"
        onclick="toggleFormKarir()"><i class="fas fa-plus"></i> Tambah Data</button>

     <h2 class="text-3xl font-bold capitalize">Data Karir</h2>
    {{-- Table --}}
    @include('components.admin.karir-table')
@endsection
