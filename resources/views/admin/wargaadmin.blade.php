<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Warga Admin - Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<style>
  .bg-gray-300 {
      min-height: 100vh;
  }
</style>
<body class="bg-gray-300">

  {{-- Navbar --}}
  <nav class="green py-2">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <span class="text-sm md:text-2xl text-white ml-4 md:ml-12 font-semibold text-center md:text-left">Desaku</span>
        </div>
        <div>
            <button class="flex items-center text-white">
                <img src="img/raffy-ahmad.jpg" alt="Profile" class="rounded-full w-6 h-6 md:w-9 md:h-9 mr-5">
            </button>
        </div>
    </div>
</nav>
  <div class="flex green opacity-80 justify-center px-5">
    <a href="{{ route('aktivitasadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">AKTIVITAS </a>
    <a href="{{ route('wargaadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">WARGA </a>
    <a href="{{ route('pengumumanadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">PENGUMUMAN </a>
  </div>
  {{-- End Navbar --}}

  {{-- Content --}}
      <div class="grid grid-cols-1 mx-3 mt-5 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/raffy-ahmad.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Raffy Ahmad</div>
            <div class="text-sm">Pengurus RT</div>
            <div class="text-sm">+628876854778</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green" onclick="showProfile(' Nama : Raffy Ahmad', ' Pekerjaan : Artis', 'No. Hp : +628876854778')"></ion-icon>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/ayu-ting-ting.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Ayu Ting Ting</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6287689876543</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green"></ion-icon>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/deddy-corbuzier.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Deddy Corbuzier</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6285765787654</div>
          </div class="text-green">
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green"></ion-icon>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/komeng.jpeg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Komeng </div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6281465574878</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green"></ion-icon>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/Luna-Maya.jpeg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Luna Maya</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+62987854778</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green"></ion-icon>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/nagita-slavina.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Nagita Slavina</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+62897563456</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 ml-auto fill-cureent text-green"></ion-icon>
        </div>
      </div>
      {{-- End Content --}}
      <div id="popupCard" class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 justify-center items-center">
        <div class="bg-white p-4 shadow-md rounded-xl">
          <button onclick="hideProfile()" class="absolute top-0 left-0 p-2 m-2 text-gray-400 hover:text-gray-600">
            <ion-icon name="arrow-back-outline"></ion-icon>
          </button>
          <div class="text-center">
            <img id="popupImage" class="w-20 h-20 rounded-full mx-auto mb-4" src="" alt="Profile Picture">
            <div id="popupName" class="text-sm "></div>
            <div id="popupRole" class="text-sm "></div>
            <div id="popupPhone" class="text-sm"></div>
          </div>
        </div>
      </div>


      <footer class="text-gray-500 mt-4 md:fixed bottom-3 w-full">
        <div class="container mx-auto text-center">
            <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
        </div>
    </footer>
      
    <script>
      function showProfile(name, role, phone) {
        // Menampilkan pop-up card
        document.getElementById('popupName').innerText = name;
        document.getElementById('popupRole').innerText = role;
        document.getElementById('popupPhone').innerText = phone;
        document.getElementById('popupImage').src = 'img/' + name.toLowerCase().replace(/\s+/g, '-') + '.jpg'; // Menggunakan nama untuk menentukan nama file gambar
        document.getElementById('popupCard').classList.remove('hidden');
      }
  
      function hideProfile() {
        // Menyembunyikan pop-up card
        document.getElementById('popupCard').classList.add('hidden');
      }
    </script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
</body>
</html>