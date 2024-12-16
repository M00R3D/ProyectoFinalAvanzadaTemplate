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
            background: linear-gradient(45deg, #45a247, #283c86);
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
            
        <div class="container">
        <h1 class="mt-4">Medicinas</h1>
        <div class="col-lg-12 table-right">
            <h5>Lista de Medicinas</h5>
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Cantidad en Stock</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="medicinas-table">
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script >
        // Lista de medicinas aleatorias
        const medicinas = [
            { nombre: "Paracetamol", stock: 20 },
            { nombre: "Ibuprofeno", stock: 15 },
            { nombre: "Omeprazol", stock: 25 },
            { nombre: "Amoxicilina", stock: 10 },
            { nombre: "Metformina", stock: 30 },
        ];
        const medicinasTable = document.getElementById('medicinas-table');

        // Función para renderizar la tabla
        function renderMedicinas() {
            medicinasTable.innerHTML = ''; // Limpiar tabla
            medicinas.forEach((medicina, index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${medicina.nombre}</td>
                    <td>${medicina.stock} unidades</td>
                    <td>
                        <button class="btn btn-delete btn-sm" onclick="borrarMedicina(${index})">Borrar</button>
                        <a href="{{ route('medicines/details') }}" class="btn btn-primary" role="button">
                            <img src="{{ asset('images/iconpill.png') }}" alt="Logo" height="40">
                        </a>                    
                    </td>
                `;
                medicinasTable.appendChild(row);
            });
        }

        // Función para borrar una medicina
        function borrarMedicina(index) {
            medicinas.splice(index, 1); // Eliminar medicina de la lista
            renderMedicinas(); // Volver a renderizar
        }

        // Renderizar medicinas al cargar la página
        renderMedicinas();
    </script>


</body>
</html>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
