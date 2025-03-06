<div id="sidebar">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('./assets/compiled/svg/logo.svg') }}" alt="Logo">
                    </a>
                </div>
                <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                    <svg xmlns="http://www.w3.org/2000/svg" role="img" width="20" height="20" 
                        viewBox="0 0 21 21" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path>
                    </svg>
                    <div class="form-check form-switch fs-6">
                        <input class="form-check-input me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                        <label class="form-check-label" for="toggle-dark"></label>
                    </div>
                </div>
                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item {{ request()->is('/') ? 'active' : '' }}">
                    <a href="/" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-title">Sekolah & Program</li>
                <li class="sidebar-item {{ request()->is('tahun-ajaran', 'tambah-tahun-ajaran', 'tahun-ajaran/*') ? 'active' : '' }}">
                    <a href="{{ route('tahun.index') }}" class="sidebar-link">
                        <i class="bi bi-calendar-check-fill"></i>
                        <span>Tahun Ajaran</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('data-sekolah', 'tambah-data-sekolah', 'data-sekolah/*') ? 'active' : '' }}">
                    <a href="{{ route('sekolah.index') }}" class="sidebar-link">
                        <i class="bi bi-building-fill"></i>
                        <span>Sekolah</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('data-Program', 'tambah-data-Program', 'data-Program/*', ) ? 'active' : '' }}">
                    <a href="{{ route('program.index') }}" class="sidebar-link">
                        <i class="bi bi-person-gear"></i>
                        <span>Program</span>
                    </a>
                </li>
                <li class="sidebar-title">Pendaftaran</li>

                {{-- Calon santri untuk menampilkan seluruh santri yang telah terverifikasi / diterima --}}
                
                <!-- Menu Calon Santri -->
                <li class="sidebar-item {{ request()->is('calon-santri', 'calon-santri/*') ? 'active' : '' }}">
                    <a href="" class="sidebar-link">
                        <i class="bi bi-person-check-fill"></i>
                        <span>Calon Santri</span>
                    </a>
                </li>

                {{-- Pendaftar santri yang belum diverifdikasi --}}
                
                <!-- Menu Data Pendaftaran -->
                <li class="sidebar-item {{ request()->is('data-pendaftar', 'tambah-data-pendaftar','data-pendaftar/*') ? 'active' : '' }}">
                    <a href="{{ route('pendaftar.index') }}" class="sidebar-link">
                        <i class="bi bi-list-check"></i>
                        <span>Data Pendaftar</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
