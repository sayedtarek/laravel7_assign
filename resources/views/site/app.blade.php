
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel assign contact form</title>
    <link href="{{URL::asset('public/site/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('public/site/js/jquery.min.js')}}"></script>
    <!-- Custom Theme files -->
    <!--menu-->
    <script src="{{URL::asset('public/site/js/scripts.js')}}"></script>
    <link href="{{URL::asset('public/site/css/styles.css')}}" rel="stylesheet">
    <!--//menu-->
    <!--theme-style-->
    <link href="{{URL::asset('public/site/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />  
    <!--//theme-style-->
    <script type="application/x-javascript"> 
        addEventListener("load", function() { 
            setTimeout(hideURLbar, 0);
        }, false); 
        function hideURLbar(){ 
            window.scrollTo(0,1); 
        }
    </script>
    <!-- slide -->
    <script src="{{URL::asset('public/site/js/responsiveslides.min.js')}}"></script>
    <script>
        $(function () {
          $("#slider").responsiveSlides({
            auto: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
          });
        });
    </script>
</head>
<body >
<!--header-->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-pic" href="{{ url('/') }}"><img class="img-responsive" src="{{URL::asset('public/site/images/logo.png')}}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">خدمة التتوثيق<span class="caret" style="margin-right: 10px;"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/registC') }}">الشهادات</a></li>
                        <li><a href="{{ url('/registK') }}">العقود و الممتلكات</a></li>
                        <li><a href="{{ url('/registM') }}">عقود الزواج</a></li>
                        <li><a href="{{ url('/registT') }}">التوكيلات</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/services') }}">أهم الخدمات</a></li>
                <li><a href="{{ url('/contact') }}">الشكاوى والاقتراحات</a></li>
                <li><a class="comment-icon">اتصل بنا</a></li>
                @if(Auth::check())
                <li><a href="{{ url('/dashboard') }}">لوحة التحكم</a></li>
                @else
                <li><a href="{{ url('/register') }}">انضم الينا</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--//-->
 
    <!--header-bottom-->
    <!--//header-->  
@yield('content')
    <div class="google-map">
        <div class="contact-form">
            <h4>تواصل معنا</h4>
            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                  @if(Session::has('alert-' . $msg))
                  <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                  @endif
                @endforeach
            <form method="POST" action="{{ url('/dashboard/contact') }}">
            {{ csrf_field() }}
                <input type="text" name="name" placeholder="*الاسم" required="required" />
                <input type="email" name="email" placeholder="*البريد الالكترونى" required="required" />
                <input type="number" name="phone" placeholder="*رقم الهاتف" required="required" />
                <input type="text" name="title" placeholder="*عنوان الموضوع" required="required" />
                <textarea name="body" placeholder="*رسالتك" required="required"></textarea>
                <input class="button-sub" type="submit" value="ارسال">
            </form>
        </div>

        <span class="comment-icon comment bk-color" href="#">
            <i class="glyphicon glyphicon-envelope"></i>
        </span>
    </div>
<div class="footer">
    <div class="footer-bottom">
        <div class="container">            
            <div class="col-md-8 footer-class">
                <p>جميع الحقوق محفوظه &copy; <a href="{{ url('/') }}">الشهر العقاري المصرى </a> 2017</p>
            </div>
            <div class="col-md-4 footer-logo">
                <h2><a href="{{ url('/') }}">الشهر العقاري المصري</a></h2>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div><!--//footer-->
<script src="{{URL::asset('public/site/js/bootstrap.min.js')}}"></script>
</body>
</html>