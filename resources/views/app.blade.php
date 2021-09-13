<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{{ Session::token() }}}">
        <title>Villa Seebach</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
    <script src="js/jquery.js"></script>
    <div id="myModal" class="modal-login">
    <!-- Modal content -->
        <div class="modal-content-login">
            
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control login" type="text" id="login"/>
                    <label for="login">Login</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control login" type="password" id="password"/>
                    <label for="password">Password</label>
                </div>
                <div class="d-grid"><button class="btn btn-primary btn-sm sendLoginForm" type="submit">Zaloguj</button>
                </div>
            </form>
        </div>
    </div>
        @yield('content')
            
    <script src="js/scripts.js"></script>
     <!-- Bootstrap core JS-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>

        <script>
            $("body").bind("ajaxSend", function(elm, xhr, s){
            if (s.type == "POST") {
                xhr.setRequestHeader('X-CSRF-Token', getCSRFTokenValue());
            }
            });

            var modal = $('.modal-login');

            $(document).on('click.loginBtn','.loginBtn', function(){
            modal.css('display', 'block');
            });

            $(document).on('click.close-login', '.close-login', function(){
                modal.css('display', 'none');
            });

            $(document).on('click', function(event){
               if(event.target == modal[0]){
                modal.css('display', 'none');
               };
            }); 

            $(document).on('input.login', function(){
               if (event.target.value != 0) {
                $(event.target).next().css('display', 'none');
               } else {
                $(event.target).next().css('display', 'block');
               };
            });

            $(document).on('click.sendLoginForm', '.sendLoginForm', function(e){
                e.preventDefault();
                const login = $('#login').val();
                const password = $('#password').val();
                let formData = new FormData();
                formData.append('login', login);
                formData.append('password', password);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: 'login',
                    data: formData,
                    cache: false,
                    dataType: "JSON",
                    processData: false,
                    contentType: false,
                    success: function(msg) {
                        if(msg['success'] == 'true'){
                            console.log('zalogowano');
                            location.reload()
                        } else {
                            const error = msg['message'];
                            $(e.target).parent('div').append(`<div style="color:red">${error}</div>`);
                        };
                    }
                });
            });
        </script>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5">
                <div class="small text-center text-muted">Copyright &copy; 2021 - Julia Abuziarova</div>
            </div>
        </footer>
       
    </body>
</html>
