<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<?php
session_start();
$name="";
$uname = $_SESSION["username"];

switch ($uname) {
    case "graysee":
        $name = "ADMIN GRACIE";
        break;
    case "juliyenyenn":
        $name = "ADMIN JULIENE";
        break;
    case "kriirmazo":
        $name = "ADMIN ISABEL";
        break;
    default:
        $name = "ADMIN";
}
?>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="adminhometest.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a style="font-weight: bolder; font-size:18px" href="adminlogin.php" class="hover:opacity-70 text-mydefault">LOG OUT </a>
                </nav>
            </div>
        </section>
        
    </header>

    <section style="font-family: Montserrat;" id="racecover"
    class="widescreen:section-min-height tallscreen:section-min-height">
            <img src="img/admincover.gif" class="absolute">
            
            <div class="p-[75px]">
                <h1 style="margin-top:20px; max-width: 700px; line-height: 80px; font-weight:950" class="text-[78px] relative poppins-black font-extrabold text-orange-100 drop-shadow-4xl">
                    WELCOME, <?php echo $name?>!
                </h1><br>

                <p style="margin-bottom: -55px;" class="text-[20px] max-w-[550px] relative montserrat-black text-orange-100 drop-shadow-4xl mt-[65px]">
                    What do you want to do?
                </p>
            </div>

            <a href="add_sched.php"><button style="margin-left: 75px; font-weight:bold" class="relative inline-flex items-center justify-center p-1 mb-2 me-2 overflow-hidden text-sm font-medium text-red-950 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
            <span style="font-size:18px" class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#fffaf0] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            ADD SCHEDULE
            </span>
            </button></a>

            <a href="updatedelete_sched.php"><button style="margin-left: 40px; font-weight:bold" class="relative inline-flex items-center justify-center p-1 mb-2 me-2 overflow-hidden text-sm font-medium text-red-950 rounded-lg group bg-gradient-to-br from-red-200 via-red-300 to-yellow-200 group-hover:from-red-200 group-hover:via-red-300 group-hover:to-yellow-200 dark:text-white dark:hover:text-gray-900 focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400">
            <span style="font-size:18px" class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-[#fffaf0] dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
            UPDATE & DELETE SCHEDULE
            </span>
            </button>
    </section>

        


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>


</html>




