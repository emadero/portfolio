<?php 
include_once ("PHPMailer/src/PHPMailer.php");
include_once ("PHPMailer/src/SMTP.php");

/*if($_POST){
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $nombre = $_POST["txtAsunto"];
    $nombre = $_POST["txtMensaje"];
}
//envio el correo
if($nombre)
*/

?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
    <?php include_once("menu.php");?>


        <section id="contacto">
            <div class="row py-sm-4 py-3">
                <div class="col-12">
                    <h1>¡Trabajemos juntos!</h1>
                </div>
            </div>
            <div class="row  py-sm-3 py-2">
                <div class="col 12 col-sm-6">
                    <h2>Para más detalles sobre mi trabajo te invito ver mi <a href="https://www.linkedin.com/"
                            class="optDown">Linkedin</a>, descargar mi <span class="optDown">CV</span> o mandarme un <a
                            href="#formulario" class="optDown">mensaje.</a>
                    </h2>
                </div>
            </div>
            <div class="row" id="formulario">
                <div class="col-10">
                    <form action="">
                        <div class="row my-4">
                            <div class="col-6 form-group">
                                <input type="text" name="txtNombre" id="txtNombre" class="form-control" required
                                    placeholder="NOMBRE">
                            </div>
                            <div class="col-6 form-group">
                                <input type="email" name="txtCorreo" id="txtCorreo" class="form-control" required
                                    placeholder="EMAIL">
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" name="txtAsunto" id="txtAsunto" class="form-control"
                                    placeholder="ASUNTO">
                            </div>
                            <div class="col-12 form-group">
                                <textarea name="txtMensaje" id="txtMensaje" rows="7" placeholder="MENSAJE"
                                    class="form-control"></textarea>
                            </div>
                            <div class="col-12 text-center py-2">
                                <input type="submit" value="ENVIAR" name="btnEnviar" class="btn">
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </section>
    </div>


    <footer>
        <div class="container">
            <div class="row py-5">
                <div class="col-sm-4 col-12 text-sm-left text-center">
                    <a href="index.html" target="_blank"> ©Todos los derechos reservados
                        <br>2020</a>
                </div>
                <div class="col-sm-4 col-12 text-center py-4 py-sm-0" id="iconsfoot">
                    <a href="https://api.whatsapp.com/send?phone=541149705166&amp;text=Hola" target="_blank">
                        <i class="fab fa-whatsapp"></i></a>
                    <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-sm-4 col-12 text-sm-right text-center" id="patrocinio">
                    Patrocinado por
                    <br>
                    <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="blank">DePC Suite</a>
                </div>
            </div>
        </div>
    </footer>

    <footer id="footmb">
        <div class="container">
            <div class="row py-1" style="margin-left: 20px;">
                <div class=>
                    <a href="https://api.whatsapp.com/send?phone=541149705166&amp;text=Hola te" target="_blank">
                        <i class="fab fa-whatsapp"></i></a>
                </div>
                <div>

                    <a href="https://github.com" target="_blank"><i class="fab fa-github"></i></a>

                </div>


                <div>
                    <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>



            </div>
        </div>
    </footer>


</body>

</html>