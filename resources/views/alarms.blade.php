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
        @include('sidebar')  <!-- Incluir la sidebar -->
        <main class="content col-md-9">
        <h1>Lista de Alarmas</h1>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                        <table class="table table-striped table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Alarma</th>
                                    <th>Hora de la Alarma</th>
                                    <th>Paciente y Medicina</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Aquí se agregan las alarmas -->
                                <tr>
                                    <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 4:00 AM</a></td>
                                    <td>4:00 AM</td>
                                    <td>Juan Pérez - Paracetamol</td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 5:00 AM</a></td>
                                    <td>5:00 AM</td>
                                    <td>María López - Ibuprofeno</td>
                                </tr>
                                <tr>
                                    <td><a href="{{ route('alarms/details') }}" class="btn btn-primary btn-sm">Alarma 6:00 AM</a></td>
                                    <td>6:00 AM</td>
                                    <td>Carlos Sánchez - Amoxicilina</td>
                                </tr>
                                <!-- Añadir más alarmas según sea necesario -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>
@endsection
