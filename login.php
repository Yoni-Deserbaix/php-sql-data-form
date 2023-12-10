<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
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
        }


        main {
            width: 80%;
            margin: auto;
            padding: 50px;
        }

        form {
            background-color: whitesmoke;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

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
        <h1>Login page</h1>
    </header>

    <?php 
    $servname = "localhost";
    $username = "root";
    $password = "";

    try
    {
        $db = new PDO("mysql:host=$servname;dbname=tutosql", $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if($email !== '' && $password !== '') {
            // Prepare and execute a parameterized query
            $stmt = $db->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
            $stmt->execute(array(':email' => $email, ':password' => $password));
            $res = $stmt->fetch();
            
            if($res !== false) {
                // Successful login
                header("Location: welcome.php");
            } else {
                $errormg = "E-mail or password incorrect.";
            }
        }
    }
    ?>

    <main>
        <form method="POST" action="">
            <label for="">Email</label>
            <input type="email" placeholder="Enter your e-mail" id="email" name="email" required>
            <label for="">Password</label>
            <input type="password" placeholder="Enter your password" id="password" name="password" required>
            <input type="submit" placeholder="Connexion" name="formsend"> </br></br>
            <?php
            if(isset($errormg))
            {
                echo $errormg;  
            }
            ?>
        </form>
    </main>



</body>
</html>