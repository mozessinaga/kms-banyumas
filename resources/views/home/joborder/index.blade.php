<div class="container py-5">
    <div class="text-dark text-center fade-in">
        <h2 class="fade-in mb-2">Job Order yang Tersedia</h2>
    </div>
    <div class="text-dark text-center fade-in">
        <p class="fade-in mb-5">____________________________________________________________</p>
    </div>

    <div class="row">

        @foreach ($bannerjob as $item)
            <div class="col-md-3 my-3 fade-in">
                <div class="card shadow-sm">
                    <div class="wrapper-card-blog">
                        <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
                    </div>
                    <div class="text-center p-3">
                        <a href="/joborder/show/{{ $item->id }}" class="text-decoration-none">
                            <h5>{{ $item->title }}</h5>
                        </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>