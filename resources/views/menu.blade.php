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
                        <div class="mb-2 menu-nav"> <img class="menu-nav" src="{{ URL::to('/assets/img/soup.jpeg') }}"></div>
                        <h3 class="h4 mb-2">Zupy</h3>
                        <p class="text-muted mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia maiores voluptate nihil molestiae doloremque similique dolorem accusamus architecto dicta dignissimos odit delectus</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav"><img class="menu-nav" src="{{ URL::to('/assets/img/mainDish.jpeg') }}"></div>
                        <h3 class="h4 mb-2">Dania główne</h3>
                        <p class="text-muted mb-0">W karcie dań głównych znajdą Państwo: przekąski zimne, przekąski gorące, drób, ryby i mięsiwa. Nasze dania przygotowywane są codziennie ze świeżych produktów najwyższej jakości.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav"><img class="menu-nav" src="{{ URL::to('/assets/img/salad.jpeg') }}"></i></div>
                        <h3 class="h4 mb-2">Sałatki</h3>
                        <p class="text-muted mb-0">Zapoznaj się ze specjalnie przygotowanym menu sałatkowym. Serdecznie zapraszamy.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2 menu-nav "><img class="menu-nav" src="{{ URL::to('/assets/img/dessert.jpeg') }}"></div>
                        <h3 class="h4 mb-2">Desery</h3>
                        <p class="text-muted mb-0">Nasze desery to przede wszystkim wyśmienite puszyste torty biszkoptowe i bezowe, desery ze świeżymi owocami, sernik domowy, jabłecznik jak również przepyszne lody.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="soup">
    <h1>Zupy</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quam et obcaecati reiciendis nemo ab, sint vitae, in odio incidunt veritatis ratione blanditiis. Reprehenderit ea ducimus voluptatem nihil laborum consectetur nulla iure illo voluptatum. Iste voluptate quis, quod quo numquam sunt non. Officiis ad modi mollitia soluta fugiat sequi aliquam optio doloribus, autem quis suscipit, accusantium excepturi atque totam. Recusandae omnis alias, ratione autem veritatis maiores? Aliquam consequuntur animi facilis ratione commodi? In eos dolore ipsam dolor eum consectetur excepturi? Facilis, enim deleniti illo fugiat, fugit, libero doloribus architecto in officiis modi corrupti quibusdam aspernatur provident repudiandae ratione asperiores.</p>
    </section>

    <section id="main_dish">
    <h1>Dania główne</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quam et obcaecati reiciendis nemo ab, sint vitae, in odio incidunt veritatis ratione blanditiis. Reprehenderit ea ducimus voluptatem nihil laborum consectetur nulla iure illo voluptatum. Iste voluptate quis, quod quo numquam sunt non. Officiis ad modi mollitia soluta fugiat sequi aliquam optio doloribus, autem quis suscipit, accusantium excepturi atque totam. Recusandae omnis alias, ratione autem veritatis maiores? Aliquam consequuntur animi facilis ratione commodi? In eos dolore ipsam dolor eum consectetur excepturi? Facilis, enim deleniti illo fugiat, fugit, libero doloribus architecto in officiis modi corrupti quibusdam aspernatur provident repudiandae ratione asperiores.</p>
    </section>

    <section id="salad">
    <h1>Sałatki</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quam et obcaecati reiciendis nemo ab, sint vitae, in odio incidunt veritatis ratione blanditiis. Reprehenderit ea ducimus voluptatem nihil laborum consectetur nulla iure illo voluptatum. Iste voluptate quis, quod quo numquam sunt non. Officiis ad modi mollitia soluta fugiat sequi aliquam optio doloribus, autem quis suscipit, accusantium excepturi atque totam. Recusandae omnis alias, ratione autem veritatis maiores? Aliquam consequuntur animi facilis ratione commodi? In eos dolore ipsam dolor eum consectetur excepturi? Facilis, enim deleniti illo fugiat, fugit, libero doloribus architecto in officiis modi corrupti quibusdam aspernatur provident repudiandae ratione asperiores.</p>
    </section>

    <section id="dessert">
    <h1>Desery</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsam quam et obcaecati reiciendis nemo ab, sint vitae, in odio incidunt veritatis ratione blanditiis. Reprehenderit ea ducimus voluptatem nihil laborum consectetur nulla iure illo voluptatum. Iste voluptate quis, quod quo numquam sunt non. Officiis ad modi mollitia soluta fugiat sequi aliquam optio doloribus, autem quis suscipit, accusantium excepturi atque totam. Recusandae omnis alias, ratione autem veritatis maiores? Aliquam consequuntur animi facilis ratione commodi? In eos dolore ipsam dolor eum consectetur excepturi? Facilis, enim deleniti illo fugiat, fugit, libero doloribus architecto in officiis modi corrupti quibusdam aspernatur provident repudiandae ratione asperiores.</p>
   
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

