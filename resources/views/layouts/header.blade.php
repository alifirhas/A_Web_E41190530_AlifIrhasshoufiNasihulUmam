<nav class="bg-gray-700 p-6 flex justify-between mb-6 text-white">
    <ul class="flex items-center ">
        <li>
            <a href="{{ route('home') }}" class="p-3 hover:text-purple-200">Home</a>
        </li>
        <li>
            <a href="{{ route('dashboard') }}" class="p-3  hover:text-purple-200">Dashboard</a>
        </li>

    </ul>

    <ul class="flex items-center ">
        @auth
        <li>
            <a href="#" class="p-3 hover:text-purple-200">{{ auth()->user()->username }}</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="POST" class="p-3 inline">
                @csrf
                <button type="submit">LogOut</button>
            </form>
        </li>
        @endauth
        
        @guest
        <li>
            <a href="" class="p-3  hover:text-purple-200">LogIn</a>
        </li>
        <li>
            <a href="" class="p-3  hover:text-purple-200">Register</a>
        </li>
        @endguest
    </ul>
</nav>