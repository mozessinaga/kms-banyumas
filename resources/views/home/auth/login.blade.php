 <!-- Bootstrap core CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
 <link rel="stylesheet" href="/css/mystyle.css">


 <div class="d-flex justify-content-center align-items-center vh-100">
    <div class="col-md-4">
        <div class="card p-3 shadow">
            <div class="card-body p-5">
                <!-- Tombol Kembali -->
                    <a href="/"><i class="fas fa-arrow-left"></i></a>
                <div class="text-center mb-4">
                    <img src="/img/logo2.png" class="img-fluid" alt="Logo">
                </div>
                <h2 class="text-center mb-4">Login</h2>
                <p class="text-center mb-4">Masukkan Akses Akun Anda</p>

                @if (session()->has('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif

                <form action="{{ route('login.do') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="Email Anda">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password"
                            placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-success btn-block mt-4">Login <i
                            class="fas fa-sign-in-alt"></i></button>
                </form>

                
            </div>
        </div>
    </div>
</div>

