<?php
session_start();
$name="";
 $uname = $_SESSION["username"];

switch ($uname) {
    case "graysee":
        $name = "Gracie";
        break;
    case "juliyenyenn":
        $name = "Juliene";
        break;
    case "kriirmazo":
        $name = "Kristianna";
        break;
    default:
        $name = "Admin";
}
?>

<html> 
    <head></head>
    <body>
        <h1>ADMIN HOMEPAGE!</h1>
        <h1>Welcome, <?php echo $name?>!</h1>
        <a href ="logoutTest.php">Logout</a>
    </body>

</html>