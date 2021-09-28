<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <style>
            section {
                margin-top: 3rem;
                width: 100vw;
                padding: 1rem;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            p {
                margin-bottom: 0.25rem;
            }
        </style>
    </head>
    <body>
        <section>
            @include('inc.topnav')
            <br><br>
            @yield('content')
        </section>
    </body>
    
</html>