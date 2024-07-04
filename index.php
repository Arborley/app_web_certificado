<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            width: 100vw;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('img/fondo_principal.png') no-repeat center center fixed;
            background-size: cover;
            opacity: 0.3;
            /* Opacidad del 80% */
            z-index: -1;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
            opacity: 0.8%;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            padding-top: 15%;
        }

        .btn-container {
            position: fixed;
            right: 10%;
            top: 20%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .btn-image {
            position: relative;
            display: inline-block;
            margin: 15px;
        }

        .btn-image img {
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }

        .btn-text {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

       /*.logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 400px;
            height: 400px;
            z-index: 3;
        }*/

        .logo {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            z-index: 3;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="content">
    <img src="img/logo-transparente.png" alt="Logo de app_web_certi" class="logo">
        <div class="btn-container">
            <a href="index_facturas.php" class="btn-image">
                <img src="img/facturas_azul.png" alt="Facturas">
                <div class="btn-text">Facturas</div>
            </a>
            <a href="index_clientes.php" class="btn-image">
                <img src="img/clientes_azul.png" alt="Clientes">
                <div class="btn-text">Clientes</div>
            </a>
            <a href="productos/index_productos.php" class="btn-image">
                <img src="img/productos_azul.png" alt="Productos">
                <div class="btn-text">Productos</div>
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>