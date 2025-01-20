@extends('layouts.app')

@section('title', 'Editar Alarma')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alarma</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            background: linear-gradient(45deg, rgb(0, 0, 0), #283c86);
            min-height: 100vh;
            margin: 0;
            padding: 0;
            color: white;
        }

        .content[data-theme="dark"] {
            background: linear-gradient(45deg, rgb(59, 30, 67), #283c86);
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

        .navbar-frame {
            width: 100%;
        }

        .btn-save {
            margin-top: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #34495e;
            border: 1px solid #1abc9c;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex">
        @include('sidebar')  <!-- Incluir la sidebar -->
        <main class="content col-md-9">
            <h1>Editar Alarma</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="panel">
                            <h3>Editar Información de Alarma</h3>
                            <!-- Formulario para editar alarma -->
                            <form action="#" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="patient_name">Nombre del Paciente</label>
                                    <input type="text" class="form-control" id="patient_name" value="Juan Pérez" required>
                                </div>
                                <div class="form-group">
                                    <label for="medicine_name">Nombre de la Medicina</label>
                                    <input type="text" class="form-control" id="medicine_name" value="Paracetamol" required>
                                </div>
                                <div class="form-group">
                                    <label for="alarm_time">Hora de la Alarma</label>
                                    <input type="time" class="form-control" id="alarm_time" value="04:00" required>
                                </div>
                                <div class="form-group">
                                    <label for="alarm_notes">Notas</label>
                                    <textarea class="form-control" id="alarm_notes" rows="4" placeholder="Notas adicionales sobre la alarma...">Recuerda darle la medicina después del desayuno.</textarea>
                                </div>
                                <button type="submit" class="btn btn-success btn-save">Guardar Cambios</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
@endsection
