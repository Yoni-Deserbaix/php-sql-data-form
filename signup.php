<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <style>
        /* CSS styles */
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
        }


        main {
            width: 80%;
            margin: auto;
            padding: 20px;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: whitesmoke;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <?php 
            // Integration of navbar
            include 'nav.php';
        ?>
        <h1>Sign up</h1>
    </header>
        
    <main>
        <form method="POST" action="treatment.php">
            <label for="name">Your name</label>
            <input type="text" name="name" id="name" placeholder="Name" required><br>
            <label for="familyname">Your family name</label>
            <input type="text" name="familyname" id="familyname" placeholder="Family Name"><br>
            <label for="email">Your email</label>
            <input type="email" name="email" id="email" placeholder="Email" required><br>
            <label for="password">Your password</label>
            <input type="password" name="password" id="password" placeholder="Password" required><br>
            <input type="submit" name="formsend" id="formsend">
        </form>
    </main>
</body>
</html>
