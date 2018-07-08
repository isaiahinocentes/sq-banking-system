<!DOCTYPE html>
<html>
    <head>
        <title>ABS (Automated Banking System)</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.2/semantic.min.js"></script>
        {{-- Dropdown Script for Naviagtion --}}
        <script type="text/javascript">
            $('.ui.dropdown')
                .dropdown();

            $(function(){
                $('.ui.dropdown').dropdown({ on: 'hover'});
            });
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    </head>


    <body>

        <br>
        <br>
        <br>

        {{--Header--}}
        <a  href="{{ route('user-index') }}">
          <div class="ui container centered" name="header">
            <h1>ABS (Automated Banking System)</h1>
          </div>
        </a>

        <br/>

        <div class="ui container" name="menu" style="background-color: lightblue; width: 90%;">
            <div class="ui secondary  menu">

                {{-- My Account --}}
                <a class="item" href="{{ route('user-index') }}">
                  <i class="fa fa-address-book"></i> &nbsp;My Account
                </a>


                {{-- Cash operations --}}
                <a class="item ui simple dropdown">
                    <i class="fa fa-money"></i>
                    &nbsp;&nbsp;Cash Operations
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        {{-- deposit--}}
                        <div class="item" onclick="window.location='{{ route('user-deposit-form') }}';">
                          <i class="fa fa-arrow-circle-down" ></i>
                          &nbsp;&nbsp;Deposit
                        </div>

                        {{--withdraw--}}
                        <div class="item" onclick="window.location='{{ route('user-withdraw-form') }}';">
                          <i class="fa fa-arrow-circle-up"></i>
                          &nbsp;&nbsp;Withdraw
                        </div>

                        {{--time deposit--}}
                        <div class="item" onclick="window.location='{{ route('user-timedeposit-form') }}';">
                            <i class="fa fa-hourglass-2"></i>&nbsp;&nbsp;Time Deposit
                        </div>

                        {{--transfer--}}
                        <div class="item" onclick="window.location='{{ route('user-transfer-form') }}';">
                            <i class="fa fa-exchange"></i>&nbsp;&nbsp;Funds Transfer
                        </div>
                    </div>
                </a>

                {{-- transaction history --}}
                <a class="item" href="{{ route('user-logs') }}">
                  <i class="fa fa-server"></i>
                  &nbsp;&nbsp;Transaction History
                </a>

                {{--Right Menu--}}
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
