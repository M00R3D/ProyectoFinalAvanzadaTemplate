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
            background: linear-gradient(45deg, #45a247, #283c86);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: white;
        }

        .navbar {
            background: linear-gradient(to right, #1CB5E0, #000046);
        }

        .card {
            background-color: #34495e;
            color: white;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .table {
            color: white;
        }

        .table th, .table td {
            color: white;
        }

        .btn-space {
            margin-right: 10px;
        }

        .content {
            padding: 20px;
        }

        .table-container {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        @media (max-width: 768px) {
            .content {
                margin-top: 150px;
            }

            .table-container {
                flex-direction: column;
            }
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

        <div class="table-container">
            <div>
                <h2>Lista de Alarmas</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Alarma</th>
                            <th>Hora</th>
                            <th>Paciente y Medicina</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alarma 4:00 AM</td>
                            <td>4:00 AM</td>
                            <td>Juan Pérez - Paracetamol</td>
                            <td>
                                <a href="{{ route('alarms/edit') }}" class="btn btn-primary btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                <a href="{{ route('patients/details') }}" class="btn btn-info btn-sm">Ver Paciente</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Alarma 5:00 AM</td>
                            <td>5:00 AM</td>
                            <td>María López - Ibuprofeno</td>
                            <td>
                                <a href="{{ route('alarms/edit') }}" class="btn btn-primary btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                <a href="{{ route('patients/details') }}" class="btn btn-info btn-sm">Ver Paciente</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection
