<div class="navbar ">
    <div class="w-full h-52 bg-white bg-no-repeat bg-cover bg-center bg-[url('img/perpus.png')] ">
        <div class="bg-black w-full h-full bg-opacity-50 flex items-center justify-center">
            <img class="w-12" src="https://perpus.samarindakota.go.id/assets/frontend/img/logo-samarinda.png" alt="">
            <h1 class="animate__animated animate__lightSpeedInRight text-white font-semibold italic text-2xl">DINAS PERPUSTAKAAN DAN KEARSIPAN KOTA
                SAMARINDA
            </h1>
        </div>
    </div>

    <nav class="bg-gray-900 w-full px-2 sm:px-4 py-2.5 ">
        <div class="container flex flex-wrap justify-center items-center mx-auto">
            <div class="flex w-full justify-end">
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
                <div class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:font-medium">
                    <a href="index.php" class="p-2 text-white font-light rounded-md hover:bg-gray-800">Home</a>

                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- Dropdown toggle button -->
                        <button @mouseover="open = true" class="flex items-center p-2 text-white rounded-md hover:bg-gray-800">
                            <span class="mr-2">Profil</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.800ms class="absolute z-20 left-0 w-48 py-2 bg-gray-900 rounded-md shadow-xl">
                            <a href="tentang.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Tentang
                            </a>
                            <a href="visimisi.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Visi dan Misi
                            </a>
                            <a href="sejarah.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Sejarah
                            </a>
                            <a href="tugas.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Tugas Pokok dan Fungsi
                            </a>
                            <a href="orgstr.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Struktur Organisasi
                            </a>
                        </div>
                    </div>

                    <a href="berita.php" class="p-2 text-white font-light rounded-md hover:bg-gray-800">Berita</a>

                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- Dropdown toggle button -->
                        <button @mouseover="open = true" class="flex items-center p-2 text-white rounded-md hover:bg-gray-800">
                            <span class="mr-2">Layanan</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.800ms class="absolute z-20 left-0 w-48 py-2 bg-gray-900 rounded-md shadow-xl">
                            <a href="pendaftaran.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Prosedur Pendaftaran
                            </a>
                            <a href="peminjaman.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Prosedur Peminjaman
                            </a>
                            <a href="pengembalian.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Prosedur Pengembalian
                            </a>
                            <a href="perpanjangan.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Prosedur Perpanjangan Anggota
                            </a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- Dropdown toggle button -->
                        <button @mouseover="open = true" class="flex items-center p-2 text-white rounded-md hover:bg-gray-800">
                            <span class="mr-2">PPID</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.800ms class="absolute z-20 left-0 w-48 py-2 bg-gray-900 rounded-md shadow-xl">
                            <a href="ppid-ss.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Informasi Setiap Saat
                            </a>
                            <a href="ppid-ib.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Informasi Berkala
                            </a>
                            <a href="ppid-sm.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Informasi Serta Merta
                            </a>
                        </div>
                    </div>

                    <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                        <!-- Dropdown toggle button -->
                        <button @mouseover="open = true" class="flex items-center p-2 text-white rounded-md hover:bg-gray-800">
                            <span class="mr-2">Media</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.800ms class="absolute z-20 left-0 w-48 py-2 bg-gray-900  rounded-md shadow-xl">
                            <a href="galerifoto.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Foto
                            </a>
                            <a href="galerivideo.php" class="block px-4 py-2 text-sm  text-white hover:bg-gray-400">
                                Video
                            </a>
                        </div>
                    </div>

                    <a href="http://inlislite.samarindakota.go.id/opac/" class="p-2 text-white font-light rounded-md hover:bg-gray-800">OPAC</a>
                </div>
            </div>
        </div>
    </nav>
</div>