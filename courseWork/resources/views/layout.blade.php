<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" src="{{URL('images/logo.ico')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;399;400;600&display=swap" rel="stylesheet">
    <script src="{{url('js/script.js')}}"></script>
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <a href="{{url('/')}}"><img class="logo-img" src="{{URL('images/logo.png') }}" alt="logo"></a>
        <div class="logo-name">
            <a href="{{url('/')}}">Бургена №1</a>
            <a href="{{url('/')}}">в твоєму місті</a>
        </div>
    </div>
    <div class="nav-buttons">
        <a @yield('main') href="{{url('/')}}">Головна</a>
        <a @yield('menu') href="{{url('/menu')}}">Меню</a>
        <a @yield('find-us') href="{{url('/find-us')}}">Знайти нас</a>
    </div>
    <div class="cp-phone">
        <button id="phone" class="phone" onclick="copyToClipBoard()" onmouseout="cpAgain()"><span class="hint" id="my-hint">Скопіювати</span>0-800-000-000</button>
    </div>
    <div class="mobile-menu">
        <input type="checkbox" id="op">
        <div class="lower">
            <label class="lover" for="op"><img class="menu-ico" src="{{URL('images/menu.png')}}"></label>
        </div>
        <div class="overlay overlay-hugeinc">
            <label for="op"></label>
            <nav>
                <ul>
                    <li><a href="{{url('/')}}">Головна</a></li>
                    <li><a href="{{url('/menu')}}">Меню</a></li>
                    <li><a href="{{url('/find-us')}}">Знайти нас</a></li>
                    <li><a>0-800-000-000</a></li>
                </ul>
            </nav>
        </div>
    </div>
</nav>




@yield('container')




<div class="footer">
    <div class="contacts">
        <div class="cp-phone">
            <button class="phone" onclick="copyToClipBoardF()" onmouseout="cpAgainF()"><span class="hint" id="my-hint-footer">Скопіювати</span>0-800-000-000</button>
        </div>
        <a class="text-24 bold-text dont-do-this" href="{{url('/find-us')}}">Знайти нас</a>
    </div>
    <div class="logo">
        <a href="{{url('/')}}"><img class="logo-img" src="{{URL::asset('images/logo.png') }}" alt="logo"></a>
        <div class="logo-name">
            <a href="{{url('/')}}">Бургена №1</a>
            <a href="{{url('/')}}">в твоєму місті</a>
        </div>
    </div>
</div>
</body>
</html>
