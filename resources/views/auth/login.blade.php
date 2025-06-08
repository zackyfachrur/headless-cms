@extends('layouts.auth')

@section('auth-content')
    <section class="flex justify-between flex-row items-center  w-full h-[100vh] bg-blue-600">
        <div class="flex justify-between w-full h-full ">
            <div class="w-[70%] bg-[url('/public/images/BG-Hero-Admin.png')] flex justify-center text-white items-center flex-col">
                <img src="{{ asset('images/Nusa-Tablet.png') }}" alt="Hero Login Images" class="w-[80%]">
            </div>
            <div class="w-[50%] bg-gray-100 flex justify-center items-center flex-col">
                @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="px-4 py-4 w-[70%] bg-white rounded-2xl">
                    <div class="text-center">
                        {{-- <img src="{{ asset('images/nusatechno.png') }}" style="width: 385px;" alt="logo"> --}}
                    </div>

                    <form method="POST" action"{{ url('/admin/login') }}" class="flex flex-col gap-4">
                        @csrf
                        <div>
                            <h2 class="text-3xl font-bold">Halo Admin! </h2>
                            <p>Silakan login untuk mulai mengelola sistem.</p>
                        </div>
                        {{-- Input Group Email --}}
                        <div class="relative flex w-full h-12 rounded-xl">
                            <input required
                                class="peer w-full bg-transparent outline-none px-4 text-base rounded-xl bg-white border border-[#4070f4] focus:shadow-md"
                                name="email" value="{{ old('email') }}" id="email" type="text" />
                            <label
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-base peer-focus:text-sm peer-focus:text-[#4070f4] peer-valid:-top-0 peer-valid:left-3 peer-valid:text-sm peer-valid:text-[#4070f4] duration-150"
                                for="email">
                                Email Address</label>
                        </div>

                        {{-- Input Group Password --}}
                        <div class="relative w-full bg-white border peer-focus:border-[#4070f4] rounded-xl px-3 py-2">
                            <input required name="password" type="password" id="password-admin"
                                class="w-full pr-10 text-base bg-transparent border-none outline-none peer focus:outline-none focus:ring-0" />

                            <button type="button" onclick="togglePassword()"
                                class="absolute text-gray-600 -translate-y-1/2 right-3 top-1/2">
                                <i id="toggle-eye" class="fas fa-eye-slash"></i>
                            </button>

                            <label
                                class="absolute top-1/2 translate-y-[-50%] bg-white left-4 px-2 peer-focus:top-0 peer-focus:left-3 font-light text-base peer-focus:text-sm peer-focus:text-[#4070f4] peer-valid:top-0 peer-valid:left-3 peer-valid:text-sm peer-valid:text-[#4070f4] duration-150"
                                for="password-admin">
                                Password
                            </label>
                        </div>
                        <div class="mt-6 mb-2 text-center">
                            <button data-mdb-button-init data-mdb-ripple-init
                                class="w-full py-2 text-white bg-blue-600 active:scale-95 hover:bg-blue-500 rounded-xl"
                                type="submit">Log
                                in</button>
                        </div>

                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
