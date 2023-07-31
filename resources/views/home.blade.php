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

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <h1 class="text-center">TRENITALIA</h1>
            </div>
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Azienda</th>
                                <th>Codice Treno</th>
                                <th>Stazione Partenza</th>
                                <th>Stazione Arrivo</th>
                                <th>Data Partenza</th>
                                <th>Data Arrivo</th>
                                <th>Orario Partenza</th>
                                <th>Orario Arrivo</th>
                                <th>In Orario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trains as $train)
                                <tr>
                                    <td>{{ $train->azienda }}</td>
                                    <td>{{ $train->codice_treno }}</td>
                                    <td>{{ $train->stazione_partenza }}</td>
                                    <td>{{ $train->stazione_arrivo }}</td>
                                    <td>{{ $train->data_partenza }}</td>
                                    <td>{{ $train->data_arrivo }}</td>
                                    <td>{{ $train->orario_partenza }}</td>
                                    <td>{{ $train->orario_arrivo }}</td>
                                    @if($train->in_orario)
                                        <td>Sì</td>
                                    @else
                                        <td>In Ritardo</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>

</body>

</html>