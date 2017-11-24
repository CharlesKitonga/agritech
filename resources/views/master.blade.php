<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Agritech</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="Footer-with-button-logo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style>
         body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family:;
                background: white;
            }
            .spacer {
            margin-bottom: 100px;
        }
        .cart-image {
            width: 100px;
        }
        footer {
            background-color: #077713;
            padding: 20px 0;
            color:black;
        }
        .table>tbody>tr>td {
            vertical-align: middle;
        }
        .side-by-side {
            display: inline-block;
        }
    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-default navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="{{ url('/') }}"><font face = "Comic sans MS" color = "#010101" size="6"><b><u>HarmA</font></u><font color="#077713" face = "Comic sans MS" size="6" >Fash</b></font></a>
            </div>
                <form action="" methode = "post" class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/') }}" title = "Go back to the home page"><font color="#077713">Home</font></a>
                <li class="{{ set_active('wishlist') }}"><a href="{{ url('/wishlist') }}"><font color="#077713">Wishlist ({{ Cart::instance('wishlist')->count(false) }})</font></a></li>
                <li class="{{ set_active('cart') }}"><a href="{{ url('/cart') }}"><font color="#077713">Cart ({{ Cart::instance('default')->count(false) }})</font></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

    </header>

    @yield('content')

<hr/>
<footer >
<div id= "footer1">
    <div class= "container">
        <div class="footer">
            <div class="row">           
                <div class="col-sm-3">
                    <br/><br/>
                    <a class="navbar-brand" href="{{ url('#') }}" title="You are on the Home page">
                    <font face = "Comic sans MS" color = "#010101" size="20"><i><u>HarmA</u></i></font>
                    <font face = "Comic sans MS" color="white" size="20"><i>Fash</i></font></a>
                </div>
                                                    
                
                    
                <div class="col-xs-6 col-md-3" >
                    <h2><span></span> Links</h2>
                    <span><a href="{{ url('/') }}">Home</a></span><br />
                    <span><a href="#">About</a></span><br />
                    <span><a href="#">Services</a></span><br />
                    <span><a href="contact.php">Contact</a></span><br />
                    <span><a href="{{ route('register') }}">Create an account</a></span><br />
                </div>
                    
                <div class="col-xs-12 col-md-3" >
                    <div class="social-networks">
                        <h2><span>Contact</span> Us</h2>
                        <p> <span>Address:</span>Kenya/ Nairobi(Strathmore University)<br/>
                            <span>Telephone:</span> +254 000 000 000<br />
                            <span>Telephone:</span> +254 111 222 222<br />
                            <span>FAX:</span> +254-4544<br />
                            <span>Others:</span> +254 777 888 999<br />
                            <span>E-mail:</span> <a href="https://www.gmail.com">charleskyalo006@@gmail.com</a> 
                        </p>

                        <ul class="list-inline social-buttons" >
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <li><a  href="https://www.facebook.com/Harmel Ngongo" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
                            <li><a href="https://www.gmail.com" target="_blank" class="google"><i class="fa fa-google-plus"></i></a>
                            <li><a href="https://www.instagram.com/harmelngongo" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>
                            <li><a href="#" class="github"><i class="fa fa-github"></i></a>
                            <li><a href="#" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>
<!-- Footer of copyright-->
<table bgcolor="black" width="100%" height="20px">
    <tr>
        <td bgcolor="black">
            <div class= "container"><br/>
                <div class="col-md-4">
                    <font color="white"><p>Copyright &copy; HarmaFash-Alright Reserved</p></font>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    <p><span><font color="white">Design by<a href="https://www.gmail.com" target="_blank"> charleskyalo006@gmail.com</a></font></span>
                    <font size = "2" class= "pull-right" color="white"> +254 717 716 291</font></p>
                </div>
            </div>
        </td>
    </td>
</table>
<!--End Footer-->

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>