<style>
    .navbar-brand {
        color: white;
    }
</style>
<header class="navbar  sticky-top flex-md-nowrap p-0 shadow" style="background-color: #760712">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 py-3 px-3 fs-6" href=""><img
            src="{{ asset('assets/logoWhite.png') }}" alt="" style="height: 30px"> SR Absensi</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed border-0" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
        aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="{{ route('auth.logout') }}" method="post">
                @method('DELETE')
                @csrf
                <button class="bg-transparent border-0 nav-link text-danger px-3" href="#">Keluar</button>
            </form>
        </div>
    </div> --}}
</header>
