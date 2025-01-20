```blade
@extends('layouts.app')

@section('title', 'Cuidados Especiales')

<div class="navbar-frame">
    @include('navbar')
</div>

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuidados Especiales</title>
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

        .btn-historial {
            margin-top: 30px;
            width: 20%;
        }

        .table-right {
            margin-top: 20px;
            background-color: #34495e;
            padding: 15px;
            border-radius: 8px;
        }

        .card {
            max-width: 900px;
            margin: 50px auto;
            background-color: #34495e;
            color: white;
            border-radius: 8px;
            padding: 20px;
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .card-body {
            font-size: 1.1rem;
        }

        .btn-edit {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex">
        @include('sidebar')
        <main class="content col-md-9">
            <h1>Cuidados Especiales</h1>

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCareModal">Agregar Cuidado Especial</button>

            <div class="panel">
                <h2>Lista de Cuidados Especiales</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre del Paciente</th>
                            <th>Detalles</th>
                            <th>Fecha</th>
                            <th>Prioridad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Juan Pérez</td>
                            <td>Cuidado diario para presión arterial</td>
                            <td>2025-01-21</td>
                            <td>Alta</td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-space">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>María López</td>
                            <td>Fisioterapia semanal</td>
                            <td>2025-01-23</td>
                            <td>Media</td>
                            <td>
                                <button class="btn btn-warning btn-sm btn-space">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <div class="modal fade" id="addCareModal" tabindex="-1" aria-labelledby="addCareModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCareModalLabel">Agregar Cuidado Especial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="mb-3">
                            <label for="patientName" class="form-label">Nombre del Paciente</label>
                            <input type="text" class="form-control" id="patientName" placeholder="Ingresa el nombre del paciente" required>
                        </div>
                        <div class="mb-3">
                            <label for="careDetails" class="form-label">Detalles del Cuidado Especial</label>
                            <textarea class="form-control" id="careDetails" rows="4" placeholder="Descripción del cuidado especial" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="careDate" class="form-label">Fecha de Aplicación</label>
                            <input type="date" class="form-control" id="careDate" required>
                        </div>
                        <div class="mb-3">
                            <label for="priority" class="form-label">Prioridad</label>
                            <select class="form-control" id="priority">
                                <option value="alta">Alta</option>
                                <option value="media">Media</option>
                                <option value="baja">Baja</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.body.setAttribute('data-theme', savedTheme);
        });
    </script>
</body>
@endsection
```