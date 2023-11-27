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

        .contact-info {
            margin-top: 20px;
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
        }

        .contact-info p {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .email-link,
        .phone-link {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
    </style>

    <div class="container mt-5 mb-5">
        
        <div class="contact-info mb-3">
            <p>@lang('messages.contact_phone'): <a href="tel:625485684" class="phone-link">+34 625 485 684</a></p>
            <p>@lang('messages.contact_email'): <a href="mailto:robertoramirezmoreno@gmail.com" class="email-link">robertoramirezmoreno@gmail.com</a></p>
        </div>
        <div class="contact-container mt-4">
            <h2 class="contact-title">@lang('messages.contact_title')</h2>
            <form method="POST" action="{{ route('submitForm') }}">
                @csrf
                <div class="form-group">
                    <label for="name">@lang('messages.name')</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">@lang('messages.email')</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">@lang('messages.message')</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">@lang('messages.send')</button>
            </form>
        </div>
        <div class="button-container">
            <button onclick="window.history.back()" class="btn btn-secondary">@lang('messages.back')</button>
        </div>
        
    </div>
</x-layout>
<style>
    .button-container {
    display: flex;
    justify-content: center; /* Centra el botón horizontalmente */
    margin-bottom: 120px;    /* Espacio debajo del contenedor */
    margin-top: 20px;        /* Espacio encima del contenedor */
}


.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background-color: #545b62;
    border-color: #545b62;
}

.center-button {
    display: block;
    margin-bottom: 120px;
    margin-top: 20px;


}

</style>