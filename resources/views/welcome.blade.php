<x-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <div class="container mt-2 skills-section">
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">Mis Aptitudes</h1>
        <div class="skill-bar">
            <span class="skill-name">PHP</span>
            <div class="skill-bar-progress skill-barphp">
                <div class="skill-bar-fill" ></div>
            </div>
            <span class="skill-percent">80%</span>
        </div>
        <div class="skill-bar">
            <span class="skill-name">Laravel</span>
            <div class="skill-bar-progress skill-barlaravel">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">90%</span>
        </div>
        <div class="skill-bar">
            <span class="skill-name">CSS</span>
            <div class="skill-bar-progress skill-barcss">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">80%</span> 
        </div>
        <div class="skill-bar">
            <span class="skill-name">HTML5</span> 
            <div class="skill-bar-progress skill-barhtml5">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">90%</span>
        </div>
        <div class="skill-bar">
            <span class="skill-name">JS</span>
            <div class="skill-bar-progress skill-barjs">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">65%</span>
        </div>
        <div class="skill-bar">
            <span class="skill-name">MySQL</span>
            <div class="skill-bar-progress skill-barmysql">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">70%</span>
        </div>
        

        <h1 style="margin-top: 40px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">Sobre mí</h1>
        <div class="presentation" style="text-align: justify;">
            <p>Como desarrollador web junior, poseo una pasión ardiente por la creación de experiencias en línea atractivas y funcionales. Mi nivel de destreza técnica es sorprendentemente alto, y estoy listo para demostrar cómo puedo aportar un valor excepcional a tus proyectos.</p>

            <p>Mi conocimiento abarca desde PHP y Laravel hasta CSS y HTML5, y estoy en constante aprendizaje para mantenerme al día con las últimas tendencias en desarrollo web. A pesar de mi estatus junior, mi habilidad para resolver problemas y mi dedicación me permiten abordar desafíos complejos con confianza.</p>

            <p>Tengo una sólida comprensión de la gestión de bases de datos y cómo una estructura de datos eficiente es fundamental para el rendimiento de las aplicaciones. Aunque mi experiencia es junior, mi capacidad para gestionar bases de datos es una habilidad en crecimiento constante.</p>

            <p>Mi enfoque está en la calidad y en el aprendizaje continuo. Al trabajar conmigo, obtendrás un miembro de equipo que está dispuesto a esforzarse al máximo para cumplir con tus objetivos y que siempre está ansioso por aprender y mejorar.</p>

            <p>A pesar de mi estado como junior, considera que traigo un conjunto de habilidades versátil y una pasión genuina por el desarrollo web. Estoy ansioso por asumir nuevos desafíos y aprender de cada proyecto. Trabajar conmigo significa tener un colaborador apasionado que está comprometido con el éxito de tus proyectos y está dispuesto a crecer junto contigo.</p>

            <p>Estoy emocionado de colaborar en tus proyectos y ayudarte a alcanzar tus metas en el mundo del desarrollo web. ¡Comencemos esta emocionante aventura juntos!</p>
        </div>


    <div id="proyectos" class="container" style="margin-bottom: 70px;">
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">Mis Proyectos</h1>

        <div class="row mb20px">
            <div class="col-md-4">
                <div class="card" style="background-image: url('{{ asset('images/proyecto1.jpg') }}'); background-size: cover;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                        <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Agregador cervecerías y cervezas</h5>
            
                        <div class="scroll-box">
                            <p style="color: rgb(249, 244, 244); text-align: justify;" class="card-text">
                                En este proyecto, realicé un catálogo/agregador de cervecerías y cervezas. Para poder crear nuevas entradas, es necesario estar registrado. Además, he añadido un mapa interactivo con Leaflet que marca la ubicación del bar en el mapa en función de las coordenadas añadidas desde el modo de creación de entrada. En la página de inicio (HOME), para darle un toque entretenido, añadí un contador de cervezas que se incrementa cada vez que pulsamos en una cerveza adicional y modifica el mensaje según el número de cervezas.
                            </p>
                        </div>
                        <a href="http://209.38.216.56/home" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="background-image: url('{{ asset('images/proyecto2.jpg') }}'); background-size: cover;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                        <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Tienda venta artículos de segunda mano</h5>
            
                        <div class="scroll-box">
                            <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">
                                En esta tienda, podrás poner en venta artículos una vez te hayas registrado. Los anuncios siempre tendrán que ser aprobados por un revisor autorizado antes de ser visibles en la vista. Además, podrás enviar y recibir mensajes sobre el artículo publicitado con otros usuarios.
                            </p>
                        </div>
                        <a href="http://68.183.67.132/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="background-image: url('{{ asset('images/proyecto3.jpg') }}'); background-size: cover;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                        <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Medio de comunicaión/ Web de Noticias</h5>
            
                        <div class="scroll-box">
                            <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">
                                En esta página de noticias, podrás registrarte para comentar y dar "Me gusta" a las noticias ya publicadas. Además, si deseas convertirte en escritor, podrás solicitarlo mediante un formulario. En caso de ser aceptado, también podrás publicar noticias. Sin embargo, todas las noticias siempre deberán ser revisadas por un editor para asegurarse de que tanto el texto como las imágenes sean adecuados para la web.
                            </p>
                        </div>
                        <a href="http://138.68.84.27/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">Ver Proyecto</a>
                    </div>
        </div>
    </div>
    
  
    </div>
    <style>
        .skill-bar-fill {
            height: 100%;
            background-color: #007bff;
            transition: width 2s ease-in-out;
        }
    
        @keyframes fillAnimation {
            0% {
                width: 0;
            }
        }
    
        .skill-bar-progress {
            width: 100%;
        }
    </style>
    <script>
        // Función para iniciar la animación de barras de progreso
        function startProgressAnimation() {
            const skillBars = document.querySelectorAll(".skill-bar");
    
            skillBars.forEach((bar) => {
                const progressBar = bar.querySelector(".skill-bar-fill");
                const percentElement = bar.querySelector(".skill-percent");
                const percent = parseInt(percentElement.innerText);
    
                progressBar.style.animation = "none"; // Reiniciar la animación
                progressBar.offsetWidth; // Reiniciar la animación (re-flow)
                progressBar.style.animation = `fillAnimation 2s ease-in-out`;
                progressBar.style.width = percent + "%";
                percentElement.innerText = percent + "%";
            });
        }
    
        // Iniciar la animación después de que se cargue la página
        window.addEventListener("load", startProgressAnimation);
    </script>
    
</x-layout>
