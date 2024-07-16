<header class="container">
    <nav>
        <a href="#"><figure><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC"></figure></a>

        <ul>
            <li>
                <a class="{{ Route::currentRouteName() === 'guest.home' ? 'active' : ''}}" href="/">home</a>
            </li>
            <li>
                <a class="{{ Route::currentRouteName() === 'guest.products' ? 'active' : ''}}" href="/products">comics</a>
            </li>
            <li>
                <a href="">movies</a>
            </li>
            <li>
                <a href="">tv</a>
            </li>
            <li>
                <a href="">games</a>
            </li>
            <li>
                <a href="">collectibles</a>
            </li>
            <li>
                <a href="">videos</a>
            </li>
            <li>
                <a href="">fans</a>
            </li>
            <li>
                <a href="">news</a>
            </li>
            <li>
                <a href="">shop</a>
            </li>
        </ul>
    </nav>
</header>
