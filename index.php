<?php
    $pg = "inicio";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
    <div id="Inicio" class="container-fluid">
        <div class="container">
            <?php include_once("menu.php"); ?>
            <div class="container">
                <section>
                    <div class="row py-sm-4 py-3">
                        <div class="col-sm-8 col-12">
                            <h1>Hola! <br>Bienvenido a mi web</h1>
                            <h2> Eduardo Federico Madero Torres</h2>
                            <a href="proyectos.php" class="btn mt-sm-4">Conocé mis proyectos</a>
                        </div>
                    </div>

                </section>
            </div>

        </div>
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