<!DOCTYPE html>
<html>
    <head>
      @yield('tittle')
        <meta charset = "UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    </head>
    <body>

    	<header >
    	</header>

        @yield('content')

        <footer class="page-footer cyan accent-3">
          

          <div class="footer-copyright">
              <div class="container">
                  © 2016 -Avalos Contreras Candelario
              </div>
          </div>

        </footer>

        <script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>

    </body>
</html>