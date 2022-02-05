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
                        <h3>Register new account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form id="register" method="POST">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <textarea class="form-control" name="address" placeholder="Address" required></textarea>
                            <input class="form-control" type="date" name="dob" placeholder="Date of Birth" required>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="MALE" id="gender1" checked>
                                <label class="form-check-label" for="gender1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="FEMALE" id="gender2">
                                <label class="form-check-label" for="gender2">
                                    Female
                                </label>
                            </div>
                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input class="form-control" type="password" name="confirm_password" placeholder="Confirmation Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        <div class="page-links">
                            <a href="{{ url('auth/login') }}">Login to account</a>
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
        $("#register").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            axios.post("{{ url('api/register ') }}", formData).then(function(response) {
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
                            window.location.href = "{{ url('auth/login') }}";
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
                        text: 'Something went wrong!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn font-weight-bold btn-primary',
                        },
                    });
                }, 200);
            });
        })
    </script>
</body>

</html>