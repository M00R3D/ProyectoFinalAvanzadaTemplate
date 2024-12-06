<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
            /* padding-right: 20px; */
            padding: 15px;
            height: 100%;
            /* margin-right: 20px; */
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
    <div class ="navbar-frame">
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
                    <button class="btn btn-warning btn-edit">Editar Información</button>
                </div>
            </div>
        </main>
    </div>

            </div>
        </div>
<!-- finalizacion del scroll panel del Dashboard -->
</div>

        <td><a href="/set-alarm-for-10-30-am/" class="btn btn-warning btn-sm btn-historial">Ver todo el Historial</a></td>

    </div>
</div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
