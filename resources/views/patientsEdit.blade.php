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
            <h1>Editar Perfil del Paciente</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 table-right">
                        <div class="card">
                            <div class="card-header">
                                Editar Información de Juan Pérez
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                                        <input type="text" class="form-control" id="nombre" value="Juan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="apellido" class="form-label"><strong>Apellido</strong></label>
                                        <input type="text" class="form-control" id="apellido" value="Pérez">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label"><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="email" value="juan.perez@example.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="direccion" class="form-label"><strong>Dirección</strong></label>
                                        <input type="text" class="form-control" id="direccion" value="Calle Ficticia 123, Ciudad, País">
                                    </div>
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label"><strong>Teléfono</strong></label>
                                        <input type="tel" class="form-control" id="telefono" value="+123 456 7890">
                                    </div>
                                    <div class="mb-3">
                                        <label for="estadoSalud" class="form-label"><strong>Estado de Salud</strong></label>
                                        <input type="text" class="form-control" id="estadoSalud" value="Estable">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label"><strong>Contraseña</strong></label>
                                        <input type="password" class="form-control" id="contrasena" value="********">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-edit">Guardar Cambios</button>
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
