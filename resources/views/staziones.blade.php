<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">TRENITALIA</h1>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5 mb-1">
                <h4>Tutte le stazioni:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5 mb-5">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Nazione</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($staziones as $stazione)
                            <tr>
                                <td>{{ $stazione->name }}</td>
                                <td>{{ $stazione->country }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('home') }}">Torna ai treni del giorno</a>
    </div>
</body>

</html>