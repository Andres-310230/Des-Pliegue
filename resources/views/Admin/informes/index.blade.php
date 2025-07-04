@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/informes-style.css') }}">

<div class="container py-5">
    <h1 class="text-center text-primary">Generar Informes</h1>

    <div class="text-center">
        <a href="{{ route('admin.informes.usuarios') }}" class="btn btn-primary mb-3">📥 Descargar Informe de Usuarios</a>
        <br>
        <br>
        <br>    
        <a href="{{ route('admin.informes.todos') }}" class="btn btn-primary mb-3">📦 Descargar Todos los Informes</a>
    </div>
</div>
@endsection
