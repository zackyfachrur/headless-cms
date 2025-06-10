<section class="bg-primary w-100 p-5 m-5" id="paket-cta-section">
    <div class="container text-white">
        <h4 class="font-weight-bold">Ingin tahu bagaimana kami membantu anda ?</h4>
        <span id="line-span"></span>
        <p>Isi detail form dibawah ini, dan tim kami akan menghubungi Anda segera!</p>
        {{-- Form --}}
        <form class="mt-2">

            <div class="row">

                {{-- Form Input --}}
                <div class="mb-3 col-lg-3">
                    <label for="client-phone" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control" id="client-phone" name="client-phone" placeholder="Nomor Handphone">
                </div>
                {{-- End Form Input --}}

                 {{-- Form Input --}}
                <div class="mb-3 col-lg-3">
                    <label for="client-email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="client-email" name="client-email" placeholder="email@gmail.com">
                </div>
                {{-- End Form Input --}}


                {{-- Form Input --}}
                <div class="mb-3 col-lg-3">
                    <label for="client-name" class="form-label" required>Nama <span class="text-danger"
                            style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">*</span></label>
                    <input type="text" class="form-control" id="client-name" name="client-name" required placeholder="Nama lengkap">
                </div>
                {{-- End Form Input --}}

                {{-- Form Input --}}
                <div class="mb-3 col-lg-3">
                    <label for="client-web" class="form-label" required>Link Websites</label>
                    <input type="text" class="form-control" id="client-web" name="client-web">
                </div>
            </div>
            {{-- Form Input --}}

            <button type="submit" class="btn btn-outline-light w-25" style="border-radius: 20px;">Kirim Pesanan</button>
        </form>
        {{-- End Form --}}

    </div>
</section>
