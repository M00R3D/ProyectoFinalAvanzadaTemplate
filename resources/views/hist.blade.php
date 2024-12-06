<!DOCTYPE html>
<html lang="en">
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
            <h1>Dashboard</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8 table-left">
                        <h5>Historial de Medicamentos</h5>
                        <table class="table table-striped table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Medicamento</th>
                                    <th>Estado</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Paracetamol</td>
                                    <td><span class="badge bg-success">Tomado</span></td>
                                    <td>4:00 AM</td>
                                </tr>
                                <tr>
                                    <td>Ibuprofeno</td>
                                    <td><span class="badge bg-danger">No Tomado</span></td>
                                    <td>5:00 AM</td>
                                </tr>
                                <tr>
                                    <td>Amoxicilina</td>
                                    <td><span class="badge bg-success">Tomado</span></td>
                                    <td>6:00 AM</td>
                                </tr>
                                <tr>
                                    <td>Omeprazol</td>
                                    <td><span class="badge bg-danger">No Tomado</span></td>
                                    <td>7:30 AM</td>
                                </tr>
                                <tr>
                                    <td>Insulina</td>
                                    <td><span class="badge bg-success">Tomado</span></td>
                                    <td>8:00 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-lg-4 table-right">
                        <h5>Cuidados Especiales Pendientes</h5>
                        <table class="table table-striped table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>Paciente</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Juan Pérez</td>
                                    <td><button class="btn btn-warning btn-sm">Ver detalles</button></td>
                                </tr>
                                <tr>
                                    <td>María López</td>
                                    <td><button class="btn btn-warning btn-sm">Ver detalles</button></td>
                                </tr>
                                <tr>
                                    <td>Carlos Sánchez</td>
                                    <td><button class="btn btn-warning btn-sm">Ver detalles</button></td>
                                </tr>
                                <tr>
                                    <td>Ana García</td>
                                    <td><button class="btn btn-warning btn-sm">Ver detalles</button></td>
                                </tr>
                                <tr>
                                    <td>Pedro Gómez</td>
                                    <td><button class="btn btn-warning btn-sm">Ver detalles</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <a href="#" class="btn btn-warning btn-sm btn-historial">Ver todo el Historial</a>
            </div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
