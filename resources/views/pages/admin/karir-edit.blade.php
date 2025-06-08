@extends('layouts.admin')

@section('admin-content')
<section class="flex flex-col items-center justify-center">
    <div class="drop-shadow-xl w-[40%]">
        <div class="antialiased bg-gray-100 sans-serif">
            @if ($errors->any())
                <div style="color: red; margin-bottom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="flex flex-col items-start justify-center gap-4 px-8 py-8 bg-white rounded-xl">
                <div class="flex items-center justify-between w-full">
                    <h2 class="text-2xl font-bold ">Tambah Data Karir</h2>
                    <a href="{{ route('karir.index') }}"><i
                            class="mr-3 fas fa-close hover:text-blue-500 hover:opacity-100"></i></a>
                </div>
                <form method="POST" action="{{ route('karir.update', $karir->id) }}"
                    class="flex flex-col items-start gap-4 w-full">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-row gap-4 w-[100%]">
                        <div class="flex flex-col w-full gap-3">
                            {{-- Nama Pekerjaan --}}
                            <div class="flex flex-col w-full">
                                <label for="job_title">Nama Pekerjaan <span class="text-red-500">*</span> </label>
                                <input type="text" name="job_title" id="job_title" placeholder="Contoh: Web Programmer"
                                    required class="w-full border-2 border-gray-400 rounded-lg bg-gray-50"
                                    value="{{ old('job_title', $karir->job_title) }}">
                            </div>

                            {{-- Divisi Pekerjaan --}}
                            <div class="flex flex-col w-full">
                                <label for="job_division">Divisi Pekerjaan<span class="text-red-500">*</span> </label>
                                <input type="text" name="job_division" id="job_division"
                                    placeholder="Contoh: Information Technology"
                                    value="{{ old('job_division', $karir->job_division) }}" required
                                    class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                            </div>

                            {{-- Lokasi --}}
                            <div class="flex flex-col w-full">
                                <label for="job_location">Lokasi<span class="text-red-500">*</span> </label>
                                <input type="text" name="job_location" id="job_location" placeholder="Contoh: Jakarta"
                                    value="{{ old('job_location', $karir->job_location) }}" required
                                    class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                            </div>

                            {{-- Deskripsi --}}
                            <div class="flex flex-col w-full">
                                <label for="job_description">Deskripsi Pekerjaan<span class="text-red-500">*</span></label>
                                <textarea name="job_description" id="job_description" required
                                    class="w-full border-2 border-gray-400 rounded-lg bg-gray-50" rows="5">{{ old('job_description', $karir->job_description) }}</textarea>
                            </div>

                        </div>

                        <div class="flex flex-col w-full">

                            {{-- Status --}}
                            <div class="flex flex-col w-full mb-[12px]">
                                <label for="job_status">Status Pekerjaan<span class="text-red-500">*</span></label>
                                <select name="job_status" id="job_status"
                                    class="w-full text-gray-500 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50"
                                    required>
                                    <option selected disabled hidden>Open | Closed</option>
                                    <option value="open"
                                        {{ old('job_status', $karir->job_status) == 'open' ? 'selected' : '' }}>Open
                                    </option>
                                    <option value="closed"
                                        {{ old('job_status', $karir->job_status) == 'closed' ? 'selected' : '' }}>Closed
                                    </option>
                                </select>
                            </div>

                               {{-- Deadline --}}
                        <div class="flex flex-col w-full mb-[12px]">
                            <label for="job_deadline">Deadline<span class="text-red-500">*</span> </label>
                            <input type="date" name="job_deadline" id="job_deadline" placeholder="Jakarta"
                                value="{{ old('job_deadline', $karir->job_deadline) }}" required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                            {{-- Persyaratan --}}
                            <div class="mb-4">
                                <label class="block mb-2 font-medium">Persyaratan Pekerjaan<span
                                        class="text-red-500">*</span></label>

                                <div class="overflow-y-scroll h-[170px]" id="requirement-fields">
                                    @foreach ($karir->job_requirements as $index => $job_requirement)
                                        <div class="flex gap-2 mb-2 w-full">
                                            <input type="text" name="job_requirements[]"
                                                value="{{ old('job_requirements.' . $index, $job_requirement) }}"
                                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50"
                                                placeholder="Masukkan syarat..." required>

                                            <button type="button" onclick="removeField(this)"
                                                class="px-2 font-bold text-red-500">
                                                <i
                                                    class="fas fa-close text-xs text-blue-500 hover:text-red-500 hover:opacity-100"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>

                                <button type="button" onclick="addField()"
                                    class="px-3 py-1 mt-2 text-white bg-blue-500 hover:bg-blue-600 active:scale-95 rounded w-full">
                                    <i class="mr-3 fas fa-plus"></i>
                                </button>
                            </div>

                        </div>
                    </div>
                    {{-- Submit --}}
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-500 hover:bg-blue-600 active:scale-95 rounded w-full">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection
