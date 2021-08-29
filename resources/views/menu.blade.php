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
                     <input type="hidden" class="id" value="{{$soup->id}}">
                    <div class="col-md-2">
                        @if(!is_null($soup->image))
                            <img class="item-img" src="{{ asset('storage/'.$soup->image) }}" alt="soup">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="title">{{$soup->title}}</h4>
                        <p>{{$soup->description}}</p>
                    </div>
                    <div class="col-md-2 price">{{$soup->price}}</div>
                    <div class="col-md-2">
                        <a class="edit" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </div>
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
                    <input type="hidden" class="id" value="{{$dish->id}}">
                    <div class="col-md-2">
                    @if(!is_null($dish->image))
                        <img class="item-img" src="{{ asset('storage/'.$dish->image) }}" alt="mainDish">
                    @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="title">{{$dish->title}}</h4>
                        <p>{{$dish->description}}</p>
                    </div>
                    <div class="col-md-2 price">{{$dish->price}}</div>
                    <div class="col-md-2">
                        <a class="edit" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </div>
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
                    <input type="hidden" class="id" value="{{$salad->id}}">
                    <div class="col-md-2">
                    @if(!is_null($salad->image))
                        <img class="item-img" src="{{ asset('storage/'.$salad->image) }}" alt="salad">
                    @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="title">{{$salad->title}}</h4>
                        <p>{{$salad->description}}</p>
                    </div>
                    <div class="col-md-2 price">{{$salad->price}}</div>
                    <div class="col-md-2">
                        <a class="edit" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </div>
                <div>
             </li>
            @endforeach
            </ul>
        </div>
    </section>
    <section id="dessert">
        <div class="menuDetails">
            <h1 class="title">Desery:</h1>
            <ul class="dessert">
            @foreach($desserts as $dessert)
             <li>
                 <div class="row">
                    <input type="hidden" class="id" value="{{$dessert->id}}">
                    <div class="col-md-2">
                        @if(!is_null($dessert->image))
                        <img class="item-img" src="{{ asset('storage/'.$dessert->image) }}" alt="deser">
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="title">{{$dessert->title}}</h4>
                        <p>{{$dessert->description}}</p>
                    </div>
                    <div class="col-md-2 price">{{$dessert->price}}</div>
                    <div class="col-md-2">
                        <a class="edit" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </div>
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
    $(document).off('click.addingbtn');
    $(document).on('click.addingbtn', '.addingbtn', function(){
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
                                <option value="" >Wybierz...</option>
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
                        <div class="form-floating mb-3">
                            <input class="form-control" id="image" name="image" type="file" />
                            
                        </div>
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Danie zostało dodane!</div>
                            </div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-xl submitbtn" type="submit" id="add-menu" >Dodaj</button></div>
                    </form>`);
    })

    $(document).off('click.submitbtn');
    $(document).on('click.submitbtn', '.submitbtn', function(){
        event.preventDefault();
        let title = $("#title").val();
        let price = $("#price").val();
        let description = $("#description").val();
        let group = $("#group").val();
        let image = document.querySelector("#image").files[0];
        let formData = new FormData();
        formData.append('image', image);
        formData.append('title', title);
        formData.append('price', price);
        formData.append('description', description);
        formData.append('group', group);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                type: "POST",
                url: 'menu/add',
                data: formData,
                cache: false,
                dataType: "JSON",
                processData: false,
                contentType: false,
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
                                    <img class="item-img" src="{{ URL::to('/assets/img/${group}.jpeg') }}" alt=${group}>
                                </div>
                                <div class="col-6">
                                    <h4 class="title">${title}</h4>
                                    <p>${description}</p>
                                </div>
                                <div class="col price">${price}</div>
                            <div>
                        </li>`)
                    $('#addMenuForm').remove(); 
                    $(".adding").append(' <a id="add" class="btn btn-primary btn-xl addingbtn" >Dodaj</a>')   
                    } else {
                            for (const [key, value] of Object.entries(msg['message'])) {
                            $(`#${key}`).after(`<b class="invalid-feedback" style="display:block">${value}</b>`);
                            }
                    }
                }
        });
    })

    $(document).off('click.edit');
    $(document).on('click.edit', ".edit", function(){
        event.preventDefault();
        if($("form#editForm").val() == undefined){
        const row = $(event.target).parents('.row');
        const id = row.find("input.id").val();
        const title = row.find("h4.title")[0].innerHTML;
        const description = row.find("p")[0].innerHTML;
        const price = row.find("div.price")[0].innerHTML;
        console.log(price);
        var group = row.parents('ul').attr('class');
        row.replaceWith(`<form id="editForm" method="POST" action="{{ route('menu.update') }}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <input name="id" type="hidden" value="${id}">
            <div class="row">
                <div class="col-md-2">
                    <div class="editMenu">
                        <label for="img">plik.jpg</label>
                    </div>
                    <div class="editMenu">
                        <input class="form-control" id="img" name="img" type="file" />
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="editMenu">
                        <input class="form-control" id="title" name="title" type="text" value="${title}" />
                    </div>
                    <div class="editMenu">
                        <textarea class="form-control" name="description"  style=" height: 100px;">${description}</textarea>
                    </div>
                </div> 
                <div class="col-md-2">
                <div class="editMenu">
                    <input type="number" name="price" class="form-control" min="0" step="0.1" value="${price}">
                </div> 
                <div class="editMenu">
                    <select class="form-control" name="group" id="">
                                <option value="soup" >Zupa</option>
                                <option value="mainDish">Danie główne</option>
                                <option value="salad" >Sałatka</option>
                                <option value="dessert">Desert</option>
                    </select>
                </div> 
                <div class="editMenu">
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit" " >Zapisz</button>
                    </div> 
                </div>
                </div>
            </div>
        </form>`);
        $("div.editMenu select").val(group);
        }else{
            if($("b.errorSendForm").val() == undefined){
                $("form#editForm").after(`<b class="errorSendForm" style="color:red">Zatwierdź zmiany</b>`);
            }
            location.href = "#editForm";
        }
    })
   </script>
  
     
@endsection

