@extends('app')

@section('content')
 <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Villa Seebach</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">O nas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Usługi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontakt</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Najlepsza restauracja nad Baltykiem</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 mb-5">Jeśli nie wiesz gdzie dobrze zjeść w Boltenhagen, Villa Seebach jest miejscem dla Ciebie. Restauracja Villa stworzona została z pasji i zamiłowania do tradycji</p>
                    <a class="btn btn-primary btn-xl" href="#about">Dowiedz się więcej</a>
                </div>
            </div>
        </div>
    </header>
        <!-- About-->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Poznajmy się</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Mówią o nas, że Villa to      najlepsza    restauracja nad Baltykiem.
                        Serwujemy tradycyjne dania kuchni polskiej, ozdabiając klasykę w nowoczesność. Tworzymy trend na rodzinne weekendy z kuchnią regionalną i mielonego łączymy z kieliszkiem świetnego czerwonego wina. Chwalimy się smakiem najlepszej jakości produktów i codziennych specjalności szefa kuchni.. Villa to miejsce idealne na spotkania w rodzinnym gronie jak i romantyczne kolacje w intymnej atmosferze.</p>
                    <a class="btn btn-light btn-xl" href="#services">Przejdz dalej</a>
                </div>
            </div>
        </div>
    </section>
        <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Restauracja</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"> <a class="nav-servise" href="/menu"><i class="bi bi-book fs-1 text-primary"></i></a></div>
                        <h3 class="h4 mb-2">Menu</h3>
                        <p class="text-muted mb-0">Sprawdź nasze menu</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                    <div class="mb-2"> <a class="nav-servise" href="#"><i class="bi bi-truck fs-1 text-primary"></i></a></div>
                        <h3 class="h4 mb-2">Zamówienia</h3>
                        <p class="text-muted mb-0">Złóż zamówienie online z dostawą lub odbiorem osobistym</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                    <div class="mb-2"> <a class="nav-servise" href="#"><i class="bi bi-calendar2-check fs-1 text-primary"></i></a></div>
                        <h3 class="h4 mb-2">Rezerwacja</h3>
                        <p class="text-muted mb-0">Zarezewuj stolik i wybierz dania online</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                    <div class="mb-2"> <a class="nav-servise" href="#"><i class="bi bi-flower1 fs-1 text-primary"></i></a></div>
                        <h3 class="h4 mb-2">Imprezy</h3>
                        <p class="text-muted mb-0">Organizacja imprez okolicznościowych</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg" title="Restauracja">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Restauracja</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Duża sala">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/2.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Duża sala</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Nasze dania">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Nasze dania</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Mała sala">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Mała sala</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Nasza zaloga">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="..." />
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Nasza zaloga</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Hotel">
                        <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="..." />
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Villa Seebach</div>
                            <div class="project-name">Hotel</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <!-- <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section> -->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Skontaktuj się z nami</h2>
                    <hr class="divider" />
                    <p class="text-muted mb-5">Masz pytania? Napisz do nas używając poniższego formularza kontaktowego. Czekamy na Twoją wiadomość. Na zadane pytanie odpowiemy najszybciej, jak to będzie możliwe.</p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Imie i Nazwisko</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Wpisz swoje imię.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email </label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">Wpisz swój email.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Wpisz poprawny email.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Numer telefonu</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Wpisz swój numer telefonu.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Wiadomość</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Napisz wiadomość.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Wiadomość wysłana!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Coś poszło nie tak. Wiadomość nie została wysłana</div></div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Wyślij</button></div>
                    </form>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-4 text-center mb-5 mb-lg-0">
                    <i class="bi-phone fs-2 mb-3 text-muted"></i>
                    <div>+1 (555) 123-4567</div>
                </div>
            </div>
        </div>
    </section>

        <!-- Core theme JS-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection
