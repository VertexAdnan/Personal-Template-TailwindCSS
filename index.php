<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body class="bg-gray-900 px-32 justify-between space-y-10">
    <div class="flex justify-evenly pt-5">
        <nav class="grid grid-cols-2 center divide-white divide-x w-96 h-10 bg-gray-700 text-white rounded-lg items-center justify-between px-5 text-center">
            <a class="hover:text-gray-300 transition-all duration-400 font-mono" href="github">Github</a>
            <a class="hover:text-gray-300 transition-all duration-400 font-mono" href="linkedin">Linkedin</a>
        </nav>
    </div>

    <div class="flex flex-col md:flex-row">
        <div class="md:w-4/6 h-2/5">
            <!-- Slider main container -->
            <div class="swiper w-full h-4/6 rounded-md">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="assets/img/1920.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/1920.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/img/1920.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="pl-2 text-white">
            <h1 class="uppercase text-w-24 subpixel-antialiased font-bold border-y text-center">About</h1>
            <p class="font-thin pt-2 divide-y-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id quasi dolorum nisi adipisci molestiae? Dolor cumque perspiciatis, quia ut quo tenetur doloremque non odio deleniti commodi sint alias, illum asperiores.</p>
            <div class="grid gap-4 grid-cols-2 grid-rows-2 pt-5 m-w-10 justify-items-center ">
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/2560px-Webysther_20160423_-_Elephpant.svg.png" alt="" />
                </div>
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="assets/img/react.png" alt="" />
                </div>
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="assets/img/sails.png" alt="" />
                </div>
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="assets/img/javascript.png" alt="" />
                </div>
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="assets/img/jquery.png" alt="" />
                </div>
                <div class="hover:scale-75 duration-500 grid w-36 h-36 content-center items-center rounded-md">
                    <img src="assets/img/c.png" alt="" />
                </div>
            </div>
        </div>
    </div>

    <div class="grid place-items-center gap-2 ">
        <div class="flex flex-row gap-4 ">
            <input type="text" class="border-2 border-black rounded-md w-40 italic hover:not-italic text-center bg-gray-600" placeholder="Name" />
            <input type="text" class="border-2 border-black rounded-md w-40 italic hover:not-italic text-center bg-gray-600" placeholder="Surname" />
        </div>
        <div>
            <input type="text" class="border-2 border-black rounded-md w-80 italic hover:not-italic text-center bg-gray-600" placeholder="E-mail">
        </div>
        <div>
            <textarea class="border-2 border-black rounded-md italic hover:not-italic text-center bg-gray-600" placeholder="Your Message" cols="43" rows="6"></textarea>
        </div>
        <button type="submit" class="uppercase bg-gray-800 hover:bg-gray-400 rounded-md w-24 h-8 text-white">Submit</button>
    </div>
    <div class="flex flex-row font-mono font-bold justify-center py-8 text-white">
        <p>Created with </p>
        <img width="25px" src="https://cdn-icons.flaticon.com/png/128/2589/premium/2589175.png?token=exp=1642006885~hmac=a01301f380e33fcf888fa7699c7e6464" alt="">
        <p>& TailwindCSS
    </div>



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            autoplay: {
                delay: 2000,
            },
            createElements: true,
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        });
    </script>
</body>

</html>