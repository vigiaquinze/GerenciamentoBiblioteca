@if (Auth::check())
    <nav class="navbar">
        <div class="presentation">
            <p class="m5">Olá, <strong>{{ Auth::user()->nome }}</strong></h3>
        </div>
        <div class="flex">
            @if (Auth::user()->isBibliotecario())
                <div>
                    <a href="/livros"><button class="navbarButton m5">Acessar dashboard de livros</button></a>
                </div>
            @endif
            <form action="/logout" method="post">
                @csrf
                <div class="flex">
                    <button class="navbarButton m5" type="submit">Sair</button>
                </div>
            </form>
        </div>
        <div class="navbarLogo">
            <h1>libriloco</h1>
        </div>
    </nav>
@else
    <nav class="navbarNoAuth">
        <div class="flex">
            <a href="/login"><button class="navbarButton m10">Login</button></a>
            <a href="/registro"><button class="navbarButton m10">Registrar-se</button></a>
        </div>
        <div class="navbarLogoNoAuth">
            <h1>libriloco</h1>
        </div>
    </nav>
@endif
