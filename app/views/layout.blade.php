<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>test3</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/style.css') }}


  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Test3</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>{{ HTML::link('index', 'Index', array(), true)}}</li>
            <li>{{ HTML::link('show', 'Show', array(), true)}}</li>
            <li>{{ HTML::link('edit', 'Edit', array(), true)}}</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action-->
    <div class="jumbotron">
      <div class="container">
        <h2>Test 3 App</h2>
        <p>This is an app for testing</p>
      </div>
    </div>

    <div class="myContainer">
    @yield('content')
    </div>

    <div class="jumbotron">
      <div class="container">
        <h4>Date and Time</h4>
        <p>Today is {{ date('Y-m-d') }}</p>
        <p>Time is {{ date("h:i:sa") }}</p>
      </div>
    </div>

    <div class="container">
      <footer>
        <p>&copy; Yoda Technology Ltd 2014</p>
      </footer>
      </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript -->
    {{ HTML::script('js/jquery-1.11.1.min.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </body>
</html>
