<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;

        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
        }

        img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            max-width: 100%;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: whitesmoke;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>

<body>
    <header> 
    <?php 
    // Integration of navbar
    include 'nav.php';
        ?>
        <h1>Welcome!</h1>
    </header>

    <div class="container">
    <h2>Welcome, User!</h2>
    <p>Congratulations on logging in/signing up. You are now part of our community!</p>
    <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-php-elephant-logo-vectors-download-5.png" alt="">
</div>

</body>
</html>
