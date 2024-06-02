<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/pesan" class="btn btn-primary btn-sm px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <p id="created-at" data-created-at="{{ $pesan->created_at }}">Dikirimkan Pada : </p>
                    <h4><b>From : {{ $pesan->name }}</b></h4>
                    <h4>{{ $pesan->email }}</h4>
                    {!! $pesan->desc !!}
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
        createdAtElement.textContent = 'Dikirimkan Pada : ' + formattedDate;
    });
</script>
