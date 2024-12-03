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
    /* Modal - oculto por defecto */
    #modal-telefono, #modal-imagen, #modal-ubicacion, #modal-finalizacion, #modal-titulo, #modal-experiencia {
    display: none; /* Oculta el modal inicialmente */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    justify-content: center;
    align-items: center;
    z-index: 1000; /* Asegura que esté encima de otros elementos */
    }

    /* Contenido del modal */
    .datos-model {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 90%;
    max-width: 400px;
    }


    .cerrar {
    float: right;
    font-size: 20px;
    cursor: pointer;
    color: #333;
    transition: color 0.3s ease;
    }

    .cerrar:hover {
    color: #3498db;
    }

    #form-experiencia #experiencia {
    width: auto; 
    height: 80px; 
    padding: 10px; 
    font-size: 16px; /
    border: 1px solid #ccc; 
    border-radius: 8px; 
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
    resize: none; 
    }
    .ocultar-telefono{
    display: none; /* Oculta el modal inicialmente */
    z-index: 1000; /* Asegura que esté encima de otros elementos */
    }
    .telefono-a{
    display: flex;
    z-index: 1000;
    }
    .ubicacion-a{
    display: flex;
    z-index: 1000;
    }
    .Ocultar-resultado{
        display: none; /* Oculta el modal inicialmente */
        z-index: 1000; /* Asegura que esté encima de otros elementos */  
    }
    .ocultar-Fecha {
    display: none; /* Oculta inicialmente */
    z-index: 1000; /* Asegura que esté encima de otros elementos */
    }

    .mostrar-Fecha {
    display: inline; /* Muestra el elemento */
    z-index: 1000;
    }
   


    

</style>
</head>
<body>
    <header class="header">
        <h2 class="logo">Mi Portafolio</h2>
        <nav class="nav-menu">
            <a href="{{url('/')}}">Inicio</a>
        </nav>
    </header>
    <div class="container">
        <section class="section personal-info">
            <h2>Datos personales</h2>
            <div class="content">
                <div class="info">
                    <p><strong>Nombre:</strong>{{$datos->Nombre}}</p>
                    <p><strong>Apellidos:</strong>{{$datos->Apellido}}</p>
                    <p><strong>Edad:</strong>{{$datos->Edad}}</p>
                    <p><strong>Genero:</strong>{{$datos->Genero}}</p>
                    <p><strong>Correo:</strong>{{$datos->Correo}}</p>
                    <strong>Telefono:</strong><i clase="ocultar-telefono" id="ocultar-telefono">{{$datos->Telefono}}</i>
                    <a href="#" id="telefono-a" class="telefono-a">¿Deseas agregarlo?</a></p>
                        <!--Model para el telefono-->
                        <div id="modal-telefono">
                            <div class="datos-model">
                                <span class="cerrar cerrar-telefono">Atras</span>
                                <h3>Ingresa información</h3>
                                <form method="post" action="{{ url('recibirTelefono') }}">
                                    @csrf
                                    <label>Teléfono:</label>
                                    <input type="number" id="telefono" name="telefono" required>
                                    <input type="hidden" name="id" value="{{ $datos->id }}">
                                    <button type="submit" id="GuardarTelefono">Guardar cambios</button>
                                </form>
                                
                            </div>
                        </div>  
                    
                    
                         <!--Model para el telefono-->
                    <p><strong>Ubicacion:</strong><i class="ocultar-resultado" id="Ocultar-resultado">{{$datos->Ciudad}}</i>
                    <a href="#" id="ubicacion-a" class="ubicacion-a">¿Deseas agregarlo?</a></p></p>
                    
                    <!--Model para ubicacion -->
                    <div id="modal-ubicacion">
                        <div class="datos-model">
                            <span class="cerrar cerrar-ubicacion">Atras</span>
                            <h3>Ingresa información</h3>
                            <form method="post" action="{{url('recibirUbicacion')}}" id="form-ubicacion">
                                @csrf
                                <label>Ubicación:</label>
                                <input type="text" id="ubicacion" name="ubicacion" required>
                                <input type="hidden" id="id-ubicacion" name="id" value="{{$datos->id}}">
                                <button type="submit" id="GuardarUbicacion">Guardar cambios</button>
                            </form>
                        </div>
                    </div>  
                     <!--Model para la ubicacion-->
                    
                </div>
                <div class="photo"><i>{{$datos->imagen}}</i>
                    <a href="#" id="imagen-margen">¿Deseas agregar una imagen?</a>
                    <!--Model con js-->
                    <div id="modal-imagen">
                        <div class="datos-model">
                            <span class="cerrar cerrar-imagen">Atras</span>
                            <h3>Ingresa información</h3>
                            <form method="post" action="{{url('recibirImagen')}}" id="form-imagen" enctype="multipart/form-data">
                                @csrf
                                <label>Imagen:</label>
                                <input type="file" id="imagen" name="imagen" accept="image/*" required>
                                <input type="hidden" name="imagen" value="{{$datos->id}}">
                                <button type="submit">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
                     <!--Model con js-->
                </div>
            </div>
        </section>

        <!-- Formación -->
        <section class="section education">
            <h2>Perfil profesional</h2>
            <div class="content">
                <div class="education-item">
                    <p><strong>Año de finalización:</strong> <i class="ocultarFecha" id="ocultar-Fecha">{{ $datos->Fecha_Titulo1 }}</i></p>
                    <a href="#" id="finalizacion-model">¿Deseas agregarlo?</a>

                             <!--Model con js-->
                            <div id="modal-finalizacion">
                                <div class="datos-model">
                                    <span class="cerrar cerrar-finalizacion">Atras</span>
                                    <h3>Ingresa información</h3>
                                    <form method="post" action="{{url('recibirFecha')}}" id="form-finalizacion">                                       
                                         @csrf
                                        <label>Finalizacion titulo:</label>
                                        <input type="date" id="finalizacion" name="finalizacion" required>
                                        <input type="hidden" name="id" value="{{ $datos->id }}">
                                        <button type="submit" id="Guardar-fecha">Guardar cambios</button>
                                    </form>
                                    
                                </div>
                            </div>
                     <!--Model con js-->
                    
                     <p><strong>Título:</strong> <i>{{ $datos->Titulo1 }}</i></p>
                     <a href="#" id="Titulo-a">¿Deseas agregarlo?</a>
                     
                     <!-- Modal con JavaScript -->
                     <div id="modal-titulo">
                         <div class="datos-model">
                             <span class="cerrar cerrar-titulo">Atras</span>
                             <h3>Ingresa información</h3>
                             <form method="post" action="{{ url('recibirTitulo') }}" id="form-titulo">
                                 @csrf
                                 <label>Nombre del título:</label>
                                 <input type="text" id="titulo" name="titulo" required>
                                 <input type="hidden" name="id" value="{{ $datos->id }}">
                                 <button type="submit" id="GuardarTelefono">Guardar cambios</button>
                             </form>
                         </div>
                     </div>
                     
                     <!--Model con js-->
                </div>
            </div>
        </section>

        <!-- Experiencia -->
        <section class="section experience">
            <h2>Experiencia</h2>
            <div class="content">
                <div class="experience-item">
                    <p><strong>Experiencia:</strong> <i>{{$datos->Experiencia}}</i>
                    <p><a href="#" id="experiencia-a">¿Deseas agregarlo?</a></p>
                    <!--Model con js-->
                    <div id="modal-experiencia">
                        <div class="datos-model">
                            <span class="cerrar cerrar-experiencia">Atras</span>
                            <h3>Ingresa información</h3>
                            <form method="post" action="{{url('recibirExperiencia')}}" id="form-experiencia">
                                @csrf
                                <label>Cuentanos tu experiencia:</label>
                                <input type="text" id="experiencia" name="experiencia" required> <br>
                                <input type="hidden" name="id" value="{{$datos->id}}">
                                <button type="submit">Guardar cambios</button>
                            </form>
                        </div>
                    </div>
             <!--Model con js-->
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <p>&copy; 2024 Mi Portafolio. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
<script>  

