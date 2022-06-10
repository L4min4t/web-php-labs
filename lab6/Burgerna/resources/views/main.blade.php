@extends('layout')


@section('title')
    Головна
@endsection

@section('main')
    class="underlined"
@endsection
@section('menu')
    class="anim"
@endsection
@section('find-us')
    class="anim"
@endsection

@section('container')
    <div class="stimulate">
        <div class="label">
            <p class="bold-text">Бургена №1</p>
            <p>ми вже в твоєму місті</p>
            <p class="bold-text">Смакуй життя!</p>
            <div class="call">
                <button id="phone" class="order-button" onclick="copyToClipBoardO()" onmouseout="cpAgainO()"><span class="hint" id="my-hint-order">Скопіювати</span>ЗАТЕЛЕФОНУВАТИ</button>
            </div>
        </div>
        <img alt="big-burger" class="big-burger" src="{{URL::asset('images/juicy-burger.jpeg')}}">
    </div>

    <hr>

    <div class="time">
        <div class="work-hours">
            <img alt="timer" src="{{URL::asset('images/clock.png')}}" class="timer">
            <p>10:20 - 24:00 Пн-Нд</p>
            <p>Доставка по місту</p>
            <p>за <span class="t-45">45</span> хвилин!"</p>
            <br>
            <p>Кожна хвилина запізнення</p>
            <p>- 1% знижки</p>
        </div>
        <div class="visit-us">
            <img alt="meeting-point" src="{{URL::asset('images/meeting-point.png')}}" class="meet-point">
            <p>Відвідай нас з</p>
            <button id="promo" class="promo" onclick="copyToClipBoardP()" onmouseout="cpAgainP()"><span class="prom" id="prom">12промокод21</span>промокодом</button>
            <p>та отримай знижку 8%</p>
        </div>
    </div>

    <hr>

    <div>
        <p class="choise">Обери собі та другу!</p>
        <div class="mini-menu">
            <div class="mini-position">
                <img src="{{URL::asset('images/1.png')}}" alt="burger1" class="burger-pic">
                <p class="burger-name">Бургер на сніданок</p>
                <p class="burger-discr">Булка, масло вершкове, котлета, сир Чедр, бочок копчений, яйце, листя салату, соус BBQ, картоплянi дiпи, Сирний соус з пармезаном</p>
                <p class="burger-pric">120 грн</p>
            </div>
            <div class="mini-position">
                <img src="{{URL::asset('images/2.png')}}" alt="burger1" class="burger-pic">
                <p class="burger-name">Рибний бургер</p>
                <p class="burger-discr">Булка, масло вершкове, риба Хек в хрусткiй панiровцi, соус Цезарiон, iкра масаго, помiдори, лимон, картоплянi дiпи, соус Тар-тар</p>
                <p class="burger-pric">155 грн</p>
            </div>
            <div id="extra" class="mini-position">
                <img src="{{URL::asset('images/3.png')}}" alt="burger1" class="burger-pic">
                <p class="burger-name">Бургер з куркою</p>
                <p class="burger-discr">Булка, масло вершкове, карамелiзована курка, сир Чедер, листя салату, соус Айолi, картоплянi<br>дiпи, Сирний соус з пармезаном</p>
                <p class="burger-pric">140 грн</p>
            </div>
            <div class="mini-position">
                <p class="extr-cheese">Додай екстра<br>сир та соус до<br>будь-якого бургеру<br>лише за 25 грн</p>
                <a href="{{url('menu')}}" class="more-in-menu">БIЛЬШЕ У<br>МЕНЮ→</a>
            </div>
        </div>

    </div>
    <div id="hor"class="mini-position">
        <p class="extr-cheese">Додай екстра<br>сир та соус до<br>будь-якого бургеру<br>лише за 25 грн</p>
        <a href="{{url('/menu')}}" class="more-in-menu">БIЛЬШЕ У<br>МЕНЮ→</a>
    </div>

    <hr>

    <div class="call-us">
        <p>Відвідай нас</p>
        <p>або</p>
        <p>зателефонуй <br id="small">0-800-000-000</p>
    </div>
@endsection
