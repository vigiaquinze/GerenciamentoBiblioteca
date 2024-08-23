@if (Auth::check())
    <div class="navbar">
        <div>
            <h3 class="m5">Olá, {{ Auth::user()->nome }}</h3>
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
    </div>
@else
    <div class="navbar">
        <div class="flex">
            <a href="/login"><button class="navbarButton m10">Login</button></a>
            <a href="/registro"><button class="navbarButton m10">Registrar-se</button></a>
        </div>
        <div class="navbarLogoNoAuth">
            <h1>libriloco</h1>
        </div>
    </div>
@endif
