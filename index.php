<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dcdcdc; /* cor cinza suave ao redor */
            margin: 0;
            padding: 0;
        }

        .form-page {
            max-width: 794px; /* largura de uma folha A4 em pixels */
            min-height: 100vh;
            margin: 0 auto;
            background-color: #fdfaf3; /* branco bege / off-white */
            padding: 40px;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 20px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="file"] {
            padding: 10px;
            border: 1px solid #aaa;
            border-radius: 4px;
            background-color: #fff;
            font-size: 16px;
        }

        input[type="submit"] {
            margin-top: 30px;
            padding: 12px;
            font-size: 16px;
            background-color: #b89f77; /* tom bege escuro agradável */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #a2875f;
        }
    </style>
</head>
<body>
    <div class="form-page">
        <h1>Application Form</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name *</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email *</label>
            <input type="email" name="email" id="email" required>

            <label for="resume">Upload PDF Resume</label>
            <input type="file" name="resume" id="resume" accept=".pdf">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
