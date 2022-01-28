<?php
/*
*
*          Template Name: Página Test
*
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#0B6660">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#767676">
    <link rel="shortcut icon" href="https://pcrentuempresa.cl/wp-content/web-arlo/assets/img/logo-ARLO.png" type="image/png">
    <link rel="stylesheet" href="https://pcrentuempresa.cl/wp-content/web-arlo/estilos.css">
    
    <!-- marcado para google -->
    <title>Examen de Covid rápido para tus trabajadores - Arlo Health</title>
    <meta name="description" content="Examen de SARS-CoV-2 rápido para tus trabajadores en las dependencias de tu empresa, examinamos a tus colaboradores y entregamos los informes y certificados respectivos">

    <!-- marcado para fb -->
    <meta property="og:url"                content="https://PcrEnTuEmpresa.cl" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Examen de Covid rápido para tus trabajadores" />
    <meta property="og:description"        content="En las dependencias de tu empresa examinamos a tus colaboradores y entregamos los informes respectivos" />
    <meta property="og:image"              content="https://pcrentuempresa.cl/wp-content/web-arlo/assets/img/Home_photo.png" />

    
    <!-- Traqueadores -->
    <!-- Hotjar Tracking Code for https://pcrentuempresa.cl/ -->
      <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:2805545,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YESSPQX5M3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-YESSPQX5M3');
    </script>

</head>
<body>
    <header id="menuheader" class="menu">
        <a href="#home" class="menu_logo">
            <!-- <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/img/logo-ARLO.png" class="menu_logo-img" alt="Logo Arlo"> -->
            <div class="deLado">
                <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/stethoscope.png" alt="estetoscopio">
                <h2>Arlo  <span>Health</span></h2>
            </div>
        </a>
        <div class="menu_block">
            <input type="checkbox" id="btn-check" class="menu_block_checkbox">
            <label for="btn-check" class="menu_block_icon">
                <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/boton-menu.png" class="menu_block_icon-img" alt="imagen boton menu">
            </label>
            <nav class="menu_block_nav">
                <ul class="menu_block_nav-ul">
                    <li onclick="location.href='#home'">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/home.png" alt="icono inicio">
                        <p>Inicio</p>
                    </li>
                    <li onclick="location.href='#servicios'">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/customer.png" alt="icono inicio">
                        <p>Servicios</p>
                    </li>
                    <li onclick="location.href='#sistema'">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/security.png" alt="icono inicio">
                        <p>Sistema</p>
                    </li>
                    <li onclick="location.href='#precio'">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/dollar.png" alt="icono inicio">
                        <p>Precio</p>
                    </li>
                    <li onclick="location.href='#contacto'">                        
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/contact-mail.png" alt="icono inicio">
                        <p>Contacto</p></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="bigContainer">
        <div id="home" class="slide">
            <!-- <h1>¿Sospecha de Covid en tu empresa? Tranquilidad a un test de distancia</h1> -->
            <h1>Toma de test rápidos de Covid 19 para tus trabajadores en tu empresa</h1>
            <h2>Test antígeno salival</h2>
            <button onclick="location.href='#contacto'">Cotizar ➜</button>
            <p>Una solución para ti<br> Por CMLTDA.</p>
        </div>
        <div id="servicios" class="slide">
            <div class="contenidosServicios">
                <h2>Nuestro servicio</h2>
                <div class="cuadro">
                    <i><img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/saliva.png" alt=""></i>
                    <h3>Toma de muestras, <br>Test Antígeno Salival <br>en tus dependencias</h3>
                    <p>La Prueba Rápida de Antígenos de COVID-19 (Fluido salival) es un inmunoensayo cromatográfico, destinada a la detección de la proteína de la nucleocáspside del SARS-CoV2 presentes en las muestras de fluido oral con resultados en 15 minutos.</p>
                </div>
                <button onclick="location.href='#especificidad'">Efectividad del test -></button>
            </div>
            <div class="imgFondoServicios"></div>
        </div>
        <div id="especificidad" class="slide">
            <div class="imgEspecificidad"></div>
            <div class="contendioEspecificidad">
                <h2>Tranquilidad, <br>para ti y tus trabajadores</h2>
                <h3>tranquilidad para tu empresa</h3>
                <p class="texto1">Tabla de Especificidad de detección del Coronavirus</p>
                <p class="texto2">Tabla de Especificidad de detección del Coronavirus con Prueba de antígenos<br>(fluido oral)</p>
                <div class="tabla1">
                    <div class="y1 colum-1 row-1 y-titulos">Prueba de antígenos <br>COVID-19 (fluido oral)</div>
                    <div class="y2 colum-2 row-1 y-titulos">RT - PCR <br>(95% ci.)</div>
                    <div class="y3 colum-3 row-1 y-titulos">Efectividad</div>
                    <div class="y4 colum-1 row-2 y-titulos">Sensibilidad</div>
                    <div class="y5 colum-2 row-2 y-contenido">82,5% ~ 95,1%</div>
                    <div class="y6 colum-3 row-2 y-contenido">95%</div>
                    <div class="y7 colum-1 row-3 y-titulos">Especificidad</div>
                    <div class="y8 colum-2 row-3 y-contenido">97,7% ~ 99,9%</div>
                    <div class="y9 colum-3 row-3 y-contenido">99,3%</div>
                    <div class="y10 colum-1 row-4 y-titulos">Precisión</div>
                    <div class="y11 colum-2 row-4 y-contenido">94,9% ~ 98,5%</div>
                    <div class="y12 colum-3 row-4 y-contenido">98,7%</div>
                </div>
                <div class="tabla2">
                    <div class="t1 t-titulos bor-right">RT - PCR (95% ci.)</div>
                    <div class="t2 t-titulos">Efectividad</div>
                    <div class="t3i t-Subtitulos">Sensibilidad</div>
                    <div class="t4 bor-right">82,5% ~ 95,1%</div>
                    <div class="t5">95%</div>
                    <div class="t6i t-Subtitulos">Especificidad</div>
                    <div class="t7 bor-right">97,7% ~ 99,9%</div>
                    <div class="t8">99,3%</div>
                    <div class="t9i t-Subtitulos">Precisión</div>
                    <div class="t10 bor-right">94,9% ~ 98,5%</div>
                    <div class="t11">98,7%</div>
                </div>
                <p class="texto3">Para su tranquilidad, contamos con los más Altos estándares en la toma de muestras, transporte y conservación, para asegurar un resultado fiable.</p>
            </div>
        </div>
        <div id="serviciosDos" class="slide">
            <div class="textos">
                <h2>Servicio a Domicilio</h2>
                <p>Creemos que la clave esencial del éxito de toda empresa es la eficiencia en los tiempos de sus colaboradores, es por esto que en <span>Arlo Health</span> nuestro personal va a las dependencias de tu empresa a realizar los exámenes rápidos de Sars CoV-2 a tus colaboradores, al finalizar entregaremos los resultados de cada uno de los testeados y un informa global.</p>
                <button onclick="location.href='#contacto'">Cotice con nosotros</button>
            </div>
            <div class="imgFondo"></div>
        </div>
        <div id="sistema" class="slide">
            <div class="igDeFondo"></div>
            <div class="textos2">
                <div class="superior">
                    <h2>Sistema de Trabajo</h2>
                    <p>Diseñamos un sencillo proceso, donde tomamos las muestras en tus propias instalaciones para todo Santiago y la Región Metropolitana.</p>
                </div>
                <div class="inferior">
                    <h3>Entregamos</h3>
                    <ul>
                        <li>·Instrucciones para los preparativos.</li>
                        <li>·Sugerencias, medidas, protocolos a seguir y seguimiento de contacto estrecho <span>en casos positivos</span>.</li>
                        <li>·Certificados <span>para cada</span> colaborador.</li>
                        <li>·Certificado resultados generales.</li>
                        <li>·<span>Certificación para la empresa</span> de cumplimiento de norma actual.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="precio" class="slide">
            <div class="imgfDeFondo"></div>
            <div class="dentro">
                <h2>Precios</h2>
                <div class="cuadrosDeValores">
                    <div class="cuadritos">
                        <h3>De 10 a 20 trabajadores a examinar</h3>
                        <h4>$35.000</h4>
                        <button onclick="location.href='#contacto'">Cotizar</button>
                    </div>
                    <div class="cuadritos">
                        <h3>De 21 a 50 trabajadores a examinar</h3>
                        <h4>$30.000</h4>
                        <button onclick="location.href='#contacto'">Cotizar</button>
                    </div>
                    <div class="cuadritos">
                        <h3>De 51 a 100 trabajadores a examinar</h3>
                        <h4>$28.000</h4>
                        <button onclick="location.href='#contacto'">Cotizar</button>
                    </div>
                    <div class="cuadritos">
                        <h3>De 101 o más trabajadores a examinar</h3>
                        <h4>A Determinar</h4>
                        <button onclick="location.href='#contacto'">Cotizar</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="contacto" class="slide">
            <div class="contacto_contenido">
                <h2>Contáctenos</h2>
                <form action="https://pcrentuempresa.cl/wp-content/web-arlo/enviarNew.php" method="post" class="contactanos__form">
                    <label for="name">
                        <span>Nombre</span>
                        <input required type="text" name="name" id="name" class="contactanos__form--name" placeholder="Nombre">
                    </label>
                    <label for="mail">
                        <span>E-mail</span>
                        <input required type="email" name="mail" id="mail" class="contactanos__form--email" placeholder="Email">
                    </label>
                    <label for="phone">
                        <span>Teléfono</span>
                        <input required type="tel" type="" name="phone" id="subject" class="contactanos__form--phone" placeholder="Teléfono">
                    </label>
                    <label for="message">
                        <span>Mensaje</span>
                        <textarea required name="message" class="contactanos__form--message" placeholder="Nombre de la empresa, Dirección de su empresa y cantidad de colaboradores a examinar." id="message"></textarea>
                    </label>
                    <div class="contactanos__form--btns"> 
                        <input type="reset" name="reset" id="reset">
                        <input type="submit" name="submit" id="submit">
                    </div>
                </form>
            </div>
            <div class="contacto_imgFondo"></div>
        </div>
    </main>
    <footer>
        <div class="fooImagen"></div>
        <div class="fooContenido">
            <div class="fooBlockUno">
                <div class="deLado">
                    <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/stethoscope.png" alt="estetoscopio">
                    <h2>Arlo <span>Health</span></h2>
                </div>
                <div class="deLado localitation">
                    <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/marcador-de-posicion.png" alt="marcado de posición">
                    <p>Santiago, Chile</p>
                </div>
            </div>
            <div class="abajo">
                <div class="fooBlockDos">
                    <h3>Contáctenos</h3>
                    <div class="deLado">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/phone-call.png" alt="Teléfono">
                        <p>+56 9 4963 0531</p>
                    </div>
                    <div class="deLado">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/correo-electronico-vacio.png" alt="">
                        <p>mauricio.sanhueza@cmltda.cl</p>
                    </div>
                    <div class="deLado oculto">
                        <img src="https://pcrentuempresa.cl/wp-content/web-arlo/assets/icons/marcador-de-posicion.png" alt="marcado de posición">
                        <p>Santiago, Chile</p>
                    </div>
                </div>
                <div class="fooBlockTres">
                    <h3>Empresa</h3>
                    <ul>
                        <li>Sobre nosotros</li>
                        <li>Clientes</li>
                        <li>Privacidad</li>
                        <li>Términos de servicio</li>
                        <li>Política de cookies</li>
                        <li>Términos y condiciones</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://pcrentuempresa.cl/wp-content/web-arlo/codigo.js"></script>
</html>