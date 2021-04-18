<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 ">
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start">
            <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                href="{{ route('landing') }}"> S POST @auth | {{ auth()->user()->username }}  @endauth 
                </a><button
                class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                type="button" onclick="toggleNavbar('example-collapse-navbar')">
                <i class="text-white fas fa-bars"></i>
            </button>
        </div>
        <div class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
            id="example-collapse-navbar">
            <ul class="flex flex-col lg:flex-row list-none mr-auto">
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{ route('dashboard') }}">
                        {{-- <i class="lg:text-gray-300 text-gray-500 far fa-file-alt text-lg leading-lg mr-2"></i> --}}
                        Dashboard</a>
                </li>
            </ul>
            <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                @auth
                <li class="flex items-center">
                    <a class="lg:text-white lg:hover:text-gray-300 text-gray-800 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                        href="{{ route('profile', auth()->user()) }}"><i
                            class="lg:text-gray-300 text-gray-500 fas fa-user-circle text-lg leading-lg "></i><span
                            class="lg:hidden inline-block ml-2">Profile</span></a>
                </li>

                <li class="flex items-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="submit" style="transition: all 0.15s ease 0s;">
                            {{-- <i class="fas fa-arrow-alt-circle-down"></i> --}} Logout
                        </button>
                    </form>
                </li>
                @endauth

                @guest
                <li class="flex items-center">
                    

                    <a href="{{ route('register') }}">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button" style="transition: all 0.15s ease 0s;">
                            {{-- <i class="fas fa-arrow-alt-circle-down"></i> --}} Register
                        </button>
                    </a>
                </li>
                <li class="flex items-center">

                    <a href="{{ route('login') }}">
                        <button
                            class="bg-white text-gray-800 active:bg-gray-100 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3"
                            type="button" style="transition: all 0.15s ease 0s;">
                            {{-- <i class="fas fa-arrow-alt-circle-down"></i> --}} Login
                        </button>
                    </a>                    
                    
                </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>