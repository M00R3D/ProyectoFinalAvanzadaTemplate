@extends('layouts.app')

@section('title', 'Editar Alarma')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<div class="container-fluid d-flex">
    @include('sidebar')  <!-- Incluir la sidebar -->
    <main class="content col-md-9">
    <h1>Editar Alarma</h1>

    <!-- Mostrar mensaje de éxito -->
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="{{ route('alarms.update', $alarm['id']) }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="time">Hora de la Alarma</label>
            <input type="text" class="form-control" id="time" name="time" value="{{ $alarm['time'] }}" required>
        </div>

        <div class="form-group">
            <label for="patient_name">Nombre del Paciente</label>
            <input type="text" class="form-control" id="patient_name" name="patient_name" value="{{ $alarm['patient_name'] }}" required>
        </div>

        <div class="form-group">
            <label for="medicine_name">Medicamento</label>
            <input type="text" class="form-control" id="medicine_name" name="medicine_name" value="{{ $alarm['medicine_name'] }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Guardar Cambios</button>
    </form>
    </main>
</div>
@endsection
