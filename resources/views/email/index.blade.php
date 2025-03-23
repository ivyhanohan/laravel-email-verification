<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Email</title>
    <style>
        body {
            font-family: sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        ..div-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            color: #2d3748;
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            color: #4a5568;
            margin-bottom: 30px;
            text-align: center;
            word-break: break-all;
        }

        a.button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #sky-100;
            color: #ffffff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: background-color 0.3s ease;
            text-align: center;
            margin: 0 auto;
            display: block;
            max-width: 200px;
        }

        a.button:hover {
            background-color: #sky-200;
        }
    </style>
</head>

<body>
    <div class="div-container">
        <h1>Hi {{ $user->name }},</h1>
        <h1>Verify Your Email</h1>
        <p>Click the link below to verify your email address:</p>
        <a href="{{ url(route('verify', ['id' => $user->id])) }}" class="button">Verify Now</a>
    </div>
</body>

</html>
