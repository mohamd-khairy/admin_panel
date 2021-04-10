<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$settings->site_name ?? config('app.name' , 'laravel')}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset($settings->image ?? '')}}" rel="icon">
    <link href="{{asset($settings->image ?? '')}}" rel="apple-touch-icon">


</head>

<body dir="{{$lang == 'en' ? 'ltr': 'rtl'}}">




    @yield('content')



    @if($footer)
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>{{$footer->title}}</h3>
            <p>{{$footer->description}}</p>
            <div class="social-links">
                @if($social)
                @foreach($social as $so)
                <a href="{{$so->url}}" class="facebook"><i class="{{$so->icon}}"></i></a>
                @endforeach
                @endif
                <h6 class="mt-4">{{$footer->copyright}}</h6>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    @endif



</body>

</html>