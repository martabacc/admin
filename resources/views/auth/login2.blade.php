<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

    <title>LelangKita | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <style type="text/css">
        @charset "UTF-8";
        /* CSS Document */

        body {
            width:100px;
            height:100px;
            background:white;
            /*background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); !* Chrome 10+, Saf5.1+ *!*/
            /*background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); !* FF3.6+ *!*/
            /*background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); !* IE10 *!*/
            /*background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); !* Opera 11.10+ *!*/
            /*background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); !* W3C *!*/
            font-family: 'Raleway', sans-serif;
        }

        p {
            color:#CCC;
        }

        .spacing {
            padding-top:7px;
            padding-bottom:7px;
        }
        .middlePage {
            width: 680px;
            height: 500px;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .logo {
            color:#CCC;
        }
    </style>
    <script src="{{ url('javascript/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ url('javascript/bootstrap/js/bootstrap.min.js   ') }}"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $( document ).ready(function() {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>

<body>
<div class="middlePage">
    <div class="page-header">
        <h1 class="logo">LelangKita
            <small>
                Bid your items. Get your price.
            </small>
        </h1>
    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Log In Administrator</h3>
        </div>
        <div class="panel-body" style="height:auto;">

            <div class="row">
                <div class="col-md-12" style="border-left:1px solid #ccc;height:160px">
                    <form class="form-horizontal"  method="POST" action="{{ url('/login') }}" >
                        <fieldset>
                            {{csrf_field()}}
                            <div class="col-md-3 text-right">
                                <label>Username</label>
                            </div>
                            <div class="col-md-9">
                            <input id="textinput" name="username" type="text" placeholder="Username anda" class="form-control input-md" value="{{ old('username') }}" >

                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                            </div>
                            <br>

                            <div class="col-md-3 text-right">
                                <label>Password</label>
                            </div>
                            <div class="col-md-9">
                            <input id="textinput"  name="password" type="password" placeholder="Password anda" class="form-control input-md">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            </div>
                            <br>

                            <div class="spacing col-md-11 col-md-offset-1">
                                <input type="checkbox"  name="remember" id="checkboxes-0" value="0">
                                <small> Remember me</small>
                                <button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">
                                    Log In</button>
                            </div>
                            <br>

                            <div class="spacing  col-md-11 col-md-offset-1">
                                <p>
                                    <a href="{{ url('/password/reset') }}">Lupa Password?</a>
                                </p>
                            </div>


                        </fieldset>
                    </form>
                </div>

            </div>

        </div>
    </div>

</div>
</body>
</html>