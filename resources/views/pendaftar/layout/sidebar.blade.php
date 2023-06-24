<div class="side-nav vertical-menu nav-menu-light scrollable">
    <div class="nav-logo">
        <div class="w-100 logo">
            <img class="img-fluid" src="../../user/images/logo.png" style="max-height: 70px;" alt="logo">
        </div>
        <div class="mobile-close">
            <i class="icon-arrow-left feather"></i>
        </div>
    </div>
    <ul class="nav-menu">
        <li class="nav-menu-item">
            <a href="{{ route('pendaftar.dashboard') }}">
                <i class="feather icon-home"></i>
                <span class="nav-menu-item-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-group-title">Master</li>
        <li class="nav-menu-item">
            <a href="{{ route('form-pendaftaran.index') }}">
                <i class="feather icon-mail"></i>
                <span class="nav-menu-item-title">Form Pendaftaran</span>
            </a>
        </li>
        <li class="nav-menu-item">
            <a href="{{ route('pendaftar.status') }}">
                <i class="feather icon-mail"></i>
                <span class="nav-menu-item-title">Status</span>
            </a>
        </li>
    </ul>
</div>
