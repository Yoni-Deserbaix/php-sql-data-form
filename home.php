<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: whitesmoke;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 20px;
        }

        h1 {
            margin: 0;
            padding: auto;
        }

        img {
            margin-left: auto;
            margin-right: auto;
            display: block;
            max-width: 100%; 
        }

        .container {
            display: flex;
            text-align: center;
            flex-direction: column;
            max-width: 800px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: white;
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
        <h1>Home Page</h1>
    </header>
    
    <div class="container">
        <h2>Welcome to Our Website!</h2>
        <img src="https://1.bp.blogspot.com/-BlmDSgpVI2k/XYB90FQsBsI/AAAAAAAAEq8/SdYcizqrAnsbaGC_G7kSZsmaoHCBjYBUgCPcBGAYYCw/s1600/xampp.png" alt="image" width="50%">    
        <p>Welcome to our website, crafted using the power of Apache, PHP, and SQL to deliver an exceptional experience!</p>
    </div>

    
</body>
</html>
