@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-primary" id="faq-hero">
        <div class="container">
            <h1 class="font-weight-bold">Review Klien Kami</h1>
            <p class="text-center">Tak sekedar membuat website Jogja Media Web selalu menjaga hubungan baik dengan pelanggan
                sebagai mitra bisnis kami. Simak pendapat para pelanggan tentang layanan jasa pembuatan website di Jogja
                Media Web.</p>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Content Section --}}
    <section id="testimoni-content">
        <div class="container d-flex">
            {{-- Images --}}
            <div class="row justify-content-center" style="gap: 12px;">
                {{-- Card --}}
                <div class="card col-lg-5 p-5" style="border-radius: 20px">
                    <img src="{{ asset('images/avatar-admin.png') }}" alt="Client Icon" style="width: 60px;">
                    <h5>Sumandi Hartono</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus ea nulla minus, unde fugiat
                        sapiente laborum nesciunt ullam architecto.</p>
                    <div class="d-flex align-items-center mt-4" style="gap: 12px;">
                        <img src="{{ asset('images/Google-Icon.jpg') }}" alt="Google Icon" style="width: 40px;">
                        <span class="font-weight-bold">Rating from Google</span>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}

                {{-- Card --}}
                <div class="card col-lg-5 p-5" style="border-radius: 20px">
                    <img src="{{ asset('images/avatar-admin.png') }}" alt="Client Icon" style="width: 60px;">
                    <h5>Sumandi Hartono</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus ea nulla minus, unde fugiat
                        sapiente laborum nesciunt ullam architecto.</p>
                    <div class="d-flex align-items-center mt-4" style="gap: 12px;">
                        <img src="{{ asset('images/Google-Icon.jpg') }}" alt="Google Icon" style="width: 40px;">
                        <span class="font-weight-bold">Rating from Google</span>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}

                {{-- Card --}}
                <div class="card col-lg-5 p-5" style="border-radius: 20px">
                    <img src="{{ asset('images/avatar-admin.png') }}" alt="Client Icon" style="width: 60px;">
                    <h5>Sumandi Hartono</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus ea nulla minus, unde fugiat
                        sapiente laborum nesciunt ullam architecto.</p>
                    <div class="d-flex align-items-center mt-4" style="gap: 12px;">
                        <img src="{{ asset('images/Google-Icon.jpg') }}" alt="Google Icon" style="width: 40px;">
                        <span class="font-weight-bold">Rating from Google</span>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}

                {{-- Card --}}
                <div class="card col-lg-5 p-5" style="border-radius: 20px">
                    <img src="{{ asset('images/avatar-admin.png') }}" alt="Client Icon" style="width: 60px;">
                    <h5>Sumandi Hartono</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus ea nulla minus, unde fugiat
                        sapiente laborum nesciunt ullam architecto.</p>
                    <div class="d-flex align-items-center mt-4" style="gap: 12px;">
                        <img src="{{ asset('images/Google-Icon.jpg') }}" alt="Google Icon" style="width: 40px;">
                        <span class="font-weight-bold">Rating from Google</span>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}

                {{-- Card --}}
                <div class="card col-lg-5 p-5" style="border-radius: 20px">
                    <img src="{{ asset('images/avatar-admin.png') }}" alt="Client Icon" style="width: 60px;">
                    <h5>Sumandi Hartono</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis natus ea nulla minus, unde fugiat
                        sapiente laborum nesciunt ullam architecto.</p>
                    <div class="d-flex align-items-center mt-4" style="gap: 12px;">
                        <img src="{{ asset('images/Google-Icon.jpg') }}" alt="Google Icon" style="width: 40px;">
                        <span class="font-weight-bold">Rating from Google</span>
                        <div>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star text-warning"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                {{-- End Card --}}


            </div>
        </div>
    </section>
    {{-- End Content Section --}}

    {{-- Form Section --}}
    <section id="testimoni-form">

        <div class="container card">
            <h4>Berikan pendapat anda</h4>

            {{-- Form --}}
            <form class="mt-2" method="POST" action="{{ route('') }}">

                {{-- Form Input --}}
                <div class="mb-3">
                    <label for="client-comment" class="form-label">Komentar anda <span class="text-danger"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">*</span></label>
                    <textarea name="client-comment" cols="25" rows="5" class="form-control" id="client-comment"
                        name="client-comment" required></textarea>
                </div>
                {{-- End Form Input --}}

                <div class="row">

                    {{-- Form Input --}}
                    <div class="mb-3 col-lg-4">
                        <label for="client-email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="client-email" name="client-email">
                        <div id="emailHelp" style="font-size: 14px;">Kami tidak akan pernah membagikan email Anda dengan
                            orang lain.</div>
                    </div>
                    {{-- End Form Input --}}


                    {{-- Form Input --}}
                    <div class="mb-3 col-lg-4">
                        <label for="client-name" class="form-label" required>Nama <span class="text-danger"
                                style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">*</span></label>
                        <input type="text" class="form-control" id="client-name" name="client-name" required>
                    </div>
                    {{-- End Form Input --}}

                    {{-- Form Input --}}
                    <div class="mb-3 col-lg-4">
                        <label for="client-web" class="form-label" required>Link Websites</label>
                        <input type="text" class="form-control" id="client-web" name="client-web">
                    </div>

                </div>
                {{-- Form Input --}}

                <button type="submit" class="btn btn-primary">Kirim Review</button>
            </form>
            {{-- End Form --}}

            @if ($errors->any())
                <div style="color: red; margin-bottom: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </section>
    {{-- End Form Section --}}
@endsection
