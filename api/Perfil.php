<?php
// Obtener el valor del parámetro "correo_usuario" de la URL

  $correoUsuario = $_GET['correo_usuario'];
 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida a nuestra página web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333333;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .user-email {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Bienvenido/a a nuestra página web</h1>
        <div class="message">
            Estimado/a usuario/a,
        </div>
        <div class="message">
            Nos complace darle la más cordial bienvenida a nuestro sitio web. Es un honor contar con su presencia y confianza en nuestros servicios.
        </div>
        <div class="message">
            En esta plataforma, encontrará una amplia gama de recursos y herramientas diseñadas para satisfacer sus necesidades. Estamos comprometidos en brindarle una experiencia excepcional y garantizar su plena satisfacción.
        </div>
        <div class="message">
            Queremos agradecerle por elegirnos como su destino digital preferido. Valoramos su tiempo y dedicación, por lo que nos esforzamos en proporcionarle contenido relevante y de calidad.
        </div>
        <div class="message">
            Asimismo, nos complace informarle que hemos registrado su dirección de correo electrónico en nuestro sistema:
        </div>
        <div class="user-email">
            <?php echo $correoUsuario; ?>
        </div>
        <div class="message">
            Esta dirección será utilizada para mantenerlo/a informado/a sobre las últimas actualizaciones, noticias relevantes y promociones especiales. Le animamos a revisar su bandeja de entrada con regularidad para no perderse ninguna novedad.
        </div>
        <div class="message">
            Nuestro equipo está dedicado a ofrecerle un servicio excepcional y estamos a su disposición para cualquier consulta o asistencia adicional que pueda requerir. No dude en ponerse en contacto con nosotros en cualquier momento.
        </div>
        <div class="message">
            Esperamos que disfrute de su experiencia en nuestro sitio web. ¡Bienvenido/a a nuestra comunidad en línea!
        </div>
        <div class="message">
            Atentamente,
            <br>
            El equipo de la página web
        </div>
    </div>
</body>



</html>
