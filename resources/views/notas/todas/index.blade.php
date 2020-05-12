@extends('layouts.app')

@section('content')

<div class="d-flex flex-wrap justify-content-around">

    @include('notas.todas.modal')

    @foreach ($notas as $nota)
    <div class="card border-primary mb-3" style="max-width: 18rem;">
        <div class="card-header"><b>{{ $nota->titulo}}</b>
            <p class="small float-right">{{ $nota->created_at}}</p>
        </div>
        <div class="card-body text-primary">
            <p class="card-text">{{ $nota->texto}}</p>
        </div>
    </div>
    @endforeach
</div>

@endsection
