<nav class="bg-white shadow p-4 flex justify-between items-center">
    <a href="/" class="font-bold text-lg">Elite Transfer</a>
    <ul class="flex space-x-4">
        <li><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li><a href="{{ route('contact') }}">Contacto</a></li>
        <li><a href="{{ route('profile') }}">Perfil</a></li>

        @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Salir</button>
            </form>
        @endauth
        @guest
            <li><a href="{{ route('login') }}">Entrar</a></li>
        @endguest
    </ul>
</nav>
