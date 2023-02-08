<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.dashboard.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-film"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Panel Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.sewa.index')}}">
            <i class="fas fa-fw fa-film"></i>
            <span>Daftar Film</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.pesan.index')}}">
            <i class="fas fa-fw fa-film"></i>
            <span>Daftar Peminjam</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
            <i class="fas fa-fw fa-logout"></i>
            <span>Logout</span></a>
            <form id="logout-form" action="{{route('logout')}}" method="POST">
                @csrf
            </form>
    </li>

</ul>