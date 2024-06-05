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
        </section><br><br>

        <hr class="mx-auto bg-gray-500 h-[1.5px]  dark:bg-white w-1/2">

        <section id="aboutus"
            class="p-6 my-12 scroll-mt-18 widescreen:section-min-height tallscreen:section-min-height montserrat-black widescreen:section-min-height tallscreen:section-min-height">

            <div class="container">
            <div class="header">
            <h2 class="mb-12 text-4xl font-bold text-center sm:text-5xl text-orange-950 dark:text-white">
                OUR TEAM
            </h2>
            </div>
            <div class="sub-container">
                <div class="teams">
                    <img src="img/juliene1.jpg" alt="">
                    <div class="name">Juliene Airen Bontilao</div>
                    <div class="desig">Front-end Developer</div>
                    <div class="about text-[#444] font-[150]"> Passionate and dedicated, Juliene is the front-end developer of this team’s project. Her keen eye for design and detail ensures a seamless and engaging user experience. 
                        As the sole front-end developer, Juliene’s creativity and technical prowess are the driving forces behind the project’s aesthetic appeal and functionality. </div>
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/juliene-airen-bontilao-8568002b5/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class=" fill-[#444] h-[18px] w-[18px]" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                        <a href="https://github.com/juliyenyenn" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="fill-[#444] h-[18px] w-[18px]" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
                    </div>
                </div>

                <div class="teams">
                    <img src="img/isabel.jpg" alt="">
                    <div class="name">Kristianna Isabel Mazo</div>
                    <div class="desig">Back-end Developer</div>
                    <div class="about text-[#444] font-[150]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>

                    <div class="social-links">
                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class=" fill-[#444] h-[18px] w-[18px]" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                        <a href="https://github.com/krimazo" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="fill-[#444] h-[18px] w-[18px]" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
                    </div>
                </div>

                <div class="teams">
                    <img src="img/gracie1.jpg" alt="">
                    <div class="name">Gracie Anne Abot </div>
                    <div class="desig">Back-end Developer</div>
                    <div class="about text-[#444] font-[150]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum labore quam
                        reprehenderit
                        vitae aliquam dicta! </div>

                    <div class="social-links">
                        <a href="#" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class=" fill-[#444] h-[18px] w-[18px]" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>
                        <a href="https://github.com/gracie630" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" class="fill-[#444] h-[18px] w-[18px]" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></a>
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
