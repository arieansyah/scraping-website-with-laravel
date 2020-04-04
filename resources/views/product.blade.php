<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Fabelio</title>


    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="shortcut icon" href="https://m2fabelio.imgix.net/favicon/stores/1/128x128px.png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-theme.css') }}" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top headroom">
        <div class="container">
            <div class="navbar-header">
                <!-- Button for smallest screens -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a class="navbar-brand" href="index.html">
                    Fabelio
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="about.html">All Product</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <!-- Header -->
    <header id="head" class="secondary"></header>
    <!-- /Header -->

    <div class="jumbotron top-space">
        <div class="container">
            <h3 class="text-center thin">Product</h3>
            <div class="row">
                @foreach ($data as $item)
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption">
                        <a href="{{ route('product.show', $item->id) }}">
                            <img src="{{ $item->image }}" width="500px">
                            <h4>{{ $item->title }}</h4>
                        </a>
                        <h5>{{ number_format($item->price, 0) }}</h5>
                    </div>
                </div>
                @endforeach
            </div> <!-- /row  -->
        </div>
    </div>

    <footer id="footer" class="top-space">
        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>+62 822 5031 4988<br>
                                <a href="mailto:#">arieansyahp.bun@gmail.com</a><br>
                            </p>
                        </div>
                    </div>
                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="simplenav">
                                <a href="{{ url('/') }}">Home</a> |
                                <a href="about.html">All Product</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 widget">
                        <div class="widget-body">
                            <p class="text-right">
                                Copyright &copy; 2020, Arieansyah. Designed by <a href="http://gettemplate.com/"
                                    rel="designer">gettemplate</a>
                            </p>
                        </div>
                    </div>

                </div> <!-- /row of widgets -->
            </div>
        </div>

    </footer>
    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.headroom.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
</body>

</html>
