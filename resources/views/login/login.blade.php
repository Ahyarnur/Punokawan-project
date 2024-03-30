<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Desaku</title>
  @vite('resources/css/app.css')
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">

</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');  
  
    body {
      font-family: 'Poppins', sans-serif;
    }

    input:focus::placeholder {
        font-size: 12px;
    }

  </style>
<body class="flex green flex-col h-screen">
    <div class="flex justify-between items-center ">
        <a href="{{ route('interface') }}"><img src="img/back-button.png" class="mx-auto w-9 ml-2 mt-2" alt=""></a>
    </div>
    <div class="flex justify-center items-start">
        <div class="text-center">
            <img src="img/logo2.png" alt="Logo" class="mx-auto mb-2 w-16 h-auto">
            <h1 class="text-3xl font-bold text-white">Desaku</h1>
            <p class="text-white text-xs mt-1">Tetap Terhubung Dengan Warga <br> Dan Lingkungan RT Anda</p>
        </div>
    </div>
    <form action="{{route('postlogin')}}" method="post">
      @csrf
    <div class="flex justify-center pt-16">
      <div class="relative">
        <input type="email" id="username" name="email" class="border-b py-1 px-8 green focus:outline-none focus:border-white focus:border-b-2 transition-colors peer" autocomplete="off" style="color: white;">
        <label for="username" class="absolute left-0 top-1 text-white text-sm cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-white transition-all">Email / No. Hp</label>
      </div>
    </div>
    <div class="flex justify-center pt-6">
      <div class="relative">
        <input type="password" id="password" name="password" class="border-b py-1 px-8 green focus:outline-none focus:border-white focus:border-b-2 transition-colors peer" autocomplete="off" style="color: white;">
        <label for="password" class="absolute left-0 text-white text-sm cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-white transition-all">Password</label>
      </div>
    </div>
    <div class="flex justify-center pt-10">
      <button class="bg-white hover:bg-gray-300 text-green font-bold py-1.5 px-3 rounded-full transition duration-300 mx-auto w-64">Login</button>
    </div>
  </form>
    <footer class="text-white fixed bottom-3 w-full">
      <div class="container mx-auto text-center">
          <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
      </div>
  </footer>
  
 
</body>
</html>
