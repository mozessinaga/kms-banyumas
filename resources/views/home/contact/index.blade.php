<div class="container">
    <section class="contact-info">
        <header class="text-center my-5">
            <h2 class="title animate-fade-in">Kontak Kami</h2>
            <h4 class="animate-fade-in">Berikan Saran dan Masukkan untuk Kami</h4>
        </header>

        <div class="contact-details">
            <div class="contact-item animate-fade-in d-flex align-items-center">
                <i class="fas fa-phone fa-2x mr-3"></i>
                <a href="https://wa.me/+628122734642" target="blank" class="contact-link">Hubungi Kami di WhatsApp : <span
                        class="contact-info-highlight">0812-2734-642</span></a>
            </div>

            <div class="contact-item animate-fade-in d-flex align-items-center mt-3">
                <i class="fas fa-envelope fa-2x mr-3"></i>
                <a href="mailto:ptkmspurwokerto@gmail.com" target="blank" class="contact-link">Email: <span
                        class="contact-info-highlight">ptkmspurwokerto@gmail.com</span></a>
            </div>

        <div class="map-container animate-fade-in">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.275507999824!2d109.2105481750014!3d-7.4347357925761015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655e74be2b6591%3A0xa6464bdfbfe1579c!2sPT.%20Karyatama%20Mitra%20Sejati%20Cabang%20Banyumas!5e0!3m2!1sen!2sid!4v1696931434108!5m2!1sen!2sid"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="card mt-4 ">
            <div class="card-body">
                <form action="/contact/send" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Masukkan Nama Anda">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            placeholder="Masukkan Email Anda">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label for="">Isi Pesan</label>
                        <textarea name="desc" id="" cols="30" rows="10"
                            class="form-control @error('desc') is-invalid @enderror" placeholder="Apa yang Ingin Anda Sampaikan Kepada Kami?"></textarea>
                        @error('desc')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success mt-3">Kirim</button>
                </form>
            </div>
        </div>

</div>
</section>
</div>

<style>
    .contact-details {
        margin-top: 30px;
    }

    .contact-item {
        margin-bottom: 20px;
    }

    .contact-link {
        font-size: 18px;
        color: #000103;
        text-decoration: none;
    }

    .contact-link:hover {
        text-decoration: underline;
    }

    .contact-info-highlight {
        font-weight: bold;
        color: #000;
    }

    .contact-item i {
        color: #000205;
    }

    .map-container {
        margin-top: 50px;
    }

    .card {
        margin-top: 40px;
    }
</style>
