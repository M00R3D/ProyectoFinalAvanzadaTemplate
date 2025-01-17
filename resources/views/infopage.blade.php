@extends('layouts.app')

@section('title', 'Cuidados Especiales')
        <div class="navbar-frame">
            @include('navbar')
        </div>
@section('content')
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
            
        <section class="info-section">
        <h1>Acerca de Med Record</h1>
        <p>
            La necesidad de una <span class="highlight">gestión eficiente en el cuidado de la salud</span> es crucial, especialmente para las personas que deben tomar medicamentos regularmente y monitorear su estado de salud de manera constante. 
            Actualmente, muchos pacientes y cuidadores utilizan métodos manuales o herramientas desactualizadas, lo que conlleva a una administración ineficiente y, en algunos casos, a la pérdida de información crítica.
        </p>
        <p>
            <strong>Med Record</strong> es una solución web y móvil desarrollada en <strong>React Native</strong>, diseñada para eliminar estos problemas. Esta aplicación ayuda tanto a los pacientes como a los cuidadores, optimizando el proceso de monitoreo de la salud, el historial de medicamentos y el manejo de emergencias menores.
        </p>

        <h2>Funcionalidades clave</h2>
        <h3>Perfiles</h3>
        <h4>Cuidador</h4>
        <ul>
            <li>Dashboard con pendientes y tareas del cuidador.</li>
            <li>Gestión de pacientes.</li>
            <li>Historial y administración de medicamentos.</li>
            <li>Botones de ayuda, regreso y recursos informativos sobre condiciones médicas comunes y manejo de emergencias menores.</li>
        </ul>
        <h4>Paciente</h4>
        <ul>
            <li>Dashboard personalizado con información del paciente.</li>
            <li>Botón para reportar malestares al cuidador.</li>
            <li>Opción para actualizar síntomas y diagnósticos.</li>
        </ul>

        <h3>Otras características</h3>
        <ul>
            <li>Gestión de múltiples pacientes con perfiles personalizados.</li>
            <li>Acceso claro a información crítica como síntomas, diagnóstico y medicamentos necesarios.</li>
        </ul>

        <div class="mission">
            <h3>Misión</h3>
            <p>
                “Proveer una plataforma intuitiva y accesible que facilite la gestión eficiente del cuidado de la salud, permitiendo a pacientes y cuidadores monitorear medicamentos, síntomas y diagnósticos de manera clara. Ayudamos a mejorar la calidad de vida de las personas al ofrecer herramientas personalizadas para el control y seguimiento de su bienestar.”
            </p>
        </div>

        <div class="vision">
            <h3>Visión</h3>
            <p>
                “Ser la plataforma líder en la gestión de salud personalizada, transformando la manera en que pacientes y cuidadores interactúan con su bienestar, proporcionando soluciones tecnológicas innovadoras que mejoren la calidad de vida y promuevan un cuidado más efectivo y accesible en todo el mundo.”
            </p>
        </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    


</body>
</html>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
