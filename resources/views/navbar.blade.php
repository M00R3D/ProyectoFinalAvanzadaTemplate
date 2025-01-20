<!-- resources/views/components/navbar.blade.php -->
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

    body[data-theme="dark"] {
        background: linear-gradient(45deg,rgb(59, 30, 67), #283c86);
        color: white;
    }
    
    body[data-theme="light"] {
        background: linear-gradient(45deg, #283c86, #45a247);
        color: black;
    }

    .navbar[data-theme="dark"] {
        background: linear-gradient(45deg,rgb(59, 30, 67), #283c86);
        color: white;
    }
    
    .navbar[data-theme="light"] {
        background: linear-gradient(45deg, #283c86, #45a247);
        color: black;
    }

    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        /* background: linear-gradient(to right, #1CB5E0, #000046); */
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

    .btn-with-icon {
        background-repeat: no-repeat;
        background-position: left center;
        padding-left: 35px;
    }

    .btn-logout {
        background-image: {{ asset('iconlogout.png') }};
    }

    .btn-dropdown1 {
        background-image: {{ asset('iconconf.png') }};
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

<nav class="navbar navbar-custom">
    <div class="navbar-container container-fluid">
        <a class="navbar-brand logo" href="{{ route('homepage') }}" target="_top">
            <img src="https://i.ibb.co/RSVNY3J/logo-2.png" alt="Logo">
        </a>
        <form class="d-flex search-bar">
            <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
        <div>
            <select id="themeSelector" class="form-select form-select-sm">
                <option value="light">Tema Claro</option>
                <option value="dark">Tema Oscuro</option>
            </select>
        </div>
        <span class="navbar-text me-3">Bienvenido, Job Moore</span>
        <div class="dropdown">
            <button class="btn dropdown-toggle btn-with-icon btn-dropdown1" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/iconflecha.png') }}" alt="Logo" height="40">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <div class="dropdown mt-3">
            <button class="btn dropdown-toggle btn-with-icon btn-dropdown1" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('images/iconconf.png') }}" alt="Logo" height="40">
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <a class="navbar-brand logo" href="{{ route('welcome') }}" target="_top">
            <img src="{{ asset('images/iconlogout.png') }}" alt="Logo" height="40">
        </a>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        const themeSelector = document.getElementById('themeSelector');
        const savedTheme = localStorage.getItem('theme') || 'light';
        document.body.setAttribute('data-theme', savedTheme);
        themeSelector.value = savedTheme;

        themeSelector.addEventListener('change', function () {
            const selectedTheme = themeSelector.value;
            document.body.setAttribute('data-theme', selectedTheme);
            localStorage.setItem('theme', selectedTheme);
            document.querySelector('.content').setAttribute('data-theme', selectedTheme);  // Update content theme
        });
    });
</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Seleccionar elementos relevantes
        const themeSelector = document.getElementById('themeSelector');
        const body = document.body;
        const navbar = document.querySelector('.navbar');

        // Obtener el tema guardado en localStorage o usar un tema predeterminado
        const savedTheme = localStorage.getItem('theme') || 'light';

        // Aplicar el tema al body y la navbar
        body.setAttribute('data-theme', savedTheme);
        navbar.setAttribute('data-theme', savedTheme);
        themeSelector.value = savedTheme;

        // Cambiar el tema cuando el usuario seleccione uno diferente
        themeSelector.addEventListener('change', function () {
            const selectedTheme = themeSelector.value;
            body.setAttribute('data-theme', selectedTheme);
            navbar.setAttribute('data-theme', selectedTheme);

            // Guardar el tema seleccionado en localStorage
            localStorage.setItem('theme', selectedTheme);
        });
    });
</script>

