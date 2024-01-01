{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ccc; /* Gray background */
            margin: 20px;
            padding: 20px;
            text-align: center;
        }

        .card {
            background-color: #fff; /* White card background */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin: 20px auto; /* Center the card */
            max-width: 600px; /* Limit card width */
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }

        .confirmation-message {
            font-size: 20px;
            color: #28a745;
            margin-top: 20px;
        }

        .copyright {
            color: #555;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Contact Confirmation</h1>
        <p>Dear <span style="color: #007bff;">{{ $name }}</span>,</p>
        <p>We have received your contact message:</p>
        <p>{{ $body }}</p>
        <p class="confirmation-message">Thank you for reaching out. Your message has been received.</p>
    </div>

    <div class="copyright">
        &copy; 2024 Your Company Name. All rights reserved.
    </div>
</body>
</html> --}}


{{-- markdown mail --}}
@component('mail::message')
# Contact Confirmation

**Dear {{ $name }}**,

**We have received your contact message:**

{{ $body }}

@component('mail::button', ['url' => config('app.url')])
Visit our website
@endcomponent

Thank you for reaching out. Your message has been received and we will get back to you as soon as possible.
@endcomponent

