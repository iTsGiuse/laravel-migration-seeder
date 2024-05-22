@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row">
            @foreach ($treni as $treno)
            <div class="col-4 my-2">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title  mb-5">{{$treno->Azienda}}</h5>
                        <h6 class="card-text">Stazione d'arrivo: {{$treno->Stazione_di_partenza}}</h6>
                        <p class="card-text">Stazione di partenza: {{$treno->Stazione_di_arrivo}}</p>
                        <p class="card-text">Orario di arrivo: {{$treno->Orario_di_arrivo}}</p>
                        <p class="card-text">Numero di carrozze {{$treno->Numero_Carrozze}}</p>
                        @if ($treno->In_orario == 0)
                            <p class="card-text">Il treno è in orario</p>   
                        @else
                            <p class="card-text">Ci dispiace, il treno è in ritardo </p>
                        @endif
                        @if ($treno->Cancellato == 0)
                            <p class="card-text">Il treno è attivo</p>   
                        @else
                            <p class="card-text">Il treno è stato cancellato </p>
                        @endif
                    </div>
                  </div> 
            </div>
            @endforeach
        </div>
    </div>
@endsection