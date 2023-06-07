<header class="px-4">
    <a href="/login" class="text-white text-decoration-none fw-bold">Blog App</a>
    <div class="header_right">
        @guest
            <a href="/login">login</a>
            <a href="/register">Register</a>
        @else
            <a href="{{ route('users_posts.index', Auth::user()->id ) }}">{{ Auth::user()->name }}'s Page</a>
            <a href="{{ route('logout') }}">Logout</a>
            </form>
        @endguest
    </div>
</header>
