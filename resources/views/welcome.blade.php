<x-layout>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class=" mt-2 skills-section p-3" s>
        <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">@lang('messages.skills_title')</h1>
        <div class="skill-bar">
            <span class="skill-name">PHP</span>
            <div class="skill-bar-progress skill-barphp">
                <div class="skill-bar-fill"></div>
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

        <h1 style="margin-top: 40px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">
            @lang('messages.about_me_title')
        </h1>
        
        <div class="presentation" style="text-align: justify;">
            <p>@lang('messages.about_me_paragraph1')</p>
            <p>@lang('messages.about_me_paragraph2')</p>
            <p>@lang('messages.about_me_paragraph3')</p>
            <p>@lang('messages.about_me_paragraph4')</p>
            <p>@lang('messages.about_me_paragraph5')</p>
            <p>@lang('messages.about_me_paragraph6')</p>
        </div>

        <div id="proyectos"  style="margin-bottom: 100px;">
            <h1 style="margin-bottom: 30px; margin-top: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); background-color:rgb(247, 240, 141);">@lang('messages.projects_title')</h1>
        
            <div class="row mb20px">
                <div class="col-md-4 mt-2">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto1.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">@lang('messages.project1_title')</h5>
        
                            <div class="scroll-box">
                                <p style="color: rgb(249, 244, 244); text-align: justify;" class="card-text">
                                    @lang('messages.project1_description')
                                </p>
                            </div>
                            <a href="http://104.248.41.148/home" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project1_link')</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-2">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto2.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">Allforyou.es/  @lang('messages.project2_title')</h5>
        
                            <div class="scroll-box">
                                <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">
                                    @lang('messages.project2_description')
                                </p>
                            </div>
                            <a href="http://allforyou.es/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project2_link')</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-2">
                    <div class="card h-100" style="background-image: url('{{ asset('images/proyecto3.jpg') }}'); background-size: cover;">
                        <div class="card-body" style="background-color: rgba(255, 255, 255, 0.2); /* Añade opacidad al fondo */">
                            <h5 class="card-title" style="background-color:rgba(255, 255, 255, 0.8);">@lang('messages.project3_title')</h5>
        
                            <div class="scroll-box">
                                <p style="color: rgb(250, 250, 250); text-align: justify;" class="card-text">
                                    @lang('messages.project3_description')
                                </p>
                            </div>
                            <a href="http://buenosaireslindo.site/" class="btn btn-primary mt-3" style="display: flex; justify-content: center;">@lang('messages.project3_link')</a>
                        </div>
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
