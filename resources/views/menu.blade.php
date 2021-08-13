@extends('app')

@section('content')
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/" >Villa Seebach</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
            </div>
        </div>
    </nav>
    <header class="masthead menu">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Menu</h1>
                    <hr class="divider" />
                </div>
            </div>
        </div>
    </header>
    <section class="page-section">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Karta menu</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav"><a href="#soup"><img class="menu-nav" src="{{ URL::to('/assets/img/soup.jpeg') }}"></a></div>
                        <h3 class="h4 mb-2">Zupy</h3>
                        <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia maiores voluptate nihil molestiae doloremque similique dolorem accusamus architecto dicta dignissimos odit delectus</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav"><a href="#main_dish"><img class="menu-nav" src="{{ URL::to('/assets/img/mainDish.jpeg') }}"></a></div>
                        <h3 class="h4 mb-2">Dania główne</h3>
                        <p class="text-muted mb-0">W karcie dań głównych znajdą Państwo: przekąski zimne, przekąski gorące, drób, ryby i mięsiwa. Nasze dania przygotowywane są codziennie ze świeżych produktów najwyższej jakości.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav"><a href="#salad"><img class="menu-nav" src="{{ URL::to('/assets/img/salad.jpeg') }}"></a></div>
                        <h3 class="h4 mb-2">Sałatki</h3>
                        <p class="text-muted mb-0">Zapoznaj się ze specjalnie przygotowanym menu sałatkowym. Serdecznie zapraszamy.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav "><a href="#dessert"><img class="menu-nav" src="{{ URL::to('/assets/img/dessert.jpeg') }}"></a></div>
                        <h3 class="h4 mb-2">Desery</h3>
                        <p class="text-muted mb-0">Nasze desery to przede wszystkim wyśmienite puszyste torty biszkoptowe i bezowe, desery ze świeżymi owocami, sernik domowy, jabłecznik jak również przepyszne lody.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="soup">
        <div class="menuDetails">
            <h1>Zupy</h1>
            <ul>
            @foreach($soups as $soup)
             <li>
                <h4>{{$soup->title}}</h4>
                <div>{{$soup->price}}</div>
                <div><p>{{$soup->description}}</p></div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <section id="main_dish">
        <div class="menuDetails">
            <h1>Dania główne</h1>
            <ul>
            @foreach($mainDishes as $dish)
             <li>
                <h4>{{$dish->title}}</h4>
                <div>{{$dish->price}}</div>
                <div><p>{{$dish->description}}</p></div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <section id="salad">
        <div class="menuDetails">
            <h1>Sałatki</h1>
            <ul>
            @foreach($salads as $salad)
             <li>
                <h4>{{$salad->title}}</h4>
                <div>{{$salad->price}}</div>
                <div><p>{{$salad->description}}</p></div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <section id="dessert">
        <div class="menuDetails">
            <h1>Desery</h1>
            <ul>
            @foreach($desserts as $dessert)
             <li>
                <h4>{{$dessert->title}}</h4>
                <div>{{$dessert->price}}</div>
                <div><p>{{$dessert->description}}</p></div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
   <script>
    var img = $("img.menu-nav");
    img.mouseover(function(){
        $(this).stop().animate({
           "width": "200px",
	        "height": "200px"
        }, 500);
    }) 
    img.mouseout(function(){
        $(this).stop().animate({
           "width": "190px",
	        "height": "190px"
        }, 500);
    }) 
   </script>
@endsection

