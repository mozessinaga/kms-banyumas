<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <a href="/admin/cpmi" class="btn btn-primary px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                <p id="created-at" data-created-at="{{ $cpmi->created_at }}">Daftar Pada </p>
                <h4 class="mb-4"><b>{{ $cpmi->name }}</b></h4>
                <h4 class="mb-4"><b>{{ $cpmi->partner_name }}</b></h4>
                <h4 class="mb-4"><b>{{ $cpmi->job_target }}</b></h4>
                <h4 class="mb-4"><b>{{ $cpmi->email }}</b></h4>
                <h4 class="mb-4"><b>{{ $cpmi->phone }}</b></h4>
                <h4 class="mb-4"><b>{{ $cpmi->address }}</b></h4>
                <p>Pasfoto</p>
                <p class="mb-4"><img src="{{ Storage::url($cpmi->photo) }}" alt="Pas Foto" class="img-fluid mb-3" style="max-width: 200px;"></p>
                <p class="mb-4"><img src="{{ Storage::url($cpmi->ktp) }}" alt="Pas Foto" class="img-fluid mb-3" style="max-width: 200px;"></p>
                <p class="mb-4"><img src="{{ Storage::url($cpmi->kk) }}" alt="Pas Foto" class="img-fluid mb-3" style="max-width: 200px;"></p>
                <p class="mb-4"><img src="{{ Storage::url($cpmi->ijazah) }}" alt="Pas Foto" class="img-fluid mb-3" style="max-width: 200px;"></p>
                <p class="mb-4"><img src="{{ Storage::url($cpmi->sertifikat_vaksin) }}" alt="Pas Foto" class="img-fluid mb-3" style="max-width: 200px;"></p>
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