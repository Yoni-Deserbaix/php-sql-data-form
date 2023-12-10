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

if (isset($_POST['formsend']))
 {

    $name = $_POST['name'];
    $familyname = $_POST['familyname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
 
    $req = $db->prepare("INSERT INTO users VALUES (0, :name, :familyname, :email, :password)");
    $req->execute(
        array(
            ':name' => $name,
            ':familyname' => $familyname,
            ':email' => $email,
            ':password' => $password
        )
    );
    header("Location: welcome.php");
    

}

?>
