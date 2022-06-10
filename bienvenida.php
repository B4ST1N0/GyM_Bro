<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        sesssion_destroy();
        die();
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym.bro</title>
    <link rel="stylesheet" href="assets/css/pagina-inicial.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Preparativos</a>
            <a href="#">Reservar</a>
            <a href="php/cerrar_sesion.php">Cerrar sesión</a>
        </nav>
        <section class="textos-header">
            <h1>Gym-bro</h1>
            <h2>Universidad de Medellín</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Acerca de</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="assets/imagenes/pesas-gym-png-2.webp" alt="" calss="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Quienes pueden usuar el Gym?</h3>
                    <p>Estudiantes matriculados en la universidad, profesores y trabajadores de la U.</p>
                    <h3><span>2</span>Cuales son los horarios de el Gym?</h3>
                    <p>Lunes a viernes de 6 am a 10 pm, sabados de 6 am a 2 pm y domingos de 6 am a 12 pm</p>
                </div>
            </div>
        </section>
        <section class="clientes contenedor">
            <h2 class="titulo">Preparativos</h2>
            <div class="cards">
                <div class="card">
                    <img src="assets/imagenes/descarga.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Trapo</h4>
                        <p>Debes traer una toalla o trapo para el gimnasio, para limpiar las maquinas que utilices al finalizar tu entrenamiento. </p>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/imagenes/1021745.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>Ropa deportiva</h4>
                        <p>Debes traer ropa deportiva cómoda para poder utilizar las maquinas correctamente y tenis.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Reservar</h2>
                <iframe src="https://gym-bro.youcanbook.me/?noframe=true&skipHeaderFooter=true" id="ycbmiframegym-bro" style="width:100%;height:1000px;border:0px;background-color:transparent;" frameborder="0" allowtransparency="true"></iframe><script>window.addEventListener && window.addEventListener("message", function(event){if (event.origin === "https://gym-bro.youcanbook.me"){document.getElementById("ycbmiframegym-bro").style.height = event.data + "px";}}, false);</script>
            </div>

        </section>

    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Dirreccion</h4>
                <p>Cra. 87 #30-65, Medellín, Belén, Medellín, Antioquia</p>
            </div>
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>(604) 5904500</p>
            </div>
            <div class="content-foo">
                <h4>Correo</h4>
                <p>sebastianvanegasgarzon@outlook.com</p>
            </div>
        </div>
        <h2 class="titulo-final">Gym-bro</h2>
    </footer>

    
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/inicial.js"></script>
    
</body>
</html>