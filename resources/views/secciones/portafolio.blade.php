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
                <div class="photo">
                    <a href="#" id="imagen-margen">¿Deseas agregar una imagen?</a>
                    <!--Model con js-->
                    <div id="modal-imagen">
                        <div class="datos-model">
                            <span class="cerrar cerrar-imagen">Atras</span>
                            <h3>Ingresa información</h3>
                            <form method="post" action="#" id="form-imagen" enctype="multipart/form-data">
                                @csrf
                                <label>Imagen:</label>
                                <input type="file" id="imagen" name="imagen" accept="image/*" required>
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
                    <p><strong>Año de finalizacion:</strong>
                        <a href="#" id="finalizacion-model">¿Deseas agregarlo?</a></p>
                             <!--Model con js-->
                            <div id="modal-finalizacion">
                                <div class="datos-model">
                                    <span class="cerrar cerrar-finalizacion">Atras</span>
                                    <h3>Ingresa información</h3>
                                    <form method="post" action="#" id="form-fininalizacion">
                                        @csrf
                                        <label>Finalizacion titulo:</label>
                                        <input type="date" id="finalizacion" name="finalizacion" required>
                                        <button type="submit">Guardar cambios</button>
                                    </form>
                                </div>
                            </div>
                     <!--Model con js-->
                    
                        <p><strong>Titulo:</strong>
                    <a href="#" id="titulo-a">¿Deseas agregarlo?</a></p>
                             <!--Model con js-->
                             <div id="modal-titulo">
                                <div class="datos-model">
                                    <span class="cerrar cerrar-titulo">Atras</span>
                                    <h3>Ingresa información</h3>
                                    <form method="post" action="#" id="form-titulo">
                                        @csrf
                                        <label>Nombre del titulo:</label>
                                        <input type="text" id="titulo" name="titulo" required>
                                        <button type="submit">Guardar cambios</button>
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
                    <p><strong>Experiencia:</strong>
                    <p><a href="#" id="experiencia-a">¿Deseas agregarlo?</a></p>
                    <!--Model con js-->
                    <div id="modal-experiencia">
                        <div class="datos-model">
                            <span class="cerrar cerrar-experiencia">Atras</span>
                            <h3>Ingresa información</h3>
                            <form method="post" action="#" id="form-experiencia">
                                @csrf
                                <label>Cuentanos tu experiencia:</label>
                                <input type="text" id="experiencia" name="experiencia" required> <br>
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
const OcultarT = document.getElementById('GuardarTelefono');
// Mostrar el modal de teléfono
linkTelefono.addEventListener('click', (e) => {
    e.preventDefault();
    modalTelefono.style.display = 'flex';
});

// Cerrar modal de teléfono
cerrarTelefonos.addEventListener('click', () => {
    modalTelefono.style.display = 'none';
});
OcultarT.addEventListener('click',() =>{
    linkTelefono.style.display = 'none';
})
//                 telefono

//-----------------Ubicacion
const modalUbicacion = document.getElementById('modal-ubicacion');
const cerrarUbicacion = modalUbicacion.querySelector('.cerrar');
const linkUbicacion = document.getElementById('ubicacion-a');
const OcultarU = document.getElementById('GuardarUbicacion');


linkUbicacion.addEventListener('click', (e) =>{
    e.preventDefault();
    modalUbicacion.style.display ='flex';
});

cerrarUbicacion.addEventListener('click', () =>{
    modalUbicacion.style.display = 'none';
});
OcultarU.addEventListener('click', () =>{
    
    linkUbicacion.style.display = 'none';
});

//                 Ubicacion

   // Modales y enlaces
const modalImagen = document.getElementById('modal-imagen');
const modalFinalizacion = document.getElementById('modal-finalizacion');
const modalTitulo = document.getElementById('modal-titulo');
const modalExperiencia = document.getElementById('modal-experiencia');

// Botones de cerrar
const cerrarImagenes = modalImagen.querySelector('.cerrar');
const cerrarFinalizacion = modalFinalizacion.querySelector('.cerrar');
const cerrarTitulo = modalTitulo.querySelector('.cerrar');
const cerrarExperiencia = modalExperiencia.querySelector('.cerrar');

// Enlaces para abrir modales
const linkImagen = document.getElementById('imagen-margen');
const linkFinalizacion = document.getElementById('finalizacion-model');
const linkTitulo = document.getElementById('titulo-a');
const linkExperiencia = document.getElementById('experiencia-a');






// Mostrar el modal de imagen
linkImagen.addEventListener('click', (e) => {
    e.preventDefault();
    modalImagen.style.display = 'flex';
});



// Mostrar el modal de finalizacion
linkFinalizacion.addEventListener('click', (e) =>{
    e.preventDefault();
    modalFinalizacion.style.display = 'flex';
});

// Mostrar el modal de titulo
linkTitulo.addEventListener('click', (e) =>{
    e.preventDefault();
    modalTitulo.style.display = 'flex';
});

// Mostrarb el modal de experiencia
linkExperiencia.addEventListener('click',(e)=>{
    e.preventDefault();
    modalExperiencia.style.display = 'flex';
});


// Cerrar modal de imagen
cerrarImagenes.addEventListener('click', () => {
    modalImagen.style.display = 'none';
});



// Cerrar modal de finalicacion
cerrarFinalizacion.addEventListener('click', () =>{
    modalFinalizacion.style.display = 'none';
});

// Cerrar el moda de titulo
cerrarTitulo.addEventListener('click', () =>{
    modalTitulo.style.display = 'none';
});

// Cerrar el moda de experiencia
cerrarExperiencia.addEventListener('click', ()=>{
    modalExperiencia.style.display = 'none';
});    
</script>
