@extends('app')
@section('content')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/">Villa Seebach</a>
            @if (!Auth::guest())
                <div>
                    <a class="nav-link" href="/logout">Logout</a>
                </div>
            @else
                <div>
                    <a class="nav-link loginBtn" href="#">Login</a>
                </div>
            @endif
        </div>
    </nav>
    <div style="margin:150px; height:800px ">
        @if (isset($addOrder))
            <h1>Rezerwacja potwierdzona</h1>
            <h3>Imie i nazwisko: <span class="total">{{ $name }}</span></h3>
            <h3>Data: <span class="total">{{ $date }}</span></h3>
            <h3>Stolik dla: <span class="total">{{ $countOfPeople }}</span> osób</h3>
        @else
            <h1>Dziękujemy za złożęnie zamówienia!</h1>
            <h3>Twoje zamówienie będzie gotowe dzisiaj o <span class="total">{{ $readyTime }}</span></h3>
        @endif
        @if ($amount > 0)
            <h3>Do zapłaty: <span class="total">{{ $amount }} </span> zł</h3>
        @else
            <h3>Zamówienie opłacono</h3>
        @endif
        <a class="nav-link" href="/orders/create">Powrót</a>
    </div>
@endsection
