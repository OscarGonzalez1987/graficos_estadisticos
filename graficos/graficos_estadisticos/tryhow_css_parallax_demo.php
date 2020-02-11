<!DOCTYPE html>
<!-- saved from url=(0060)https://www.w3schools.com/howto/tryhow_css_parallax_demo.htm

********************************************************************************

GOBERNACION
https://upload.wikimedia.org/wikipedia/commons/2/2c/Edificio_de_La_Gobernaci%C3%B3n_del_Norte_de_Santander.jpg
derechos autor:
https://es.wikipedia.org/wiki/Archivo:Edificio_de_La_Gobernaci%C3%B3n_del_Norte_de_Santander.jpg

********************************************************************************

INTERIOR DE LA GOBERNACION
https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Gobernaci%C3%B3n_de_Norte_de_Santander_-_Interior_I.jpg/800px-Gobernaci%C3%B3n_de_Norte_de_Santander_-_Interior_I.jpg
derechos de autor:
https://es.wikipedia.org/wiki/Archivo:Gobernaci%C3%B3n_de_Norte_de_Santander_-_Interior_I.jpg

********************************************************************************

TEMPLO HISTORICO
https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Templo_Hist%C3%B3rico_en_C%C3%BAcuta.JPG/800px-Templo_Hist%C3%B3rico_en_C%C3%BAcuta.JPG
derechos de autor:
https://es.m.wikipedia.org/wiki/Archivo:Templo_Hist%C3%B3rico_en_C%C3%BAcuta.JPG

********************************************************************************
-->

<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body, html {
                height: 100%;
                margin: 0;
                font: 400 15px/1.8 "Lato", sans-serif;
                color: #777;
            }

            .bgimg-1, .bgimg-2, .bgimg-3 {
                position: relative;
                opacity: 0.5;
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;

            }
            .bgimg-1 {
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/2/2c/Edificio_de_La_Gobernaci%C3%B3n_del_Norte_de_Santander.jpg");
                min-height: 100%;
            }

            .bgimg-2 {
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Gobernaci%C3%B3n_de_Norte_de_Santander_-_Interior_I.jpg/800px-Gobernaci%C3%B3n_de_Norte_de_Santander_-_Interior_I.jpg");
                min-height: 400px;
            }

            .bgimg-3 {
                background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Templo_Hist%C3%B3rico_en_C%C3%BAcuta.JPG/800px-Templo_Hist%C3%B3rico_en_C%C3%BAcuta.JPG");
                min-height: 400px;
            }

            .caption {
                position: absolute;
                left: 0;
                top: 50%;
                width: 100%;
                text-align: center;
                color: #000;
            }

            .caption span.border {
                background-color: #111;
                color: #fff;
                padding: 18px;
                font-size: 25px;
                letter-spacing: 10px;
            }

            h3 {
                letter-spacing: 5px;
                text-transform: uppercase;
                font: 20px "Lato", sans-serif;
                color: #111;
            }

            /* Turn off parallax scrolling for tablets and phones */
            @media only screen and (max-device-width: 1024px) {
                .bgimg-1, .bgimg-2, .bgimg-3 {
                    background-attachment: scroll;
                }
            }
        </style>
        <style>
            #logo{
                padding:10px;
            }
        </style>

    </head>

    <body>
        <img id="logo" src="https://emsitel.com.co/wp-content/uploads/2019/03/logo_horizontal.png" style="width:20%; margin-left:50px;" alt=""/>
        <div class="bgimg-1">
            <div class="caption">
                <span class="border">Cinco minutos hacen la diferencia.</span>
            </div>
        </div>

        <!-- PARRAFO 1 -------------------------------------------------------->
        <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
            <?php
            include "parrafo_1.php";
            ?>
        </div>
        <div class="bgimg-2">
            <div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">LESS HEIGHT</span>
            </div>
        </div>

        <!-- PARRAFO 2 -------------------------------------------------------->

        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
                <?php
                include "parrafo_2.php";
                ?>
            </div>
        </div>
        <div class="bgimg-3">
            <div class="caption">
                <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
            </div>
        </div>

        <!-- PARRAFO 3 -------------------------------------------------------->

        <div style="position:relative;">
            <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
                <?php
                include "parrafo_3.php";
                ?>
            </div>
        </div>
        <div class="bgimg-1">
            <div class="caption">
                <span class="border">Una buena llamada, cambia la vida!</span>
            </div>
        </div>

    </body>
</html>