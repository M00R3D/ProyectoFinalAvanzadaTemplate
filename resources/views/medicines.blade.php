@extends('layouts.app')

@section('title', 'Medicinas')
<div class="navbar-frame">
    @include('navbar')
</div>
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicinas</title>
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

        .modal-dialog{
            color:black;
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
            <div class="container">
                <h1 class="mt-4">Medicinas</h1>
                <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#medicineModal" onclick="openModal()">Agregar Medicina</button>
                <div class="col-lg-12 table-right">
                    <h5>Lista de Medicinas</h5>
                    <table class="table table-striped table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Cantidad en Stock</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody id="medicinas-table"></tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Modal para agregar/editar medicina -->
    <div class="modal fade" id="medicineModal" tabindex="-1" aria-labelledby="medicineModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="medicineModalLabel">Agregar Medicina</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="medicineForm">
                        <div class="mb-3">
                            <label for="medicineName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="medicineName" required>
                        </div>
                        <div class="mb-3">
                            <label for="medicineDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="medicineDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="medicineStock" class="form-label">Cantidad en Stock</label>
                            <input type="number" class="form-control" id="medicineStock" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="saveMedicine()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const medicinasTable = document.getElementById('medicinas-table');

    function renderMedicinas() {
        medicinasTable.innerHTML = '';
        medicinas.forEach((medicina, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${medicina.nombre}</td>
                <td>${medicina.descripcion}</td>
                <td>${medicina.stock} unidades</td>
                <td>
                    <a href="{{ route('medicines/edit') }}" class="btn btn-warning">Editar</a>
                    <button class="btn btn-danger btn-sm" onclick="deleteMedicine(${index})">Borrar</button>
                </td>
            `;
            medicinasTable.appendChild(row);
        });
    }

    // Abre el modal de agregar/editar
    function openModal() {
        document.getElementById('medicineForm').reset();
        editingIndex = null;
        document.getElementById('medicineModalLabel').textContent = 'Agregar Medicina';
    }

    // Función para guardar o actualizar la medicina
    async function saveMedicine() {
        const nombre = document.getElementById('medicineName').value;
        const descripcion = document.getElementById('medicineDescription').value;
        const stock = document.getElementById('medicineStock').value;

        // Crear un objeto de los datos
        const formData = {
            name: nombre,
            description: descripcion,
            dosage: "N/A", // Si no es necesario, puede dejarlo como 'N/A' o ajustarlo
            frequency: "N/A", // Lo mismo para 'frequency'
        };

        try {
            // Enviar los datos al backend con una solicitud POST
            const response = await fetch("{{ route('medicines.store') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}", // Incluye el token CSRF para seguridad
                },
                body: JSON.stringify(formData),
            });

            const data = await response.json();

            // Verifica si la medicina fue agregada correctamente
            if (data.success) {
                alert('Medicamento agregado correctamente');
                renderMedicinas();  // Actualiza la lista de medicinas
            } else {
                alert('Error al agregar medicamento');
            }

            // Cierra el modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('medicineModal'));
            modal.hide();
        } catch (error) {
            console.error(error);
            alert('Hubo un error al intentar agregar el medicamento');
        }
    }

    // Renderiza las medicinas al cargar la página
    renderMedicinas();
</script>

</body>
@endsection
