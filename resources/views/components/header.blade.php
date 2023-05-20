<header>
    <a href="{{ route('home.index') }}" aria-label="Link para a página inicial">
        <img src="{{ asset('storage/img/logo-mid.png') }}" class="logo" alt="Logo">
    </a>
    <ul>
        <li><a href="{{ route('home.index') }}">Home</a></li>
        <li><a href="{{ route('about.index') }}">Sobre mim</a></li>
        <li><a href="{{ route('skills.index') }}">Habilidades</a></li>
        <li><a href="{{ route('portfolio.index') }}">Projetos</a></li>
        <li><a href="{{ route('contact.index') }}">Contato</a></li>
    </ul>
</header>
<button class="lateral-menu__button card" aria-label="Botão menu de navegação">
    <span class="menu-ic"></span>
    <span class="menu-ic"></span>
    <span class="menu-ic"></span>
</button>
<nav class="lateral-menu">
    <img src="{{ asset('storage/img/logo-mid.png') }}" alt="logo" class="logo-menu">
    <ul>
        <li class="lateral-menu__item">
            <a href="{{ route('home.index') }}">Home</a>
        </li>
        <li class="lateral-menu__item">
            <a href="{{ route('about.index') }}">Sobre mim</a>
        </li>
        <li class="lateral-menu__item">
            <a href="{{ route('skills.index') }}">Habilidades</a>
        </li>
        <li class="lateral-menu__item">
            <a href="{{ route('portfolio.index') }}">Projetos</a>
        </li>
        <li class="lateral-menu__item">
            <a href="{{ route('contact.index') }}">Contato</a>
        </li>
    </ul>
</nav>
<script src="{{ asset('js/header.js') }}"></script>