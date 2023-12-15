<x-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Sección de Proyectos -->
 
    <h1 style="margin-bottom: 10px; margin-top: 0px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">@lang('messages.skills_title')</h1>
    
    <!-- Sección de Habilidades -->
    <div class=" skills-section">

        <div class="bg-light">
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

        <div class="skill-bar p-1">
            <span class="skill-name">PHP</span>
            <div class="skill-bar-progress skill-barphp">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">80%</span>
        </div>

        <div class="skill-bar">
            <span class="skill-name">JS</span>
            <div class="skill-bar-progress skill-barjs">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">60%</span>
        </div>
        <!-- Barra de Habilidades para React -->
<div class="skill-bar">
    <span class="skill-name">React</span>
    <div class="skill-bar-progress skill-bar-react">
        <div class="skill-bar-fill" style="width: 75%;"></div>
    </div>
    <span class="skill-percent">60%</span>
</div>

<div class="skill-bar">
            <span class="skill-name">Laravel</span>
            <div class="skill-bar-progress skill-barlaravel">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">90%</span>
        </div>

        <div class="mt-1 skills-section p-1">
            <div class="skill-bar">
                <span class="skill-name">Symfony</span>
                <div class="skill-bar-progress skill-barsymfony">
                    <div class="skill-bar-fill" style="width: 70%;"></div>
                </div>
                <span class="skill-percent">70%</span> 
            </div>
        </div>

<!-- Barra de Habilidades para Vue.js -->
<div class="skill-bar">
    <span class="skill-name">Vue.js</span>
    <div class="skill-bar-progress skill-bar-vue">
        <div class="skill-bar-fill" style="width: 60%;"></div>
    </div>
    <span class="skill-percent">70%</span>
</div>



        
       
        <div class="skill-bar">
            <span class="skill-name">MySQL</span>
            <div class="skill-bar-progress skill-barmysql">
                <div class="skill-bar-fill"></div>
            </div>
            <span class="skill-percent">80%</span>
        </div>
    </div>


        <div id="proyectos" style="margin-bottom: 3px; margin-top: 0px;">
            <h1 style="margin-bottom: 0px; margin-top: 0px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">@lang('messages.projects_title')</h1>
            <div class="row">
                <!-- Proyecto 1 -->
                <div class="col-md-4 mt-2 mb-2">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto2.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2);">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">AllForYou.es</h5>
                            <div class="scroll-box">
                                <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">@lang('messages.project2_description')</p>
                            </div>
                            <a href="http://allforyou.es/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project2_link')</a>
                        </div>
                        <div class="tech-icons bg-danger">
                            <i class="fab fa-laravel"></i> <!-- Laravel -->
                            <i class="fab fa-php"></i> <!-- PHP -->
                            <i class="fab fa-js-square"></i> <!-- JavaScript -->
                            <i class="fas fa-database"></i> <!-- MySQL -->
                            <i class="fab fa-html5"></i> <!-- HTML5 -->
                            <i class="fab fa-css3-alt"></i> <!-- CSS3 -->
                            <i class="fab fa-bootstrap"></i> <!-- Bootstrap -->
                            <i class="fab fa-stripe"></i> <!-- Stripe API -->
                        </div>
                    </div>
                </div>
               
                <!-- Proyecto 2 -->
                <div class="col-md-4 mt-2 mb-2 ">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto1.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2);">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">@lang('messages.project1_title')</h5>
                            <div class="scroll-box">
                                <p style="color: rgb(249, 244, 244); text-align: justify;" class="card-text">@lang('messages.project1_description')</p>
                            </div>
                            <a href="http://cervelab.site/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project1_link')</a>
                        </div>
                        <div class="tech-icons bg-danger">
                            <i class="fab fa-laravel"></i> <!-- Laravel -->
                            <i class="fab fa-php"></i> <!-- PHP -->
                            <i class="fab fa-js-square"></i> <!-- JavaScript -->
                            <i class="fas fa-database"></i> <!-- MySQL -->
                            <i class="fab fa-html5"></i> <!-- HTML5 -->
                            <i class="fab fa-css3-alt"></i> <!-- CSS3 -->
                            <i class="fab fa-bootstrap"></i> <!-- Bootstrap -->
                        </div>
                        
                    </div>
                </div>
                <!-- Proyecto 3 -->
                <div class="col-md-4 mt-2 mb-2 ">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto3.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2);">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">@lang('messages.project3_title')</h5>
                            <div class="scroll-box">
                                <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">@lang('messages.project3_description')</p>
                            </div>
                            <a href="http://104.248.41.148/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project3_link')</a>
                        </div>
                        <div class="tech-icons bg-danger">
                            <i class="fab fa-symfony"></i> <!-- Symfony -->
                            <i class="fab fa-php"></i> <!-- PHP -->
                            <i class="fab fa-bootstrap"></i> <!-- Bootstrap -->
                            <i class="fas fa-database"></i> <!-- MySQL -->
                            <i class="fab fa-html5"></i> <!-- HTML5 -->
                            <i class="fab fa-css3-alt"></i> <!-- CSS3 -->
                            <!-- Twig no tiene un ícono en FontAwesome -->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>


        <h1 style="margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);  background-color:rgb(247, 240, 141);">
            @lang('messages.about_me_title')
        </h1>
        
        <div class="presentation p-2" style="text-align: justify; margin-bottom: 20px; color: rgb(0, 0, 0); text-shadow: rgb(178, 204, 47); background-color: white; opacity: 0.8;">
            <p><strong>@lang('messages.about_me_paragraph1')</strong></p>
            <p>@lang('messages.about_me_paragraph2')</p>
            <p>@lang('messages.about_me_paragraph3')</p>
            <em><p>@lang('messages.about_me_paragraph4')</p></em>
            <p>@lang('messages.about_me_paragraph5')</p>
        </div>
        <div class="text-center" style="margin-bottom: 60px;">
            <a href="#" class="btn btn-primary scroll-to-top">
                <i class="bi bi-arrow-up-circle-fill"></i> Volver Arriba
            </a>
        </div>
        

    
  
    </div>
    <style>
      
    
        @keyframes fillAnimation {
            0% {
                width: 0;
            }
        }
    
        .skill-bar {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

.skill-name {
    width: 100px;
    font-weight: bold;
}

.skill-bar-progress {
    flex-grow: 1;
    height: 20px;
    background-color: #ddd;
    margin-left: 10px;
    margin-right: 10px;
    border-radius: 10px;
    overflow: hidden;
}


.skill-bar-fill {
    height: 100%;
    transition: width 2s ease-in-out;
    border-radius: 10px;
}
x
/* Estilos específicos para cada tecnología */
.skill-bar-react .skill-bar-fill {
    background-color: #61DAFB; /* Color de React */
}

.skill-bar-vue .skill-bar-fill {
    background-color: #42b883; /* Color de Vue.js */
}

.skill-bar-node .skill-bar-fill {
    background-color: #539E43; /* Color de Node.js */
}

.skill-percent {
    width: 50px;
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
    <script>
        document.querySelector('.scroll-to-top').addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

    </script>
    <script>
        document.querySelector('.scroll-to-top').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
    
</x-layout>
