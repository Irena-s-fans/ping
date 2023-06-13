<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Креативное Агенство PinG</title>
    <link rel="stylesheet" href="/public/css/admin.css">
    <script src="/public/js/libs/jquery-3.6.1.min.js"></script>
    <script src="/public/js/libs/jquery.validate.min.js"></script>
    <script src="/public/js/admin.js"></script>
    <script src="https://cdn.tiny.cloud/1/m0995flxa8uyq68fgacwx6dsx5ed4ozsn4k13sm7fpwwzw4t/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body class="body">
    <div class="popup" id="loader__popup">
        <div class="loader popup__loader">
            <div class="loader__ring"></div>
        </div>
    </div>
    <div class="admin">
        <div class="admin-container">
            <header class="header">
                <nav class="header__nav">
                    <a class="header__nav-el" href="/">
                        <img src="/public/img/logo.png" alt="" class="header__logo">
                    </a>
                    <div class="header__nav-el header__nav-auth">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="admin__btn">
                                    <span class="admin__btn-text">
                                        Войти
                                    </span>
                                </a>
                            @endif

                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="admin__btn">
                                        <span class="admin__btn-text">
                                            Регистрация
                                        </span>
                                    </a>
                            @endif
                        @else
                            <a class="admin__btn logout" href="{{ route('logout') }}">
                                <span class="admin__btn-text">
                                    Выйти
                                </span>
                            </a>
                        @endguest
                    </div>
                </nav>
            </header>
            <main class="main">
                @yield('content')
            </main>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'textarea.wysiwyg',
            height: 300,
            menubar: 'format',
            plugins: [
                'autolink', 'lists', 'link', 'charmap', 'preview',
                'anchor', 'visualblocks', 'fullscreen',
                'help', 'wordcount', 'code'
            ],
            toolbar: 'undo redo | formatselect fontselect fontsizeselect | bold italic backcolor | bullist numlist outdent indent  link | code  visualblocks  | removeformat | help | link image',
            promotion: false,
        });
    </script>
</body>
</html>
