<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/submit_button.css') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body style="margin-bottom: 100px;">
        <div id="app">
            <main class="py-4">

                <header class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-auto">
                            <img src="{{ asset('logo/logo.png') }}" id="logo_IM">
                        </div>
                    </div>
                    <hr class="medium">
                </header>

                @yield('content')

                <footer class="footer" style="height: 100px;">
                    <div class="container">
                        <hr class="large">
                        <h6 class="py-3">© 2017 Yayasan Indonesia Mengajar. Some Rights Reserved.</h6>
                    </div>
                </footer>

            </main>
        </div>
    </body>
</html>