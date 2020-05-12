@extends('layouts.app')

@section('content')
<div class="container">
    <h2> Lista De usuarios Registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a></h2>
    <h6>
        @if ($search)
        <div class="alert alert-primary" role="alert">
            Los Resultados para tu busqueda '{{ $search }}' son:
        </div>
        @endif

    </h6>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td><a href="{{ route('usuarios.edit', $user->id) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                <td><a href="{{ route('usuarios.show', $user->id) }}"><button type="button" class="btn btn-secondary">Ver Informacion</button></a></td>
                <td>
                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="mx-auto">
            {{ $users->links()}}
        </div>
    </div>
</div>
@endsection
