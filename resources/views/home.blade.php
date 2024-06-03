<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../dist/output.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@800&display=swap" rel="stylesheet">
        <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap"
        />
        <style>
            .menu-hidden {
                display: none;
            }
    
            @media (min-width: 768px) {
                .menu-hidden {
                    display: flex;
                }
            }

    .modal-overlay {
        display: none;
        justify-items: center;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-open {
        display: flex;
        justify-items: center;
        align-items: center;
    }

    .modal-content {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .cart-overlay {
            display: none;
        }
        .cart-overlay.active {
            display: block;
        }

</style>
  </head>
  <body >
  <div class="container mx-auto">
    
  <nav class=" sticky w-full py-5 text-white flex justify-between items-center px-6 bg-black fixed top-0 left-0 z-10">
        <div class="flex items-center md:hidden">
            <button id="menu-toggle" class="focus:outline-none">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:flex gap-x-20 w-[25%] items-center ml-20"> 
            <a href="landing-page.html" class="hover:text-yellow-500">Home</a>
            <a href="#" class="hover:text-yellow-500">About</a>
            <a href="categori.html" class="text-yellow-500">Categories</a>
        </div>
        
        <a href="landing-page.html" class="text-right flex items-center text-2xl font-extrabold">IBAMCR</a>
      <ul class="hidden md:flex gap-x-10 items-center mr-16">
            <input type="text" placeholder="Cari" class="bg-transparent text-white border-2 border-white rounded-md px-5 py-1">
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </ul>
    </nav>



    <header>
        <img className="" src="{{ asset('image/Group 381.jpg') }}" alt="">
        <div class="flex relative flex-col mt-3 ml-11 max-w-full w-[944px]">
            <div class="max-w-7xl mx-auto">
              </div>
        </div>   
    </header>

    {{-- <!-- Modals -->
<div id="signupModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center">
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
                <form action="{{ route('register') }}" method="POST">
                    @csrf
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
                        <label for="passwordSignUpConfirmation" class="block text-sm font-medium text-gray-700">Konfirmasi kata sandi*</label>
                        <input type="password" id="passwordSignUpConfirmation" name="password_confirmation" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
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
            <div class="hidden md:block md:w-1/2 bg-cover bg-center rounded-r-lg" style="background-image: url('{{ asset('/image/background1@2x.png') }}');"></div>
        </div>
    </div>
</div> --}}

{{-- <!-- Sign In Modal -->
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
                <form action="{{ route('login') }}" method="POST">
                    @csrf
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
                            <input type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-700">Biarkan saya tetap masuk</span>
                        </label>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-black text-white p-2 rounded-md">SIGN IN</button>
                    </div>
                </form>
            </div>
            <div class="hidden md:block md:w-1/2 bg-cover bg-center rounded-r-lg" style="background-image: url('{{ asset('/image/background1@2x.png') }}');"></div>
        </div>
    </div>
</div> --}}

{{-- <script>
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.classList.toggle('hidden');
}
</script> --}}

{{-- <script>
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
</script> --}}
     
<div class="container mx-auto p-4">
    <!-- Categories Section -->
    <section class="text-center mb-8">
      <h2 class="text-2xl font-bold mb-4">Categories</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($categories as $category)
        <a href="{{route('category')}}">
          <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-full aspect-square object-cover rounded-md">
          <p class="mt-2">{{$category->name}}</p>
        </a >
            
        @endforeach
     
      </div>
    </section>

    <!-- New Arrivals Section -->
    <section class="text-center">
      <h2 class="text-2xl font-bold mb-4">New Arrivals</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
       @foreach ($products as $product)
       <a href="{{route('product.show',$product->id)}}">
         <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full aspect-square object-cover rounded-md">
         <p class="mt-2 ">{{$product->name}}</p>
         <p class="text-gray-600 round">{{$product->price}} IDR</p>
       </a >
           
       @endforeach
      
      </div>
    </section>
</div>

    <div id="modal" class="modal-overlay">
        <div class="modal-content">
            <!-- Your login form goes here -->
            <h2 class="text-xl font-bold mb-4">Login</h2>
            <form>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email:</label>
                    <input type="email" id="email" name="email" class="form-input mt-1 block w-full" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" class="form-input mt-1 block w-full" placeholder="Enter your password">
                </div>
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Login</button>
            </form>
        </div>
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
      
   {{-- <!-- Cart and Checkout Overlay -->
   <div id="cart-overlay" class="cart-overlay fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 rounded-lg shadow-lg w-80 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold">Tas Belanja</h2>
            <button id="close-cart" class="text-gray-500">&times;</button>
        </div>
        <div>
            <div class="flex items-center mb-4">
                <img src="https://via.placeholder.com/64" alt="Hoodie Boxy Fit" class="w-16 h-16 object-cover">
                <div class="ml-4 flex-1">
                    <h4 class="text-md font-semibold">HOODIE BOXY FIT</h4>
                    <p class="text-gray-600">IDR629.900</p>
                    <div class="flex items-center mt-2">
                        <label for="size" class="mr-2">Size:</label>
                        <select id="size" class="border border-gray-300 rounded p-1">
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                        </select>
                    </div>
                    <div class="flex items-center mt-2">
                        <button class="px-2 py-1 bg-gray-200 text-gray-800 rounded" onclick="changeQuantity(-1)">-</button>
                        <input type="text" value="2" id="quantity" class="mx-2 w-8 text-center border border-gray-300 rounded">
                        <button class="px-2 py-1 bg-gray-200 text-gray-800 rounded" onclick="changeQuantity(1)">+</button>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center border-t pt-4">
                <p class="text-md font-semibold">Total</p>
                <p class="text-lg font-semibold">IDR629.900</p>
            </div>
            <button class="mt-4 w-full bg-green-500 text-white py-2 rounded">MEMPROSES PESANAN</button>
        </div>
    </div>
</div> --}}

<script>
    document.getElementById('cart-icon').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent default link behavior
      document.getElementById('cart-overlay').classList.add('active');
    });

    document.getElementById('close-cart').addEventListener('click', function() {
      document.getElementById('cart-overlay').classList.remove('active');
      document.getElementById('cart-overlay').style.display = 'none';
    });

    function changeQuantity(amount) {
      var quantityInput = document.getElementById('quantity');
      var currentQuantity = parseInt(quantityInput.value);
      if (currentQuantity + amount > 0) {
        quantityInput.value = currentQuantity + amount;
      }
    }
</script>
      
    </div>
 
     <script>
         function toggleCart() {
             document.getElementById('cart').classList.toggle('open');
             document.getElementById('overlay').classList.toggle('open');
         }
     </script>
  </body>
</html>
