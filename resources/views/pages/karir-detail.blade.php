@extends('layouts.app')

@section('content')
    <section class="h-screen d-flex justify-content-between align-items-end"
    id="hero-karir-detail"
        style="background-size: cover;
           height: 35vh;
           padding: 50px 0;">
        <div class="container">
            <div class="d-flex justify-content-between" style="width: 100%">
                <div class="d-flex flex-column justify-content-between align-items-start" style="width: 100%;">
                    <h1 class="text-white font-weight-bold">{{ Str::title(strtolower($karir->job_title)) }}</h1>
                    <p class="text-white font-weight-bold">Divisi {{ Str::title(strtolower($karir->job_division)) }},
                        {{ Str::title(strtolower($karir->job_location)) }} </p>
                    <p class="text-white">Deadline {{ $karir->job_deadline }}</p>
                </div>
                <div class="d-flex justify-content-end align-items-center" style="width: 100%;">
                    <button class="" id="button-status">{{ $karir->job_status === 'open' ? 'Dibuka' : 'Ditutup'}}</button>
                </div>
            </div>
        </div>
    </section>

    <main class="container mt-4 mb-5 d-flex flex-column justify-content-center" style="height: 50vh;">
        <div class="row d-flex" id="portfolioGrid">
            <article class="col-lg-8">
                <h2 class="font-weight-bold">Deskripsi Pekerjaan</h2>
                <p>{{ $karir->job_description }}</p>
            </article>
             <article class="col-lg-8 mt-4">
                <h2 class="font-weight-bold">Syarat & Kualifikasi</h2>
                <ul class="d-flex flex-column mt-2" style="gap: 4px;">
                @foreach ($karir->job_requirements as $requirements)
                    <li><i class="fa-solid fa-check" id="requirements-icon"></i> {{ $requirements }}</li>
                @endforeach
                </ul>
                 <button class="mt-4" id="button-status">{{ $karir->job_status === 'open' ? 'Dibuka' : 'Ditutup'}}</button>
            </article>
        </div>
    </main>
@endsection
