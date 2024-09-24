<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #a1ffce, #faffd1);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .success-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            animation: slideIn 1s ease-in-out;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #28a745;
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="success-container">
        <h2>Login Successful!</h2>
        <p>Welcome, successfully.</p>
    </div>
</body>
</html>
