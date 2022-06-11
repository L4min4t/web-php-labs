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
@php $queue = [0, 1, 2, 3, 4, 5, 6, 7]; @endphp
@for ($k = 0; $k < 2; $k++)
    <div class="d-line">
        @for ($i = 0; $i < 4; $i++)
            @php $h = array_shift($queue); @endphp
            <div class="m-position">
                <img src="../images/{{$burgers[$h]->path}}" alt="burger 1" class="f-burger">
                <p class="n-burger">{{$burgers[$h]->name}}</p>
                <p class="d-burger">{{$burgers[$h]->description}}</p>
                <p class="p-burger">{{$burgers[$h]->price}} грн</p>
            </div>
            @php array_push($queue, $h); @endphp
        @endfor
    </div>
@endfor
@for ($k = 1; $k < 5; $k++)
    <div class="m-line">
        @for ($i = 1; $i < 3; $i++)
            @php $h = array_shift($queue); @endphp
            <div class="m-position">
                <img src="../images/{{$burgers[$h]->path}}" alt="burger 1" class="f-burger">
                <p class="n-burger">{{$burgers[$h]->name}}</p>
                <p class="d-burger">{{$burgers[$h]->description}}</p>
                <p class="p-burger">{{$burgers[$h]->price}} грн</p>
            </div>
            @php array_push($queue, $h); @endphp

        @endfor
    </div>
@endfor




<h1 class="menu-positions">Напої</h1>
@for ($k = 1; $k < 3; $k++)
    <div class="d-line">
        @for ($i = 1; $i < 5; $i++)
            @php $h = array_shift($queue); @endphp
            <div class="m-position l-h">
                <img src="../images/{{$drinks[$h]->path}}" alt="drink" class="f-burger">
                <p class="n-burger">{{$drinks[$h]->name}}</p>
                <p class="p-burger">{{$drinks[$h]->price}} грн</p>
            </div>
            @php array_push($queue, $h); @endphp

        @endfor
    </div>
@endfor

@for ($k = 1; $k < 5; $k++)
    <div class="m-line">
        @for ($i = 1; $i < 3; $i++)
            @php $h = array_shift($queue); @endphp
            <div class="m-position l-h">
                <img src="../images/{{$drinks[$h]->path}}" alt="drink" class="f-burger">
                <p class="n-burger">{{$drinks[$h]->name}}</p>
                <p class="p-burger">{{$drinks[$h]->price}} грн</p>
            </div>
            @php array_push($queue, $h); @endphp

        @endfor
    </div>
@endfor


<br>
<br>
@endsection
