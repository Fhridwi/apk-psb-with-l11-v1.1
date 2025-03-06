
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    
    

    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('./assets/compiled/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('./assets/compiled/css/app-dark.css') }}">
  <link rel="stylesheet" href="{{ asset('./assets/compiled/css/iconly.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
</head>

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    @if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: "{{ session('error') }}",
            showConfirmButton: true
        });
    </script>
@endif

@if (session('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Peringatan!',
            text: "{{ session('warning') }}",
            showConfirmButton: true
        });
    </script>
@endif

@if (session('info'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Informasi!',
            text: "{{ session('info') }}",
            showConfirmButton: true
        });
    </script>
@endif
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>@yield('title')</h3>
</div> 
<div class="page-content"> 
    <section class="row">
       @yield('content')
    </section>
</div>

          @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    
    
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const deleteButtons = document.querySelectorAll(".btn-delete");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function () {
                    let id = this.getAttribute("data-id");

                    Swal.fire({
                        title: "Apakah Anda yakin?",
                        text: "Data tahun ajaran akan dihapus!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Ya, Hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById(`delete-form-${id}`).submit();
                        }
                    });
                });
            });
        });
    </script>

    
<!-- Need: Apexcharts -->
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/static/js/pages/dashboard.js') }}"></script>

</body>

</html>