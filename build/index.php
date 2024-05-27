<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RACE | Homepage</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="#"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a style="font-family: Montserrat;" href="#rooms" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                    <a style="font-family: Montserrat;" href="#aboutus" class="hover:opacity-70 text-mydefault">ABOUT US</a>
                    <a style="font-family: Montserrat;"href="adminlogin.php" class="hover:opacity-70 text-mydefault">ADMIN</a>
                </nav>
            </div>
        </section>
        
    </header>   

        <section id="racecover"
            class="widescreen:section-min-height tallscreen:section-min-height">
            <img src="img/homepagecover.gif" class="absolute">
            <div class="p-[75px]">
                <h1 class="leading-[70px] text-[78px] max-w-[550px] relative poppins-black font-[900] text-orange-100 drop-shadow-4xl">
                    ROOM AVAILABILITY for CLASSES and EXAMS
                </h1><br>
                <p class="text-[17px] max-w-[550px] relative montserrat-black text-orange-100 drop-shadow-4xl mt-12 -mb-10">
                    Checking for available rooms in CSM made easy for you!
                </p>
            </div>
        </section>
        <br><br><br><br>

        <section id="rooms" class="p-6 my-12 scroll-mt-18 max-w-[1000px] mx-auto montserrat-black widescreen:section-min-height tallscreen:section-min-height">
            <h2 class="mt-5 text-4xl font-bold text-center sm:text-5xl mb-14 text-orange-950 dark:text-white">
                CHECK ROOMS:
            </h2>
            <ul class="list-none my-5 flex flex-col sm:flex-row items-center justify-center gap-36">
                <!--1st Card-->
                <a href="rooms.php">
                    <li class="sm:w-[95%] flex flex-col items-center border border-solid border-slate-900 hover:bg-[#f9f0df] hover:border-orange-900 dark:border-gray-100 bg-[#FFFAEF] dark:bg-black py-12 px-24 rounded-3xl shadow-xl">
                    <img src="img/1floor.png" alt="1st Floor" class="w-52 mb-6">
                    <h3 class="text-[20px] font-bold text-center mt-2 text-red-950 dark:text-white">FIRST FLOOR</h3>
                </li></a>
                <!--2nd Card-->
                <a href="secondfloor.php">
                    <li class="sm:w-[95%] flex flex-col items-center border border-solid border-slate-900 hover:bg-[#f9f0df] hover:border-orange-900 dark:border-gray-100 bg-[#FFFAEF] dark:bg-black py-12 px-24 rounded-3xl shadow-xl">
                    <img src="img/2floor.png" alt="2nd Floor" class="w-52 mb-6">
                    <h3 class="text-[20px] font-bold text-center mt-2 text-red-950 dark:text-white">SECOND FLOOR</h3>
                </li></a>

            </ul>
        </section>

        <hr class="mx-auto bg-gray-500 h-[1.5px]  dark:bg-white w-1/2">

        <section id="aboutus"
            class="p-6 my-12 scroll-mt-18 widescreen:section-min-height tallscreen:section-min-height montserrat-black widescreen:section-min-height tallscreen:section-min-height">

            <div class="container">
            <div class="header">
            <h2 class="mb-12 text-4xl font-bold text-center sm:text-5xl text-orange-950 dark:text-white">
                ABOUT US
            </h2>
            </div>
            <div class="sub-container">
                <div class="teams">
                    <img src="img/juliene.jpg" alt="">
                    <div class="name">Juliene Airen Bontilao</div>
                    <div class="desig">Front-end Developer</div>
                    <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>

                    <div class="social-links">
                        <a href="https://www.facebook.com/julienebontilao/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/juliyenyenn/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/juliyenyenn" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>

                <div class="teams">
                    <img src="img/isabel.jpg" alt="">
                    <div class="name">Kristianna Isabel Mazo</div>
                    <div class="desig">Back-end Developer</div>
                    <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>

                    <div class="social-links">
                        <a href="https://www.facebook.com/kristianna.mazo" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/kristiannaaamazo/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/krimazo" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>

                <div class="teams">
                    <img src="img/gracie.jpg" alt="">
                    <div class="name">Gracie Anne Abot </div>
                    <div class="desig">Back-end Developer</div>
                    <div class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>

                    <div class="social-links">
                        <a href="https://www.facebook.com/profile.php?id=100008427468918" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/gracieabot_/" target="_blank"><i class="fa fa-instagram"></i></a>
                        <a href="https://github.com/gracie630" target="_blank"><i class="fa fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>

        </section>

        <div class="p-12"></div>

        <footer id="footer" class="bg-[#896565] text-white text-xl">
            <section class="max-w-4xl mx-auto p-4 flex flex-col sm:flex-row sm:justify-between">
                <address>
                    <h2>Room Availability System</h2>
                    555 Sitio Basak<br>
                    Davao City, Philippines 12345-5555<br>
                    Email: <a href="#">raceincsm@upmin.edu.ph</a><br>
                    Phone: <a href="#">(555) 555-5555</a>
                </address>
                <nav class="hidden md:flex flex-col gap-2" aria-label="footer">
                    <a href="#rooms" class="hover:opacity-90">ROOMS</a>
                    <a href="#aboutus" class="hover:opacity-90">ABOUT US</a>
                </nav>
                <div class="flex flex-col sm:gap-2">
                    <p class="text-right">Copyright &copy; <span id="year">2024</span></p>
                    <p class="text-right">All Rights Reserved</p>
                </div>
            </section>
        </footer>


</body>
</html>
