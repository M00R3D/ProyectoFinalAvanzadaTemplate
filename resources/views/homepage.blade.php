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
            /* padding: 20%; */
        }
    </style>
</head>
<body>
    <div class ="navbar-frame">
        <iframe src="navbar.blade.php" width="100%" height="100%" frameborder="0"></iframe>
    </div>
    <div class="container-fluid d-flex">
        <aside class="sidebar col-md-3">
            <button class="btn" >
                <img src="../iconhome.png" alt="Logo" height="40">
            </button>
            <button class="btn">
                <img src="../iconCare.png" alt="Logo" height="40">
            </button>
            <button class="btn">
                <img src="../iconhist.png" alt="Logo" height="40">
            </button>
            <button class="btn">
                <img src="../iconPatients.png" alt="Logo" height="40">
            </button>
            <button class="btn">
                    <img src="../iconhelp.png" alt="Logo" height="40">
            </button>
            <button class="btn">
                    <img src="../iconpill.png" alt="Logo" height="40">
            </button>
            
            
        </aside>
        <main class="content col-md-9">
        <h1>Dashboard</h1>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">

            <table class="table table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>Alarma</th>
                        <th>Hora de la Alarma</th>
                        <th>Paciente y Medicina</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="/set-alarm-for-4-00-am/" class="btn btn-primary btn-sm">Alarma 4:00 AM</a></td>
                        <td>4:00 AM</td>
                        <td>Juan Pérez - Paracetamol</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-5-00-am/" class="btn btn-primary btn-sm">Alarma 5:00 AM</a></td>
                        <td>5:00 AM</td>
                        <td>María López - Ibuprofeno</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-6-00-am/" class="btn btn-primary btn-sm">Alarma 6:00 AM</a></td>
                        <td>6:00 AM</td>
                        <td>Carlos Sánchez - Amoxicilina</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-7-30-am/" class="btn btn-primary btn-sm">Alarma 7:30 AM</a></td>
                        <td>7:30 AM</td>
                        <td>Ana García - Omeprazol</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-8-00-am/" class="btn btn-primary btn-sm">Alarma 8:00 AM</a></td>
                        <td>8:00 AM</td>
                        <td>Pedro Gómez - Insulina</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-8-45-am/" class="btn btn-primary btn-sm">Alarma 8:45 AM</a></td>
                        <td>8:45 AM</td>
                        <td>Laura Ruiz - Loratadina</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-9-00-am/" class="btn btn-primary btn-sm">Alarma 9:00 AM</a></td>
                        <td>9:00 AM</td>
                        <td>Ricardo Díaz - Metformina</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-10-30-am/" class="btn btn-primary btn-sm">Alarma 10:30 AM</a></td>
                        <td>10:30 AM</td>
                        <td>Sofía Fernández - Salbutamol</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-11-00-am/" class="btn btn-primary btn-sm">Alarma 11:00 AM</a></td>
                        <td>11:00 AM</td>
                        <td>Diego Martínez - Aspirina</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-12-00-pm/" class="btn btn-primary btn-sm">Alarma 12:00 PM</a></td>
                        <td>12:00 PM</td>
                        <td>Gabriela Torres - Antibiótico</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-1-00-pm/" class="btn btn-primary btn-sm">Alarma 1:00 PM</a></td>
                        <td>1:00 PM</td>
                        <td>Daniela Hernández - Vitamina C</td>
                    </tr>
                    <tr>
                        <td><a href="/set-alarm-for-2-30-pm/" class="btn btn-primary btn-sm">Alarma 2:30 PM</a></td>
                        <td>2:30 PM</td>
                        <td>José Castillo - Antihistamínico</td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
        <!-- finalizacion del scroll panel del Dashboard -->


        <td><a href="/set-alarm-for-10-30-am/" class="btn btn-warning btn-sm btn-historial">Ver todo el Historial</a></td>

    </div>
</div>

        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
