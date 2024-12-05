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
            <h1>DashBoard</h1>
            <p>¡Explora el contenido y diviértete!</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel">
                        <div class="panel-heading">Set the alarm for the specified time</div>
                        <div class="panel-body">
                        <a href="/set-alarm-for-4-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 4 AM">4:00 AM</a>
                        <a href="/set-alarm-for-4-30-am/" class="btn btn-space btn-primary" title="Set Alarm for 4:30 AM">4:30 AM</a>
                        <br>
                        <a href="/set-alarm-for-5-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 5 AM">5:00 AM</a>
                        <a href="/set-alarm-for-5-15-am/" class="btn btn-space btn-primary" title="Set Alarm for 5:15 AM">5:15 AM</a>
                        <a href="/set-alarm-for-5-30-am/" class="btn btn-space btn-primary" title="Set Alarm for 5:30 AM">5:30 AM</a>
                        <a href="/set-alarm-for-5-45-am/" class="btn btn-space btn-primary" title="Set Alarm for 5:45 AM">5:45 AM</a>
                        <br>
                        <a href="/set-alarm-for-6-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 6 AM">6:00 AM</a>
                        <a href="/set-alarm-for-6-15-am/" class="btn btn-space btn-primary" title="Set Alarm for 6:15 AM">6:15 AM</a>
                        <a href="/set-alarm-for-6-30-am/" class="btn btn-space btn-primary" title="Set Alarm for 6:30 AM">6:30 AM</a>
                        <a href="/set-alarm-for-6-45-am/" class="btn btn-space btn-primary" title="Set Alarm for 6:45 AM">6:45 AM</a>
                        <br>
                        <a href="/set-alarm-for-7-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 7 AM">7:00 AM</a>
                        <a href="/set-alarm-for-7-15-am/" class="btn btn-space btn-primary" title="Set Alarm for 7:15 AM">7:15 AM</a>
                        <a href="/set-alarm-for-7-30-am/" class="btn btn-space btn-primary" title="Set Alarm for 7:30 AM">7:30 AM</a>
                        <a href="/set-alarm-for-7-45-am/" class="btn btn-space btn-primary" title="Set Alarm for 7:45 AM">7:45 AM</a>
                        <br>
                        <a href="/set-alarm-for-8-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 8 AM">8:00 AM</a>
                        <a href="/set-alarm-for-8-15-am/" class="btn btn-space btn-primary" title="Set Alarm for 8:15 AM">8:15 AM</a>
                        <a href="/set-alarm-for-8-30-am/" class="btn btn-space btn-primary" title="Set Alarm for 8:30 AM">8:30 AM</a>
                        <a href="/set-alarm-for-8-45-am/" class="btn btn-space btn-primary" title="Set Alarm for 8:45 AM">8:45 AM</a>
                        <br>
                        <a href="/set-alarm-for-9-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 9 AM">9:00 AM</a>
                        <a href="/set-alarm-for-10-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 10 AM">10:00 AM</a>
                        <a href="/set-alarm-for-11-00-am/" class="btn btn-space btn-primary" title="Set Alarm for 11 AM">11:00 AM</a>
                        <a href="/set-alarm-for-12-00-pm/" class="btn btn-space btn-primary" title="Set Alarm for 12 PM">12:00 PM</a>
                        <a href="/set-alarm-for-1-00-pm/" class="btn btn-space btn-primary" title="Set Alarm for 1 PM">1:00 PM</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
