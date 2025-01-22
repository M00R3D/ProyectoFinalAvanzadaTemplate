@extends('layouts.app')

@section('title', 'Alarms')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alarms</title>
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
        @include('sidebar') <!-- Incluir la sidebar -->
        <main class="content col-md-9">
            <h1>Lista de Alarmas</h1>

            <!-- Botón para abrir el modal de creación de alarmas -->
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addAlarmModal">Agregar Alarma</button>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Alarma</th>
                            <th>Hora</th>
                            <th>Paciente y Medicina</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de alarmas -->
                        <tr>
                            <td>Alarma 4:00 AM</td>
                            <td>4:00 AM</td>
                            <td>Juan Pérez - Paracetamol</td>
                            <td>
                                <td><a href="{{ route('alarms/edit') }}" class="btn btn-primary btn-sm">Editar Alarma</a></>
                                <button class="btn btn-danger btn-sm btn-space" >Eliminar</button>
                                <td><a href="{{ route('patients/details') }}" class="btn btn-info btn-sm btn-space">Ver Paciente</a></>
                            </td>
                        </tr>
                        <tr>
                            <td>Alarma 5:00 AM</td>
                            <td>5:00 AM</td>
                            <td>María López - Ibuprofeno</td>
                            <td>
                                <td><a href="{{ route('alarms/edit') }}" class="btn btn-primary btn-sm">Editar Alarma</a></>
                                <button class="btn btn-danger btn-sm btn-space" >Eliminar</button>
                                <td><a href="{{ route('patients/details') }}" class="btn btn-info btn-sm btn-space">Ver Paciente</a></>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <!-- Modal para agregar alarmas -->
    <div class="modal fade" id="addAlarmModal" tabindex="-1" aria-labelledby="addAlarmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAlarmModalLabel">Agregar Alarma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="alarmTime" class="form-label">Hora de la Alarma</label>
                            <input type="time" class="form-control" id="alarmTime" required>
                        </div>
                        <div class="mb-3">
                            <label for="patientName" class="form-label">Nombre del Paciente</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Ingresa el nombre del paciente" required>
                        </div>
                        <div class="mb-3">
                            <label for="medicineDetails" class="form-label">Medicamento</label>
                            <input type="text" class="form-control" id="medicineDetails" placeholder="Ingresa el nombre del medicamento" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