// ------------------telefono
const modalTelefono = document.getElementById('modal-telefono');
const cerrarTelefonos = modalTelefono.querySelector('.cerrar');
const linkTelefono = document.getElementById('telefono-a');
// Mostrar el modal de teléfono
linkTelefono.addEventListener('click', (e) => {
    e.preventDefault();
    modalTelefono.style.display = 'flex';
});

// Cerrar modal de teléfono
cerrarTelefonos.addEventListener('click', () => {
    modalTelefono.style.display = 'none';
});


//                 telefono

//-----------------Ubicacion
const modalUbicacion = document.getElementById('modal-ubicacion');
const cerrarUbicacion = modalUbicacion.querySelector('.cerrar');
const linkUbicacion = document.getElementById('ubicacion-a');



linkUbicacion.addEventListener('click', (e) =>{
    e.preventDefault();
    modalUbicacion.style.display ='flex';
});

cerrarUbicacion.addEventListener('click', () =>{
    modalUbicacion.style.display = 'none';
});

//                 Ubicacion

//-----------------Fecha de titulo
const modalFinalizacion = document.getElementById('modal-finalizacion');
const cerrarFinalizacion = modalFinalizacion.querySelector('.cerrar');
const linkFinalizacion = document.getElementById('finalizacion-model');


linkFinalizacion.addEventListener('click', (e) => {
    e.preventDefault();
    modalFinalizacion.style.display = 'flex';
});

cerrarFinalizacion.addEventListener('click', () => {
    modalFinalizacion.style.display = 'none';
    
});
//                 Fecha de titulo

// ----------------- Título
const modalTitulo = document.getElementById('modal-titulo');
const cerrarTitulo = modalTitulo.querySelector('.cerrar');
const linkTitulo = document.getElementById('Titulo-a');


linkTitulo.addEventListener('click', (e) => {
    e.preventDefault();
    modalTitulo.style.display = 'flex';
});
cerrarTitulo.addEventListener('click', () => {
    modalTitulo.style.display = 'none';
});


// ----------------- Experiencia
const modalExperiencia = document.getElementById('modal-experiencia');
const cerrarExperiencia = modalExperiencia.querySelector('.cerrar');
const linkExperiencia = document.getElementById('experiencia-a');

linkExperiencia.addEventListener('click', (e) => {
    e.preventDefault();
    modalExperiencia.style.display = 'flex';
});

cerrarExperiencia.addEventListener('click', () => {
    modalExperiencia.style.display = 'none';
    
});


   // Modales y enlaces
const modalImagen = document.getElementById('modal-imagen');
// Botones de cerrar
const cerrarImagenes = modalImagen.querySelector('.cerrar');
// Enlaces para abrir modales
const linkImagen = document.getElementById('imagen-margen');

// Mostrar el modal de imagen
linkImagen.addEventListener('click', (e) => {
    e.preventDefault();
    modalImagen.style.display = 'flex';
});

// Cerrar modal de imagen
cerrarImagenes.addEventListener('click', () => {
    modalImagen.style.display = 'none';
});

</script>
