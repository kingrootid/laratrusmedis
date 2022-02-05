<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page. " ". $title }}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('login')}}/css/iofrm-theme16.css">
    <link rel="stylesheet" type="text/css" href="{{asset('sweetalert2.css')}}">
</head>

<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{asset('login')}}/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{asset('login')}}/images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form id="login" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button type="submit" class="ibtn">Login</button> <a href="forget16.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="page-links">
                            <a href="{{ url('auth/register') }}">Register new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('login')}}/js/jquery.min.js"></script>
    <script src="{{asset('login')}}/js/popper.min.js"></script>
    <script src="{{asset('login')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('login')}}/js/main.js"></script>
    <script src="{{asset('axios.js')}}"></script>
    <script src="{{asset('sweetalert2.all.js')}}"></script>
    <script>
        $("#login").submit(function(e) {
            e.preventDefault();
            var form = new FormData(this);
            axios.post("{{ url('/api/login') }}", form).then(function(response) {
                if (response.data.success == true) {
                    setTimeout(function() {
                        swal.fire({
                            text: response.data.message,
                            icon: 'success',
                            buttonsStyling: false,
                            confirmButtonText: 'Ok, got it!',
                            customClass: {
                                confirmButton: 'btn font-weight-bold btn-primary',
                            },
                        }).then(function() {
                            window.location.href = "{{ url('/') }}";
                        });
                    }, 200);
                } else {
                    setTimeout(function() {
                        swal.fire({
                            text: response.data.message,
                            icon: 'error',
                            buttonsStyling: false,
                            confirmButtonText: 'Ok, got it!',
                            customClass: {
                                confirmButton: 'btn font-weight-bold btn-primary',
                            },
                        })
                    }, 200);
                }
            }).catch(function(error) {
                setTimeout(function() {
                    swal.fire({
                        html: error.response.data.message,
                        title: 'Something went wrong!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn font-weight-bold btn-primary',
                        },
                    });
                }, 200);
            });
        });
    </script>
</body>


</html>