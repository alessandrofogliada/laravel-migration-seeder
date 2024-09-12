@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1>Tutti i treni</h1>

    <table class="table table-dark">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Azienda</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Orario di partenza</th>
            <th scope="col">Orario di arrivo</th>
            <th scope="col">Codice treno</th>
            <th scope="col">Numero carrozze</th>
            <th scope="col">In orario</th>
        </thead>
                <tbody>
                    @foreach ($trains as $train )
                        <tr>
                            <td>{{$train->id}}</td>
                            <td>{{$train->Company}}</td>
                            <td>{{$train->Departure_station}}</td>
                            <td>{{$train->Arrival_station}}</td>
                            <td>{{$train->Departure_time}}</td>
                            <td>{{$train->Time_of_arrival}}</td>
                            <td>{{$train->Train_code}}</td>
                            <td>{{$train->Carriage_number}}</td>
                            <td>{{$train->Timetable}}</td>
                        </tr>
                    @endforeach
                </tbody>
      </table>


</div>

@endsection

@section('titlePage')
    contatti
@endsection

