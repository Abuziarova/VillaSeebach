@extends('app')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/" >Villa Seebach</a>
        @if(!Auth::guest())
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
    <h1>Dziękujemy za złożęnie zamówienia!</h1>
    <h3>Twoje zamówienie będzie gotowe dzisiaj o  <span class="total" >{{$readyTime}}</span></h3>
    @if($amount>0)
    <h3>Do zapłaty:  <span class="total" >{{ $amount }} </span> zł</h3>
    @else 
    <h3>Zamówienie opłacono</h3>
    @endif
    <a class="nav-link" href="/orders/create">Powrót</a>
</div>
@endsection