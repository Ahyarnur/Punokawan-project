<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page - Desaku</title>
  @vite('resources/css/app.css')
  <link href="./output.css" rel="stylesheet">
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</head>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');  

  body {
    font-family: 'Poppins', sans-serif;
  }
</style>
<body>
  {{-- Navbar --}}
    <header class="green p-5">
        <nav class="md:flex md:items-center md:flex-row md:justify-between">
            <div class="flex flex-row justify-between items-center">
                <span class="flex flex-row justify-between">
                  <img src="{{ asset('img/logo.png') }}" class="w-32 mb-1 md:w-48 pb-3 md:pl-16" alt="Deskripsi Gambar">
                </span>

                <span class="text-4xl cursor-pointer md:hidden block">
                    <ion-icon name="menu-outline" class="text-white" onclick="Menu(this)"></ion-icon>
                </span>

            </div>
            <ul
                class="green space-x-3 md:flex md:justify-center md:items-center z-[1] md:z-auto md:static absolute w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
                <li class="md:mx-0 mx-4 my-6 md:my-0"><a href=""
                        class="text-white text-sm hover:underline cursor-pointer transition duration-300 p-3">Home</a></li>
                <li class="md:mx-0 my-6 md:my-0"><a href=""
                        class="text-white text-sm hover:underline cursor-pointer transition duration-300 p-3">Tentang Kami</a></li>
                <li class="md:mx-0 mx-4 my-6 md:my-0"><a href=""
                        class="text-white text-sm hover:underline cursor-pointer transition duration-300 p-3">Kontak</a></li>
                <li class="md:mx-0 mx-2 my-6 md:my-0"><a href="{{ route('login') }}"
                        class="text-green bg-white font-semibold rounded text-sm px-6 py-1.5 me-2 mb-2 transition duration-300 hover:bg-blue-500 hover:text-white">Login
                    </a>
                </li>
            </ul>

        </nav>
    </header>
    {{-- End Navbar --}}

    {{-- Interface  --}}
    <section id="home" class="md:pt-16 md:pb-8 md:pl-16 green text-white">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full self-center md:px-4 md:w-1/2 md:flex-col-reverse md:order-first">
            <h1 class="font-bold text-2xl text-center mt-8 md:text-left mb-2 md:text-4xl">Desaku</h1>
            <p class="text-sm md:mb-4 text-center md:text-left px-2 md:leading-relaxed">Desaku adalah platform yang memudahkan pertukaran informasi di tingkat RT atau RW. Dengan aplikasi "Desaku", interaksi dan koordinasi antarawarga, pengurus RT/RW, dan pemerintah setempat dapat ditingkatkan, menciptakan komunitas yang lebih terinformasi dan terkoneksi.</p>
            <a href="{{ route('login') }}" class="hidden md:inline-block text-sm font-semibold bg-white text-green-800 py-1 px-8 rounded hover:shadow-lg hover:bg-blue-400 hover:text-white hover:opacity-80 transition duration-300 ease-in-out">Get Started</a>
          </div>
          <div class="w-full md:self-end md:px-4 md:w-1/2 md:order-last">
            <div class="relative md:m-10 md:mt-9 md:right-0">
              <img src="img/house.png" alt="Picture 1" class="md:max-w-full mt-8 mx-auto pb-10 px-4">
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- end interface --}}

    {{-- About Start --}}
    <section id="tentangkami">

      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="md:ml-32 mt-8 md:mt-16">
          <img src="img/book.png" alt="Picture 2" class="max-w-full mx-auto">
        </div>
        <div class="md:mt-28 px-6">
          <h1 class="text-4xl font-bold green1">Why Choose Us</h1>
          <p class="mt-4 font-semibold">> Mengundang masyarakat masih berkunjung kerumah?</p>
          <p class="mt-6 font-semibold">> Melaporkan masalah di masyarakat harus pergi kerumah pak RW?</p>
          <p class="mt-6 font-semibold">> Informasi kegiatan di masyarakat kurang jelas?</p>
        </div>
    </div>
    </section>
    {{-- about 2 --}}
    <div class="grid grid-cols-1 md:grid-cols-2">
      <div class="md:ml-36 md:mt-24 px-6 order-last md:order-first">
        <h1 class="text-4xl font-bold green1 opacity-75">Dengan Desaku</h1>
        <h3 class="font-semibold mt-6">Pertukaran informasi efektif</h3>
        <p class="text-sm mt-1">"Desaku" menyediakan platform yang efisien untuk berbagi informasi antara pengurus RT/RW dan warga, memastikan semua anggota komunitas terinformasi tentang kegiatan, pengumuman, dan perubahan penting lainnya.</p>
        <h3 class="font-semibold mt-6">Partisipasi warga meningkat</h3>
        <p class="text-sm">Dengan fitur seperti forum diskusi, dan pengumuman, "Desaku" mendorong partisipasi aktif warga dalam keputusan komunitas, membangun keterlibatan yang lebih besar.</p>
        <h3 class="font-semibold mt-6">Keamanan dan pelaporan cepat</h3>
        <p class="text-sm">Warga dapat melaporkan kejadian atau masalah keamanan secara langsung melalui aplikasi, memungkinkan respons cepat dari pihak berwenang dan meningkatkan keamanan lingkungan.</p>
      </div>
      <div class="mt-10 order-first md:order-last">
        <img src="img/man.png" alt="Picture 3" class="max-w-full mx-auto">
      </div>
    </div>   
      {{-- About End --}}

      {{-- Footer --}}
  <section id="kontak">
    <div class="grid grid-cols-1 mt-16 md:grid-cols-2 md:mt-32 md:pb-16 abu">
      <div class="md:pl-64 md:mt-32 mt-10 px-10 leading-32">
          <h1 class="text-white font-bold text-center md:text-left md:text-3xl">Butuh Bantuan..? <br> Kontak Kami <br> Kami Siap Membantu </h1>
          <h1 class="text-white text-sm md:text-base font-bold mt-12 md:mt-4">Kontak & Sosial Media</h1>
          <div class="flex item-center">
            <img src="img/lokasi.png" class="mt-4 ml-3" width="18" alt="lokasi">
            <div class="mt-4 ml-3 text-sm">
              <p class="text-white">Jl.Ajibarang Kilometer 1</p>
            </div>
          </div>
          <div class="flex item-center">
            <img src="img/telp.png" class="mt-2 ml-3" width="18" alt="telp">
            <div class="mt-2 ml-3 text-sm">
              <p class="text-white mt-1">0831 9079 6593</p>
            </div>
          </div>
          <div class="flex item-center">
            <img src="img/email.png" class="mt-2 ml-3" width="18" alt="email">
            <div class="mt-2 ml-3 text-sm">
              <p class="text-white">ahyarichwan9@gmail.com</p>
            </div>
          </div>
          <div class="mt-3 font-bold">
            <h1 class="text-white text-sm md:text-base">Social Media</h1>
          </div>
          <div class="flex item center mt-2">
            {{-- Facebook --}}
            <a href="/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 hover:bg-zinc-400 hover:text-white"><svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg> </a>
            {{-- Twitter --}}
            <a href="/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 hover:bg-zinc-400 hover:text-white"><svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"/></svg></a>
            {{-- Instagram --}}
            <a href="/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center item-center border border-slate-300 hover:bg-zinc-400 hover:text-white"><svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg></a>
          </div>
          </div>
          <div class="md:pr-32 p-5 mt-10 md:ml-12 md:mt-12 md:pb-2">
            <div class="bg-white md:my-6 max-w-xl rounded pt-5 pb-10 md:pb-16 md:pt-16 md:mt-16">
              <h1 class="text-base md:text-3xl text-white font-bold text-center text">ada pertanyaan..?</h1>
                <form id="formcontact" class="mt-8 space-y-4 px-8">
                    <input type='email' placeholder='Masukan email anda disini' name="email" class="w-full placeholder-gray-600 rounded py-3 px-3 textarea text-sm"/>
                    <input type='text' placeholder='Pertanyaan anda' name="nama" class="w-full placeholder-gray-600 rounded py-3 px-3 textarea text-sm"/>
                    <button type='submit' class="tooltip text-white textgreen hover:bg-green-600 font-semibold rounded-md text-sm px-4 py-3 only:odd:transition duration-300 w-full">Kirim</button>
                  </form>
                </div>
          </div>
      </div>
      <div class="">
        <footer class="abu border-t-2 border-gray-300 text-white p-4">
          <div class="container mx-auto text-center">
              <p class="text-xs md:text-base">&copy; 2024. All Right Reserved. By Punokawan Project</p>
          </div>
      </footer>
      </div>
      </section>
      {{-- End Footer --}}
    <script>
      function Menu(e) {
          let list = document.querySelector('ul');

          e.name === 'menu-outline' ? (e.name = "close-outline", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu-outline", list.classList.remove('top-[80px]'), list.classList.add('opacity-100'));
      }
  </script>
</body>
</html>