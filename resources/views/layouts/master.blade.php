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

    <header class="navbar navbar-default navbar-fixed-top topnav" role="banner">
        <div class="container topnav">
            <nav role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav  navbar-right">
                            <li><a href="/mysubscriptions">My Subscriptions</a></li>
                            <li><a href="/myhousehold">My Household</a></li>
                            <li><a href="/visit">Visit</a></li>
                            <li><a href="/groupfinder">Group Finder</a></li>
                            <li><a href="/eventfinder">Event Finder</a></li>
                            <li style="padding-top: 15px;"><mpp-user-login></mpp-user-login></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </header>

    <!-- Content -->
    <div class="container" style="margin-top: 80px;">
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
