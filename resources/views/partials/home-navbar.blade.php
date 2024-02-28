<style>
    .navbar-brand {
        color: white;
    }
</style>
<nav class="navbar navbar-expand-md  py-3" style="background-color: #760712; ">
    <div class="container">
        <a class="navbar-brand bg-transparent fw-bold" href="{{ route('home.index') }}"> <img
                src="{{ asset('assets/logoWhite.png') }}" alt="" style="height: 50px; color: white;"> SR
            Absensi</a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-md-center gap-md-4 py-2 py-md-0">
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <a class="nav-link {{ request()->routeIs('home.*') ? 'active fw-bold' : '' }}" aria-current="page"
                        href="{{ route('home.index') }}" style="color: white">Beranda</a>
                </li>
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <form action="{{ route('auth.logout') }}" method="post">
                        @method('DELETE')
                        @csrf

                        <button class="btn fw-bold w-100 mt-1"
                            style="color: #760712; background-color: #e0cc8d">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
