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
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #45a247, #283c86);
            animation: pulse 3s infinite;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 0;
            padding: 10px 20px;
            background: linear-gradient(to right, #1CB5E0, #000046);
            max-height: 78px;
            width: 100%;
            animation: pulse 6s infinite;
        }

        .navbar .logo img {
            max-height: 40px;
        }

        .navbar .search-bar {
            flex: 1;
            margin: 0 10px;
        }

        .navbar .search-bar input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 4px;
        }

        .navbar .btn-group button {
            padding: 8px 15px;
            background-color: #007abc;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 10px;
        }

        .btn-group .dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            right: 0;
            background-color: #007abc;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 4px;
        }

        .btn-group:hover .dropdown-content {
            display: block;
        }

        .btn-with-icon {
            background-repeat: no-repeat;
            background-position: left center;
            padding-left: 35px;
        }

        .btn-logout {
            background-image: url('../iconlogout.png');
        }

        .btn-dropdown1 {
            background-image: url('../iconconf.png');
        }

        @keyframes pulse {
            0% { background-size: 100%; }
            75% { background-size: 200%; }
            100% { background-size: 100%; }
        }

        @media (max-width: 768px) {
            .navbar .search-bar {
                margin: 0;
            }

            .navbar .welcome-text {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .navbar {
                flex-direction: column;
                align-items: stretch;
            }

            .navbar .search-bar {
                margin: 10px 0;
            }

            .btn-group {
                display: flex;
                justify-content: space-around;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom">
        <div class="navbar-container container-fluid">
            <a class="navbar-brand logo" href="#">
                <img src="https://i.ibb.co/RSVNY3J/logo-2.png" alt="Logo">
            </a>
            <form class="d-flex search-bar">
                <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Buscar</button>
            </form>
            <span class="navbar-text me-3">Bienvenido, Job Moore</span>
            <div class="dropdown">
            <button class="btn  dropdown-toggle btn-with-icon btn-dropdown1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../iconflecha.png" alt="Logo" height="40">
            </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
</div>

<div class="dropdown mt-3">
        <button class="btn  dropdown-toggle btn-with-icon btn-dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../iconconf.png" alt="Logo" height="40">
        </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
    </ul>
</div>

            <!-- Botón de logout -->
            <button class="btn  btn-with-icon btn-logout" type="submit">
                <img src="../iconlogout.png" alt="Logo" height="40">
            </button>
        </div>
    </nav>
    <h1>Bienvenido a la página psicodélica</h1>
    <p>¡Explora el contenido y diviértete!</p>
    <div class="row" id="pnl-links" style=""><div class="col-lg-6">      <div class="panel panel-default">
        <div class="panel-heading">
            Set the alarm for the specified time
        </div>
        <div class="panel-body">
        <a href="/set-alarm-for-4-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 4 AM">4:00 AM</a> <a href="/set-alarm-for-4-30-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 4:30 AM">4:30 AM</a> <br><a href="/set-alarm-for-5-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 5 AM">5:00 AM</a> <a href="/set-alarm-for-5-15-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 5:15 AM">5:15 AM</a> <a href="/set-alarm-for-5-30-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 5:30 AM">5:30 AM</a> <a href="/set-alarm-for-5-45-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 5:45 AM">5:45 AM</a> <br><a href="/set-alarm-for-6-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 6 AM">6:00 AM</a> <a href="/set-alarm-for-6-15-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 6:15 AM">6:15 AM</a> <a href="/set-alarm-for-6-30-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 6:30 AM">6:30 AM</a> <a href="/set-alarm-for-6-45-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 6:45 AM">6:45 AM</a> <br><a href="/set-alarm-for-7-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 7 AM">7:00 AM</a> <a href="/set-alarm-for-7-15-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 7:15 AM">7:15 AM</a> <a href="/set-alarm-for-7-30-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 7:30 AM">7:30 AM</a> <a href="/set-alarm-for-7-45-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 7:45 AM">7:45 AM</a> <br><a href="/set-alarm-for-8-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 8 AM">8:00 AM</a> <a href="/set-alarm-for-8-15-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 8:15 AM">8:15 AM</a> <a href="/set-alarm-for-8-30-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 8:30 AM">8:30 AM</a> <a href="/set-alarm-for-8-45-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 8:45 AM">8:45 AM</a> <br><a href="/set-alarm-for-9-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 9 AM">9:00 AM</a> <a href="/set-alarm-for-10-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 10 AM">10:00 AM</a> <a href="/set-alarm-for-11-00-am/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 11 AM">11:00 AM</a> <a href="/set-alarm-for-12-00-pm/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 12 PM">12:00 PM</a> <a href="/set-alarm-for-1-00-pm/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 1 PM">1:00 PM</a> <a href="/set-alarm-for-2-00-pm/" class="btn btn-space btn-classic btn-primary" title="Set Alarm for 2 PM">2:00 PM</a> 
        </div>
    </div>
    </div>    <div class="col-lg-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="tools"><span class="icon ci-edit" id="btn-edit-history"></span></div>
                Recently used
        </div>
        <div class="panel-body">
            <table class="center table-history" id="alm-history"><tbody><tr id="history" 0=""><td><a href="#time=07:00&amp;title=Alarm+7%3A00+AM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 7:00 AM</a></td><td>7:00 AM</td></tr><tr id="history" 1=""><td><a href="#time=06:00&amp;title=Alarm+6%3A00+AM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 6:00 AM</a></td><td>6:00 AM</td></tr><tr id="history" 2=""><td><a href="#time=08:00&amp;title=Alarm+8%3A00+AM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 8:00 AM</a></td><td>8:00 AM</td></tr><tr id="history" 3=""><td><a href="#time=09:00&amp;title=Alarm+9%3A00+AM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 9:00 AM</a></td><td>9:00 AM</td></tr><tr id="history" 4=""><td><a href="#time=10:00&amp;title=Alarm+10%3A00+AM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 10:00 AM</a></td><td>10:00 AM</td></tr><tr id="history" 5=""><td><a href="#time=12:00&amp;title=Alarm+12%3A00+PM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 12:00 PM</a></td><td>12:00 PM</td></tr><tr id="history" 6=""><td><a href="#time=13:00&amp;title=Alarm+1%3A00+PM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 1:00 PM</a></td><td>1:00 PM</td></tr><tr id="history" 7=""><td><a href="#time=14:00&amp;title=Alarm+2%3A00+PM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 2:00 PM</a></td><td>2:00 PM</td></tr><tr id="history" 8=""><td><a href="#time=17:00&amp;title=Alarm+5%3A00+PM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 5:00 PM</a></td><td>5:00 PM</td></tr><tr id="history" 9=""><td><a href="#time=18:00&amp;title=Alarm+6%3A00+PM&amp;sound=childhood&amp;loop=0" onclick="scrollToTop(200);">Alarm 6:00 PM</a></td><td>6:00 PM</td></tr></tbody></table>
        </div>
        </div>
    </div>  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</body>
</html>
