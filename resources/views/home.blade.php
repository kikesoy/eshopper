@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Bienvenido!</div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        Panel de Administrador
    </div>
</div>
@endsection
