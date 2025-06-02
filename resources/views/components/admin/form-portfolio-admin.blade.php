<div class="fixed bottom-0 z-50 hidden right-4 drop-shadow-xl" id="form-portfolio-modal">
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
        <div class="flex flex-col items-start justify-center gap-4 px-8 py-8 bg-white rounded-2xl">
            <!-- Form Action -->
            <div class="flex items-center justify-between w-full">
                <h2 class="text-2xl font-bold ">Tambah Data Portfolio</h2>
                <button onclick="toggleFormPortfolio()"><i class="mr-3 fas fa-close hover:text-blue-500 hover:opacity-100"></i></button>
            </div>
            <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data"
                class="flex flex-col items-start gap-4">
                @csrf
                <div class="flex flex-row gap-4">
                    {{-- Input Group 1 --}}
                    <div class="flex flex-col w-full gap-3">
                        <div class="flex flex-col w-full">
                            <label for="judul">Judul Project <span class="text-red-500">*</span> </label>
                            <input type="text" name="title" id="judul" placeholder="Contoh: Web Klinik System"
                                value="{{ old('title') }}" required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="detail_url">Link Project <span class="text-red-500">*</span></label>
                            <input type="text" name="detail_url" placeholder="https://" required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="deskripsi">Deskripsi Project <span class="text-red-500">*</span></label>
                            <textarea name="description" id="deskripsi" placeholder="Contoh: Website ini untuk..." required
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50" rows="5"></textarea>
                        </div>
                        <div class="flex flex-col w-full">
                            <label for="image">Thumbnail <span class="text-red-500">*</span></label>
                            <input type="file" id="image" name="image" accept="image/*" required
                                class="block w-full px-2 py-[8.5px] text-sm text-gray-900 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="category">Nama Kategori <span class="text-red-500">*</span></label>
                            <select id="category" name="category"
                                class="w-full text-gray-500 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50">
                                <option selected disabled hidden>Tampilan Kategori</option>
                                <option value="web-apps|Web Aplikasi">Web Aplikasi</option>
                                <option value="website|Websites">Websites</option>
                                <option value="mobile-apps|Aplikasi Mobile">Aplikasi Mobile</option>
                                <option value="iot|Internet of Things">Internet of Things</option>
                            </select>
                        </div>

                    </div>
                    {{-- End Input Group 1 --}}

                    {{-- Input Group 2 --}}
                    <div class="flex flex-col w-full gap-3">
                        <div>
                            <label for="demo_url">Link Demo Project</label>
                            <input type="text" name="demo_url" id="demo_url" placeholder="https://"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="demo_url">Username / Email Akun</label>
                            <input type="text" name="demo_username" placeholder="Contoh: admin"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="demo_password">Password Akun</label>
                            <input type="text" name="demo_password" placeholder="Contoh: 123"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>
                        <div class="flex flex-col w-full mt-2">
                            <label for="in_progress">Project In Progress</label>
                            <select id="in_progress" name="in_progress"
                                class="w-full text-gray-500 border-2 border-gray-400 rounded-lg cursor-pointer bg-gray-50"
                                required>
                                <option selected disabled hidden>Status Progress</option>
                                <option value="1">Masih Dikerjakan</option>
                                <option value="0">Sudah Selesai</option>
                            </select>
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="progress">Progress</label>
                            <input type="number" name="progress" placeholder="0 - 100"
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="progress_note">Progress Note</label>
                            <input type="text" name="progress_note" id="progress_note"
                                placeholder="Contoh: Sedang dalam ..."
                                class="w-full border-2 border-gray-400 rounded-lg bg-gray-50">
                        </div>
                    </div>
                    {{-- End Input Group 2 --}}



                </div>
                {{-- Button Group --}}
                <div class="flex self-end w-full gap-4">
                    <button type="submit"
                        class="w-full py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-600">Simpan</button>
                </div>
                {{-- End Button Group --}}
            </form>
            <!-- End Form Action -->
        </div>
    </div>
</div>
