<section class="welcome-area" id="welcome"
    style="background-image: url('{{ asset($background ?? '') }}');
           background-size: cover;
           background-position: center;
           padding: 50px 0;">

    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1 style="margin-top: 29px;">{{ $title }}</h1>
                    <p>{!! $description !!}</p>
                </div>
            </div>
        </div>
    </div>
        <div class="bg-overlay"></div>
</section>
