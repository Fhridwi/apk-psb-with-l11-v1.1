    <!-- Start Navigation -->
    <nav id="navigation" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a data-scroll href="#header" class="navbar-brand"><img src="{{ asset('assets/img/logo.png') }}"
                        class="img-circle" alt="Logo"></a>
            </div>

            <!-- Main Nav -->
            <div class="navbar-collapse collapse navbar-primary" role="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ route('home') }}"><span class="fa fa-home" aria-hidden="true"></span> HOME</a>
                    </li>
                    <li><a href="artikel-psb.html"><span class="fa fa-file-text" aria-hidden="true"></span> ARTIKEL</a>
                    </li>
                    <li class="{{ request()->is('daftar-santri') ? 'active' : '' }}"><a href="{{ route('pendaftaran.index') }}"><span class="fa fa-file-text" aria-hidden="true"></span> PSB</a></li>
                    <!-- Tambahan Menu -->
                    <li><a href="kontak.html"><span class="fa fa-envelope" aria-hidden="true"></span> KONTAK</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="login-btn"><a href="login.html" class="btn btn-primary btn-sm custom-btn"><span
                                class="fa fa-key" aria-hidden="true"></span> LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /End Navigation -->
    <!-- ini buat spasi antara navbar dan greeting section -->
    <div class="margin-bottom-50"></div>