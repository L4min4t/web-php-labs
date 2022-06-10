@extends('layout')


@section('title')
    Меню
@endsection

@section('main')
    class="anim"
@endsection
@section('menu')
    class="underlined"
@endsection
@section('find-us')
    class="anim"
@endsection

@section('container')
<h1 class="menu-positions">Бургери</h1>

@for ($k = 1; $k < 3; $k++)
    <div class="d-line">
        @for ($i = 1; $i < 5; $i++)
            <div class="m-position">
                <img src="../images/{{$burgers[$k*$i-1]->path}}" alt="burger 1" class="f-burger">
                <p class="n-burger">{{$burgers[$k*$i-1]->name}}</p>
                <p class="d-burger">{{$burgers[$k*$i-1]->description}}</p>
                <p class="p-burger">{{$burgers[$k*$i-1]->price}} грн</p>
            </div>
        @endfor
    </div>
@endfor
@for ($k = 1; $k < 5; $k++)
    <div class="m-line">
        @for ($i = 1; $i < 3; $i++)
            <div class="m-position">
                <img src="../images/{{$burgers[$k*$i-1]->path}}" alt="burger 1" class="f-burger">
                <p class="n-burger">{{$burgers[$k*$i-1]->name}}</p>
                <p class="d-burger">{{$burgers[$k*$i-1]->description}}</p>
                <p class="p-burger">{{$burgers[$k*$i-1]->price}} грн</p>
            </div>
        @endfor
    </div>
@endfor




<h1 class="menu-positions">Напої</h1>
@for ($k = 1; $k < 3; $k++)
    <div class="d-line">
        @for ($i = 1; $i < 5; $i++)
            <div class="m-position l-h">
                <img src="../images/{{$drinks[$k*$i-1]->path}}" alt="drink" class="f-burger">
                <p class="n-burger">{{$drinks[$k*$i-1]->name}}</p>
                <p class="p-burger">{{$drinks[$k*$i-1]->price}} грн</p>
            </div>
        @endfor
    </div>
@endfor

@for ($k = 1; $k < 5; $k++)
    <div class="m-line">
        @for ($i = 1; $i < 3; $i++)
            <div class="m-position l-h">
                <img src="../images/{{$drinks[$k*$i-1]->path}}" alt="drink" class="f-burger">
                <p class="n-burger">{{$drinks[$k*$i-1]->name}}</p>
                <p class="p-burger">{{$drinks[$k*$i-1]->price}} грн</p>
            </div>
        @endfor
    </div>
@endfor


<br>
<br>
@endsection
