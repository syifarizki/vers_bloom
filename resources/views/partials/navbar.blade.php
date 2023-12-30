<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logo.png" alt="" class="w-8">
      <span class="self-center text-2xl font-semibold whitespace-nowrap ">Vers Bloom</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <ul class="inline-flex justify-between">
        
          <li>
          @if(auth()->check())
              <a href="/cart">
                  <svg class="w-7 h-7 text-gray-800  hover:text-[#94B49F] mx-5 mt-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9V4a3 3 0 0 0-6 0v5m9.92 10H2.08a1 1 0 0 1-1-1.077L2 6h14l.917 11.923A1 1 0 0 1 15.92 19Z"/>
                    </svg>
              </a>
              @endif
          </li>

                  <li>
                  @auth 
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" >
                    <div class="flex justify-between mt-3">
                    <svg  class="w-7 h-7 text-gray-800  hover:text-[#94B49F] mr-4 ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                    </svg> Welcome , {{auth()->user()->name }}</div>
                  </a>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="/profile" class="block px-14 py-2 hover:bg-gray-100 ">My Profile</a>
                          </li>
                        </ul>
                        <div class="py-1">
                          @csrf
                          <form action="/logout" method="post" >
                            @csrf 
                            <button type="submit" class="block ml-1 px-14 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                          </form>
                        </div>
                    </div>
                    @else
                    <a href="/login" class="nav-link {{$active === 'login' ? 'active' : '' }}">
                      <button type="button" class="text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300  font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 ">Login</button>
                   </a>
                    @endauth  
                </li> 
            </ul>
      </ul>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex mt-3 items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden  hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only ">Open main menu</span>
        <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white   ">
      <li>
        <a href="/home" class="block py-2 px-3 text-black font-bold  md:p-0 hover:text-[#94B49F]" aria-current="page">Home</a>
      </li>
      <li>
        <a href="/product" class="block py-2 px-3 text-black font-bold  md:p-0 hover:text-[#94B49F]">Products</a>
      </li>
      <li>
        <a href="/categories" class="block py-2 px-3 text-black font-bold  md:p-0 hover:text-[#94B49F]">Categories</a>
      </li>
      <!-- {{-- Tampilkan link "Dashboard" hanya jika user is_admin = 1 --}} -->
      @if(auth()->check() && auth()->user()->is_admin == 1)
        <li>
            <a href="/dashboard" class="block py-2 px-3 text-black font-bold md:p-0 hover:text-[#94B49F]">Dashboard</a>
        </li>
    @endif     
    </ul>
  </div>
  </div>
</nav>