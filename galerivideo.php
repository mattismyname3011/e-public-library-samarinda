<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<head>
    <title>Galeri Video</title>
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover bg-fixed">

    <?php
    require 'navbar.php';
    ?>
    <div class="bg-gradient-to-r from-green-400  to-cyan-500 lg:w-auto h-40 flex items-center justify-center">
        <span class="    text-5xl italic font-semibold whitespace-nowrap dark:text-black">
            <p class="animate__animated animate__lightSpeedInLeft ">Galeri Video</p>
            <div class="animate__animated animate__lightSpeedInRight mx-auto lg:mx-0 w-full pt-3 border-b-2 border-black opacity-25">
            </div>
        </span>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade relative  m-6" data-bs-ride="carousel">
        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner relative w-full h-4/5 overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <video class="w-full rounded-lg" autoplay loop muted>
                    <source src="vid/Tropical.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Video Pertama</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <video class="w-full rounded-lg" autoplay loop muted>
                    <source src="vid/forest.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl ">Video Kedua</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item relative float-left w-full">
                <video class="w-full rounded-lg" autoplay loop muted>
                    <source src="vid/Agua-natural.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption hidden md:block absolute text-center">
                    <h5 class="text-xl">Video Ketiga</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include('footer.php'); ?>

    <script src="flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>