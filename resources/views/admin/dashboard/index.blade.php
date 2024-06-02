<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body bg-primary">
                Selamat Datang {{ auth()->user()->name }} di Halaman Admin 😊😊
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-building"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Job Order</span>
                <span class="info-box-number">
                    {{ $bannerjob }}
                    <small>Job Order Saat Ini</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Peserta</span>
                <span class="info-box-number">
                    10
                    <small>Peserta Masuk</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pesan</span>
                <span class="info-box-number">
                    {{ $pesan }}
                    <small>Pesan</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-envelope"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">User</span>
                <span class="info-box-number">
                    {{ $user }}
                    <small>User Terdaftar</small>
                </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

</div>
