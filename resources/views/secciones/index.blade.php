<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Creador de Portafolios</title>
<style>

    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #eef2f7;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh; /* Asegura que el body ocupe al menos el 100% de la altura de la ventana */
}

.header {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #3498db;
}

.nav-menu {
    display: flex;
    gap: 20px;
}

.nav-menu a {
    font-size: 16px;
    color: #555;
    text-decoration: none;
    transition: color 0.3s ease;
}

.nav-menu a:hover {
    color: #3498db;
}

.container {
    margin: 0 auto;
    max-width: 1200px;
    padding: 0 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 600px;
    flex-grow: 1; /* Esto hace que la caja de contenido crezca para ocupar el espacio disponible */
}

.welcome-box {
    text-align: center;
    padding: 50px;
    background-color: #ffffff;
    box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
    width: 90%;
    max-width: 500px;
    transition: transform 0.3s ease;
}

.welcome-box:hover {
    transform: scale(1.02);
}

h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
}

p {
    font-size: 18px;
    color: #555;
    margin-bottom: 30px;
}

.start-btn {
    display: inline-block;
    padding: 14px 25px;
    font-size: 16px;
    font-weight: bold;
    color: #ffffff;
    background-color: #3498db;
    text-decoration: none;
    border-radius: 8px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.start-btn:hover {
    background-color: #2980b9;
    box-shadow: 0px 5px 15px rgba(52, 152, 219, 0.4);
}

.footer {
    width: 100%;
    padding: 15px;
    text-align: center;
    background-color: #ffffff;
    color: #777;
    font-size: 14px;
    box-shadow: 0px -4px 15px rgba(0, 0, 0, 0.1);
    margin-top: auto; /* Empuja el footer hacia el final si hay espacio disponible */
}


</style>
</head>
<body>

    <header class="header">
        <h2 class="logo">Mi Portafolio</h2>
        <nav class="nav-menu">
            <a href="{{url('index')}}">Inicio</a>
        </nav>
    </header>

    <div class="container">
        <div class="welcome-box">
            <h1>¡Bienvenido al Creador de Portafolios!</h1>
            <p>Estamos emocionados de ayudarte a construir tu portafolio online. Haz clic en el botón para comenzar.</p>
            <a href="{{url('formulario')}}" class="start-btn">Crear tu Portafolio</a>
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
