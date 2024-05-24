<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RACE | Homepage</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <a href="#rooms" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                    <a href="#contact" class="hover:opacity-70 text-mydefault">CONTACT US</a>
                    <a href="adminlogin.php" class="hover:opacity-70 text-mydefault">ADMIN</a>
                </nav>
            </div>
        </section>
        
    </header>   

        <section id="racecover"
            class="widescreen:section-min-height tallscreen:section-min-height">
            <img src="img/homepagecover.gif" class="absolute">
            <div class="p-[75px]">
                <h1 class="leading-[70px] text-[78px] max-w-[550px] relative poppins-black font-extrabold text-orange-100 drop-shadow-4xl">
                    ROOM AVAILABILITY for CLASSES and EXAMS
                </h1>
                <p class="text-[17px] max-w-[550px] relative montserrat-black text-orange-100 drop-shadow-4xl mt-12 -mb-10">
                    Checking for available rooms in CSM made easy for you!
                </p>
            </div>
        </section>
        <br><br><br><br><br><br>

        <section id="rooms" class="p-6 my-12 scroll-mt-18 max-w-[1000px] mx-auto montserrat-black widescreen:section-min-height tallscreen:section-min-height">
            <h2 class="mt-5 text-4xl font-bold text-center sm:text-5xl mb-14 text-orange-950 dark:text-white">
                CHECK ROOMS:
            </h2>
            <ul class="mx-auto list-none my-5 flex flex-col sm:flex-row items-center gap-18">
                <!--1st Card-->
                <a href="rooms.php"><li 
                    class="opt sm:w-2/3 flex flex-col items-center border border-solid border-slate-900 dark:border-gray-100 bg-[#FFFAEF] dark:bg-black py-6 rounded-3xl shadow-xl">
                    <img src="img/1floor.png" alt="1st Floor" class="w-40p mb-6">
                    <h3 class="text-[20px] font-bold text-center mt-2 text-slate-900 dark:text-white">FIRST FLOOR</h3>
                </li></a>
                <!--2nd Card-->
                <li 
                    class="opt sm:w-2/3 flex flex-col items-center border border-solid border-slate-900 dark:border-gray-100 bg-[#FFFAEF] dark:bg-black py-6 px-2 rounded-3xl shadow-xl">
                    <img src="img/2floor.png" alt="2nd Floor" class="w-40p mb-6">
                    <h3 class="text-[20px] font-bold text-center mt-2 text-slate-900 dark:text-white">SECOND FLOOR</h3>
                </li>

            </ul>
        </section>

        <hr class="mx-auto bg-gray-500 h-[1.5px]  dark:bg-white w-1/2">

        <section id="contact"
            class="p-6 my-12 scroll-mt-20 widescreen:section-min-height tallscreen:section-min-height montserrat-black widescreen:section-min-height tallscreen:section-min-height">
            <h2 class="mb-12 text-4xl font-bold text-center sm:text-5xl text-orange-950 dark:text-white">
                CONTACT US
            </h2>
            <form action="" class="max-w-4xl mx-auto text-2xl sm:text-3xl flex flex-col items-left gap-4">
                <label for="subject" class="text-[22px] font-bold text-orange-950">SUBJECT:</label>
                <input type="text" id="subject" name="subject" required minlength="3" maxlength="60"
                    placeholder="Your Subject"
                    class="w-full text-black text-[20px] sm:text-[15px] pl-3 rounded-xl border border-solid border-slate-900 dark:border-none bg-[#FFFAEF]">
                <label for="message" class="text-[22px] font-bold text-orange-950">MESSAGE:</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required
                    class="w-full text-black text-[20px] sm:text-[15px] pl-3 rounded-xl border border-solid border-slate-900 dark:border-none bg-[#FFFAEF]"></textarea>
                <button
                    class="bg-red-950 hover:bg-red-900 active:bg-teal-500 text-white p-2 w-32 rounded-xl border border-solid border-slate-900 dark:border-none text-[20px] font-bold">SUBMIT</button>
            </form>
        </section>

        <div class="p-16"></div>

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
                    <a href="#contact" class="hover:opacity-90">CONTACT US</a>
                </nav>
                <div class="flex flex-col sm:gap-2">
                    <p class="text-right">Copyright &copy; <span id="year">2024</span></p>
                    <p class="text-right">All Rights Reserved</p>
                </div>
            </section>
        </footer>


</body>
</html>
