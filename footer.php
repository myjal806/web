
    <footer>
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="social_icon">
        <li><a href="https://wa.me/message/IREGEUO4XHVNN1?src=qr">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a></li>
            <li><a href="https://www.facebook.com/hostalmirador21">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="https://www.instagram.com/hostalmirador__/?igshid=NjZxdjRidGF0enMy">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
        <ul class="menu">
            <li><a href="cc.php">Habitaciones</a></li>
            <li><a></a></li>
            <li><a href="galeria.php">Galería</a></li>
            <li><a></a></li>
            <li><a href="restau.php">Restaurante</a></li>
            <li><a></a></li>
            <li><a href="#">Reservas</a></li>
            <li><a></a></li>
            <li><a href="#">Contactanos</a></li>
        </ul>
        <p>© 2024 Hostal Mirador Pisco | Todos los derechos reservados.</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<style>
   @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

footer {
    position: relative;
    width: 100%;
    background: rgb(167,149,122);
    min-height: 200px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size:18px;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

footer .social_icon,
footer .menu {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}

footer .social_icon li,
footer .menu li {
    list-style: none;
}

footer .social_icon li a {
    font-size: 2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}

footer .social_icon li a :hover {
    transform: translateY(-10px);
}

footer .menu li a {
    font-size: 1.2em;
    color: #fff;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none;
    opacity: 0.75;
}

footer .menu li a:hover {
    opacity: 0.5;
}

footer p {
    color: #fff;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: 1.1em;
}

footer .wave {
    position: absolute;
    top: -100px;
    left: 0;
    width: 100%;
    height: 100px;
    background: url(imagenes/wave.png);
    background-size: 1000px 100px;
}

footer .wave#wave1 {
    z-index: 1000;
    opacity: 1;
    bottom: 0;
    animation: animateWave 4s linear infinite;
}

footer .wave#wave2 {
    z-index: 999;
    opacity: 0.5;
    bottom: 15px;
    animation: animateWave_02 4s linear infinite;
}

footer .wave#wave3 {
    z-index: 1000;
    opacity: 0.2;
    bottom: 0;
    animation: animateWave 3s linear infinite;
}

footer .wave#wave4 {
    z-index: 999;
    opacity: 0.7;
    bottom: 20px;
    animation: animateWave_02 5s linear infinite;
}
@media (max-width: 1366px) {
    footer {
        font-size: 16px; /* Reducir ligeramente el tamaño de fuente */
        padding: 0px 0px; /* Reducir el padding */
    }

    footer .social_icon li a {
        font-size: 1.8em; /* Reducir el tamaño de los íconos */
        margin: 0 8px; /* Reducir el margen entre los íconos */
    }

    footer .menu li a {
        font-size: 0.6em; /* Reducir el tamaño del texto de los enlaces del menú */
        margin: 0 8px; /* Ajustar el margen entre enlaces */
    }

    footer p {
        font-size: 1em; /* Reducir el tamaño del texto del párrafo */
        margin-top: 10px; /* Ajustar márgenes */
        margin-bottom: 8px;
        margin-left: 25%;
    }

    footer .wave#wave3 {
        height: 80px; /* Reducir la altura de las olas */
        background-size: 800px 80px; /* Ajustar el tamaño del fondo de las olas */
    }


    @keyframes animateWave {
        0% {
            background-position-x: 800px; /* Ajustar la animación para la nueva anchura */
        }

        100% {
            background-position-x: 0px;
        }
    }

    @keyframes animateWave_02 {
        0% {
            background-position-x: 0px;
        }

        100% {
            background-position-x: 800px; /* Ajustar la animación para la nueva anchura */
        }
    }
}


@keyframes animateWave {
    0% {
        background-position-x: 1000px;
    }

    100% {
        background-position-x: 0px;
    }
}

@keyframes animateWave_02 {
    0% {
        background-position-x: 0px;
    }

    100% {
        background-position-x: 1000px;
    }
}
</style>