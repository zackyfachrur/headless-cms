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



        @include('pages.paket-price')
            @include('pages.paket-filter')

            @include('pages.paket-cta')

            @include('components.faq-content')
        </div>

    </main>
@endsection
