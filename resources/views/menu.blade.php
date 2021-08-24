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
        <div class=" align-self-baseline text-center">
            <h2 class="text-center mt-0">Karta menu</h2>
            <hr class="divider" />
            <a class="btn btn-primary btn-xl " href="#add">Dodaj</a>
        </div>
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
                        <div class="mb-2 menu-nav"><a href="#mainDish"><img class="menu-nav" src="{{ URL::to('/assets/img/mainDish.jpeg') }}"></a></div>
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
            <h2 class="title">ZUPY:</h2>
            <ul class="soup">
            @foreach($soups as $soup)
             <li>
                 <div class="row">
                    <div class="col">
                        @if(is_null($soup->image))
                        <img class="item-img" src="{{ URL::to('/assets/img/soup.jpeg') }}" alt="zupa">
                        @endif
                    </div>
                    <div class="col-6">
                        <h4 class="title">{{$soup->title}}</h4>
                        <p>{{$soup->description}}</p>
                    </div>
                    <div class="col price">{{$soup->price}}</div>
                <div>
             </li>
             
            @endforeach
            </ul>
        </div>
    </section>
    <section id="mainDish">
        <div class="menuDetails">
            <h1 class="title">Dania główne:</h1>
            <ul class="mainDish">
            @foreach($mainDishes as $dish)
             <li>
                 <div class="row">
                    <div class="col">
                        @if(is_null($dish->image))
                        <img class="item-img" src="{{ URL::to('/assets/img/mainDish.jpeg') }}" alt="danie główne">
                        @endif
                    </div>
                    <div class="col-6">
                        <h4 class="title">{{$dish->title}}</h4>
                        <p>{{$dish->description}}</p>
                    </div>
                    <div class="col price">{{$dish->price}}</div>
                <div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <section id="salad">
        <div class="menuDetails">
            <h1 class="title">Sałatki:</h1>
            <ul class="salad">
            @foreach($salads as $salad)
             <li>
                 <div class="row">
                    <div class="col">
                        @if(is_null($salad->image))
                        <img class="item-img" src="{{ URL::to('/assets/img/salad.jpeg') }}" alt="danie główne">
                        @endif
                    </div>
                    <div class="col-6">
                        <h4 class="title">{{$salad->title}}</h4>
                        <p>{{$salad->description}}</p>
                    </div>
                    <div class="col price">{{$salad->price}}</div>
                <div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <section id="dessert">
        <div class="menuDetails">
            <h1 class="title">Desery:</h1>
            <ul class="dessert">
            @foreach($desserts as $dessert)
             <li>
                 <div class="row">
                    <div class="col">
                        @if(is_null($dessert->image))
                        <img class="item-img" src="{{ URL::to('/assets/img/dessert.jpeg') }}" alt="danie główne">
                        @endif
                    </div>
                    <div class="col-6">
                        <h4 class="title">{{$dessert->title}}</h4>
                        <p>{{$dessert->description}}</p>
                    </div>
                    <div class="col price">{{$dessert->price}}</div>
                <div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <div class="row text-center">
        <div class="col-md-12 adding">
            <a id="add" class="btn btn-primary btn-xl addingbtn" >Dodaj</a>
        </div>
    </div>
   <script>
    var img = $("img.menu-nav");
    img.mouseover(function(){
        $(this).stop().animate({
           "width": "200px",
	        "height": "200px"
        }, 500);
    }); 
    img.mouseout(function(){
        $(this).stop().animate({
           "width": "190px",
	        "height": "190px"
        }, 500);
    });
    $("#add").click(function(){
        $(".addingbtn").remove();
        $(".adding").append(` <form id="addMenuForm">
                         @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" name="title" type="text" />
                            <label for="title">Nazwa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="price" name="price" type="number" min="0" step="0.1" />
                            <label for="price">Cena</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="group" id="group">
                                <option value="">Wybierz...</option>
                                <option value="soup">Zupa</option>
                                <option value="mainDish">Danie główne</option>
                                <option value="salad">Sałatka</option>
                                <option value="dessert">Desert</option>
                            </select>
                            <label for="group">Kategoria</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" type="text"  style="height: 10rem"></textarea>
                            <label for="description">Opis</label>
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Danie zostało dodane!</div>
                            </div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl submitbtn" type="submit" id="add-menu" >Dodaj</button></div>
                    </form>`);

        $('#add-menu').click(function(){
            let title = $("#title").val();
            let price = $("#price").val();
            let description = $("#description").val();
            let group  = $("#group").val();
            $.ajax({
                    type: "POST",
                    url: 'menu/add',
                    dataType: "JSON",
                    data: {
                        "title": title,
                        "price": price,
                        "description": description,
                        "group": group,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(msg) {
                       $('.invalid-feedback').remove() ;
                        if(msg['success'] == 'true'){
                            let divToINsert;
                            switch(group) {
                                case 'soup':
                                divToINsert = $('ul.soup');
                                break;
                                case 'mainDish':
                                    divToINsert = $('ul.mainDish');
                                    break;
                                case 'salad':
                                    divToINsert = $('ul.salad');
                                    break;
                                case 'dessert':
                                    divToINsert = $('ul.dessert');
                                    break;
                            };
                            divToINsert.append(`<li>
                                <div class="row">
                                    <div class="col">
                                        @if(is_null($salad->image))
                                        <img class="item-img" src="{{ URL::to('/assets/img/${group}.jpeg') }}" alt=${group}>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <h4 class="title">${title}</h4>
                                        <p>${description}</p>
                                    </div>
                                    <div class="col price">${price}</div>
                                <div>
                            </li>`)} else {
                               const validationMessages = Object.values(msg['message']);
                               for (const [key, value] of Object.entries(msg['message'])) {
                                $(`#${key}`).after(`<b class="invalid-feedback" style="display:block">${value}</b>`);
                                }
                        }
                    }
                });
                event.preventDefault();
        })
    })
   </script>
@endsection

