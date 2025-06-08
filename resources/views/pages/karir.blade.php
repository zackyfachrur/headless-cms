@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <x-hero title="Karir"
        description="Temukan peluang karir dan bergabunglah bersama tim kami untuk membangun masa depan yang lebih baik."
        background="images/hero-karir.jpg" />

    <!-- ***** Welcome Area End ***** -->
    <!-- Karir grid -->
    <main class="container mt-4 mb-5">
        <div class="row">
            @foreach ($karir as $karirs)
                <article class="mt-2 col-lg-12 col-sm-12 col-md-12">
                    <div class="card h-100 shadow-sm border rounded-2xl d-flex flex-row align-items-center"
                        style="padding: 20px;">
                        <div
                            style="height:200px; width:40%; background-color: #f8f7f7; border-radius: 20px; background: url('{{ asset('/images/it.webp') }}'); background-size: cover;">
                            <img alt="Antarmuka Aplikasi Apotek Digital dari Nusa Techno Indonesia"
                                class="p-3 card-img-top object-fit-contain" style="width: 30%;"
                                src="/images/nusatechno-logo.png" />
                        </div>
                        <div class="card-body row">
                            <div class="col-lg-8">
                                <span class="mb-1 badge bg-primary" style="font-size: 12px; color: white; width: 100px;">
                                    {{ $karirs->job_status === 'open' ? 'Dibuka' : 'Ditutup' }}
                                </span>
                                <h5 class="card-title font-weight-bold" style="font-size: 24px; text-transform: capitalize">
                                    {{ Str::title(strtolower($karirs->job_title)) }}</h5>

                                <div class="d-flex flex-row" style="gap: 8px">
                                    <p class="card-text text-muted small capitalize"
                                        style="font-size: 16px">
                                        <i class="fa-solid fa-calendar-xmark"></i>
                                        {{ Str::title(strtolower($karirs->job_deadline)) }}
                                    </p>

                                    <p class="card-text text-muted small capitalize"
                                        style="font-size: 16px"><i class="fa-solid fa-location-dot"></i>
                                        {{ Str::title(strtolower($karirs->job_location)) }}</p>
                                </div>
                            <p>{{ Str::limit($karirs->job_description, 100) }}</p>


                            <a class="gap-1 p-0 mt-2 btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                                href="{{ route('karir.detail', ['slug' => $karirs->slug]) }}"
                                style="font-weight: bold; font-size: 12px">
                                Lihat Selengkapnya
                                <i class="fas fa-chevron-right" style="font-size: 0.625rem;"></i>
                            </a>
                            </div>
                        </div>
                    </div>
        </div>
        </article>
        @endforeach

        </div>
    </main>
@endsection
