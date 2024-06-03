<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;800&display=swap"
    />
  </head>
  <body>
    <nav class="sticky z-10 w-full py-5 text-white flex justify-between items-center px-6 bg-black fixed top-0 left-0 z-10">
      <div class="flex items-center md:hidden">
          <button id="menu-toggle" class="focus:outline-none">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
              </svg>
          </button>
      </div>
      <div class="hidden md:flex gap-x-20 w-[25%] items-center ml-20"> 
          <a href="#" class="hover:text-yellow-500">Home</a>
          <a href="#" class="hover:text-yellow-500">About</a>
          <a href="categori.html" class="hover:text-yellow-500">Categories</a>
      </div>
      
      <a href="landing-page.html" class="text-right flex items-center text-2xl font-extrabold">IBAMCR</a>
    <ul class="hidden md:flex gap-x-10 items-center mr-16">
          <input type="text" placeholder="Cari" class="bg-transparent text-white border-2 border-white rounded-md px-5 py-1">
          <button id="loginBtn" class="text-white hover:text-yellow-500">Sign In</button>
          <a href="#">
              <img class="" alt="" src="/public/bag.png">
          </a>
      </ul>
  </nav>

  <div id="signupModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-lg w-full max-w-md md:max-w-2xl relative">
        <div class="absolute top-0 right-0 p-4">
            <button onclick="toggleModal('signupModal')" class="text-black text-xl">&times;</button>
        </div>
        <div class="flex">
            <div class="w-full md:w-1/2 p-8">
                <div class="flex justify-around mb-6">
                    <button class="font-bold text-yellow-500 hover:text-red-500">SIGN UP</button>
                    <button class="text-gray-500" onclick="toggleModal('signupModal'); toggleModal('loginModal')">SIGN IN</button>
                </div>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="firstName" class="block text-sm font-medium text-gray-700">Nama Depan*</label>
                        <input type="text" id="firstName" name="firstName" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="lastName" class="block text-sm font-medium text-gray-700">Nama Belakang*</label>
                        <input type="text" id="lastName" name="lastName" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="emailSignUp" class="block text-sm font-medium text-gray-700">Email*</label>
                        <input type="email" id="emailSignUp" name="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="passwordSignUp" class="block text-sm font-medium text-gray-700">Buat kata sandi*</label>
                        <input type="password" id="passwordSignUp" name="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" required>
                            <span class="ml-2 text-sm text-gray-700">Saya menyetujui untuk mengizinkan IBAMCR memproses data pribadi saya untuk mengelola akun pribadi saya, sesuai dengan Kebijakan Privasi.</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white p-2 rounded-md">SIGN UP</button>
                    </div>
                </form>
            </div>
            <div class="hidden md:block md:w-1/2 bg-cover bg-center rounded-r-lg" style="background-image: url('/public/background1@2x.png');"></div>
        </div>
    </div>
</div>

<!-- Sign In Modal -->
<div id="loginModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white p-8 rounded-lg w-full max-w-md md:max-w-2xl relative">
        <div class="absolute top-0 right-0 p-4">
            <button onclick="toggleModal('loginModal')" class="text-black text-xl">&times;</button>
        </div>
        <div class="flex">
            <div class="w-full md:w-1/2 p-8">
                <div class="flex justify-around mb-6">
                    <button class="text-gray-500" onclick="toggleModal('loginModal'); toggleModal('signupModal')">SIGN UP</button>
                    <button class="font-bold text-yellow-500 hover:text-red-500">SIGN IN</button>
                </div>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="emailLogin" class="block text-sm font-medium text-gray-700">Email*</label>
                        <input type="email" id="emailLogin" name="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label for="passwordLogin" class="block text-sm font-medium text-gray-700">Password*</label>
                        <input type="password" id="passwordLogin" name="password" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                    </div>
                    <div class="mb-4">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox" required>
                            <span class="ml-2 text-sm text-gray-700">Biarkan saya tetap masuk</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white p-2 rounded-md">SIGN IN</button>
                    </div>
                </form>
            </div>
            <div class="hidden md:block md:w-1/2 bg-cover bg-center rounded-r-lg" style="background-image: url('/public/background1@2x.png');"></div>
        </div>
    </div>
