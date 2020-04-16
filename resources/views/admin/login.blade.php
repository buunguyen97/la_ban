<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login</title>
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords"
          content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="admin/css/style.css" type="text/css" media="all"/> <!-- Style-CSS -->
    <link rel="stylesheet" href="admin/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->

    <link
        href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext"
          rel="stylesheet">
    <!-- //online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
    <!--header-->
    <div class="header-w3l">
        <h1>Buu Nguyen</h1>
    </div>

<!--//header-->
    <div class="main-content-agile">
        <div class="sub-main-w3">
            <div class="wthree-pro">
                <h2>Login Admin</h2>
            </div>

            <form method="post" action="admin/dangnhap">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="pom-agile">
                    <input placeholder="E-mail" name="email" class="user" type="email" required="">
                    <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                </div>
                <div class="pom-agile">
                    <input placeholder="Password" name="password" class="pass" type="password" required="">
                    <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                </div>
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            <a style="color: white">   {{$err}}<br></a>
                        @endforeach

                    </div>
                @endif
                @if(session('thongbao'))
                    <div class="alert alert-success">
                        <a  style="color: white"> {{session('thongbao')}}<br></a>
                    </div>
                @endif
                <div class="sub-w3l">
                    <h6><a href="#">Forgot Password?</a></h6>
                    <div class="right-w3l">
                        <input type="submit" value="Login">
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>
</body>
</html>
