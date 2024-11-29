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
            background: #283c86;
            background: -webkit-linear-gradient(to bottom, #45a247, #283c86);
            background: linear-gradient(to bottom, #45a247, #283c86);
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
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
            font-size: 2rem;
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
            justify-content: center;
            background: #283c86;
            background: -webkit-linear-gradient(to bottom, #45a247, #283c86);
            background: linear-gradient(to bottom, #45a247, #283c86);
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            display: none;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        h1 {
            color: #ECE9E6;
            color: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);
            color: linear-gradient(to right, #FFFFFF, #ECE9E6);
            text-align: center;
        }

        .form-control {
            margin-bottom: 20px;
            background: #0F2027;
            background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
            background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
            opacity: 0.9;
        }

        .btn-primary {
            width: 100%;
            background: #000046;
            background: -webkit-linear-gradient(to top, #1CB5E0, #000046);
            background: linear-gradient(to top, #1CB5E0, #000046);
        }

        .error-message {
            color: red;
            font-size: 0.9rem;
            margin-bottom: 20px;
            text-align: center;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 20px;
                max-width: 90%;
            }

            .splash-screen {
                font-size: 1.5rem;
            }
        }
        .logo-image{
            width: 13%;
            height: 20%;
        }
    </style>
</head>

<body>
    <div class="splash-screen" id="splashScreen">
        <img src="https://i.ibb.co/RSVNY3J/logo-2.png" alt="logo-2" class="logo-image">
    </div>

    <div class="login-container" id="loginContainer">
        <h1>Inicia Sesión</h1>

        @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
        @endif

        <form method="POST" action="/public/views/homepage">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Contraseña:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
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
