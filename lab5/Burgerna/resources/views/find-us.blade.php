@extends('layout')


@section('title')
    Знайти нас
@endsection

@section('main')
    class="anim"
@endsection
@section('menu')
    class="anim"
@endsection
@section('find-us')
    class="underlined"
@endsection

@section('container')
<h1 class="our-branches">Наші відділення</h1>

<iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.569558456315!2d30.46021525597019!3d50.449117828318045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce8314fdfde3%3A0xd09dbe758a8cc765!2z0JrQn9CGINGW0LwuINCG0LPQvtGA0Y8g0KHRltC60L7RgNGB0YzQutC-0LPQviDQmtC-0YDQv9GD0YEgNSDQotCV0KQ!5e0!3m2!1sru!2sua!4v1652197349910!5m2!1sru!2sua"class="my-map" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>

<select id="branch" class="my-sel" onchange="window.location = this.value;">
    <option >Оберіть відділення</option>
    <option @if(isset($curId) and $curId == 1) selected @endif value="/find-us/1">Відділення №1</option>
    <option @if(isset($curId) and $curId == 2) selected @endif value="/find-us/2">Відділення №2</option>
    <option @if(isset($curId) and $curId == 3) selected @endif value="/find-us/3">Відділення №3</option>
    <option @if(isset($curId) and $curId == 4) selected @endif value="/find-us/4">Відділення №4</option>
    <option @if(isset($curId) and $curId == 5) selected @endif value="/find-us/5">Відділення №5</option>
</select>
<p class="branch-info">
    @if(isset($data))
        @foreach ($data as $row)
            {{$row}}<br>
        @endforeach
    @endif
</p>
<br>
<p class="branch-info">Залиште контакти і ми зателефонуємо вам!</p>
<form method="post" action="" class="branch-info" >
    @csrf
    <label>Ім'я:</label><br>
    <input type="text" name="name" required="true"><br>
    <label>Номер телефону:</label><br>
    <input type="text" name="phone" required="true"></textarea><br>
    <label>Дата та час:</label><br>
    <input type="datetime-local" name="time" required="true"></textarea><br>
    <button type="submit" class="order-button">Передзвоніть!</button>
</form>


{{--<form method="post" action="">--}}
{{--    @csrf--}}
{{--    <select id="branch" name="branch" class="my-sel" onchange="this.form.submit()">--}}
{{--        <option value="null">Оберіть відділення</option>--}}
{{--        <option @if(isset($curId) and $curId == 1) selected @endif value="1">Відділення №1</option>--}}
{{--        <option @if(isset($curId) and $curId == 2) selected @endif value="2">Відділення №2</option>--}}
{{--        <option @if(isset($curId) and $curId == 3) selected @endif value="3">Відділення №3</option>--}}
{{--        <option @if(isset($curId) and $curId == 4) selected @endif value="4">Відділення №4</option>--}}
{{--        <option @if(isset($curId) and $curId == 5) selected @endif value="5">Відділення №5</option>--}}
{{--    </select>--}}
{{--</form>--}}

@endsection
