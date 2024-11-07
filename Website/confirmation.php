<?php
// Start session if needed
session_start();

// Assuming your database connection and insertion is handled in a previous page
// You can add additional error handling here if needed

// Set a success message in session if needed
$_SESSION['success_message'] = "Data successfully submitted!";

// Delay for 3 seconds before redirect
header("refresh:3;url=landingpage.html");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .success-container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 90%;
        }

        .success-icon {
            width: 60px;
            height: 60px;
            background-color: #4CAF50;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 1rem;
        }

        .success-icon::after {
            content: "✓";
            color: white;
            font-size: 2rem;
        }

        h1 {
            color: #333;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .redirect-message {
            color: #888;
            font-size: 0.9rem;
        }

        .loading-dots {
            display: inline-block;
        }

        .loading-dots::after {
            content: "...";
            animation: dots 1.5s steps(4, end) infinite;
        }

        @keyframes dots {
            0%, 20% { content: ""; }
            40% { content: "."; }
            60% { content: ".."; }
            80%, 100% { content: "..."; }
        }
    </style>
</head>
<body>
<div class="success-container">
    <div class="success-icon"></div>
    <h1>Success!</h1>
    <p>Your reservation has been successfully submitted.</p>
    <p class="redirect-message">
        Redirecting to homepage<span class="loading-dots"></span>
    </p>
</div>
</body>
</html>