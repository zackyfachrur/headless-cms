@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <x-hero
        title="Kontak Kami"
        description="Diskusikan proyek Anda bersama kami dan kami siap mewujudkan impian Anda."
        background="images/proyekk.jpg"
    />

    <div class="container py-5">
        <div class="row g-5">
            <!-- Left Side -->
            <div class="col-md-6">
                <span class="badge bg-blue-500 text-primary mb-2" style="background-color: #DBEAFE; padding: 8px 18px; border-radius: 20px;">Kontak</span>
                <h1 class="mt-2" style="font-weight: bold; font-size: 30px;">Hubungi Kami Sekarang</h1>
                <p class="text-muted mt-4">
                    Kami dapat terhubung dengan Anda dimanapun dan kapanpun hanya dengan satu kali klik. Setelah Anda mengirimkan formulir kepada kami, maka tim marketing akan membalas pesan Anda.
                </p>
                <p class="text-muted">
                    Kami siap untuk menjawab setiap pertanyaan terkait kebutuhan proyek dengan memberikan solusi terbaik. Jangan ragu untuk menghubungi praktisi kami untuk dapat menyelesaikan permasalahan bisnis Anda.
                </p>
                <ul class="list-unstyled text-dark fw-semibold mt-4">
                    <li class="mb-3 d-flex align-items-center" style="font-size: 14px; font-weight: bold;">
                        <i class="fas fa-map-marker-alt text-primary me-2 mt-1"></i>
                        Jl. Sialang Indah Kubang Jaya No 4 SMP 1 Siak Hulu, Pekanbaru, Riau.
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 14px; font-weight: bold;">
                        <i class="fas fa-calendar-alt text-primary me-2"></i>
                        Senin - Jumat Pukul <strong>08.00 - 16.00 WIB</strong>
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 14px; font-weight: bold;">
                        <i class="fas fa-phone-alt text-primary me-2"></i>
                        082284352106
                    </li>
                    <li class="mb-3 d-flex align-items-center" style="font-size: 14px; font-weight: bold;">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        nusatechnoindonesia@gmail.com
                    </li>
                </ul>
            </div>

            <!-- Right Side (Form) -->
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h2 class="h5 mb-4">Sampaikan Pesan Anda!</h2>
                        <form autocomplete="off" novalidate>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3">
                                    <label for="telepon" class="form-label">Nomor Telepon <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                                        <input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telepon" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="organisasi" class="form-label">Organisasi / Perusahaan <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-building"></i></span>
                                    <input type="text" class="form-control" id="organisasi" name="organisasi" placeholder="Organisasi / Perusahaan" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="subyek" class="form-label">Subyek <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                    <input type="text" class="form-control" id="subyek" name="subyek" placeholder="Subyek" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="pesan" class="form-label">Pesan <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-comment-alt mt-1"></i></span>
                                    <textarea class="form-control" id="pesan" name="pesan" rows="4" placeholder="Tulis Pesan Anda" required></textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
