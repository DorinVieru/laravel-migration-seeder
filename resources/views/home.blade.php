@extends('layout.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="row">
            {{-- TRENI FILTRATI --}}
            <div class="col-12 text-center text-success pb-4">
                <h1 class="fw-bold">Itinerario dei treni in partenza oggi</h1>
            </div>
            <div class="col-12 text-center">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                           <th>ID</th>
                           <th>Azienda</th>
                           <th>Data di partenza</th>
                           <th>Stazione di partenza</th>
                           <th>Orario di partenza</th>
                           <th>Stazione di arrivo</th>
                           <th>Orario di arrivo</th>
                           <th>Codice Treno</th>
                           <th>N. Carrozze</th>
                           <th>In Orario</th>
                           <th>Stato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains_filtered as $train)
                            <tr>
                                <td>{{ $train['id'] }}</td>
                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($train['data_di_partenza'])) }}</td>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['orario_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ $train['orario_di_arrivo'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>
                                <td class="fw-bold">
                                    @if ($train->in_orario)
                                        In Orario
                                    @else
                                        In Ritardo
                                    @endif
                                </td>
                                <td>
                                    @if ($train->cancellato)
                                        <p class="text-danger fw-bold">Annullato</p>
                                    @else
                                        <p class="text-success fw-bold">Presente</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- TUTTI I TRENI --}}
            <div class="col-12 text-center text-success mt-5 pb-4">
                <h3 class="fw-bold">Itinerario di tutti i treni</h3>
            </div>
            <div class="col-12 text-center">
                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                           <th>ID</th>
                           <th>Azienda</th>
                           <th>Data di partenza</th>
                           <th>Stazione di partenza</th>
                           <th>Orario di partenza</th>
                           <th>Stazione di arrivo</th>
                           <th>Orario di arrivo</th>
                           <th>Codice Treno</th>
                           <th>N. Carrozze</th>
                           <th>In Orario</th>
                           <th>Stato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train['id'] }}</td>
                                <td>{{ $train['azienda'] }}</td>
                                <td>{{ date('d/m/Y', strtotime($train['data_di_partenza'])) }}</td>
                                <td>{{ $train['stazione_di_partenza'] }}</td>
                                <td>{{ $train['orario_di_partenza'] }}</td>
                                <td>{{ $train['stazione_di_arrivo'] }}</td>
                                <td>{{ $train['orario_di_arrivo'] }}</td>
                                <td>{{ $train['codice_treno'] }}</td>
                                <td>{{ $train['numero_carrozze'] }}</td>
                                <td class="fw-bold">
                                    @if ($train->in_orario)
                                        In Orario
                                    @else
                                        In Ritardo
                                    @endif
                                </td>
                                <td>
                                    @if ($train->cancellato)
                                        <p class="text-danger fw-bold">Annullato</p>
                                    @else
                                        <p class="text-success fw-bold">Presente</p>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection