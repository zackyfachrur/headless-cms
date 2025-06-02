@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <x-hero title="Website"
        description=" Kami menyediakan layanan pembuatan website berkualitas yang mampu membantu binsis Anda bersaing di internet."
        background="images/websitee.jpg" />

    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-aos="fade-right" data-aos-offset="0"
                    data-aos-easing="ease-in-sine">
                    <img src="/images/web.svg" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <span style="background-color: #f4f6fd;color: #2f55d4;"
                            class="badge bg-soft-primary rounded-pill fw-bold">Layanan
                        </span>
                        <h2 class="section-title">Jasa Pembuatan Website</h2>
                    </div>
                    <div class="left-text">
                        <p>Kami menyediakan jasa pembuatan website custom dan professional di Pekanbaru dengan menerapkan
                            tampilan user friendly dan modern. Kami yakin website yang kami kembangkan mampu membantu bisnis
                            Anda bersaing di situs pencarian internet.</p>

                        <p>Di era digital ini, kami siap membantu para UMKM bersaing di dunia digital melalui produk dan
                            solusi yang kami ciptakan. Layanan produk kami meliputi jasa pembuatan website custom,
                            ecommerce, marketplace, blog, web portal, wordpress, company profile, catalog, dan website
                            custom lainnya.</p>


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
                        Kategori Pengembangan Website Terbaik <br />
                        Untuk Kebutuhan Anda
                    </h4>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">

                    <div class="left-text">
                        Kami menyediakan pembuatan website professional dengan menerapkan tapilan user friendly dan
                        responsif guna membantu bisnis Anda lebih mudah dan siap bersaing di situs pencarian internet.
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
            <div class="row justify-content-start">
                <div class="col-lg-12">
                    <div class="categories">
                        <div class="category-card ">
                            <div class="icon">
                                <img src="/images/dekstop.png" alt="Company Profile">
                            </div>
                            <p>Company Profile</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/shopping-mall.png" alt="E-Commerce">
                            </div>
                            <p>E-Commerce</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/entrance.png" alt="Pemerintahan">
                            </div>
                            <p>Pemerintahan</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/education.png" alt="Pendidikan">
                            </div>
                            <p>Pendidikan</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/web-site.png" alt="Portal & Blog">
                            </div>
                            <p>Portal & Blog</p>
                        </div>

                        <div class="category-card">
                            <div class="icon">
                                <img src="/images/reel.png" alt="Entertainment">
                            </div>
                            <p>Entertainment</p>
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
                        Proses Pengembangan Website

                    </h4>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">

                    <div class="left-text">
                        <p class="text-muted mb-0 mx-auto para-desc">Untuk menciptakan website yang responsif dan modern,
                            ada beberapa tahapan yang tim kami lakukan dalam proses pengembangan website demi mencapai hasil
                            yang maksimal dan sesuai dengan kebutuhan bisnis Anda.</p>
                    </div>

                </div>
            </div>

            <div class="process-grid">
                <div class="process-card">
                    <i class="fas fa-comments"></i>
                    <h4>Discuss The Project</h4>
                    <p>Diskusi mengenai proyek dan pengumpulan informasi kebutuhan dan data pendukung.</p>
                    <span class="step">Step 01.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-search"></i>
                    <h4>Research & Analysis</h4>
                    <p>Proses analisa kebutuhan, mencari solusi, serta strategi pembuatan website.</p>
                    <span class="step">Step 02.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-file-alt"></i>
                    <h4>Concept Submission</h4>
                    <p>Pengajuan rencana dan konsep website kepada klien.</p>
                    <span class="step">Step 03.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-paint-brush"></i>
                    <h4>Prototype</h4>
                    <p>Pembuatan prototipe atau rancangan awal desain website.</p>
                    <span class="step">Step 04.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-code"></i>
                    <h4>Development</h4>
                    <p>Pembuatan dan pengembangan website dari prototipe yang telah dibuat.</p>
                    <span class="step">Step 05.</span>
                </div>

                <div class="process-card">
                    <i class="fas fa-bug"></i>
                    <h4>Testing</h4>
                    <p>Uji coba dan pengecekan ulang untuk memastikan website berfungsi dengan sempurna.</p>
                    <span class="step">Step 06.</span>
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