</div>

<script>
    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');
    }

    // Event listeners for buttons
    document.getElementById('loginBtn').addEventListener('click', function() {
        toggleModal('loginModal');
    });

    document.getElementById('signupBtn').addEventListener('click', function() {
        toggleModal('signupModal');
    });
</script>

<main class="container mx-auto p-4">
  <!-- Produk Utama -->
  <div class="flex flex-wrap md:flex-nowrap">
      <div class="w-full md:w-2/3 flex flex-wrap">
          <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-1/2 aspect-square object-cover p-2">
          <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-1/2 aspect-square object-cover p-2">
      </div>
      <div class="w-full md:w-1/3 p-0">
          <h1 class="text-4xl font-bold">{{$product->name}}</h1>
          <p class="text-2xl font-semibold">{{$product->price}} IDR</p>
          <p class="text-base mt-3">{{$product->description}}</p>
          <div class="mt-4">
              <div class="flex space-x-2 mt-20">
                  <button class="border border-gray-300 rounded-md py-1 px-3">S</button>
                  <button class="border border-gray-300 rounded-md py-1 px-3">M</button>
                  <button class="border border-gray-300 rounded-md  py-1 px-3">L</button>
                  <button class="border border-gray-300 rounded-md py-1 px-3">XL</button>
              </div>
          </div>
          <button class="bg-green-500 rounded-md font-bold text-white px-4 py-2 mt-4">MASUKKAN KE KERANJANG SAYA</button>
      </div>
    </main>

  <!-- Produk Rekomendasi -->
  <section class="mt-8">
      <h2 class="text-lg font-normal ml-6 ">MAYBE YOU LIKE</h2>
      <div class="flex container mx-auto gap-5">
        @foreach ($products as $item)
        @if ($item->id !== $product->id)
        <div class="w-full md:w-1/3 p-4">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" class="w-full aspect-square object-cover">
            <p class="mt-2">{{$item->name}}</p>
            <p class="text-sm">{{$item->price}} IDR</p>
        </div>
            
        @endif
            
        @endforeach
       
        </section>

  <footer class="sticky bg-black text-white py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-center">
      <div>
        <h3 class="text-lg font-medium mb-4">Shop</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-yellow-500">Sweatshirt</a></li>
          <li><a href="#" class="hover:text-yellow-500">Hoodie</a></li>
          <li><a href="#" class="hover:text-yellow-500">Bomber</a></li>
          <li><a href="#" class="hover:text-yellow-500">T-Shirt</a></li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-medium mb-4">Metode Pembayaran</h3>
        <ul class="space-y-2">
          <li>COD</li>
          <li>Transfer</li>
          <li>E-Wallet</li>
        </ul>
      </div>
      <div>
        <h3 class="text-lg font-medium mb-4">Bantuan</h3>
        <ul class="space-y-2">
          <li><a href="#" class="hover:text-yellow-500">Panduan</a></li>
          <li><a href="#" class="hover:text-yellow-500">Kebijakan Privasi</a></li>
          <li><a href="#" class="hover:text-yellow-500">Kontak</a></li>
        </ul>
      </div>
    </div>
    <div class="mt-8 flex justify-center space-x-4">
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook-f"></i></a>
      <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok"></i></a>
    </div>
    <div class="mt-8 text-center text-gray-400">
      <p>IBAMCR - Konsep bisnis IBAMCR menawarkan fashion dan kualitas dengan harga terbaik dan cara yang berkelanjutan.</p>
      <p>© 2024 IBAMCR. All rights reserved.</p>
    </div>
  </footer>
</div>
</body>
</html>
