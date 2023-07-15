<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<head>
    <title>Home</title>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="wrapper cursor-default flex w-full flex-col gap-3 py-5 px-24">
        <div class="carousel-wrap w-4/5 self-center js-show-on-scroll">
            <div id="carouselExampleIndicators" class="carousel slide relative" data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden rounded-xl cursor-pointer">
                    <div class="carousel-item active float-left w-full">
                        <img src="img/berita1.png" class="block h-96 object-cover w-full" alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="img/berita2.png" class="block h-96 object-cover w-full" alt="Camera" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="img/berita3.png" class="block h-96 object-cover w-full" alt="Exotic Fruits" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="img/berita4.png" class="block h-96 object-cover w-full" alt="Exotic Fruits" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="img/berita5.png" class="block h-96 object-cover w-full" alt="Exotic Fruits" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="img/berita6.png" class="block h-96 object-cover w-full" alt="Exotic Fruits" />
                    </div>
                </div>
                <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> <!--  end of carousel wrapper -->

        <div class="beritaprofil-wrapper js-show-on-scroll gap-x-3 flex flex-row">
            <div class="berita bg-white bg-opacity-70 rounded-md shadow p-4">
                <h3 class="text-xl font-semibold">BERITA TERKINI</h3>
                <hr>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-14 pt-14 w-full">
                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita1.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>

                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita2.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>

                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita3.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>

                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita4.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>

                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita5.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>

                    <div class="shadow hover:shadow-md w-full bg-white rounded-lg overflow-hidden cursor-pointer">
                        <img class="object-cover w-full h-48" src="img/berita6.png" alt="Flower and sky" />

                        <div class="relative p-4">
                            <h3 class="text-base font-medium text-gray-800">
                                This is card title
                            </h3>

                            <p class="mt-4 text-base text-gray-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                                dicta
                                fugit optio placeat temporibus.
                            </p>
                        </div>
                    </div>
                </div>

            </div> <!--  end of berita-->

            <div class="profil-kepala shadow bg-white bg-opacity-70 rounded-md p-4 hidden md:flex flex-col gap-y-3 ">
                <h3 class="text-xl font-semibold">PROFIL KEPALA DINAS
                    <hr>
                </h3>
                <div class="shadow-lg max-w-3xl rounded-md py-4">
                    <img class="w-full p-2 rounded-2xl" src="img/pasfoto.jpg" alt="pas foto">
                    <p class="mt-4 p-2 text-base text-gray-600">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad assumenda cumque deserunt
                        dicta
                        fugit optio placeat temporibus.
                    </p>
                </div>

                <div class="shadow-lg rounded-md w-full p-4 flex flex-col gap-y-6">
                    <div class="contact">
                        <h3>Social Media</h3>
                        <hr>
                    </div>
                    <a class="fb flex flex-row items-center hover:text-yellow-400" href="https://www.facebook.com/dinpus.kotasamarinda">
                        <i class="fab fa-facebook-square fa-xl mr-2"></i>
                        <p class="text-xs">Dinas Perpustakaan Kota Samarinda</p>
                    </a>
                    <a class="ig flex flex-row items-center hover:text-yellow-400" href="https://www.instagram.com/dinasperpustakaan_samarinda/">
                        <i class="fab fa-instagram-square fa-xl mr-2"></i>
                        <p class="text-xs">@dinasperpustakaan_samarinda</p>
                        </a>
                </div>
                <div class="shadow-lg rounded-md w-full p-4 gap-6 flex flex-col ">
                    <div class="address">
                        <h3>Address</h3>
                        <hr>
                    </div>
                    <div>
                        <p>Jl. Kesuma Bangsa No. 5</p>
                        <p>Samarinda, Kalimantan Timur</p>
                    </div>
                    <div class="flex flex-row items-center hover:text-yellow-400">
                        <a href="https://goo.gl/maps/L4HiHZ1DXkJKAut36">
                            <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>

        </div><!--  end of beritaprofil wrapper -->

        <div class="galeri-wrapper js-show-on-scroll shadow bg-white bg-opacity-70 rounded-md w-full ">
            <div class="galeri px-4">
                <h3 class="text-xl font-semibold">GALERI DOKUMENTASI KEGIATAN</h3>
                <hr>
                <section class="overflow-hidden text-gray-700">
                    <div class="container px-5 py-2 mx-auto lg:px-32">
                        <div class="flex flex-wrap -m-1 md:-m-2">
                            <div class="flex flex-wrap w-1/2">
                                <div class="w-1/2 p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita1.png">
                                </div>
                                <div class="w-1/2 p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita2.png">
                                </div>
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita3.png">
                                </div>
                            </div>
                            <div class="flex flex-wrap w-1/2">
                                <div class="w-full p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita4.png">
                                </div>
                                <div class="w-1/2 p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita5.png">
                                </div>
                                <div class="w-1/2 p-1 md:p-2">
                                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg" src="img/berita6.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div> <!--  end of galeri wrapper -->
    </div> <!--  end of main wrapper -->

    <?php include('footer.php'); ?>
    <script src="flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>