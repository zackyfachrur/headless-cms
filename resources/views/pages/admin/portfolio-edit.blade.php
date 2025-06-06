@extends('layouts.admin')

@section('admin-content')
    <div class="flex items-center justify-center w-full p-6 right-4 rounded-2xl" id="form-portfolio-edit-modal">
        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="flex flex-col items-start justify-center gap-4 px-6 py-6 bg-white rounded-2xl">
            <div class="flex items-center justify-between w-full">
                <h2 class="text-2xl font-bold">Edit Data Portfolio</h2>
                <button onclick="window.location.href='/admin/portfolio'"><i
                        class="mr-3 fas fa-close hover:text-blue-500 hover:opacity-100"></i></button>
            </div>

            <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col items-start gap-4">
                @csrf
                @method('PUT')

                <div class="flex flex-row gap-4">
                    {{-- Input Group 1 --}}
                    <div class="flex flex-col w-full gap-3">
                        <div class="flex flex-col w-full">
                            <label for="judul">Judul Project <span class="text-red-500">*</span></label>
                            <input type="text" name="title" id="judul" placeholder="Contoh: Web Klinik System"
                                value="{{ old('title', $portfolio->title) }}" required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="detail_url">Link Project <span class="text-red-500">*</span></label>
                            <input type="text" name="detail_url" placeholder="https://"
                                value="{{ old('detail_url', $portfolio->detail_url) }}" required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="deskripsi">Deskripsi Project <span class="text-red-500">*</span></label>
                            <textarea name="description" id="deskripsi" required rows="4" placeholder="Contoh: Website ini untuk..."
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">{{ old('description', $portfolio->description) }}</textarea>
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="image">Thumbnail</label>

                            @if ($portfolio->image)
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Thumbnail Lama"
                                    class="w-[100px] h-[89px] object-cover mb-2 rounded">
                            @endif

                            <input type="file" id="image" name="image" accept="image/*"
                                class="block w-full px-2 py-[8.5px] text-sm text-gray-900 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="category">Nama Kategori <span class="text-red-500">*</span></label>
                            <select id="category" name="category" required
                                class="w-full text-gray-500 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50">
                                <option value="web-apps|Web Aplikasi"
                                    {{ old('category', $portfolio->category . '|' . $portfolio->category_label) == 'web-apps|Web Aplikasi' ? 'selected' : '' }}>
                                    Web Aplikasi</option>
                                <option value="website|Websites"
                                    {{ old('category', $portfolio->category . '|' . $portfolio->category_label) == 'website|Websites' ? 'selected' : '' }}>
                                    Websites</option>
                                <option value="mobile-apps|Aplikasi Mobile"
                                    {{ old('category', $portfolio->category . '|' . $portfolio->category_label) == 'mobile-apps|Aplikasi Mobile' ? 'selected' : '' }}>
                                    Aplikasi Mobile</option>
                                <option value="iot|Internet of Things"
                                    {{ old('category', $portfolio->category . '|' . $portfolio->category_label) == 'iot|Internet of Things' ? 'selected' : '' }}>
                                    Internet of Things</option>
                            </select>
                        </div>
                    </div>

                    {{-- Input Group 2 --}}
                    <div class="flex flex-col w-full gap-3">
                        <div>
                            <label for="demo_url">Link Demo Project</label>
                            <input type="text" name="demo_url" id="demo_url" placeholder="https://"
                                value="{{ old('demo_url', $portfolio->demo_url) }}"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="demo_username">Username / Email Akun</label>
                            <input type="text" name="demo_username" placeholder="Contoh: admin"
                                value="{{ old('demo_username', $portfolio->demo_username) }}"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="demo_password">Password Akun</label>
                            <input type="text" name="demo_password" placeholder="Contoh: 123"
                                value="{{ old('demo_password', $portfolio->demo_password) }}"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full mt-2">
                            <label for="in_progress">Project In Progress</label>
                            <select id="in_progress" name="in_progress" required
                                class="w-full text-gray-500 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50">
                                <option value="1"
                                    {{ old('in_progress', $portfolio->in_progress) == '1' ? 'selected' : '' }}>Masih
                                    Dikerjakan</option>
                                <option value="0"
                                    {{ old('in_progress', $portfolio->in_progress) == '0' ? 'selected' : '' }}>Sudah
                                    Selesai</option>
                            </select>
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="progress">Progress</label>
                            <input type="number" name="progress" placeholder="0 - 100"
                                value="{{ old('progress', $portfolio->progress) }}"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="progress_note">Progress Note</label>
                            <input type="text" name="progress_note" id="progress_note"
                                placeholder="Contoh: Sedang dalam ..."
                                value="{{ old('progress_note', $portfolio->progress_note) }}"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>
                    </div>
                </div>

                {{-- Button Group --}}
                <div class="flex self-end w-full gap-4">
                    <button type="submit"
                        class="w-full py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
