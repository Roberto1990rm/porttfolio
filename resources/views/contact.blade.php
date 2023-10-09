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

    
    
<div class="container mt-5 mb20px">
    <div class="contact-container">
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
</div>



</x-layout>