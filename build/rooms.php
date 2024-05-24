<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMS | 1st Floor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
</head>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
        <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
            <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
                <a href="index.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
                <div>
                    <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                        &#9776;
                    </button>
                    <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">

                        <a href="rooms.php" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                        <a href="index.php" class="hover:opacity-70 text-mydefault">CONTACT US</a>
                        <a href="adminlogin.php" class="hover:opacity-70 text-mydefault">ADMIN</a>
                    </nav>
                </div>
            </section>
        </header>

        <main class="bg-cover bg-center relative">
            <section id="racecover"
                class="widescreen:section-min-height tallscreen:section-min-height">

                <img src="img/firstfloor.png" class="absolute">
                <div class="relative">
                
                <!--First Row Rooms-->
                <section>
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                              ROOM 127
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-10">
                        <div class="icon lab" data-room-key="Room126">
                           <div class="tooltip">
                              ROOM 126
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-7">
                        <div class="icon lab" data-room-key="Room125">
                           <div class="tooltip">
                              ROOM 125
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-10">
                        <div class="icon lab" data-room-key="Room122">
                           <div class="tooltip">
                              ROOM 122
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-18">
                        <div class="icon lab" data-room-key="Room120">
                           <div class="tooltip">
                              ROOM 120
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-5">
                        <div class="icon lab" data-room-key="Room118">
                           <div class="tooltip">
                              ROOM 118
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-50">
                        <div class="icon lab" data-room-key="Room112">
                           <div class="tooltip">
                              ROOM 112
                           </div>
                           <span><i class="fa-solid fa-pen-to-square"></i></span>
                    </div>

                    <div class="wrapper ml-10">
                        <div class="icon lab" data-room-key="Room110">
                           <div class="tooltip">
                              ROOM 110
                           </div>
                           <span><i class="fa-solid fa-pen-to-square"></i></span>
                    </div>

                    <div class="wrapper ml-20">
                        <div class="icon lab" data-room-key="Room108">
                           <div class="tooltip">
                              ROOM 108
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-10">
                        <div class="icon lab" data-room-key="Room106">
                           <div class="tooltip">
                              ROOM 106
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-10">
                        <div class="icon lab" data-room-key="Room104">
                           <div class="tooltip">
                              ROOM 104
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    <div class="wrapper ml-7">
                        <div class="icon lab" data-room-key="Room102">
                           <div class="tooltip">
                              ROOM 102
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                    </div>

                    </div>
                </section>


                <!--Second Row Rooms-->

                <section>
                    <div class="wrapper mt-50 ml-70">
                        <div class="icon lab">
                           <div class="tooltip">
                              MOLBIO LAB
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-50 ml-neg10">
                        <div class="icon lab">
                           <div class="tooltip">
                              DISPEN. ROOM
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-50 ml-90">
                        <div class="icon lab" data-room-key="Room119">
                           <div class="tooltip">
                              ROOM 119
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-50 ml-3">
                        <div class="icon lab" data-room-key="Room117">
                           <div class="tooltip">
                              ROOM 117
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-50 ml-25">
                        <div class="icon lab" data-room-key="Room113">
                           <div class="tooltip">
                              ROOM 113
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-50 ml-neg15">
                        <div class="icon lab" data-room-key="Room111">
                           <div class="tooltip">
                              ROOM 111
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="wrapper mt-neg100 ml-neg">
                        <div class="icon lab" data-room-key="Room128">
                           <div class="tooltip">
                              ROOM 128
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-150">
                        <div class="icon lab" data-room-key="Room121">
                           <div class="tooltip">
                              ROOM 121
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-250">
                        <div class="icon lab">
                           <div class="tooltip">
                              FT_DISPEN. ROOM
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-neg20">
                        <div class="icon lab">
                           <div class="tooltip">
                              BIO_DISPEN. ROOM
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-neg8">
                        <div class="icon lab" data-room-key="Room107">
                           <div class="tooltip">
                              ROOM 107
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-3">
                        <div class="icon lab" data-room-key="Room105">
                           <div class="tooltip">
                              ROOM 105
                           </div>
                           <span><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-neg5">
                        <div class="icon lab" data-room-key="Room103">
                           <div class="tooltip">
                              ROOM 103
                           </div>
                           <span><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                    </div>

                    <div class="wrapper mt-neg100 ml-neg">
                        <div class="icon lab">
                           <div class="tooltip">
                              COLD ROOM
                           </div>
                           <span><i class="fa-solid fa-temperature-arrow-down"></i></span>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="wrapper mt-neg90 ml-70">
                        <div class="icon lab">
                           <div class="tooltip">
                              MICRO LAB
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="wrapper mt-neg20 ml-30">
                        <div class="icon lab" data-room-key="Room132">
                           <div class="tooltip">
                              ROOM 132
                           </div>
                           <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>
                </section>
            </section>
        </main>

        <div id="room-details" class="mt-10"></div>

    </body>
</html>
