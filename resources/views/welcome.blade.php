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




    <div class="container" style="margin-bottom: 70px;">
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">Mis Proyectos</h1>

        <div class="row mb20px">
            <div class="col-md-4">
                <div class="card" style="background-image: url('{{ asset('images/proyecto1.jpg') }}'); background-size: cover;">
                    <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                        <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Agregador cervecerías y cervezas</h5>
            
                        <div class="scroll-box">
                            <p style="color: rgb(249, 244, 244); text-align: justify;" class="card-text">
                              En este proyecto individual realicé un catálogo/agregador de cervecerías y cervezas. Para poder crear nuevas entradas es necesario estar registrado, además he añadido un mapa interactivo con Leaflet que marca la ubicación del bar en el mapa en función de las coordenadas añadidas desde el modo crear entrada. En la página HOME, para darle un toque entretenido, añadí un contador de cervezas que va sumando cada vez que pulsamos en una más y va modificando el mensaje según el número de cervezas.
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
                              En este proyecto individual realicé un catálogo/agregador de cervecerías y cervezas. Para poder crear nuevas entradas es necesario estar registrado, además he añadido un mapa interactivo con Leaflet que marca la ubicación del bar en el mapa en función de las coordenadas añadidas desde el modo crear entrada. En la página HOME, para darle un toque entretenido, añadí un contador de cervezas que va sumando cada vez que pulsamos en una más y va modificando el mensaje según el número de cervezas.
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
                              En este proyecto individual realicé un catálogo/agregador de cervecerías y cervezas. Para poder crear nuevas entradas es necesario estar registrado, además he añadido un mapa interactivo con Leaflet que marca la ubicación del bar en el mapa en función de las coordenadas añadidas desde el modo crear entrada. En la página HOME, para darle un toque entretenido, añadí un contador de cervezas que va sumando cada vez que pulsamos en una más y va modificando el mensaje según el número de cervezas.
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
