<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "racedatabase"; //database name
$username = $password = $userErr = $passErr = $userpassErr="";

$data = new mysqli($host, $user, $pass, $db);
if($data == false){
    die("Connection Error: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["username"])){
        $userErr = "*Username is required.";
    }
    else{
        $username = $_POST["username"];
    }
    if(empty($_POST["password"])){
        $passErr = "*Password is required.";
    }
    else{
        $password = $_POST["password"];
    }
    

    $sql="select * from administator where Username= '".$username."' AND Password='".$password."' "; 
    
    $result = mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row==true){
        $_SESSION["username"] = $username;
        header("location:adminhometest.php");
    }
    if($username == true && $password == true && $row == false){
        $userpassErr = "Username does not match with password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Log-in</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="index.html"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a href="index.html" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                    <a href="index.html" class="hover:opacity-70 text-mydefault">CONTACT US</a>
                    <a href="adminlogin.html" class="hover:opacity-70 text-mydefault">ADMIN</a>
                </nav>

            </div>
        </section>
    </header>
    <br><br><br>

    <form action="" method="POST">
    <div class="flex justify-center items-center montserrat-black">
        <div class="w-96 p-6 shadow-lg bg-white rounded-md">
            <h1 class="text-2xl block text-center font-semibold"><i class="fa-solid fa-user text-orange-950"></i> Login as Admin</h1>
            <hr class="mt-3">
            <div class="mt-3">
                <label for="username" class="block text-base mb-2">Username</label>
                <input type="text" id="username" name ="username" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Username..." />
                <span style="font-style: italic; color: red; font-size: 10px; margin-bottom: -10px;"><?php echo $userErr;?> </span>
            </div>
            <div class="mt-3">
                <label for="password" class="block text-base mb-2">Password</label>
                <input type="password" id="password" name="password" class="border w-full text-base px-2 py-1 focus:outline-none focus:ring-0 focus:border-gray-600" placeholder="Enter Password..." />
                <span style="font-style: italic; color: red;font-size: 10px;"><?php echo $passErr;?> </span>
                <span style="font-style: italic; color: red;font-size: 10px;"><?php echo $userpassErr;?> </span>
            </div>
            <div class="mt-3 flex justify-between items-center">
                <div>
                    <input type="checkbox">
                    <label>Remember Me</label>
                </div>
                <div>
                    <a href="#" class="text-indigo-800 font-semibold">Forgot Password?</a>
                </div>
            </div>
            <div class="mt-5 text-center">
                <button
                    class="bg-red-950 hover:bg-red-900 active:bg-red-400 text-white p-2 w-32 rounded-xl border border-solid border-slate-900 dark:border-none text-[10px] font-bold">LOG IN</button>
            </div>
        </div>
    </div>
    </form>

    
</body>
</html>
