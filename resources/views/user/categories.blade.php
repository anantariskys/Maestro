<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./global.css" />
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap"
        />
        <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        />
  </head>
  <body >
    <nav class=" sticky w-full py-5 text-white flex justify-between items-center px-6 bg-black fixed top-0 left-0 z-10">
        <div class="flex items-center md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex gap-x-20 w-[25%] items-center ml-20"> 
        <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a>
            <a class="hover:text-yellow-500">About</a>
            <a class="text-yellow-500">Categories</a>
        </div>
        
        <a  class="text-right flex items-center text-2xl font-extrabold">IBAMCR</a>
      <ul class="hidden md:flex gap-x-10 items-center mr-16">
            <input type="text" placeholder="Cari" class="bg-transparent text-white border-2 border-white rounded-md px-5 py-1">
            <button id="loginBtn" class="text-white hover:text-yellow-500">Sign In</button>
            <a href="#">
                <img class="" alt="" src="/public/bag.png">
            </a>
        </ul>
    </nav>
    
    <main class="container mx-auto p-4">
    
        <header class="flex justify-center flex-wrap space-x-2 mb-8 overflow-x-auto">
          <button class="category-btn border rounded-md border-gray-300 py-2 px-4 text-gray-600 hover:border-black hover:text-black hover:font-semibold" data-category="all">Lihat Semua</button>
          @foreach ($categories as $category)

          <button class="category-btn border rounded-md border-gray-300 py-2 px-4 text-gray-600 hover:border-black hover:text-black hover:font-semibold" data-category="{{$category->name}}">{{$category->name}}</button>
              
          @endforeach
        </header>
        
        <div id="product-list" class="grid grid-cols-1 md:grid-cols-3 gap-8">
          @foreach ($products as $product)
          <div class="bg-white p-4 product-item" data-category="{{$product->category->name}}">
              <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full aspect-square object-cover h-auto">
              <h2 class="mt-4 text-lg font-semibold">{{$product->name}}</h2>
              <p class="text-gray-600">{{$product->price}} IDR</p>
          </div>
      
          @endforeach
          
          
        </div>
    </main>

    <script>
        // JavaScript to handle category filtering
        document.querySelectorAll('.category-btn').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                document.querySelectorAll('.product-item').forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>

</div>
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
  </body>
</html>