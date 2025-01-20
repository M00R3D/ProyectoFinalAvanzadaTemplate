@extends('layouts.app')
@section('title', 'Editar Paciente')
<div class="navbar-frame">
    @include('navbar')
</div>
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Medicamento</title>
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
        @include('sidebar')  <!-- Incluir la sidebar -->

        <main class="content col-md-9">
            <h1>Editar Medicamento</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 table-right">
                        <h1>Editar Información de Medicamento</h1>
                        <div class="card">
                            <div class="card-header">
                                Nombre del Medicamento
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nombreMedicamento" class="form-label"><strong>Nombre del Medicamento</strong></label>
                                        <input type="text" class="form-control" id="nombreMedicamento" value="Paracetamol" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="descripcionMedicamento" class="form-label"><strong>Descripción</strong></label>
                                        <textarea class="form-control" id="descripcionMedicamento" rows="3" required>Analgésico utilizado para aliviar dolores leves a moderados.</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="stockMedicamento" class="form-label"><strong>Stock Disponible</strong></label>
                                        <input type="number" class="form-control" id="stockMedicamento" value="150" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="dosisMedicamento" class="form-label"><strong>Dosis Recomendada</strong></label>
                                        <input type="text" class="form-control" id="dosisMedicamento" value="500mg cada 8 horas" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="frecuenciaMedicamento" class="form-label"><strong>Frecuencia Recomendada</strong></label>
                                        <input type="text" class="form-control" id="frecuenciaMedicamento" value="Cada 8 horas" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                    <a href="../../../resources/views/medicines.blade.php" class="btn btn-secondary btn-edit">Cancelar</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
