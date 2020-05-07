<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>CSC206 Demo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet" />

    <script id="MPWidgets" src="https://connect.mygcc.org/widgets/dist/MPWidgets.js"></script>


</head>

<body>
    <!-- Content -->
    <div class="container top80">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer clearfix">
        <div class="container"> <span class="text-muted">All content copyright {{ date('Y') }}</span>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @yield('extraJS')

</body>

</html>
