@extends('layouts.app')

@section('title', 'Perfil del Paciente')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background: linear-gradient(45deg,rgb(0, 0, 0), #283c86);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: white;
        }

        .content[data-theme="dark"] {
            background: linear-gradient(45deg,rgb(59, 30, 67), #283c86);
        }

        .content[data-theme="light"] {
            background: linear-gradient(45deg, #283c86, #45a247);
        }

        .navbar {
            background: linear-gradient(to right, #1CB5E0, #000046);
        }

        .navbar-brand img {
            max-height: 40px;
        }

        .sidebar {
            background-color: #2c3e50;
            padding: 15px;
            height: 100%;
            width: 10%;
        }

        .sidebar .btn {
            width: 100%;
            background-color: #34495e;
            color: white;
        }

        .sidebar .btn:hover {
            background-color: #1abc9c;
        }

        .content {
            padding: 20px;
            /* background: linear-gradient(45deg,rgb(0, 0, 0), #283c86); */
        }

        .panel {
            background-color: #34495e;
            padding: 15px;
            border-radius: 8px;
        }

        .panel-heading {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn-space {
            margin: 5px;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                width: 80%;
                height: auto;
                z-index: 1000;
            }

            .content {
                margin-top: 150px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                max-height: 30px;
            }

            .content h1 {
                font-size: 24px;
            }
        }
        
        .navbar-frame{
            width: 100%;
        }

        .btn-historial{
            margin-top: 30px;
            width:20%;
        }

        .table-right {
            margin-top: 20px;
            background-color: #34495e;
            padding: 15px;
            border-radius: 8px;
        }

        .table-left {
            margin-top: 20px;
            background-color: #34495e;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container-fluid d-flex">
    @include('sidebar')

    <main class="content col-md-9">
        <h1>Perfil del Paciente</h1>

        <div class="card">
            <div class="card-header">
                Información de Juan Pérez
            </div>
            <div class="card-body">
                <p><strong>Nombre:</strong> Juan</p>
                <p><strong>Apellido:</strong> Pérez</p>
                <p><strong>Email:</strong> juan.perez@example.com</p>
                <p><strong>Dirección:</strong> Calle Ficticia 123, Ciudad, País</p>
                <p><strong>Teléfono:</strong> +123 456 7890</p>
                <p><strong>Estado de Salud:</strong> Estable</p>
                <a href="{{ route('patients/edit') }}" class="btn btn-warning">EDITAR PACIENTE</a>
            </div>
        </div>

        <div class="table-container">
            <div>
                <h2>Historial de Medicamentos</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Medicamento</th>
                            <th>Dosis</th>
                            <th>Frecuencia</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>
                            <th>Ingerido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Paracetamol</td>
                            <td>500mg</td>
                            <td>2 veces al día</td>
                            <td>2025-01-01</td>
                            <td>2025-01-10</td>
                            <td>Sí</td>
                        </tr>
                        <tr>
                            <td>Ibuprofeno</td>
                            <td>200mg</td>
                            <td>1 vez al día</td>
                            <td>2025-01-05</td>
                            <td>2025-01-15</td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <h2>Historial de Cuidados Especiales</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Detalle</th>
                            <th>Prioridad</th>
                            <th>Fecha</th>
                            <th>Cumplido</th>
                            <th>Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cuidado diario para presión arterial</td>
                            <td>Alta</td>
                            <td>2025-01-21</td>
                            <td>Sí</td>
                            <td>Paciente mostró buena respuesta al cuidado.</td>
                        </tr>
                        <tr>
                            <td>Fisioterapia semanal</td>
                            <td>Media</td>
                            <td>2025-01-23</td>
                            <td>No</td>
                            <td>El paciente no pudo asistir a la sesión.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <div class="row">
        <div class="col-lg-20">
            <div class="table-responsive" style="max-height: 1400px; overflow-y: auto;">

            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Alarma</th>
                        <th>Hora de la Alarma</th>
                        <th>Paciente y Medicina</th>
                    </tr>
                </thead>
                <tbody>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 4:00 AM</a></td>
        <td>4:00 AM</td>
        <td>Juan Pérez - Paracetamol</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 5:00 AM</a></td>
        <td>5:00 AM</td>
        <td>Juan Pérez - Ibuprofeno</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 6:00 AM</a></td>
        <td>6:00 AM</td>
        <td>Juan Pérez - Amoxicilina</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 7:30 AM</a></td>
        <td>7:30 AM</td>
        <td>Juan Pérez - Omeprazol</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 8:00 AM</a></td>
        <td>8:00 AM</td>
        <td>Juan Pérez - Insulina</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 8:45 AM</a></td>
        <td>8:45 AM</td>
        <td>Juan Pérez - Loratadina</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 9:00 AM</a></td>
        <td>9:00 AM</td>
        <td>Juan Pérez - Metformina</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 10:30 AM</a></td>
        <td>10:30 AM</td>
        <td>Juan Pérez - Salbutamol</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 11:00 AM</a></td>
        <td>11:00 AM</td>
        <td>Juan Pérez - Aspirina</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 12:00 PM</a></td>
        <td>12:00 PM</td>
        <td>Juan Pérez - Antibiótico</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 1:00 PM</a></td>
        <td>1:00 PM</td>
        <td>Juan Pérez - Vitamina C</td>
    </tr>
    <tr>
        <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 2:30 PM</a></td>
        <td>2:30 PM</td>
        <td>Juan Pérez - Antihistamínico</td>
    </tr>
</tbody>

            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
