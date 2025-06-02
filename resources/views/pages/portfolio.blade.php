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
            <button aria-selected="true" class="btn btn-outline-primary active" data-filter="all" id="tab-all"
                role="tab" tabindex="0" type="button">
                All
            </button>
            <button aria-selected="false" class="btn btn-outline-secondary" data-filter="web-apps" id="tab-webapp"
                role="tab" tabindex="-1" type="button">
                Web Application
            </button>
            <button aria-selected="false" class="btn btn-outline-secondary" data-filter="website" id="tab-website"
                role="tab" tabindex="-1" type="button">
                Website
            </button>
            <button aria-selected="false" class="btn btn-outline-secondary" data-filter="mobile-apps" id="tab-mobile"
                role="tab" tabindex="-1" type="button">
                Mobile Application
            </button>
            <button aria-selected="false" class="btn btn-outline-secondary" data-filter="iot" id="tab-iot" role="tab"
                tabindex="-1" type="button">
                Internet of Things
            </button>
        </div>
    </section>

    <!-- Portfolio grid -->
    <main class="container mt-4 mb-5">
        <div class="row row-cols-3" id="portfolioGrid">

            @foreach ($portfolio as $portfolios)
                <article class="mt-2 col-12 col-sm-6 col-md-4" data-category="{{ $portfolios->category }}">
                    <div class="shadow-sm card h-100 border-light">
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
                                <a class="gap-1 p-0 mt-auto btn btn-link text-primary text-decoration-none small d-flex align-items-center"
                                    href="{{ $portfolios->detail_url }}" style="font-weight: bold; font-size: 12px">
                                    Lihat Selengkapnya
                                    <i class="fas fa-chevron-right" style="font-size: 0.625rem;"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                </article>
            @endforeach


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

    <script>
        document.getElementById('filterTabs').addEventListener('click', function(e) {
            if (e.target.tagName !== 'BUTTON') return;

            Array.from(this.children).forEach(btn => {
                btn.classList.remove('btn-outline-primary', 'active');
                btn.classList.add('btn-outline-secondary');
                btn.setAttribute('aria-selected', 'false');
                btn.tabIndex = -1;
            });
            e.target.classList.add('btn-outline-primary', 'active');
            e.target.classList.remove('btn-outline-secondary');
            e.target.setAttribute('aria-selected', 'true');
            e.target.tabIndex = 0;

            // Filter items
            const filter = e.target.getAttribute('data-filter');
            const items = document.querySelectorAll('#portfolioGrid > article');

            items.forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.classList.remove('d-none');
                } else {
                    item.classList.add('d-none');
                }
            });
        });
    </script>
@endsection
