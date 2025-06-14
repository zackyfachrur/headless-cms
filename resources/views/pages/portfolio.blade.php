@extends('layouts.app')

@section('content')
    <!-- ***** Welcome Area Start ***** -->
    <x-hero title="Portofolio"
        description="Kami telah mengerjakan beberapa portfolio dan studi kasus dari berbagai klien mulai dari perusahaan, instansi dan organisasi."
        background="images/portofolio.jpg" />
    <!-- ***** Welcome Area End ***** -->

    <!-- Filter buttons -->
    <section class="container mt-5">
        <div class="flex-wrap d-flex justify-content-center" style="gap: 8px;" id="filterTabs" role="tablist"
            aria-label="Portfolio categories">
            <button aria-selected="true" class="btn btn-primary active" data-filter="all" id="tab-all"
                role="tab" tabindex="0" type="button">
                All
            </button>
            <button aria-selected="false" class="btn btn-outline-primary" data-filter="web-apps" id="tab-webapp"
                role="tab" tabindex="-1" type="button">
                Web Application
            </button>
            <button aria-selected="false" class="btn btn-outline-primary" data-filter="website" id="tab-website"
                role="tab" tabindex="-1" type="button">
                Website
            </button>
            <button aria-selected="false" class="btn btn-outline-primary" data-filter="mobile-apps" id="tab-mobile"
                role="tab" tabindex="-1" type="button">
                Mobile Application
            </button>
            <button aria-selected="false" class="btn btn-outline-primary" data-filter="iot" id="tab-iot" role="tab"
                tabindex="-1" type="button">
                Internet of Things
            </button>
        </div>
    </section>

    <!-- Portfolio grid -->
<main class="container mt-4 mb-5">
        <div class="row row-cols-3" id="portfolioGrid">

            @forelse ($portfolio as $portfolios)
            <!-- Card -->
                <article class="mt-2 col-12 col-sm-6 col-md-4 " data-category="{{ $portfolios->category }}">
                    <div class="shadow-sm card h-100  border">
                        <img alt="{{ $portfolios->title }}" class="p-3 card-img-top object-fit-contain"
                            style="height:180px; width:100%;" src="{{ asset('storage/' . $portfolios->image) }}" />
                        <div class="card-body d-flex flex-column">
                            <span class="mb-2 badge bg-primary" style="font-size: 0.625rem; color: white; width: 100px;">
                                {{ $portfolios->category_label }}
                            </span>
                            <h5 class="card-title" style="font-size: 0.875rem;">{{ $portfolios->title }}</h5>
                            <p class="mb-3 card-text text-muted small flex-grow-1">
                                {{ $portfolios->description }}
                            </p>

                            @if ($portfolios->demo_url)
                                <button onclick="toggleDemo(this)"
                                    class="gap-1 p-0 mb-2 btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                                    type="button" style="font-weight: bold; font-size: 12px">
                                    Tampilkan Akun Demo
                                    <i class="fas fa-eye" style="font-size: 0.625rem;"></i>
                                </button>

                                <div class="demo-box small text-secondary d-none">
                                    <p><strong>Username:</strong> {{ $portfolios->demo_username }}</p>
                                    <p><strong>Password:</strong> {{ $portfolios->demo_password }}</p>
                                    <a href="{{ $portfolios->demo_url }}" target="_blank"
                                        class="mt-1 text-primary text-decoration-underline d-inline-block">Masuk ke Demo</a>
                                </div>
                            @endif
                            @if ($portfolios->in_progress)
                                <!-- PROGRESS PENGEMBANGAN -->
                                <div class="mb-2">
                                    <p class="mb-1 small fw-medium text-muted">Progress Pengembangan: <span
                                            class="text-primary fw-semibold">{{ $portfolios->progress }}%</span></p>
                                    <div class="progress" style="height: 0.5rem;">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $portfolios->progress }}%;"
                                            aria-valuenow="{{ $portfolios->progress }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-1 small fst-italic text-muted" style="font-size: 10px; font-weight: bold">
                                        *{{ $portfolios->progress_note }}
                                </div>
                            @endif
                            <a class="gap-1 p-0 mt-auto btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                                href="{{ $portfolios->detail_url }}" target="_blank" style="font-weight: bold; font-size: 12px">
                                Lihat Selengkapnya
                                <i class="fas fa-chevron-right" style="font-size: 0.625rem;"></i>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- End Card -->
                @empty
                <article class="d-flex justify-content-center align-self-center mt-2 col-12 col-sm-6 col-md-4" style="width: 100%;">
                    <p style="color: gray; font-weight: bold;">Belum ada data</p>
                </article>
            @endforelse

        </div>
    </main>

@endsection
