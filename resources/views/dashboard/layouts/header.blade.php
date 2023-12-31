<nav class="fixed z-30 w-full bg-slate-50 shadow-2xl border-b border-gray-200 ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start" style="margin-left: 16rem">
               
                
            </div>
            <div class="flex items-center">
                <div class="hidden mr-3 -mb-1 sm:block">
                    <span></span>
                </div>

                <button id="toggleSidebarMobileSearch" type="button"
                    class="p-2 text-gray-500 rounded-lg lg:hidden hover:text-gray-900 hover:bg-gray-100 ">
                    <span class="sr-only">Search</span>

                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="flex items-center ml-3 mr-5">
                    <div>
                        <button type="button"
                            class="flex text-sm ml-3"
                            id="user-menu-button-2" aria-expanded="false" data-dropdown-toggle="dropdown-2">
                            <span class="sr-only">Open user menu</span>
                            <div class="flex justify-between ">
                            <img class="w-8 h-8 rounded-full"
                                src="/img/logo.png" alt="user photo"> 
                                <p class="text-base mt-1 text-gray-900 mx-4" role="none">
                                    Welcome , {{auth()->user()->name }}
                                    </p>
                            </div>
                        </button>
                    </div>

                    @auth
                    <div class="z-40 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                        id="dropdown-2" data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(1313px, 61px);">
                        <div class="px-4 py-3" role="none">
                            
                            <p class="text-sm font-medium text-gray-900 truncate" role="none">
                            {{auth()->user()->email }}
                            </p>
                        </div>
                        
                        <ul class="py-1" role="none">
                            <li>
                                <a href="/home"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 "
                                    role="menuitem">Home</a>
                            </li>                           
                            <div class="py-1">
                          @csrf
                          <form action="/logout" method="post">
                            @csrf 
                            <button type="submit" class="block px-4  py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                          </form>
                        </div>
                        </ul>
                    </div>
                    @else
                    <a href="/login" class="nav-link {{$active === 'login' ? 'active' : '' }}">
                      <svg  class="w-6 h-6 text-gray-800  hover:text-[#94B49F] mr-4 ml-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z"/>
                      </svg>
                   </a>
                    @endauth
                    
                </div>
            </div>
        </div>
    </div>
</nav>
