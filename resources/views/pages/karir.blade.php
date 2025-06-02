@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <x-hero title="Karir"
        description="Temukan peluang karir dan bergabunglah bersama tim kami untuk membangun masa depan yang lebih baik."
        background="images/hero-karir.jpg" />

    <!-- ***** Welcome Area End ***** -->
<!-- Portfolio grid -->
    <main class="container mt-4 mb-5">
        <div class="row row-cols-3" id="portfolioGrid">

            <!-- Item 1 -->
            <article class="mt-2 col-12 col-sm-6 col-md-4" data-category="webapp">
                <div class="shadow-sm card h-100 border-light">
                    <img alt="Antarmuka Aplikasi Apotek Digital dari Nusa Techno Indonesia"
                        class="p-3 card-img-top object-fit-contain" style="height:180px; width:100%;"
                        src="/images/apotikwebapps.png" />
                    <div class="card-body d-flex flex-column">
                        <span class="mb-2 badge bg-primary" style="font-size: 0.625rem; color: white; width: 100px;">
                            Web Application
                        </span>
                        <h5 class="card-title" style="font-size: 0.875rem;">Apotek Digital – Manajemen Apotek Modern</h5>
                        <p class="mb-3 card-text text-muted small flex-grow-1">
                            Aplikasi Apotek Digital mempermudah operasional apotek, termasuk stok obat, racikan, shift
                            karyawan, QRIS, cetak etiket, dan pengiriman struk via WhatsApp. Dirancang untuk apotek dengan
                            sistem kerja modern.
                        </p>

                        <!-- Tombol Demo -->
                        <button onclick="toggleApotekDemo(this)"
                            class="gap-1 p-0 mb-2 btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                            type="button" style="font-weight: bold; font-size: 12px">
                            Tampilkan Akun Demo
                            <i class="fas fa-eye" style="font-size: 0.625rem;"></i>
                        </button>

                        <!-- Info Demo Login -->
                        <div id="apotik-demo" class="small text-secondary d-none">
                            <p><strong>Username:</strong> userdemo</p>
                            <p><strong>Password:</strong> 123</p>
                            <a href="https://nusatechnoindonesia.com/aplikasiapotik/login" target="_blank"
                                class="mt-1 text-primary text-decoration-underline d-inline-block">Masuk ke Demo</a>
                        </div>

                        <a class="gap-1 p-0 mt-auto btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                            href="https://nusatechnoindonesia.com/aplikasiapotik/login"
                            style="font-weight: bold; font-size: 12px">
                            Lihat Selengkapnya
                            <i class="fas fa-chevron-right" style="font-size: 0.625rem;"></i>
                        </a>
                    </div>
                </div>
            </article>

            <script>
                function toggleDemo(button) {
                    const demoBox = button.nextElementSibling;
                    const isHidden = demoBox.classList.contains('d-none');
                    demoBox.classList.toggle('d-none');
                    button.innerHTML = isHidden ?
                        'Sembunyikan Akun Demo <i class="fas fa-eye-slash" style="font-size: 0.625rem;"></i>' :
                        'Tampilkan Akun Demo <i class="fas fa-eye" style="font-size: 0.625rem;"></i>';
                }
            </script>
        </div>
    </main>

@endsection
