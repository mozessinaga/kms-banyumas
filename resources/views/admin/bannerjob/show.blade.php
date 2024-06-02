<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <a href="/admin/bannerjob" class="btn btn-primary px-3"><i class="fas fa-arrow-left"></i> Kembali</a>
                <h4><b>{{ $bannerjob->title }}</b></h4>
                <p id="created-at" data-created-at="{{ $bannerjob->created_at }}">Dibuat Pada </p>
                <img src="/{{ $bannerjob->cover }}" width="100%" alt="">
                <div class="py-3">
                    <p>{!! $bannerjob->body !!}</p>
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
        createdAtElement.textContent = 'Dibuat Pada ' + formattedDate;
    });
</script>