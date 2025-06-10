@extends('layouts.app')

@section('content')
<div class="wrapper d-flex">
    <aside class="sidebar">
        <div class="text-center mb-4">
            <a href="{{ route('admin.index') }}">
                <img src="{{ asset('img/log.png') }}" alt="EMEN" class="logo">
            </a>
            <h1>EMEN</h1>
        </div>
        <nav>
            <ul class="menu list-unstyled">
                <li><a href="#"><i class="bi bi-house-door-fill"></i> Inicio</a></li>
                <li><a href="{{ route('admin.eventos.index') }}"><i class="bi bi-list-ul"></i> Eventos</a></li>
                <li><a href="{{ route('admin.nis.index') }}"><i class="bi bi-tags"></i> NIS</a></li>
                <li><a href="{{ route('admin.usuario.index') }}"><i class="bi bi-person-fill"></i> Usuario</a></li>
                <li><a href="{{ route('admin.informes.index') }}"><i class="bi bi-clipboard-data"></i> Informe</a></li>
                <li><a href="{{ route('admin.producto.index') }}"><i class="bi bi-bag-plus"></i> Subir Producto</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-danger w-100 mt-3" type="submit">
                            <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <footer class="text-center mt-5">
            <p>© 2024 EMEN</p>
        </footer>
    </aside>

    <main class="main-content">
        <h2 class="mb-4 animate__animated animate__fadeInDown">Bienvenido Administrador</h2>

        <div class="botones-container">
            <a href="{{ route('admin.calendario.index') }}" class="btn">Calendario</a>
            <a href="{{ route('admin.eventos.index') }}" class="btn">Eventos</a>
            <a href="{{ route('admin.nis.index') }}" class="btn">NIS</a>
            <a href="{{ route('admin.usuario.index') }}" class="btn">Usuarios</a>
            <a href="{{ route('admin.informes.index') }}" class="btn">Informe</a>
            <a href="{{ route('admin.producto.index') }}" class="btn">Subir Producto</a>
        </div>

        <div class="logo-derecho">
            <img src="{{ asset('img/log.png') }}" alt="Logo grande EMEN">
        </div>
    </main>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}"> {{-- Archivo CSS externo --}}
@endpush
