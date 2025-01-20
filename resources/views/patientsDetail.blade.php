@extends('layouts.app')

@section('title', 'Cuidados Especiales')
        <div class="navbar-frame">
            @include('navbar')
        </div>
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card{
            color: black;
        }
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
            /* background: linear-gradient(45deg, #45a247, #283c86); */
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
        <!-- <aside class="sidebar col-md-3"> -->
        @include('sidebar')
        <!-- </aside> -->
        <main class="content col-md-9">
        <h1>Dashboard</h1>

<div class="container">
    <div class="row">
<div class="col-lg-12 table-right">
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
                    <p><strong>Contraseña:</strong> ********</p>
                    <a href="{{ route('patients/edit') }}" class="btn btn-warning">EDITAR PACIENTE</a>
                </div>
            </div>
        </main>
    </div>

            </div>
        </div>
<!-- finalizacion del scroll panel del Dashboard -->
</div>


    </div>
</div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
