<div class="container">
    <section class="contact-info">
        <header class="text-center my-5">
            <h2 class="title animate-fade-in">Form Pendaftaran</h2>
            <h4 class="animate-fade-in">SILAHKAN TERLEBIH DAHULU DIPERSIAPKAN : PASFOTO (BACKGROUND PUTIH) ANDA YANG TERBARU, KTP, KARTU
                KELUARGA, HALAMAN DEPAN IJAZAH TERAKHIR, DAN FILE SERTIFIKAT VAKSIN DARI APLIKASI SATUSEHAT</h4>
            <h4 class="animate-fade-in">(SEMUA DOKUMEN HARUS BERWARNA / BUKAN HITAM PUTIH)</h4>
        </header>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="partner_name">Nama Mitra Kerja</label>
                        <input type="text" class="form-control @error('partner_name') is-invalid @enderror" name="partner_name" placeholder="Diisi asal BKK Sekolah. Apabila daftar langsung ke kantor, diisi PT. Karyatama Mitra Sejati Cab. Banyumas" value="{{ old('partner_name') }}">
                        @error('partner_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="job_target">Job Yang Dituju</label>
                        <input type="text" class="form-control @error('job_target') is-invalid @enderror" name="job_target" placeholder="Masukkan Nama Pabrik yang Anda Tuju" value="{{ old('job_target') }}">
                        @error('job_target')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone">Nomor HP/WA Aktif</label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Masukkan Nomor Anda" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">Alamat Tempat Tinggal Saat Ini</label>
                        <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Tulis Alamat Selengkap-lengkapnya" value="{{ old('address') }}">
                        @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="photo">Pas Foto (Background Putih)</label>
                        <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">
                        @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="ktp">Scan KTP</label>
                        <input type="file" class="form-control @error('ktp') is-invalid @enderror" name="ktp">
                        @error('ktp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="kk">Scan Kartu Keluarga(KK)</label>
                        <input type="file" class="form-control @error('kk') is-invalid @enderror" name="kk">
                        @error('kk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="ijazah">Scan Halaman Depan Ijazah Terakhir</label>
                        <input type="file" class="form-control @error('ijazah') is-invalid @enderror" name="ijazah">
                        @error('ijazah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="sertifikat_vaksin">Sertifikat Vaksinasi Terakhir</label>
                        <input type="file" class="form-control @error('sertifikat_vaksin') is-invalid @enderror" name="sertifikat_vaksin">
                        @error('sertifikat_vaksin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h5 class="animate-fade-in mt-4">(Sebelum Menekan Tombol Daftar Dibawah, Pastikan Data-data yang Tertera di Atas Adalah Benar dan Dapat Anda Pertanggungjawabkan)</h5>

                    <button type="submit" class="btn btn-success mt-2">Daftar</button>
                </form>
            </div>
        </div>
    </section>
</div>

