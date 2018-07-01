<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  
  <script type="text/javascript">
    $(function(){
      $('.ui.dropdown').dropdown({ on: 'hover'});
    });
  </script>

</head>


<body>

<br><br><br>
<a  href="{{ route('user-index') }}">
  <div class="ui container" name="header">
    <h1>ATM Banking System</h1>
  </div>
</a>

<br>
<br>
<br>

<div class="ui container" name="menu" style="background-color: lightblue; width: 90%;">

  {{-- My Account --}}
	<div class="ui secondary  menu">
		<a class="item" href="{{ route('user-index') }}">
		  <i class="fa fa-address-book"></i>
      &nbsp;&nbsp;My Account
    </a>

    {{-- Cash operations --}}
    <a class="ui dropdown item">
        <i class="fa fa-money"></i>
        &nbsp;&nbsp;Cash Operations
        <i class="dropdown icon"></i>
        <div class="menu">
              <div class="item"><i class="fa fa-arrow-circle-down"></i>&nbsp;&nbsp;Deposit</div>
              <div class="item"><i class="fa fa-arrow-circle-up"></i>&nbsp;&nbsp;Withdraw</div>
              <div class="item"><i class="fa fa-hourglass-2"></i>&nbsp;&nbsp;Time Deposit</div>
              <div class="item"><i class="fa fa-exchange"></i>&nbsp;&nbsp;Funds Transfer</div>
        </div>
    </a>

    {{-- transaction history --}}
    <a class="item" href="{{ route('user-logs') }}">
      <i class="fa fa-server"></i>
      &nbsp;&nbsp;Transaction History
    </a>

    {{-- Settings --}}
    <a class="item">
      <i class="fa fa-gear"></i>
      &nbsp;&nbsp;Settings
    </a>

    <div class="right menu">
      {{-- User Profile --}}
			<a class="ui item" href="{{ route('user-profile') }}">
			<i class="fa fa-user"></i>
			&nbsp;&nbsp;My Profile
      </a>
      
      {{-- Logout --}}
      <a class="ui item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
          <i class="fa fa-share-square-o"> {{ __('Logout') }} </i>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
			</a>
		</div>
	</div>
</div>

<br><br><br>

<main class="py-4">
    @yield('content')
</main>


<footer class="page-footer" style="background-color: lightblue;">
      <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="black-text">Footer Content</h5>
          <p class="black-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="black-text">Links</h5>
        <ul>
          <li><a class="black-text text-lighten-3" href="#!">Link 1</a></li>
          <li><a class="black-text text-lighten-3" href="#!">Link 2</a></li>
          <li><a class="black-text text-lighten-3" href="#!">Link 3</a></li>
          <li><a class="black-text text-lighten-3" href="#!">Link 4</a></li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="footer-copyright">
    <div class="black-text container">
      © 2014 Copyright Text
      <a class="black-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>




</body>
</html>
