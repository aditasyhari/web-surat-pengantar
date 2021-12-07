<ul class="sidebar-menu">
    @if(auth()->user()->level == 'admin')
    <li class="menu-header">Menu</li>

    <li class="{{ set_active('dashboardAdmin') }}">
        <a class="nav-link" href="{{ route('dashboardAdmin') }}">
        <i class="fas fa-desktop"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="{{ set_active('pengajuansuratAdmin') }}">
        <a class="nav-link" href="{{ route('pengajuansuratAdmin') }}">
        <i class="far fa-paper-plane"></i>
        <span>Buat Surat</span></a>
    </li>
    <li class="{{ set_active('suratmasuk') }}">
        <a class="nav-link" href="{{ route('suratmasuk') }}">
        <i class="fas fa-inbox"></i>
        <span>Surat Masuk</span></a>
    </li>
    <li class="{{ set_active('suratkeluar') }}">
        <a class="nav-link" href="{{ route('suratkeluar') }}">
        <i class="fas fa-envelope-open-text"></i>
        <span>Surat Keluar</span></a>
    </li>
    @endif

    @if(auth()->user()->level == 'pengguna')
    <li class="{{ set_active('dashboardPengguna') }}">
        <a class="nav-link" href="{{ route('dashboardPengguna') }}">
        <i class="fas fa-desktop"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="{{ set_active('pengajuansuratPengguna') }}">
        <a class="nav-link" href="{{ route('pengajuansuratPengguna') }}">
        <i class="far fa-paper-plane"></i>
        <span>Pengajuan Surat</span></a>
    </li>
    <li class="{{ set_active('riwayatpengajuan') }}">
        <a class="nav-link" href="{{ route('riwayatpengajuan') }}">
        <i class="fas fa-history"></i>
        <span>Riwayat Pengajuan</span></a>
    </li>
    @endif
</ul>