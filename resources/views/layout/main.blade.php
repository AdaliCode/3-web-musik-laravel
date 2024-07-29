<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');
        body {
            font-family: "Lato", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="bg-dark text-light">
    <div class="container-fluid">
        {{-- songInfo --}}
        <div class="row" style="height: 85vh">
            {{-- sidebar --}}
            <div class="col-3 border border-light py-2">
                @include('partials.sidebar')
            </div>
            {{-- songInfoPage --}}
            <div class="col border border-light py-2">
                <div class="rounded" style="background-color: rgb(30, 27, 33);height: 100%;overflow-y: scroll">
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- songPlay --}}
        <div class="row" style="height: 15vh">
           {{-- <h1 class="text-light">Display Music Play</h1> --}}
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>