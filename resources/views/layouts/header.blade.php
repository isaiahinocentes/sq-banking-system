<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


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


	<div class="ui secondary  menu">
		<a class="item" href="{{ route('user-index') }}">
		  Dashboard 
		</a>
		<a class="item" href="{{ route('user-transfer') }}">
	  	Funds Transfer
		</a>
		<a class="item" href="{{ route('user-logs') }}">
  		Transaction History
    </a>
    
		<div class="right menu">
			<a class="ui item" href="{{ route('user-profile') }}">
			  My Profile
      </a>

      <div class="right menu" >
          <a class="ui item" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </div>
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
