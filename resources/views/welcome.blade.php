<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #45a247, #283c86);
            height: 100vh;
            margin: 0;
            overflow: auto;
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

        .login-container {
            background: #0F2027;
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.5);
            width: 100%;
            max-width: 450px;
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
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

        .form-control:focus {
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
        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 20px;
            text-align: center;
        }

        .logo-image {
            width: 15%;
            height: auto;
            margin-bottom: 30px;
        }

        @media (max-width: 1200px) {
            .login-container {
                padding: 30px;
            }
        }

        @media (max-width: 992px) {
            .login-container {
                padding: 25px;
                max-width: 380px;
            }

            .splash-screen {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .login-container {
                padding: 20px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 576px) {
            .login-container {
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
    </style>
</head>

<body>
    <div class="splash-screen" id="splashScreen">
        <img src="https://i.ibb.co/RSVNY3J/logo-2.png" alt="logo-2" class="logo-image">
    </div>

    <div class="login-container" id="loginContainer">
        <h1 class="text-center text-white mb-4">Inicia Sesión</h1>

        @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="{{ url('/public/views/homepage') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        setTimeout(function() {
            document.getElementById('splashScreen').style.display = 'none';
            const loginContainer = document.getElementById('loginContainer');
            loginContainer.style.display = 'block';
            loginContainer.style.opacity = 1;
            loginContainer.style.transform = 'translateY(0)';
        }, 3000);
    </script>
</body>

</html>
