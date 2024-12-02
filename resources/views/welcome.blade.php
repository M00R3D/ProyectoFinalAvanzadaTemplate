<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: center;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #45a247, #283c86);
            animation: pulse 3s infinite;
            height: 100vh;
            margin: 0;
        }
        .splash-screen {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            font-size: 2.5rem;
            z-index: 9999;
            animation: fadeOut 3s forwards;
        }
        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
        @keyframes pulse {
            0% { background-size: 100%; }
            75% { background-size: 200%; }
            100% { background-size: 100%; }
        }

        @keyframes pulseB {
            0% { background-size: 100%; }
            75% { background-size: 200%; }
            100% { background-size: 100%; }
        }

        

        .center-panel {
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 400px;
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.5);
            animation: pulseB 5s infinite;
        }


        @media (max-width: 1200px) {
            .container {
                padding: 30px;
            }
        }

        @media (max-width: 992px) {
            .container {
                margin-top: 20%;
                padding: 25px;
                max-width: 380px;
            }

            .splash-screen {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                margin-top: 20%;
                padding: 20px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .container {
                margin-top: 40%;
                padding: 15px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.6rem;
            }

            .logo-image {
                width: 20%;
            }
        }
        @media (max-width: 376px) {
            .container {
                margin-top: 60%;
                padding: 15px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.6rem;
            }

            .logo-image {
                width: 20%;
            }
        }
        @media (max-width: 176px) {
            .container {
                margin-top: 90%;
                padding: 15px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.6rem;
            }

            .logo-image {
                width: 20%;
            }
        }

        h2 {
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-label {
            font-weight: bold;
            color: #fff;
            transition transform 1s ease;
        }
        .form-label:hover {
            font-weight: bold;
            color: #fff;
            transform: scale(0.98);
        }
        .form-control {
            background: #00416A;
            background: -webkit-linear-gradient(to top, #E4E5E6, #00416A);
            background: linear-gradient(to top, #E4E5E6, #00416A);
            background-size: 200% 200%;
            background-position: right bottom;
            border: none;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            transition: background-position 0.8s ease, box-shadow 0.4s ease;

        }
        .form-control:hover {
            background-position: left top;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            width: 100%;
            background: #0f0c29;
            background: -webkit-linear-gradient(to top, #24243e, #302b63, #0f0c29);
            background: linear-gradient(to top, #24243e, #302b63, #0f0c29);
            background-size: 200% 200%; 
            background-position: right bottom;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: background-position 0.8s ease, transform 0.3s ease; 
        }

        .btn-primary:hover {
            background-position: left top;
            transform: scale(1.1);

        }
        .message a {
            color: #DCE35B; 
            font-size: 0.6rem;
            text-decoration: none;
            display: inline-block;
            transition: color 0.3s ease, transform 0.3s ease; 
        }

        .message a:hover {
            color: #4CAF50; 
            transform: scale(1.05);
            text-shadow: 0px 0px 18px #283c86;
        }

        .message {
            margin: 15px 0 0;
            color: #b3b3b3; 
            text-align: center;
            font-size: 12px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="splash-screen" id="splashScreen">
        <img src="https://i.ibb.co/RSVNY3J/logo-2.png" alt="logo-2" class="logo-image">
    </div>
    <div class="container">
        <div id="loginForm">
            <h2>Inicia Sesión</h2>
            <form method="POST" action="/login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                <p class="message">¿No tienes una cuenta? <a href="#" onclick="showRegisterForm()">Regístrate aquí</a></p>
            </form>
        </div>

        <div id="registerForm" class="hidden">
            <h2>Registrarse</h2>
            <form action="toggleRoleForm()">
                <div class="mb-3">
                    <label for="firstName" class="form-label">Nombre:</label>
                    <input type="text" id="firstName" name="firstName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="lastName" class="form-label">Apellido:</label>
                    <input type="text" id="lastName" name="lastName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="registerEmail" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Rol:</label>
                    <select id="role" name="role" class="form-control" required>
                        <option value="cuidador">Cuidador</option>
                        <option value="paciente">Paciente</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" id="registerPassword" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña:</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
                </div>
                <button type="button" class="btn btn-primary" onclick="toggleRoleForm()">Continuar</button>
                <p class="message">¿Ya tienes una cuenta? <a href="#" onclick="showLoginForm()">Inicia Sesión</a></p>
            </form>
        </div>
        
            <div id="registerCareForm" class="hidden">
                <h2>Registrarse</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="especialidad" class="form-label">Especialidad:</label>
                        <input type="text" id="especialidad" name="especialidad" class="form-control" required>
                    </div>
                </form>
            </div>

            <div id="registerPatientForm" class="hidden">
                <h2>Registrarse</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección:</label>
                        <input type="text" id="direccion" name="direccion" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="estado_salud" class="form-label">Estado de Salud:</label>
                        <textarea id="estado_salud" name="estado_salud" class="form-control" rows="4" required></textarea>
                    </div>
                </form>
            </div>
            
            
            
    </div>
    <script>
        // Función para manejar el splash screen
        window.addEventListener('load', () => {
            const splashScreen = document.getElementById('splashScreen');
            setTimeout(() => {
                splashScreen.style.display = 'none';
            }, 3000);
        });

        // Función para alternar entre formularios
        function showLoginForm() {
            document.getElementById('loginForm').classList.remove('hidden');
            document.getElementById('registerForm').classList.add('hidden');
        }

        function toggleRoleForm() {
            const role = document.getElementById('role').value;
            // Ocultar el formulario principal
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('registerForm').classList.add('hidden');
            // Mostrar el formulario específico según el rol
            if (role === 'paciente') {
                document.getElementById('registerPatientForm').classList.remove('hidden');
                document.getElementById('registerCareForm').classList.add('hidden');
            } else if (role === 'cuidador') {
                document.getElementById('registerCareForm').classList.remove('hidden');
                document.getElementById('registerPatientForm').classList.add('hidden');
            }
        }

        // Función para regresar al formulario de registro principal
        function showRegisterForm() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('registerForm').classList.remove('hidden');
            document.getElementById('registerPatientForm').classList.add('hidden');
            document.getElementById('registerCareForm').classList.add('hidden');
        }
    </script>
</body>

</html>
