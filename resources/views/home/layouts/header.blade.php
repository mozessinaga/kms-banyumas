<style>
    .menu-active{
        color: rgb(255, 255, 255) !important;
        font-weight: bold;
    }
</style>

<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-success shadow">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="/img/logo2.png" style="width: 50px; height: 50px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'menu-active' : ''}}" aria-current="page" href="/" style="color: #ffffff">Home</a>
                    </li>                    

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('alur') ? 'menu-active' : ''}}" href="/alur" style="color: #ffffff">Alur CPMI</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('joborder*') ? 'menu-active' : '' }}" href="/joborder" style="color: #ffffff">Job Order</a>
                    </li>   

                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'menu-active' : ''}}" href="/contact" style="color: #ffffff">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    @auth
                    <a href="/admin/dashboard" class="btn btn-success"><i class="fas fa-user"></i> Dashboard</a>
                    @else
                    <a href="/login" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> Login</a>
                    @endauth
                </form>
            </div>
        </div>
    </nav>
</header>
