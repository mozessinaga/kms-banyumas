<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card shadow-lg border-0">
            <div class="card-body p-4">
                <a href="/admin/cpmi" class="btn btn-primary px-3 mb-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                
                <div class="mb-4">
                    <p id="created-at" class="text-muted" data-created-at="{{ $cpmi->created_at }}">Daftar Pada</p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Nama Peserta</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->name }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Mitra Kerja Asal</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->partner_name }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Job Target</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->job_target }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Email Peserta</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->email }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Nomor HP/WA Peserta</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->phone }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Alamat Peserta</h5>
                    <h4 class="mb-3"><b>{{ $cpmi->address }}</b></h4>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Pasfoto Peserta</h5>
                    <p class="mb-3"><img src="{{ Storage::url($cpmi->photo) }}" alt="Pas Foto" class="img-fluid" style="max-width: 200px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Foto KTP</h5>
                    <p class="mb-3"><img src="{{ Storage::url($cpmi->ktp) }}" alt="Foto KTP" class="img-fluid" style="max-width: 200px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Foto KK</h5>
                    <p class="mb-3"><img src="{{ Storage::url($cpmi->kk) }}" alt="Foto KK" class="img-fluid" style="max-width: 200px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Foto Ijazah</h5>
                    <p class="mb-3"><img src="{{ Storage::url($cpmi->ijazah) }}" alt="Foto Ijazah" class="img-fluid" style="max-width: 200px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></p>
                </div>

                <div class="mb-4">
                    <h5 class="text-primary">Foto Sertifikat Vaksin Terakhir</h5>
                    <p class="mb-3"><img src="{{ Storage::url($cpmi->sertifikat_vaksin) }}" alt="Foto Sertifikat Vaksin" class="img-fluid" style="max-width: 200px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var createdAtElement = document.getElementById('created-at');
        var createdAt = createdAtElement.getAttribute('data-created-at');
        
        // Parse the created_at date string into a Date object
        var createdAtDate = new Date(createdAt);

        // Format the date into a more readable format (date, month, and year)
        var options = { year: 'numeric', month: 'long', day: 'numeric' };
        var formattedDate = createdAtDate.toLocaleDateString('id-ID', options);

        // Update the element with the formatted date
        createdAtElement.textContent = 'Daftar Pada ' + formattedDate;
    });
</script>

<style>
    .card {
        border-radius: 12px;
    }
    .card-body {
        padding: 30px;
    }
    .text-primary {
        color: #189a3b !important;
    }
    .img-fluid {
        border-radius: 8px;
    }
    .mb-4 {
        margin-bottom: 1.5rem;
    }
</style>
