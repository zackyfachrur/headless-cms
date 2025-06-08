@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="bg-primary" id="faq-hero">
        <div class="container">
            <h1 class="font-weight-bold">Frequently Asked Question</h1>
            <p class="text-center">Jika Anda butuh bantuan atau ada yang ingin ditanyakan bisa menghubungi kami melalui
                email, chat, maupun telepon.Kapanpun kami siap membantu Anda.</p>
        </div>
    </section>
    {{-- End Hero Section --}}

    {{-- Content Section --}}
    <section id="faq-content">
        <div class="container d-flex justify-content-center">
            <img src="{{ asset('images/female-character.png') }}" alt="Avatar Images" class="col-md-6">
            <div>
<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>
  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      </div>
    </div>
  </div>
</div>
</div>
        </div>
    </section>
    {{-- End Content Section --}}
@endsection
