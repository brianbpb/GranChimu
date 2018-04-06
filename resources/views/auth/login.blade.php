<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::to('admin/css/bootstrap.css') }}" rel="stylesheet">
    <!--external css-->
    <link href="{{ URL::to('admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin/css/zabuto_calendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin/js/gritter/css/jquery.gritter.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('admin/lineicons/style.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ URL::to('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('admin/css/style-responsive.css') }}" rel="stylesheet">

    <script src="{{ URL::to('admin/js/chart-master/Chart.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->

<div id="login-page">
    <div class="container">
        <form class="form-login" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <h2 class="form-login-heading">Iniciar Sesion</h2>
            <div class="login-wrap">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="form-control" placeholder="Ingrese su correo" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                        @endif
                </div>
                {{--/*<div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                </div>*/--}}

                <div class="form-group">
                    <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="{{ route('password.request') }}#myModal"> Forgot Password?</a>
		                </span>
                    </label>
                    {{--/*
                        <div style="float: right;">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                    */--}}
                    <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i>
                        Login
                    </button>
                </div>
                <hr>
                {{--/*
                <div class="registration">
                    Don't have an account yet?<br/>
                    <a class="" href="{{route('register')}}">
                        Create an account
                    </a>
                </div>
                */--}}
            </div>
        </form>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <form class="form-login" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- modal -->
    </div>
</div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ URL::to('Admin/js/jquery.js') }}"></script>
    <script src="{{ URL::to('Admin/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ URL::to('Admin/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("{{ URL::to('Admin/img/login-bg.jpg') }}", {speed: 500});
    </script>

</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ URL::to('admin/js/jquery.js') }}"></script>
<script src="{{ URL::to('admin/js/jquery-1.8.3.min.js') }}"></script>
<script src="{{ URL::to('admin/js/bootstrap.min.js') }}"></script>
<script class="include" type="text/javascript" src="{{ URL::to('admin/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ URL::to('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ URL::to('admin/js/jquery.nicescroll.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('admin/js/jquery.sparkline.js') }}"></script>


<!--common script for all pages-->
<script src="{{ URL::to('admin/js/common-scripts.js') }}"></script>

<script type="text/javascript" src="{{ URL::to('admin/js/gritter/js/jquery.gritter.js') }}"></script>
<script type="text/javascript" src="{{ URL::to('admin/js/gritter-conf.js') }}"></script>

<!--script for this page-->
<script src="{{ URL::to('admin/js/sparkline-chart.js') }}"></script>
<script src="{{ URL::to('admin/js/zabuto_calendar.js') }}"></script>

</body>
</html>