<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario registro</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .logo{
            color: #3498db;
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
        .h1{
            font-size: 2em; /* Tamaño de letra típico de un h1 */
            font-weight: bold; /* Peso de fuente típico de h1 */
            margin: 0; /* Elimina márgenes por defecto */
            line-height: 1.2; /* Altura de línea común en títulos */
            color: inherit; /* Mantén el color del enlace o defínelo según lo necesites */
            text-decoration: none; /* Elimina subrayado si lo prefieres */
        }

        header h1 {
            margin: 0;
        }
        .header-buttons {
            display: flex;
            gap: 10px;
        }

        .container {
            display: flex;
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
        }
        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }
        .form-box {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 600px;
        margin: auto;
        margin-top: 8vh;
        margin-bottom: 8vh;
        }
        .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        margin-left:15px;

        }

     .form-grid .input-group {
            margin-bottom: 15px;
        }

    .form-box h2 {
        color: #3498db;
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        color: #000000;
        margin-bottom: 5px;
    }

    .input-group input {
        width: 250px;
        height:29px;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .btn {
        width: 100%;
        padding: 10px;
        background-color: #3498db;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .btn:hover {
        background-color: #219ef2;
    }
    .input-group input[type="file"] {
        width: 250px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #ffffff;
        font-size: 16px;
        color: #000000;
        cursor: pointer;
    }
    .input-group select {
        width: 250px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #ffffff;
        color: #000000;
        font-size: 16px;
        cursor: pointer;
    }

    .input-group select:focus {
        border-color: #000000;
        outline: none;
    }

    .footer {
        width: auto;
        padding: 15px;
        text-align: center;
        background-color: #ffffff;
        color: #777;
        font-size: 14px;
        box-shadow: 0px -4px 15px rgba(0, 0, 0, 0.1);
        margin-top: auto;
        margin-bottom: auto;
    }
</style>
<body>
    <header class="header">
        <h2 class="logo">Mi Portafolio</h2>
    </header>
    <div class="form-box">
        <h2>Ingresa tus datos personales</h2>

        <form action="{{url('datos_formulario')}}" method="POST">
            @csrf
            <!-- Contenedor de cuadrícula -->
            <div class="form-grid">
                <div class="input-group">
                    <label>Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="input-group">
                    <label>Apellido</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="input-group">
                    <label>Edad</label>
                    <input type="number" name="edad" required>
                </div>
                <div class="input-group">
                    <label>Genero</label>
                    <select name="genero" id="genero">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                        <option value="lesbiana">Lesbiana</option>
                        <option value="homosexual">Homosexual</option>
                        <option value="binario">Binario</option>
                        <option value="transgenero">Transgenero</option>
                        <option value="seleccionar" selected>Seleccionar</option>
                    </select>

                </div>
                <div class="input-group">
                    <label>Teléfono</label>
                    <input type="text" id="telefono" name="telefono" required>
                </div>
                <div class="input-group">
                    <label>Correo</label>
                    <input type="email" id="correo" name="correo" required>
                </div>
                <div class="input-group">
                    <label>Ubicación</label>
                    <input type="text" id="ubicacion" name="ubicacion" placeholder="Cali-Colombia" required>
                </div>

                <div class="input-group">
                    <label>Descripción</label>
                    <input type="text" id="descripcion" name="descripcion" required>
                </div>
                <div class="input-group">
                    <label>Año del titulo</label>
                    <input type="number" id="fechaTitulo" name="fechaTitulo" placeholder="Nombre de carrera" required>
                </div>
                <div class="input-group">
                    <label>Titulo</label>
                    <input type="text" id="titulo" name="titulo" placeholder="Nombre de carrera" required>
                </div>

                <div class="input-group">
                    <label>Define tu experiencia laboral</label>
                    <textarea name="experiencia" rows="10" cols="35">Escribe aquí tus experiencia</textarea>
                </div>
                <div class="input-group">
                    <label>Imagen</label>
                    <input type="file" id="imagen" name="imagen" required>
                </div>
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn">Registrar</button>
        </form>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
