<x-layout>








        <style>
            body {
                background-color: #f8f9fa;
            }
    
            .contact-container {
                max-width: 800px;
                margin: 0 auto;
                padding: 30px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
    
            .contact-title {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 30px;
            }
    
            .form-group label {
                font-weight: bold;
            }
    
            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }
    
            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }
        </style>

    
    
        <div class="container mt-5">
            <div class="contact-container">
                <h2 class="contact-title">Contáctame</h2>
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>

</x-layout>