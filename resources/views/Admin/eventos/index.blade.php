@extends('layouts.app')

@section('content')
<!-- Vinculación al CSS personalizado -->
<link rel="stylesheet" href="{{ asset('css/eventos.css') }}">



<div class="container py-5">
    <a href="{{ route('admin.index') }}" class="btn btn-dark mb-4">
        <i class="bi bi-arrow-left-circle"></i> Volver
    </a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <div class="card mb-5">
        <div class="card-body">
            <h2 class="mb-4 text-primary">Agregar Nuevo Evento</h2>
            <form method="POST" action="{{ route('admin.eventos.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" name="descripcion" id="descripcion" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="fecha_evento" class="form-label">Fecha y Hora</label>
                    <input type="datetime-local" class="form-control" name="fecha_evento" id="fecha_evento" required>
                </div>
                <button type="submit" class="btn btn-success">Agregar Evento</button>
            </form>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="mb-4 text-primary">Eventos Existentes</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Fecha y Hora</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($eventos as $evento)
                            <tr>
                                <td>{{ $evento->idEventos }}</td>
                                <td>{{ $evento->Titulo }}</td>
                                <td>{{ $evento->Descripcion }}</td>
                                <td>{{ $evento->Fecha_Evento }}</td>
                                <td class="d-flex justify-content-center gap-2">
                                <a href="{{ route('admin.eventos.edit', $evento->idEventos) }}" class="btn btn-edit" title="Editar">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('admin.eventos.destroy', $evento->idEventos) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-delete" title="Eliminar">
                                        <i class="bi bi-trash-fill"></i>
                                    </button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        @if($eventos->isEmpty())
                            <tr>
                                <td colspan="5">No hay eventos registrados.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
