@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <x-hero title="Web Application"
        description="Kami menyediakan layanan pembuatan dan pengembangan aplikasi berbasis web yang mudah diakses dimana saja dan kapan saja."
        background="images/webapp.jpg" />

    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-aos="fade-right" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <img src="/images/webapp.svg" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <span style="background-color: #f4f6fd;color: #2f55d4;"
                            class="badge bg-soft-primary rounded-pill fw-bold">Layanan
                        </span>
                        <h2 class="section-title">Jasa Pembuatan Aplikasi Berbasis Web</h2>
                    </div>
                    <div class="left-text">
                        <p>Kami menyediakan jasa pembuatan aplikasi berbasis web dan software custom sesuai kebutuhan bisnis
                            dan transformasi digital. Perubahan sistem dari metode konvensional menjadi digital akan
                            mengefisienkan waktu, biaya dan tenaga. Kami juga melayani pengembangan atau pemutakhiran
                            aplikasi yang telah ada saat ini, untuk meningkatkan performa dan kualitas produk.</p>

                        <p>Software yang kami bangun mengedepankan tampilan yang responsif, modern dan fungsionalitas yang
                            mumpuni dan handal untuk membantu pekerjaan Anda menjadi lebih mudah.</p>


                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    <section class="section padding-top-70 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-aos="fade-right" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <h4>
                        Kategori Pengembangan Layanan <br />
                        Aplikasi Berbasis Web
                    </h4>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">

                    <div class="left-text">
                        Aplikasi berbasis web sangat dibutuhkan saat ini terutama sistem informasi, karena lebih mudah
                        diakses kapan saja dan dimana saja melalui perangkat apapun.
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section padding-top-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="category-card ">
                            <div class="icon">
                                <img src="/images/sisteminformasi.png" alt="Company Profile">
                            </div>
                            <p>Sistem Informasi</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/gis.png" alt="E-Commerce">
                            </div>
                            <p>Sistem Pemetaan (GIS)</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/education.png" alt="Pemerintahan">
                            </div>
                            <p>Pendidikan & Pelatihan</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/invoice.png" alt="Pendidikan">
                            </div>
                            <p>Keuangan & Pembukuan</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/entrance.png" alt="Portal & Blog">
                            </div>
                            <p>Institusi Pemerintahan</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/factory.png" alt="Entertainment">
                            </div>
                            <p>Industri & Perkantoran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="development-process">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <span style="background-color: #f4f6fd;color: #2f55d4;"
                        class="badge bg-soft-primary rounded-pill fw-bold">Proses Pengembangan
                    </span>
                    <h4 style="letter-spacing: 0.5px;">
                        Proses Pengembangan Aplikasi Berbasis Web

                    </h4>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">

                    <div class="left-text">
                        <p class="text-muted mb-0 mx-auto para-desc">Untuk menciptakan software yang handal dan mumpuni, ada
                            beberapa tahapan yang tim kami lakukan dalam proses pengembangan aplikasi demi mencapai hasil
                            yang maksimal.</p>
                    </div>

                </div>
            </div>

            <div class="process-grid">
                <div class="process-card">
                    <i class="fas fa-comments"></i>
                    <h4>Discuss The Project</h4>
                    <p>Diskusi mengenai proyek dan pengumpulan informasi kebutuhan dan data penunjang.</p>
                    <span class="step">Step 01.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-search"></i>
                    <h4>Research & Analysis</h4>
                    <p>Proses analisa kebutuhan, mencari solusi, pembuatan konsep rencana dan strategi pembuatan aplikasi.
                    </p>
                    <span class="step">Step 02.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-file-alt"></i>
                    <h4>Concept Submission</h4>
                    <p>Proses pengajuan rencana dan rancangan konsep aplikasi yang telah dibuat kepada klien.</p>
                    <span class="step">Step 03.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-paint-brush"></i>
                    <h4>Prototype</h4>
                    <p>Proses pembuatan prototipe atau rancangan awal aplikasi seperti desain aplikasi dan desain sistem.
                    </p>
                    <span class="step">Step 04.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-code"></i>
                    <h4>Development</h4>
                    <p>Proses pembuatan dan pengembangan aplikasi dari prototipe dan desain yang telah di buat.</p>
                    <span class="step">Step 05.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-bug"></i>
                    <h4>Testing</h4>
                    <p>Proses pengecekan ulang dan uji coba untuk memastikan fungsionalitas aplikasi supaya dapat berjalan
                        dengan sempurna.</p>
                    <span class="step">Step 06.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-server"></i>
                    <h4>Pre Deployment</h4>
                    <p>Finalisasi versi aplikasi dan revisi, dilakukan serangkaian aksi untuk persiapan dari proses
                        deployment.</p>
                    <span class="step">Step 07.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-rocket"></i>
                    <h4>Deployment</h4>
                    <p>Tahap terakhir, proses instalasi aplikasi pada server dan user. Dan finally, aplikasi siap digunakan.
                    </p>
                    <span class="step">Step 08.</span>
                </div>
            </div>

        </div>
    </section>
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Wujudkan impian Anda menjadi kenyataan!</h2>
                    </div>
                    <div class="left-text">
                        <p>Sampaikan ide proyek Anda kepada kami, tim kami siap berdiskusi dan membantu Anda untuk
                            mewujudkannya.</p>
                    </div>
                    <!-- Added Button with Arrow -->
                    <div class="left-button">
                        <a href="#contact" class="btn btn-primary">
                            Diskusikan Sekarang <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-aos="fade-left"
                    data-aos-offset="0" data-aos-easing="ease-in-sine">
                    <img src="/images/start.svg" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
@endsection
