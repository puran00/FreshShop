<nav class="navbar navbar-expand-lg" style="background-color: #01D179 ;">
    <div class="container-fluid container">
        <a class="navbar-brand text-white" href="{{route('AboutUs')}}">FreshBurg</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('AuthPage')}}">Авторизация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{route('RegPage')}}">Регистрация</a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-black" href="">О нас</a>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a class="nav-link text-black" href="">Каталог</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-black" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Админ
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Добавить категорию</a></li>
                        <li><a class="dropdown-item" href="">Добавить бренд</a></li>
                        <li><a class="dropdown-item" href="">Добавить товар</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('AdminPage')}}">Админ панель</a></li>
                        <li><a class="dropdown-item" href="">Все заказы</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="">Где нас найти</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-black" href="">Корзина</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="">Мои заказы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('logout')}}">Выход</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
