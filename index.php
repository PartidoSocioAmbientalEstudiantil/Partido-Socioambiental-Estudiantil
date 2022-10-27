<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partido Socioambiental Estudiantil</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylepse.css">

    <meta name="theme-color" content="#2091F9">
    <meta name="author" content="OllieStifler">
    <meta name="title" content="Sólo para estudiantes conscientes e inteligentes">
    <meta property="og:url" content="">
    <meta property="og:title" content="Partido estudiantil">
    <meta property="og:description"
        content="El partido socioambiental estudiantil, busca el correcto manejo y propuestas a mejoras en el área estudiantil y ecológica, dirigido por estudiantes de programación y siempre buscando la mejora y pensando en el bien común">
</head>

<body>

    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">PSE</h2>
            </div>

            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="#" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="https://docs.google.com/forms/d/1-sq__-vIjRH5Q_yiKfK9xvau0UZgf6ORWFm_fxifvoQ/viewform?edit_requested=true&fbzx=-1646754647575433191" class="nav__links">Encuesta</a>
                </li>
               <!-- <li class="nav__items">
                    <a href="#" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Vota por nosotros</a>
                </li>
                -->
                <img src="./images/close.svg" class="nav__close">
            </ul>

            <div class="nav__menu">
                <img src="./images/menu.svg" class="nav__img">
            </div>
        </nav>

        <section class="hero__container container">
            <h1 class="hero__title">Usa bien tu voto</h1>
            <p class="hero__paragraph">¡Te ofrecemos el mejor partido estudiantil, y no sólo eso, también eres parte de nosotros, puedes hacer tus propuestas por este y más medios!</p>
            <a href="#voto" class="cta">¿Cómo votar por nosotros?</a>
        </section>
    </header>

    <main>
        <section class="container about">
            <h2 class="subtitle">Partido Socioambiental Estudiantil 5°F</h2>
            <p class="about__paragraph">¡El cambio somos todos!</p>

            <div class="about__main">
                <article class="about__icons">
                    <img src="./images/bosque.png" class="about__icon">
                    <h3 class="about__title">Ofrecemos</h3>
                    <p class="about__paragrah">Mejoras en todo ambito en la institución, una escuela más limpia y comprometida, arreglar la escases de recursos tales como libros, balones, mesas y demás.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/libro.png" class="about__icon">
                    <h3 class="about__title">¿Qué esperamos?</h3>
                    <p class="about__paragrah">Mejorar la calidad estudiantil, hacer que toda la escuela se sienta tranquila en esta escuela y que sienta que realmente tiene calidad de estudio.</p>
                </article>

                <article class="about__icons">
                    <img src="./images/pensar.png" class="about__icon">
                    <h3 class="about__title">¿Y tú, qué esperas?</h3>
                    <p class="about__paragrah">Tus propuestas son siempre bienvenidas, a decir verdad, te pedimos que las hagas, después de todo, el comité estudiantil es sólo la voz de los estudiantes, por lo que todos tus comentarios contribuirán a la mejora.</p>
                </article>
            </div>
        </section>

        <section class="knowledge" id="voto">
            <div class="knowledge__container container">
                <div class="knowledege__texts">
                    <h2 class="subtitle">Votar es muy sencillo</h2>
                    <p class="knowledge__paragraph">Tu voto es libre, recuérdalo.
                    Para votar por nosotros sólo tienes que asistir al día de las elecciones estudiantiles, escoger el Partido Socioambiental Estudiantil, entregar tu voto, ¡Y listo, ya habrás concluido tu votación!. Y en caso de votar por nosotros, además, contribuido a la mejora de la institución.</a>
                </div>

                <figure class="knowledge__picture">
                    <img src="./images/voto.jpg" class="knowledge__img">
                </figure>
            </div>
        </section>
        <section class="testimony">
            <div class="testimony__container container">
                <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Miguel León Hernández, <span class="testimony__course">Candidato de PSE.</span></h2>
                        <p class="testimony__review">Hola compañeros, mi nombre es Miguel León Hernández y estoy en la especialidad de programación en 5° “F”; en esta ocasión me estoy postulando como presidente del comité estudiantil ya que mis compañeros y yo estamos buscando mejorar y contribuir a nuestra escuela el CETIS 62, y dejar una huella en la historia de esta institución, la cuál nos ha brindado muchas cosas para nuestra formación académica y también nos ha ayudado a crecer como personas.<br> </p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/miguel.jpg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Oliver Uriel Ruiz González, <span class="testimony__course">Vicepresidente de PSE
                                </span></h2>
                        <p class="testimony__review">Como vicepresidente del Partido Socioambiental Estudiantil, me comprometo a siempre estar al pendiente de comentarios estudiantiles para que el comité cumpla ese primer propósito, además, siempre buscar el bien común en cada desición que se tome.</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/oliver.jpeg" class="testimony__img">
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Erick Yeray Malerva Mosqueda, <span class="testimony__course">Encargado de Ciencia e Investigación de PSE</span></h2>
                        <p class="testimony__review">Como Encargado de Ciencia e Investigación me comprometo a llevar acabo un orden y un control de calidad a la hora de inspeccionar los trabajos y propuestas de mis compañeros para un mejor desempeño laboral y legislativo</p>
                    </div>

                    <figure class="testimony__picture">
                        <img src="./images/yerki.jpg" class="testimony__img">
                    </figure>
                </section>



















                <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
            </div>
        </section>

        <section class="questions container">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">No queremos que te quede ninguna duda de nosotros, y si la tienes, hazlo saber más abajo en los comentarios</p>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Por qué votar en primer lugar?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">El comité estudiantil es una actividad que te influirá de igual forma, ya que pese a todo, se elegirá un comité que será el mediador entre los estudiantes y los directivos. Por eso es importante tu voto, así contribuyes a una mejor desición para la elección de este mediador.</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es PSE?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">El Partido Socioambiental Estudiantil es un partido estudiantil que tiene la visión de la mejora real a la institución y a la calidad en la educación. Está dirigido por el grupo de 5°F de la especialidad de programación del que, sin embargo, todos los alumnos formamos parte. Somos personas con valores sólidos y fuertes, con escucha activa al público.</p>
                    </div>
                </article>

                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Cuáles son las ventajas que ofrecemos?
                            <span class="questions__arrow">
                                <img src="./images/arrow.svg" class="questions__img">
                            </span>
                        </h3>

                        <p class="questions__show">
                            Garantizamos la escucha a los estudiantes para la toma de desiciones, además de una amplia variedad de propuestas que está en constante cambio dependiendo de la opinión del público;
                            <br>-Llevar una mejor organización en los horarios de las clases.
                            <br>-Llegar a soluciones con los profesores para que las fechas de evaluaciones sean más cómodas.
                            <br>-Mejorar la higiene y limpieza de la escuela en general.
                            <br>-Promover actividades deportivas y culturales.
                    
                            
                        </p>
                    </div>
                </article>
            </section>

            <section class="questions__offer">
                <h2 class="subtitle">¿Estas listo para votar hoy por tu mejor opción?</h2>
                <p class="questions__copy"></p>
                
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Partido Socioambiental Estudiantil</h2>

                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="https://docs.google.com/forms/d/1-sq__-vIjRH5Q_yiKfK9xvau0UZgf6ORWFm_fxifvoQ/viewform?edit_requested=true&fbzx=-1646754647575433191" class="nav__links" class="nav__links">Encuesta</a>
                    </li>
                   <!-- <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Vota por nosotros</a>
                    </li> -->
                </ul>
            </nav>

            <form class="footer__form" method="post">
                <h2 class="footer__newsletter">Escríbenos un comentario</h2>
                <div class="footer__inputs">
                    <input type="text" placeholder="Sugerencias/opiniones" class="footer__input" name="_replyto">
                     <div class="footer__inputs">
                    <input type="text" placeholder="¿Cuál es tu nombre?" class="footer__input" name="name">
                    <input type="submit" value="¿Qué piensas?" class="footer__submit" name="enviar" id="send">
                </div>
            </form>
            <?php 
            include("php/correo.php");
            ?>
        </section>

        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"><img src="./images/facebook.svg" class="footer__img"></a>
               
                <a href="#" class="footer__icons"><img src="./images/instagram.png" class="footer__img"></a>
            </div>

            <h3 class="footer__copyright">OllieStifler &copy; Partido Socioambiental Estudiantil CETis 62</h3>
        </section>
    </footer>

    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>

<!--



          x    x
        xx      xx
          xxxxxx





-->
              

