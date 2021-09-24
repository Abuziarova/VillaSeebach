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

    <header class="masthead orders">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white font-weight-bold">Zamówienia</h1>
                    <hr class="divider" />
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-10 mx-auto">
                <div class="card">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li role="presentation">
                            <div class="nav-link navigate" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking"
                                role="tab" aria-controls="booking" aria-selected="true">Rezerwacja stolika</div>
                        </li>
                        <li role="presentation">
                            <div class="nav-link navigate active" id="order-tab" data-bs-toggle="tab"
                                data-bs-target="#order" role="tab" aria-controls="profile" aria-selected="false">Zamówienia
                            </div>
                        </li>
                    </ul>
                    <form id="order-form" action="{{ route('order.save') }}" method="POST" enctype="multipart/form-data">
                        <div class="tab-content " id="myTabContent">
                            <div class="tab-pane fade  " id="booking" role="tabpanel" aria-labelledby="booking-tab">
                                <div class="row">
                                    <div class="form-floating mb-3 col-lg-3 nameBox">
                                        <input class="form-control" name="name" id="name" type="text" />
                                        <label class="booking" for="name">Imię i Nazwisko</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-3">
                                        <input class="form-control" name="date" id="date" type="date"
                                            value="{{ $today }}" min="{{ $today }}" />
                                        <label class="booking" for="date">Data</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-3 countOfPeople">
                                        <select class="form-control" name="countOfPeople" id="countOfPeople">
                                            <option value="">Wybierz...</option>
                                            <option value="1">1 osoba</option>
                                            <option value="2">2 osoby</option>
                                            <option value="3">3 osoby</option>
                                            <option value="4">4 osoby</option>
                                            <option value="5">5 osób</option>
                                            <option value="6">6 osób</option>
                                            <option value="7">7 osób</option>
                                            <option value="8">8 osób</option>
                                        </select>
                                        <label class="booking" for="countOfPeople">Ilość osób</label>
                                    </div>
                                    <div class="form-floating mb-3 col-lg-3 phone">
                                        <input class="form-control" name="phone" id="phone" type="tel" />
                                        <label class="booking" for="phone">Telefon kotaktowy</label>
                                    </div>
                                    <div class="mw-100 times-box">
                                        @foreach ($times as $i => $time)
                                            <label class="btn btn-primary radio-inline-time" for="{{ $time }}"
                                                {{ $i == 0 ? 'style=background-color:#80e5ff;color:white' : '' }}>
                                                <input type="radio" class="btn-check " name="time"
                                                    id="{{ $time }}" value="{{ $time }}"
                                                    {{ $i == 0 ? 'checked=true' : '' }}>
                                                {{ $time }}
                                            </label>
                                        @endforeach
                                    </div>
                                    <div style="display:flex; justify-content:center" class="submitBtn">
                                        <button class="btn btn-primary btn-xs booking-save" style="border-radius:15px"
                                            type="button">Zarezerwuj</button>
                                    </div>
                                    <div class=" mb-3 col-lg-3 ">
                                        <div class="form-check">
                                            <input class="form-check-input" name="addOrder" id="addOrder" type="checkbox">
                                            Dołączyć zamówienie do rezerwacji
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade active show" id="order" role="tabpanel" aria-labelledby="order-tab">

                                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                <div style="margin:10px; text-align: center;" id="payment">

                                    <label class="radio-inline ">
                                        <div class="payment">
                                            <input type="radio" name="payment" value="cache">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                                <path
                                                    d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z" />
                                                <path
                                                    d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z" />
                                                <path
                                                    d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z" />
                                            </svg> Gotówka
                                        </div>
                                    </label>

                                    <label class="radio-inline ">
                                        <div class="payment">
                                            <input type="radio" name="payment" value="card">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z" />
                                                <path
                                                    d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z" />
                                            </svg>
                                            Karta
                                        </div>
                                    </label>
                                    <div class="payment-error">
                                    </div>
                                    <div style="margin: 15px">
                                        <img class="" style=" width:30px"
                                            src="{{ URL::to('/assets/img/shopping-cart.png') }}">
                                        <span>Do zapłaty: <span class="total"> 0 </span> zł</span>
                                    </div>
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-soups-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-soups" type="button" role="tab"
                                                aria-controls="pills-soups" aria-selected="true">Zupy</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-mainDishes-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-mainDishes" type="button" role="tab"
                                                aria-controls="pills-mainDishes" aria-selected="false">Dania główne</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-salads-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-salads" type="button" role="tab"
                                                aria-controls="pills-salads" aria-selected="false">Sałatki</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-desserts-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-desserts" type="button" role="tab"
                                                aria-controls="pills-desserts" aria-selected="false">Desery</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-soups" role="tabpanel"
                                            aria-labelledby="pills-soups-tab">
                                            @foreach ($soups as $soup)
                                                <div class="row" style="padding:15px">
                                                    <div class="col-md-9">
                                                        <p>{{ $soup->title }}</p>
                                                        <input name="{{ $soup->id }}" class="count"
                                                            type="text" readonly="readonly">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="price">{{ $soup->price }} zł</div>
                                                        <div>
                                                            <button type="button" class="count_button add_count">+</button>
                                                            <button type="button"
                                                                class="count_button remove_count">-</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="pills-mainDishes" role="tabpanel"
                                            aria-labelledby="pills-mainDishes-tab">
                                            @foreach ($mainDishes as $md)
                                                <div class="row" style="padding:15px">
                                                    <div class="col-md-9">
                                                        <p>{{ $md->title }}</p>
                                                        <input name="{{ $md->id }}" class="count"
                                                            type="text" readonly="readonly">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="price">{{ $md->price }} zł</div>
                                                        <div>
                                                            <button type="button" class="count_button add_count">+</button>
                                                            <button type="button"
                                                                class="count_button remove_count">-</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="pills-salads" role="tabpanel"
                                            aria-labelledby="pills-salads-tab">
                                            @foreach ($salads as $salad)
                                                <div class="row" style="padding:15px">
                                                    <div class="col-md-9">
                                                        <p>{{ $salad->title }}</p>
                                                        <input name="{{ $salad->id }}" class="count"
                                                            type="text" readonly="readonly">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="price">{{ $salad->price }} zł</div>
                                                        <div>
                                                            <button type="button" class="count_button add_count">+</button>
                                                            <button type="button"
                                                                class="count_button remove_count">-</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="pills-desserts" role="tabpanel"
                                            aria-labelledby="pills-desserts-tab">
                                            @foreach ($desserts as $dessert)
                                                <div class="row" style="padding:15px">
                                                    <div class="col-md-9">
                                                        <p>{{ $dessert->title }}</p>
                                                        <input name="{{ $dessert->id }}" class="count"
                                                            type="text" readonly="readonly">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="price">{{ $dessert->price }} zł</div>
                                                        <div>
                                                            <button type="button" class="count_button add_count">+</button>
                                                            <button type="button"
                                                                class="count_button remove_count">-</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div style="display:flex; justify-content:center" class="submitBtn">
                                        <button class="btn btn-primary btn-xs" style="border-radius:15px" type="submit">Złoż
                                            zamówienie</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>


        <script>
            let name;
            let countOfPeople;
            let phone;

            window.onload = function() {
                var reloading = sessionStorage.getItem("reloading");
                if (reloading) {
                    $('#booking').prepend(`<div style="color:#80e5ff; margin:10px">${reloading}</div>`);
                    sessionStorage.removeItem("reloading");
                }
            }

            $('[data-bs-toggle="tab"]').on('shown.bs.tab', function(e) {
                $('h1').text() == 'Zamówienia' ? $('h1').text('Rezerwacja stolika') : $('h1').text('Zamówienia');
            });

            var booking = '{{ $booking }}';
            if (booking == 'booking') {
                $('.navigate').removeClass('active');
                $('#order').removeClass('active show');
                $('#booking-tab').addClass('active');
                $('#booking').addClass('active show');
                $('h1').text('Rezerwacja stolika');
            };

            $('.count_button').click(function() {
                $total = parseFloat($('.total').text());
                $count = $(event.target).parent("div").parent("div").prev().find('.count');
                $price = parseFloat($(event.target).parent("div").prev().text().split(' ')[0]);
                if ($(event.target).hasClass("add_count")) {
                    if ($count.val().length == 0) {
                        $count.val('1');
                    } else {
                        $num = parseInt($count.val()) + 1;
                        $count.val($num);
                    }
                    $total = Math.round(($total + $price) * 100) / 100;
                    $('.total').html($total);
                } else {
                    $num = parseInt($count.val()) - 1;
                    if ($num == 0 || isNaN($num)) {
                        $count.val('');
                    } else {
                        $count.val($num);
                    }
                    if (!isNaN($num)) {
                        $total = Math.round(($total - $price) * 100) / 100;
                        $('.total').html($total);
                    }
                }
            });

            $('#order-form').submit(function(e) {
                if ($('.total').text() == 0) {
                    $('.payment-error').append(
                        `<span class="errors" style="color:red; padding:15px">Wybierz conajmniej jeden produkt</span>`
                    );
                    location.href = '#myTab';
                    return false;
                } else if (!$("input[name='payment']:checked").val()) {
                    $('.errors').remove();
                    $('.payment-error').append(`
                    <span class="errors" style="color:red; padding:15px">Wybierz metodę płatności</span>
                    `);
                    location.href = '#myTab';

                    return false;
                }
            });


            $('body').on('click', '.btn-check', function() {
                console.log('funkcja');
                $('.btn-check').attr('checked', false);
                $('.radio-inline-time').css({
                    'background-color': 'white',
                    'color': '#80e5ff',
                })
                var label = $("label[for='" + $(this).attr('id') + "']");
                label.css({
                    'background-color': '#80e5ff',
                    'color': 'white'
                });
                $(event.target).attr('checked', true);
            });

            $('.booking-save').click(function() {
                event.preventDefault();
                if (validateBooking()) {
                    const date = $('#date').val();
                    const time = $('input[name=time]:checked').val();
                    let formData = new FormData();
                    formData.append('name', name);
                    formData.append('date', date);
                    formData.append('countOfPeople', countOfPeople);
                    formData.append('phone', phone);
                    formData.append('time', time);
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: '/booking/add',
                        data: formData,
                        cache: false,
                        dataType: "JSON",
                        processData: false,
                        contentType: false,
                        success: function(msg) {
                            const message = msg['message'];
                            if (msg['success']) {
                                sessionStorage.setItem("reloading", message);
                                location.reload();
                            }
                        }
                    })

                }
            })

            $('.form-check').click(function() {
                if ($('.form-check-input').is(":checked")) {
                    if (validateBooking()) {
                        $('.booking-save').css('display', 'none');
                        setTimeout(function() {
                            $('.navigate').addClass('active');
                            $('#order').addClass('active show');
                            $('#booking-tab').removeClass('active');
                            $('#booking').removeClass('active show');
                            $('h1').text('Zamówienia');
                            location.href = '#myTab';
                        }, 1500);
                    } else {
                        $('.form-check-input').prop('checked', false);;
                    }

                } else {
                    $('.booking-save').css('display', 'block');
                }
            })

            const validateBooking = () => {
                $('.invalid-feedback').remove();
                name = $('#name').val();
                if (name == "") {
                    $('.nameBox').append(
                        `<b class="invalid-feedback" style="display:block"> Wpisz swoje imię i Nazwisko</b>`);
                } else {
                    if (name.length < 3) {
                        $('.nameBox').append(
                            `<b class="invalid-feedback" style="display:block"> Pole musi zawierać conajmniej 3 znaki</b>`
                        );
                    } else {
                        countOfPeople = $('#countOfPeople').val();
                        if (countOfPeople == "") {
                            $('.countOfPeople').append(
                                `<b class="invalid-feedback" style="display:block"> Wybierz ilość osób </b>`);
                        } else {
                            phone = $('#phone').val().replace(/ /g, '');

                            if (!(phone.length > 6 && phone.length < 11 && /^\d*$/.test(phone))) {
                                $('.phone').append(`<b class="invalid-feedback" style="display:block">Zły format</b>`);

                            } else {
                                return true;
                            }
                        }
                    };
                }
            }

            $('#date').change(function() {
                const day = $(this).val();
                let formData = new FormData();
                formData.append('day', day);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: '/daychange',
                    cache: false,
                    data: formData,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    success: function(msg) {
                        if (msg['success']) {
                            $('.radio-inline-time').remove();
                            const newtimes = msg['times'];

                            $.each(newtimes, function(i, time) {
                                $('.times-box').append(
                                    ' <label class="btn btn-primary radio-inline-time" for="' +
                                    time +
                                    '"' +
                                    (i == 0 ? ' style=background-color:#80e5ff;color:white' :
                                        '') +
                                    '><input type="radio" class="btn-check " name="time"id="' +
                                    time + '" value="' + time + '" ' +
                                    (i == 0 ? 'checked=true' : '') +
                                    '>' +
                                    time +
                                    '</label>');


                            });

                        }
                    }
                })

            })
        </script>
    @endsection
