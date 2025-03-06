
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login || PSB - PPCN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<body class="bg-green-50 flex items-center justify-center min-h-screen">
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            timer: 3000,
            showConfirmButton: false
        });
    </script>
    @endif
    
    @if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: "{{ session('error') }}",
            timer: 3000,
            showConfirmButton: false
        });
    </script>
    @endif
    

    <section class="w-full max-w-md p-8 ">
        <div class="flex justify-center mb-6 w-16 mx-auto">
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="mb-4">
        </div>
        <div class="-mt-5 mb-10 text-center">
            <h1 class="font-semibold text-2xl font-mono">Login Admin</h1>
            <h3 class="font-bold text-gray-500 ">PP. Cemerlang An-Najach</h3>
        </div>
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Masukkan Email"
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 @error('email') border-red-500 @enderror">
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password" required placeholder="Masukkan Password"
                    class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 @error('password') border-red-500 @enderror">
                @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
        
            <div>
                <button type="submit"
                    class="w-full py-2 bg-green-600 text-white rounded-md font-semibold hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-300">Login</button>
            </div>
        
            <div class="text-center">
                <a href="#" class="text-sm text-green-600 hover:text-green-700">Lupa Password?</a>
            </div>
        </form>
        
    </section>

  
</body>

</html>
