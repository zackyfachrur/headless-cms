@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area" id="welcome"
        style="background-image: url('{{ asset('images/websitee.jpg') }}');
           background-size: cover;
           background-position: center;
           height: 60vh;
           padding: 50px 0;">

        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <h1 style="margin-top: 29px;">Landing Pages</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia qui dolorum mollitia quod quia
                            natus ut eveniet? Fugiat, adipisci consequatur.</p>
                        <button class="btn btn-light mr-1">Konsultasi Gratis</button>
                        <button class="btn btn-outline-light">Lihat Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay"></div>
    </section>



    <!-- ***** Welcome Area End ***** -->

    <main class="d-flex flex-column align-items-center mt-4 mb-5">

        @include('pages.paket-benefit')


        <div class="d-flex flex-column justify-content-center align-items-center ">
            <div class="container mb-5">
                <div class="col-lg-12 col-md-12 col-sm-12 flex-column d-flex justify-content-center align-items-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <span style="background-color: #f4f6fd;color: #0879FA;"
                        class="badge bg-soft-primary rounded-pill fw-bold">Paket
                    </span>
                    <h2 style="letter-spacing: 0.5px;">
                        Paket Layanan Kami
                    </h2>
                    <p class="col-lg-6 text-center text-muted mb-0 mx-auto para-desc">Untuk menciptakan kenyamanan dan
                        keuntungan bagi pengguna,
                        ada beberapa benefit yang didapatkan ketika menggunakan layanan kami.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center" id="price-list-paket">

                {{-- Card --}}
                <div class="col-xl-3 col-lg-4 col-sm-12 card d-flex flex-column justify-content-start align-items-center"
                    style="padding: 20px; border-radius: 20px;">
                    <h5 style="background: #007bff36; padding: 4px 20px; border-radius: 20px; color: #007bff;">Paket
                        Standar</h4>
                        <h2 style="font-size: 2rem; font-weight: bold">Rp. 1.000.000,-</h2>
                        <p>Harga lebih murah cocok untuk UMKM</p>
                        <button class="btn btn-primary mt-4" style="width: 100%;">Pilih Paket</button>
                        <hr class="mt-2"
                            style="width: 100%; height: 4px; color: transparent; background: #007bff; border-radius: 12px">
                        <ul class="d-flex justify-content-start align-items-start flex-column" style="width: 100%;">
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Domain Hosting</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Logo</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Kelola Konten</li>

                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Biaya Lebih Murah</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Ongkir</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Pemeliharaan</li>
                        </ul>
                </div>
                {{-- End Card --}}
                {{-- Card --}}
                <div class="col-xl-3 col-lg-4 col-sm-12 card d-flex flex-column justify-content-start align-items-center"
                    style="padding: 20px; border-radius: 20px">
                    <h5 style="background: #007bff36; padding: 4px 20px; border-radius: 20px; color: #007bff;">Paket
                        Standar</h4>
                        <h2 style="font-size: 2rem; font-weight: bold">Rp. 1.000.000,-</h2>
                        <p>Harga lebih murah cocok untuk UMKM</p>
                        <button class="btn btn-primary mt-4" style="width: 100%;">Pilih Paket</button>
                        <hr class="mt-2"
                            style="width: 100%; height: 4px; color: transparent; background: #007bff; border-radius: 12px">
                        <ul class="d-flex justify-content-start align-items-start flex-column" style="width: 100%;">
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Domain Hosting</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Logo</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Kelola Konten</li>

                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Biaya Lebih Murah</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Ongkir</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Pemeliharaan</li>
                        </ul>
                </div>
                {{-- End Card --}}
                {{-- Card --}}
                <div class="col-xl-3 col-lg-4 col-sm-12 card d-flex flex-column justify-content-start align-items-center"
                    style="padding: 20px; border-radius: 20px">
                    <h5 style="background: #007bff36; padding: 4px 20px; border-radius: 20px; color: #007bff;">Paket
                        Standar</h4>
                        <h2 style="font-size: 2rem; font-weight: bold">Rp. 1.000.000,-</h2>
                        <p>Harga lebih murah cocok untuk UMKM</p>
                        <button class="btn btn-primary mt-4" style="width: 100%;">Pilih Paket</button>
                        <hr class="mt-2"
                            style="width: 100%; height: 4px; color: transparent; background: #007bff; border-radius: 12px">
                        <ul class="d-flex justify-content-start align-items-start flex-column" style="width: 100%;">
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Domain Hosting</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Logo</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Kelola Konten</li>

                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Biaya Lebih Murah</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Ongkir</li>
                            <li><i class="fa-solid fa-check" style="color: #007bff"></i> Gratis Pemeliharaan</li>
                        </ul>
                </div>
                {{-- End Card --}}
            </div>
            @include('pages.paket-filter')
        </div>

    </main>
@endsection
