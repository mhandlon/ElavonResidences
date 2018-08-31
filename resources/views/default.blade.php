<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Elavon Residences</title>
    <meta name="description" content="The art of New York living.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- link rel="stylesheet" href="css/normalize.css"-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/ev.css">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Elavon Residences</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">FLOOR PLANS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">AMENITIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">RESIDENTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">CONTACT US</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid">
    <img class="w-100" src="img/header-banner.jpg" />
</div>

<div class="container-fluid" style="padding-top: 50px;">
    <img class="center" src="img/elavon-logo.png" />
</div>

<div class="container-fluid" style="padding-top: 100px;">
    <p>Elavon luxury residences in New York offer stunning finishes, upscale amenities and two rooftop decks with breathtaking views of Manhattan and downtown New York. These residences rentals were designed with your lifestyle as top priority including Predictive Service and 24-hour concierge to meet your needs.</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <p>Gracefully adoring the famous downtown skyline, the luxury residences rentals at Elavon are conveniently located in the South Loop neighborhood, just steps from New York’s public transportation and near the downtown upscale shopping, dining and entertainment you love. Contact us today to learn more about Elavon Residences and the distinct way of life offered.</p>
            <img class="w-75 center" src="img/skyscraper-down-view.jpg" />
        </div>
        <div class="col-sm">
            <img class="w-75 center" src="img/ny-night-view.jpg" />
            <p style="margin-top: 25px;">Yes, you can make Elavon Residences your new home! Simply make an appointment to see one of our professional leasing agents and let them help you find the perfect residence to meet your specific needs. Just fill out the form below and one of our leasing agents will contact you promptly.</p>
        </div>
    </div>
</div>

<div class="container-fluid"  style="margin-top: 50px; margin-bottom: 100px;">
    <div class="w-60 align-self-center center text-center">
        @if(Session::has('message'))
            <p style="margin: auto; margin-bottom: 10px;" class="w-75 alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <form action="{{ action('ContactController@post') }}" method="post">
            {{ csrf_field() }}
            <input class="w-45 form-control float-left" type="text" id="first-name" name="first-name" placeholder="first name"  pattern="[A-Za-z\s]+" minlength="1" required />
            <input class="w-45 form-control float-left" type="text" id="last-name" name="last-name" placeholder="last name"  pattern="[A-Za-z\s]+" minlength="1" required />
            <div class="clearfix"></div>
            <input class="w-45 form-control float-left" type="text" id="email" name="email" placeholder="email" minlength="1" required />
            <input class="w-45 form-control float-left" type="text" id="phone" name="phone" placeholder="phone number" minlength="1" required />
            <input class="w-91 form-control float-left" type="text" id="subject" name="subject" placeholder="subject" minlength="1" required />
            <textarea class="w-91 form-control float-left" id="message" name="message"  rows="3" cols="33" maxlength="200" wrap="hard"></textarea>
            <input class="btn btn-primary" type="submit" value="Contact Us">
        </form>
    </div>
</div>

<div class="fixed-bottom">
    <p style="float: right; margin-right: 15px;">
        8888 Cummings Vista Apt. 101, Manhattan, NY 95473<br />
        (512) 232-1111
    </p>
</div>

<script src="{{ asset('js/app.js') }}"></script>
<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>