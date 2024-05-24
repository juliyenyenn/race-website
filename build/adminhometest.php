<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
session_start();
$name="";
$uname = $_SESSION["username"];

switch ($uname) {
    case "graysee":
        $name = "GRACIE";
        break;
    case "juliyenyenn":
        $name = "JULIENE";
        break;
    case "kriirmazo":
        $name = "KRISTIANNA";
        break;
    default:
        $name = "";
}
?>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="index.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a href="add_sched.php" class="hover:opacity-70 text-mydefault">ADD </a>
                    <a href="updatedelete_sched.php" class="hover:opacity-70 text-mydefault">UPDATE & DELETE </a>
                </nav>
            </div>
        </section>
        
    </header>

        <h1>ADMIN HOMEPAGE!</h1>
        <h1>Welcome, 
            <?php echo $name?>!</h1>
        <a href ="adminlogin.php">Logout</a>
</body>


</html>




