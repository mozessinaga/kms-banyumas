<div class="container">
    <section class="contact-info">
        <header class="text-center my-5">
            <h2 class="title animate-fade-in">Form Pendaftaran</h2>
            <h4 class="animate-fade-in">SILAHKAN TERLEBIH DAHULU DIPERSIAPKAN : PASFOTO (BACKGROUND PUTIH) ANDA YANG TERBARU, KTP, KARTU
                KELUARGA, HALAMAN DEPAN IJAZAH TERAKHIR, DAN FILE SERTIFIKAT VAKSIN DARI APLIKASI SATUSEHAT</h4>
            <h4 class="animate-fade-in">(SEMUA DOKUMEN HARUS BERWARNA / BUKAN HITAM PUTIH)</h4>
        </header>

        <div class="card mt-4">
            <div class="card-body">
                <form action="/..." method="POST">
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
                        <label for="">Nama Mitra Kerja</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Diisi asal BKK Sekolah. Apabila daftar langsung ke kantor, diisi PT. Karyatama Mitra Sejati Cab. Banyumas">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Job Yang Dituju</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Masukkan Nama Pabrik yang Anda Tuju">
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
                    <div class="form-group mt-3">
                        <label for="">Nomor HP/WA Aktif</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Masukkan Nomor Anda">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Alamat Tempat Tinggal Saat Ini</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Tulis Alamat Selengkap-lengkapnya">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Pas Foto (Background Putih)</label>
                        <input type="file" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Upload Pas Foto">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Scan KTP</label>
                        <input type="file" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Upload KTP">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Scan Kartu Keluarga(KK)</label>
                        <input type="file" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Upload KK">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Scan Halaman Depan Ijazah Terakhir</label>
                        <input type="file" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Upload Halaman Ijazah">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Sertifikat Vaksinasi Terakhir</label>
                        <input type="file" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Upload Sertifikat Vaksinasi">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h5 class="animate-fade-in mt-4">(Sebelum Menekan Tombol Daftar Dibawah, Pastikan Data-data yang Tertera di Atas Adalah Benar dan Dapat Anda Pertanggungjawabkan)
                    </h5>

                    <button type="submit" class="btn btn-success mt-2">Daftar</button>
                </form>
            </div>
        </div>

</div>
</section>
</div>
