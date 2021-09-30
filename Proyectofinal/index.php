<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League Of Legends</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,800;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/headerFooter.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <script src="https://kit.fontawesome.com/d54fb62c44.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/icons8-liga-de-leyendas-30.png" type="icons8-liga-de-leyendas-30">
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <article>
            <a class="logo" href="index.html"><img src="img/icons8-liga-de-leyendas-60.png" alt="Logo"></a>
        </article>


        <button id="menu-icon-mobile">
            <i class="fas fa-bars" id="menu-mobile-icon-open"></i>
            <i class="fas fa-times" id="menu-mobile-icon-close"></i>
        </button>
        <nav>
            <ul id="menu-first">
                <li class="menu-first-item-class active">
                    <a href="#">Inicio</a>
                </li>
                <li class="menu-first-item-class">
                    <a href="#historia">historia</a>
                </li>
                <li class="menu-first-item-class">
                    <a href="#juego">Estilos</a>
                </li>
                <li class="menu-first-item-class">
                    <a href="#campeon">Campeones</a>
                </li>
                <li class="menu-first-item-class">
                    <a href="#create">Crear cuenta</a>
                </li>
                <li>
                    <article class="ico">
                        <a class="ico-1" href="https://www.facebook.com" target="_blank"><i
                                class="fab fa-facebook-square"></i></a>
                        <a class="ico-2" href="https://www.instagram.com" target="_blank"><i
                                class="fab fa-instagram-square"></i></a>
                        <a class="ico-3" href="https://github.com/xNatzhu" target="_blank"><i
                                class="fab fa-github-square"></i></a>
                    </article>
                </li>
            </ul>
        </nav>
    </header>

    <main>

        <section id="slider">
            <article class="slider_contents_row">
                <h1>
                    <em>Una <span>nueva</span> aventura</em>
                </h1>
                <a href="#" class="btn-light">descargar</a>
            </article>

            <article class="slider_background_video_animation">
                <video src="img/background1.mp4" autoplay muted loop></video>
            </article>
        </section>

        <section id="slider_mobile">
            <div class="slider_mobile_contend_column">
                <h1>
                    <em>Una <span>nueva</span> aventura</em>
                </h1>
                <article>
                    <p>
                        ¡Un mmorpg donde podrás poner tu habilidades en acción, prepárate y lucha por tu honor!.
                        <br>
                        Sube de rango, gana recompensa, crea estrategia y condúcete a la victoria.
                    </p>
                </article>
                <a href="#" class="btn-light">descargar</a>
            </div>

        </section>


        <section id="historia" class="firstsection_row">
            <div class="column_one_section_first">
                <h1>
                    ¿Qué es league <span>of</span> legends?
                </h1>
                <article>
                    <p>
                        League of Legends es un juego de estrategia por equipos en el que dos equipos
                        de cinco campeones se enfrentan para ver quién destruye antes la base del otro.
                        <br>
                        Elige de entre un elenco de 140 campeones para realizar jugadas épicas, asesinar rivales y
                        derribar
                        torretas para alzarte con la victoria
                    </p>
                    <a href="#" class="btn">historia</a>
                    <a href="#" class="btn-light">tutorial</a>
                </article>
            </div>
            <div>
                <img src="img/akali3.png">
            </div>
        </section>

        <section id="juego" class="second_section">

            <div id="second_section_row">

                <div class="second_section_row_contents_columns_one">
                    <article>
                        <h2>¡Crea <span>tu</span> estilo de juego!</h2>
                        <p>
                            Crea tu estilo de juego, y aventúrate por League Of legends.
                            Encontraras diferentes tipos de ítems donde podrás crear tus propias estrategias de juegos.
                            <br>
                            Elimina súbditos, destruye torretas, y acércate al Nexo.
                            <br>
                            En este MMORPG podrás encontrar diferentes tipos de campeones que se ajustan para diversos
                            tipos roles, mejora tus habilidades y posiciónate con los mejores jugadores de League Of
                            Legends.
                            <br><br>
                            ¡Encuentra tu habilidad interior!
                        </p>
                        <a href="#" class="btn-light">Estrategia</a>
                    </article>
                </div>

                <div class="second_section_row_contents_columns_two">
                    <iframe width="786" height="442" src="https://www.youtube.com/embed/vzHrjOMfHPY"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
        </section>

        <section id="third_section_main">
            <h1 id="campeon">Escoje a <span>tu</span> compañero</h1>
        </section>

        <section id="third_section">
            <article class="third_section_one"></article>
            <article class="third_section_two"></article>
            <article class="third_section_tree"></article>
        </section>

        <section id="third_section_main">
            <button>
                <a href="" class="btn">Campeones</a>
            </button>
        </section>

        <section id="create" class="fourth_section">
            <h2>Crea <span>tu</span> cuenta</h2>

            <article class="fourth_section_contents_columns_one">
                <form method="post">
                    <ul>
                        <label>Usuario
                            <br>
                            <input type="text" name="name" placeholder="Ingrese su nombre" required>
                        </label>

                        <br>
                        <br>
                        <label>Email:
                            <br>
                            <input type="email" name="email" placeholder="Ingrese su email" required>
                        </label>

                        <br>
                        <br>

                        <label>Contraseña:
                            <br>
                            <input type="password" name="password" placeholder="Ingrese su contraseña" required>
                        </label>

                        <br>
                        <br>

                        <label>
                            <input type="checkbox" name="check" value="checkboxAcceptanceForm" required><span
                                class="terminos">Acepto</span><a href="#" class="terminos_link"> términos y
                                condiciones</a>
                        </label>

                        <br>
                        <br>

                        <input type="submit" value="Crear cuenta" name="register">
                        <br>
                        <br>

                    </ul>
                </form>
            </article>
        </section>
        
            <?php 

                include("register.php");

            ?>

      

    </main>
    <footer>
        <!-- Derechos de autor 2021 © Agustin Saravia -->
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="https://github.com/xNatzhu" target="_blank"><i class="fab fa-github-square"></i></a>
    </footer>
</body>

</html>