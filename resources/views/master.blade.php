<html>

    <head>

        <title>Justin Beiber Fan Club</title>

        {!! Html::style('css/style.css') !!}
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        {{--<link rel="stylesheet" href="/css/style.css">
         <link rel="stylesheet" href="/css/bootstrap.min.css">--}}
          {{--<link rel="stylesheet" href="/css/bootstrap.css">
           <link rel="stylesheet" href="/css/bootstrap-theme.css">
            <link rel="stylesheet" href="/css/bootstrap-theme.min.css">--}}
          {{--<link rel="stylesheet" href="/js/bootstrap.min.js">--}}
           {{--<link rel="stylesheet" href="/js/bootstrap.js">--}}

    </head>

    <body class="mb">

        <h1>Beibers most popular songs</h1>

        {{--// any relevant word can take place of 'content'--}}
        {{--  main content should be displayed here--}}
        @yield('content')


    </body>

</html>