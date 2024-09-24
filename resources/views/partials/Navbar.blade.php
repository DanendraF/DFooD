<div class="navbar">
    <img src="{{ asset('assets/image/logo.png') }}" class="logo">
    <ul>
        <li><a href="{{ route('homeUser') }}">HOME</a></li>
        <li><a href="{{ route('recipe') }}">RECIPE</a></li>
        <li><a href="{{ route('news') }}">NEWS</a></li>

        @auth
            <li>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <a href="#" onclick="this.closest('form').submit()">Logout</a>
                </form>
            </li>
        @endauth

        @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        @endguest
    </ul>
</div>
