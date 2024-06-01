<!DOCTYPE html>
<html lang="en" class="sm:scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOMS | 1st Floor</title>
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
         font-weight: bold;
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

                        <a href="rooms.php" class="hover:opacity-70 text-mydefault"> ROOMS</a>
                        <a href="index.php" class="hover:opacity-70 text-mydefault">ABOUT US</a>
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
                    <div class="wrapper mt-[48px] ml-[-3px]">
                        <div class="icon lab" data-room-key="Room127">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 127</p>
                    </div>

                    <div class="wrapper ml-[17px]">
                        <div class="icon lab" data-room-key="Room126">
                           <div class="tooltip">
                              BIOCHEM LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 126</p>
                    </div>

                    <div class="wrapper ml-[12px]">
                        <div class="icon lab" data-room-key="Room125">
                           <div class="tooltip">
                              DISPENSE ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 125</p>
                    </div>

                    <div class="wrapper ml-[17px]">
                        <div class="icon lab" data-room-key="Room122">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 122</p>
                    </div>

                    <div class="wrapper ml-[35px]">
                        <div class="icon lab" data-room-key="Room120">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 120</p>
                    </div>

                    <div class="wrapper ml-[10px]">
                        <div class="icon lab" data-room-key="Room118">
                           <div class="tooltip">
                              PHYSIO LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 118</p>
                    </div>

                    <div class="wrapper ml-[103px]">
                        <div class="icon lab" data-room-key="Room112">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 112</p>
                    </div>

                    <div class="wrapper ml-[22px]">
                        <div class="icon lab" data-room-key="Room110">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 110</p>
                    </div>

                    <div class="wrapper ml-[37px]">
                        <div class="icon lab" data-room-key="Room108">
                           <div class="tooltip">
                              THESIS LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 108</p>
                    </div>

                    <div class="wrapper ml-[13px]">
                        <div class="icon lab" data-room-key="Room106">
                           <div class="tooltip">
                              INSTRU. ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 106</p>
                    </div>

                    <div class="wrapper ml-[14px]">
                        <div class="icon lab" data-room-key="Room104">
                           <div class="tooltip">
                              GENCHEM LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 104</p>
                    </div>

                    <div class="wrapper ml-[7px]">
                        <div class="icon lab" data-room-key="Room102">
                           <div class="tooltip">
                              POSTHARV LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 102</p>
                    </div>

            </section>

            <!--Second Row Rooms-->

            <section>
                    <div class="wrapper mt-[65px] ml-[-5px]">
                        <div class="icon lab" data-room-key="Room128">
                           <div class="tooltip">
                              SCIENCE LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 128</p>
                        </div>
                    </div>

                  <div class="mt-[-165px] ml-[118px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room125A">
                           <div class="tooltip">
                              MOLBIO LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 125a</p>
                        </div>
                    </div>
                  </div>

                  <div class="mt-[-70px] ml-[125px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Microlab">
                           <div class="tooltip">
                              MICRO LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        </div>
                    </div>
                  </div>

                  <div class="mt-[-185px] ml-[190px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room124">
                           <div class="tooltip">
                              DISPEN. ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 124</p>
                        </div>
                    </div>
                  </div>

                  <div class="mt-[-125px] ml-[285px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room121">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 121</p>
                        </div>
                    </div>
                  </div>

                  <div class="mt-[-155px] ml-[404px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room119">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 119</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[3px]">
                        <div class="icon lab" data-room-key="Room117">
                           <div class="tooltip">
                              LAB ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 117</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[57px]">
                        <div class="icon lab" data-room-key="Room113">
                           <div class="tooltip">
                              LECTURE ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p style="font-size: 11px;" class="roomlabel text-red-950">RM. 113</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-15px]">
                        <div class="icon lab" data-room-key="Room111">
                           <div class="tooltip">
                              FOODMICRO LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 111</p>
                        </div>
                    </div>

                  </div>

                  <div class="mt-[-125px] ml-[750px]">
                    <div class="wrapper">
                        <div class="icon lab" data-room-key="Room109a">
                           <div class="tooltip">
                              DISPEN ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p style="font-size: 9.5px;" class="roomlabel text-red-950">RM. 109A</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-30px]">
                        <div class="icon lab" data-room-key="Room109b">
                           <div class="tooltip">
                              DISPEN ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p style="font-size: 8.5px;" class="roomlabel text-red-950">RM. 109B</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-10px]">
                        <div class="icon lab" data-room-key="Room107">
                           <div class="tooltip">
                              FOODENG LAB
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 107</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-2.5px]">
                        <div class="icon lab" data-room-key="Room105">
                           <div class="tooltip">
                              FAC ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 105</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-11px]">
                        <div class="icon lab" data-room-key="Room103">
                           <div class="tooltip">
                              STOCK ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 103</p>
                        </div>
                    </div>

                    <div class="wrapper ml-[-8px]">
                        <div class="icon lab" data-room-key="Room101">
                           <div class="tooltip">
                              COLD ROOM
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p class="roomlabel text-red-950">RM. 101</p>
                        </div>
                    </div>

                  </div>

                  <div class="wrapper mt-[4px] ml-[65px]">
                        <div class="icon lab" data-room-key="Room132">
                           <div class="tooltip">
                              BIOTECH
                           </div>
                        <span><i class="fa-solid fa-flask-vial"></i></span>
                        <p style="font-size: 10px;" class="roomlabel text-red-950">RM. 132</p>
                        </div>
                  </div>


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
