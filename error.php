<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #fbc2eb, #a6c1ee);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .error-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            animation: shake 0.8s ease-in-out;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #dc3545;
        }

        p {
            text-align: center;
            font-size: 18px;
            color: #555;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-10px); }
            20%, 40%, 60%, 80% { transform: translateX(10px); }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h2>Login Failed</h2>
        <p>Please try again.</p>
    </div>
</body>
</html>
