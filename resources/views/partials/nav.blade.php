
<nav class="nav" aria-label="Main Navigation">

    <a href="{{ route('home') }}" class="brand">
        Article<span>Hub.</span>
    </a>

    <div class="nav-links">
        <a href="{{ route('home') }}"
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
            Home
        </a>

        @auth
            <a href="{{ route('dashboard') }}"
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                Dashboard
            </a>

            <a href="{{ route('articles.index') }}"
               class="{{ request()->routeIs('articles.*') ? 'active' : '' }}">
                Artikel
            </a>
        @endauth
    </div>

    <div class="right">

        @auth
            <span class="user-name">
                Halo, {{ auth()->user()->name }}
            </span>

            <form method="POST"
                  action="{{ route('logout') }}"
                  class="inline">
                @csrf
                <button type="submit" class="btn-logout">
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}">Login</a>

            <a href="{{ route('register') }}" class="btn-register">
                Register
            </a>
        @endguest

    </div>

</nav>
