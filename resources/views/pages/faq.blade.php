@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-primary" id="faq-hero">
        <div class="container">
            <h1 class="font-weight-bold">Kami Siap Membantu Anda</h1>
            <p class="text-center">Jika Anda butuh bantuan atau ada yang ingin ditanyakan bisa menghubungi kami melalui
                email, chat, maupun telepon.Kapanpun kami siap membantu Anda.</p>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Faq Content --}}
    @include('components.faq-content')
@endsection
