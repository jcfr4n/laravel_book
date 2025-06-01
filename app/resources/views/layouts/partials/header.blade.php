<header>
    <nav>
        <div class="menu">
            <a href="/">Escuela</a>
            <div class="menu-items">
                <ul class="items">
                    <li>
                        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('cursos.index') }}"
                            class="{{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
                    </li>
                    <li>
                        <a href="{{ route('nosotros') }}"
                            class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                    </li>
                    <li>
                        <a href="{{ route('contactanos.index')}}"
                            class="{{ request()->routeIs('contactanos.*') ? 'active' : '' }}">contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
