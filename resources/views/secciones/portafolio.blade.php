<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
<style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    }
    .header {
    width: auto;
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
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        font-size: 2em;
        color: #333;
    }

    /* Section Styles */
    .section {
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
    }

    .section h2 {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        margin: 0;
        font-size: 1.2em;
    }

    .section .content {
        padding: 15px;
    }

    /* Personal Info */
    .personal-info .content {
        display: flex;
        align-items: center;
    }

    .personal-info .info {
        flex: 1;
    }

    .personal-info .photo {
        margin-left: 20px;
    }

    .personal-info .photo img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* Education and Experience */
    .education-item,
    .experience-item {
        margin-bottom: 15px;
    }

    .experience-item ul {
        margin: 0;
        padding-left: 20px;
    }

    .experience-item li {
        list-style-type: disc;
        margin-bottom: 5px;
    }

    /* Skills */
    .skills .content p {
        margin: 0;
        font-size: 1em;
    }
    .footer {
    width: auto;
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
        <section class="section personal-info">
            <h2>Datos personales</h2>
            <div class="content">
                <div class="info">
                    <p><strong>Nombre:</strong>{{$usuario->Nombre}}</p>
                    <p><strong>Apellidos:</strong>{{$usuario->Apellido}}</p>
                    <p><strong>Edad:</strong>{{$usuario->Edad}}</p>
                    <p><strong>Genero:</strong>{{$usuario->Genero}}</p>
                    <p><strong>Correo:</strong>{{$usuario->Correo}}</p>
                    <p><strong>Telefono:</strong><a href="#">¿Deseas agregarlo?</a></p>
                    <p><strong>Ubicacion:</strong></p>
                </div>
                <div class="photo">
                    <a href="#">¿Deseas agregar una imagen?</a>
                </div>
            </div>
        </section>

        <!-- Formación -->
        <section class="section education">
            <h2>Perfil profesional</h2>
            <div class="content">
                <div class="education-item">
                    <p><strong>Año de finalizacion:</strong><a href="#">¿Deseas agregarlo?</a></p>
                    <p><strong>Titulo:</strong><a href="#">¿Deseas agregarlo?</a></p>
                </div>
            </div>
        </section>

        <!-- Experiencia -->
        <section class="section experience">
            <h2>Experiencia</h2>
            <div class="content">
                <div class="experience-item">
                    <p><a href="#">¿Deseas agregarlo?</a></p>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
