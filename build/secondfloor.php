<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMS | 2nd Floor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        $(document).ready(function(){
            $('.icon').click(function(){
                var roomKey = $(this).data('room-key');
                $.ajax({
                    url: 'fetch_rooms.php',
                    type: 'GET',
                    data: { room_key: roomKey },
                    success: function(response) {
                        $('#room-details').html(response);
                    }
                });
            });
        });
    </script>

    <style>

        .roomlabel{
            font-size: 12px; 
            font-family: "Montserrat";
            font-weight:bold;
        }




    </style>

</head>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white relative">

        <!-- Overlay div -->
      <div id="overlay" class="fixed inset-0 bg-black opacity-70 z-50 hidden"></div>
        <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
            <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
                <a href="index.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
                <div>
                    <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                        &#9776;
                    </button>
                    <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">

                        <a href="index.php" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                        <a href="index.php" class="hover:opacity-70 text-mydefault">ABOUT US</a>
                        <a href="adminlogin.php" class="hover:opacity-70 text-mydefault">ADMIN</a>
                    </nav>
                </div>
            </section>
        </header>

        <main class="bg-cover bg-center relative">
            <section id="racecover"
                class="widescreen:section-min-height tallscreen:section-min-height">

                <img src="img/csmsecondfloor.png" class="absolute">
                <div class="relative">
                
                <!--First Line Rooms-->

                <section>

                    <div class="wrapper mt-[43px] ml-[115px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                              LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 226</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[9px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                             LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 224</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[18px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                             LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 222</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[350px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                             RESEARCH ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 208</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[22px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                             LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 206A</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[20px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                             LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 206B</p>
                        </div>
                    </div>

                </section>

                <!--Second Line Room-->

                <section>
                    <div class="wrapper mt-[-80px] ml-[10px]">
                        <div class="icon lab">
                           <div class="tooltip">
                              ADV ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 227</p>
                        </div>
                    </div>

                </section>

                <!--Third Line Rooms-->

                <section>
                    <div class="wrapper mt-[9px] ml-[10px]">
                        <div class="icon lab">
                           <div class="tooltip">
                              CMSC LABORATORY
                           </div>
                           <span><i class="fa-solid fa-computer"></i></span>
                           <p class="roomlabel text-red-950">RM. 228</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[93px]">
                        <div class="icon lab">
                           <div class="tooltip">
                              CMSC LABORATORY
                           </div>
                           <span><i class="fa-solid fa-computer"></i></span>
                           <p class="roomlabel text-red-950">RM. 225</p>
                        </div>
                    </div>

                    <div class="mt-[-155px] ml-[268px]">
                    <div class="wrapper">
                        <div class="icon lab">
                           <div class="tooltip">
                              LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 223</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-14px]">
                        <div class="icon lab">
                           <div class="tooltip">
                              LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 221</p>
                        </div>
                    </div>
                    </div>

                </section>

                <!--Fourth Line Rooms-->

                <section style="margin-top: -5px;">
                    <div class="wrapper ml-[10px]">
                        <div class="icon lab">
                           <div class="tooltip">
                              LECTURE ROOM
                           </div>
                           <span><i class="fa-solid fa-person-chalkboard"></i></span>
                           <p class="roomlabel text-red-950">RM. 229</p>
                        </div>
                    </div>
                    
                    <div class="mt-[-125px] ml-[192px]">
                    <div class="wrapper">
                        <div class="icon lab">
                           <div class="tooltip">
                              PHYSICS LAB
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                           <p class="roomlabel text-red-950">RM. 230</p>
                        </div>
                    </div>
                    </div>


                </section>



                
            </section>
        </main>

        <div id="room-details" class="mt-10"></div>

    <script>
    $(document).ready(function(){
        $('.icon').click(function(){
            var roomKey = $(this).data('room-key');
            $.ajax({
                url: 'fetch_rooms.php',
                type: 'GET',
                data: { room_key: roomKey },
                success: function(response) {
                    $('#room-details').html(response);
                    $('#overlay').removeClass('hidden'); // Show overlay
                }
            });
        });
    });
    </script>

    </body>
</html>
