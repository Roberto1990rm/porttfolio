<x-layout>

    <div class="container mt-2 skills-section">
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Mis Aptitudes</h1>
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




    <div class="container">
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Mis Proyectos</h1>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="background-image: url('{{ asset('images/proyecto1.jpg') }}'); background-size: cover;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                        <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Agregador cervecerías y cervezas</h5>
            
                        <div class="scroll-box">
                            <p style="color: rgb(7, 4, 4); text-align: justify;" class="card-text">
                              En este proyecto individual realicé un catálogo/agregador de cervecerías y cervezas. Para poder crear nuevas entradas es necesario estar registrado, además he añadido un mapa interactivo con Leaflet que marca la ubicación del bar en el mapa en función de las coordenadas añadidas desde el modo crear entrada. En la página HOME, para darle un toque entretenido, añadí un contador de cervezas que va sumando cada vez que pulsamos en una más y va modificando el mensaje según el número de cervezas.
                            </p>
                        </div>
                        <a href="http://209.38.216.56/home" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="proyecto2.jpg" class="card-img-top" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto 2</h5>
                        <p class="card-text">Descripción breve del Proyecto 2.</p>
                        <a href="enlace_proyecto2.html" class="btn btn-primary">Ver Proyecto</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="proyecto3.jpg" class="card-img-top" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto 3</h5>
                        <p class="card-text">Descripción breve del Proyecto 3.</p>
                        <a href="enlace_proyecto3.html" class="btn btn-primary">Ver Proyecto</a>
                    </div>
                </div>
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
