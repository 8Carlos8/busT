<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro ADO</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f8f1ea;
        }

        .logo {
            width: 100%;
            padding: 20px;
            text-align: center;
            background-color: #f8f1ea;
        }

        .logo img {
            width: 150px;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 400px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: red;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f8f1ea;
            color: #333;
            font-size: 14px;
            width: 100%;
        }

        .footer a {
            color: #333;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer-icons img {
            width: 20px;
            margin: 0 5px;
        }
    </style>
</head>
<body>

<div class="logo">
    <img src="../ADO-Autobuses-de-Oriente-Logo-700x394.png" alt="ADO Logo">
</div>

<div class="form-container">
    <form>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" placeholder="Nombre">
        
        <label for="apellido-paterno">Apellido Paterno</label>
        <input type="text" id="apellido-paterno" placeholder="Apellido Paterno">
        
        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" placeholder="Teléfono">
        
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Email">
        
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Password">
        
        <button type="submit">Registrarte</button>
    </form>
</div>

<div class="footer">
  
</div>

</body>
</html>
