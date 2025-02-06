<?php
$mensajeConfirmacion = "";
if (isset($_GET['confirmacion']) && $_GET['confirmacion'] == 'true') {
    $mensajeConfirmacion = "Gracias por tu consulta. Nos pondremos en contacto contigo lo antes posible.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Medico</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
        <nav class="navbar">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>
    <main class="inicio">
        <div class="header-content container">
            <div class="header-txt">
                <h1>Medical Center</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero laborum libero nisi, modi impedit in at. Aliquid hic facilis nemo repellendus culpa. Quos necessitatibus inventore sed eligendi, consectetur hic iusto?
                </p>
                <a href="#" class="btn-1">Información</a>
            </div>
            <div class="header-img">
                <img src="images/left.jpg" alt="Medical Center" class="center-image">
            </div>
        </div>
    </header>

    <main class="servicios">
        <section id="servicios">
            <h2>Servicios</h2>
            <div class="servicios-grid">
                <div class="servicio">
                    <img src="images/medicina general.jpg" alt="Medicina General">
                    <h3>Medicina General</h3>
                    <p>Ofrecemos consultas generales para diagnóstico y tratamiento integral de la salud.</p>
                    <p>Lunes a Viernes de 8:00 hs a 18:00 hs</p>
                </div>
                <div class="servicio">
                    <img src="images/pediatria.png" alt="Pediatría">
                    <h3>Pediatría</h3>
                    <p>Atención médica especializada para bebés, niños y adolescentes.</p>
                    <p>Martes y Jueves de 14:00 hs a 18:00 hs</p>
                </div>
                <div class="servicio">
                    <img src="images/cardiologia.png" alt="Cardiología">
                    <h3>Cardiología</h3>
                    <p>Diagnóstico y tratamiento avanzado de enfermedades cardiovasculares.</p>
                    <p>Lunes y Miércoles de 8:00 hs a 12:00 hs</p>
                </div>
                <div class="servicio">
                    <img src="images/dermatologia.png" alt="Dermatología">
                    <h3>Dermatología</h3>
                    <p>Cuida tu piel con nuestro equipo de dermatólogos expertos.</p>
                    <p>Viernes de 14:00 hs a 18:00 hs</p>
                </div>
            </div>
        </section>
    </main>

    <section class="formulario container">
    <form method="post" action="send.php" autocomplete="off">
        <h2 id="contact">Agenda consulta</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Teléfono celular" required>
                <i class="fa-solid fa-phone"></i>
            </div>
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo" required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-container">
                <textarea name="Mensaje" placeholder="Detalles de la consulta" required></textarea>
            </div>
            <input type="submit" name="send" class="btn" value="Enviar">
        </div>
    </form>

    <!-- Mensaje de confirmación -->
    <?php if (!empty($mensajeConfirmacion)) : ?>
        <div id="mensajeConfirmacion" style="margin-top: 10px; padding: 10px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 5px; text-align: center;">
            <p><?php echo $mensajeConfirmacion; ?></p>
        </div>
    <?php endif; ?>
</section>


    <footer class="footer">
        <div class="footer-content container">
            <p>&copy; 2025 Medical Center. Todos los derechos reservados.</p>
            <div class="link">
                <a href="#">Política de Privacidad</a>
                <a href="#">Términos de Uso</a>
            </div>
        </div>
    </footer>


</body>
</html>
