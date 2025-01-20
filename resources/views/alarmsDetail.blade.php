@extends('layouts.app')

@section('title', 'Detalles de la Alarma')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Alarma</title>
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

        .navbar-frame{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex">
        @include('sidebar')  <!-- Incluir la sidebar -->
        <main class="content col-md-9">
        <h1>Detalles de la Alarma</h1>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel">
                        <h3>Detalles de la Alarma: Juan Pérez - Paracetamol</h3>
                        <p><strong>Hora de la Alarma:</strong> 4:00 AM</p>
                        <p><strong>Descripción:</strong> Recordatorio para tomar Paracetamol a las 4:00 AM.</p>
                        
                        <!-- Botón para editar la alarma -->
                        <a href="{{ route('alarms/edit') }}" class="btn btn-warning">Editar Alarma</a>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>
@endsection
