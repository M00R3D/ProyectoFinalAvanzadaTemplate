<!DOCTYPE html>
<html lang="en">
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
            background: linear-gradient(45deg, #45a247, #283c86);
            flex-grow: 1;
            width: 100%;
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

        .form-control, .btn {
            margin: 5px 0;
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

        .sidebar {
            padding-right: 0;
        }
    </style>
</head>
<body>

    <div class="navbar-frame">
        <iframe src="navbar.blade.php" width="100%" height="100%" frameborder="0"></iframe>
    </div>

    <div class="container-fluid d-flex">
        <aside class="sidebar col-md-3">
        <a href="../../../resources/views/homepage.blade.php" class="btn btn-primary" role="button">
                <img src="../iconhome.png" alt="Logo" height="40">
            </a>
            <a href="../../../resources/views/special.blade.php" class="btn btn-primary" role="button">
                <img src="../iconCare.png" alt="Logo" height="40">
            </a>
            <a href="../../../resources/views/hist.blade.php" class="btn btn-primary" role="button">
                <img src="../iconhist.png" alt="Logo" height="40">
            </a>
            <a href="../../../resources/views/patients.blade.php" class="btn btn-primary" role="button">
                <img src="../iconPatients.png" alt="Logo" height="40">
            </a>
            <a href="../../../resources/views/infopage.blade.php" class="btn btn-primary" role="button">
                <img src="../iconhelp.png" alt="Logo" height="40">
            </a>
            <a href="../../../resources/views/medicines.blade.php" class="btn btn-primary" role="button">
                <img src="../iconpill.png" alt="Logo" height="40">
            </a>
        </aside>
        <main class="content col-md-9">
            <h1>Agregar Cuidados Especiales</h1>
            <div class="panel">
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

                    <button type="submit" class="btn btn-primary">Guardar Cuidados Especiales</button>
                </form>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
