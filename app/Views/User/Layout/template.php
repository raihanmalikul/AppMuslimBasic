<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MuslimBasic</title>
    <!-- <link rel="shortcut icon" type="image/ico" href=""> -->
    <link href="/assets/tailwind/css/output.css" rel="stylesheet" />
    <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet">

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body>
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="px-4">
                    <a href="#home" class="block py-6 text-xl font-bold text-dark dark:text-white">MuslimBasic</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <nav id="navMenu" class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none dark:bg-slate-700 lg:dark:bg-transparent dark:shadow-slate-400">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">HOME</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">BEST SELLER</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">ALL SHOP</a>
                            </li>
                            <li class="group">
                                <a href="#pengalaman" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">SOLD OUT</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">HOW TO SHOPPING</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">CONTACT</a>
                            </li>
                            <li class="mt-3 lg:mt-0 items-center flex pl-8">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-dark dark:text-white">Light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle" />
                                    <label for="dark-toggle">
                                        <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-700 p-1">
                                            <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-out"></div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-dark dark:text-white">Dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-20 dark:bg-dark">
        <div class="bg-dark pt-12 pb-12 bg-gradient-to-r from-gray-500 to-gray-900">
            <div class="flex flex-wrap justify-center items-center w-full h-full" id="imgSwich">
                <div class="transition animate-fade-in-down aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="/assets/tailwind/img/toko/startOrder.jpg" alt="" class="relative z-10 h-[800px] ">
                </div>
                <div class="transition animate-fade-in-up aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="/assets/tailwind/img/toko/foto1.jpg" alt="" class="relative z-10 h-[800px] ">
                </div>
                <div class="transition animate-fade-in-down aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="/assets/tailwind/img/toko/foto2.jpg" alt="" class="relative z-10 h-[800px] ">
                </div>
                <div class="transition animate-fade-in-up aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="/assets/tailwind/img/toko/foto3.jpg" alt="" class="relative z-10 h-[800px] ">
                </div>
                <div class="transition animate-fade-in-down aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                    <img src="/assets/tailwind/img/toko/foto4.jpg" alt="" class="relative z-10 h-[800px] ">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Hero Product Lists Start -->
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-4xl dark:text-white">BEST SELLER</h2>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 xl:gap-y-4">
                <a href="#" class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="/assets/tailwind/img/toko/foto11.jpg" alt="" class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700 dark:text-white">Earthen Bottle</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900 dark:text-secondarybg">$48</p>
                </a>

                <a href="#" class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="/assets/tailwind/img/toko/foto2.jpg" alt="" class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700 dark:text-white">Nomad Tumbler</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900 dark:text-secondarybg">$35</p>
                </a>

                <a href="#" class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="/assets/tailwind/img/toko/foto4.jpg" alt="" class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700 dark:text-white">Focus Paper Refill</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900 dark:text-secondarybg">$89</p>
                </a>

                <a href="#" class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="/assets/tailwind/img/toko/foto3.jpg" alt="" class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700 dark:text-white">Machined Mechanical Pencil</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900 dark:text-secondarybg">$35</p>
                </a>
            </div>
        </div>
    </section>
    <!-- Hero Product Lists End -->

    <!-- Abaut Section Start -->
    <section id="about" class="bg-slate-100 pt-36 pb-16 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">What they say about us!</h2>
                </div>
                <div class="mb-5 flex items-center justify-center">
                    <div class="text-amber-300">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="mb-5 flex items-center justify-center">
                    <p>Form 2388 Customers</p>
                </div>
            </div>
            <div id="reviews" class="carousel slide carousel-dark relative" data-bs-ride="carousel">
                <!-- Inner -->
                <div class="carousel-inner relative w-full overflow-hidden">
                    <!-- Single item -->
                    <div class="carousel-item active relative float-left w-full">
                        <div class="flex flex-wrap w-full justify-center px-4">
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, temporibus explicabo nulla quia rem voluptatum, placeat natus asperiores doloribus reprehenderit sint aut. Explicabo, impedit vel!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia deleniti atque nulla voluptatum maxime aspernatur cupiditate, nisi amet repellat perferendis voluptas vel commodi laboriosam, asperiores quis optio suscipit sed facilis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, quo?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam amet, exercitationem repudiandae ea nisi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex flex-wrap w-full justify-center px-4">
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, temporibus explicabo nulla quia rem voluptatum, placeat natus asperiores doloribus reprehenderit sint aut. Explicabo, impedit vel!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia deleniti atque nulla voluptatum maxime aspernatur cupiditate, nisi amet repellat perferendis voluptas vel commodi laboriosam, asperiores quis optio suscipit sed facilis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, quo?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam amet, exercitationem repudiandae ea nisi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item relative float-left w-full">
                        <div class="flex flex-wrap w-full justify-center px-4">
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, temporibus explicabo nulla quia rem voluptatum, placeat natus asperiores doloribus reprehenderit sint aut. Explicabo, impedit vel!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia deleniti atque nulla voluptatum maxime aspernatur cupiditate, nisi amet repellat perferendis voluptas vel commodi laboriosam, asperiores quis optio suscipit sed facilis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, quo?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="px-3 w-1/4">
                                <div class="carousel-caption text-center">
                                    <h5 class="text-sm">
                                        <div class="text-amber-300">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </h5>
                                    <div class="text-sm">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam laboriosam amet, exercitationem repudiandae ea nisi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button class="carousel-control-prev absolute -top-28 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline -left-28" type="button" data-bs-target="#reviews" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next absolute -top-28 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline -right-28" type="button" data-bs-target="#reviews" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>
    <!-- Abaut Section End -->

    <!-- Portofolio Section Start -->
    <section id="portofolio" class="pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold uppercase text-primary">Portofolio</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Project Terbaru</h2>
                    <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum libero sed tempore ut expedita quis dolorem voluptates, maiores dolores! Illum quisquam, enim earum atque officiis neque fugit doloribus numquam dolorem?
                    </p>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="https://source.unsplash.com/600x300?codes" alt="Landing Page" width="w-full" />
                    </div>
                    <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Project Pertama</h3>
                    <p class="text-base font-medium text-secondary dark:text-secondarybg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vitae culpa sed, quas quis dicta a similique nesciunt illo quia?
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="https://source.unsplash.com/600x300?programmer" alt="Landing Page" width="w-full" />
                    </div>
                    <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Project Kedua</h3>
                    <p class="text-base font-medium text-secondary dark:text-secondarybg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vitae culpa sed, quas quis dicta a similique nesciunt illo quia?
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="https://source.unsplash.com/600x300?web-development" alt="Landing Page" width="w-full" />
                    </div>
                    <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Project Ketiga</h3>
                    <p class="text-base font-medium text-secondary dark:text-secondarybg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vitae culpa sed, quas quis dicta a similique nesciunt illo quia?
                    </p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="overflow-hidden rounded-md shadow-md">
                        <img src="https://source.unsplash.com/600x300?android-app" alt="Landing Page" width="w-full" />
                    </div>
                    <h3 class="mt-5 mb-3 text-xl font-semibold text-dark dark:text-white">Project Keempat</h3>
                    <p class="text-base font-medium text-secondary dark:text-secondarybg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque vitae culpa sed, quas quis dicta a similique nesciunt illo quia?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portofolio Section End -->

    <!-- Pengalaman Section Start -->
    <!-- <section id="pengalaman" class="pt-36 pb-32 dark:bg-slate-300">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold uppercase text-primary">Pengalaman</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl">Pernah Bekerja</h2>
                    <p class="text-md font-medium text-secondary md:text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates quisquam reprehenderit minus aliquam consequuntur.
                    </p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="flex flex-wrap items-center justify-center">
                    <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="/assets/tailwind/img/work/PTPN8.svg" alt="PT Perkebunan Nusantara VII" />
                    </a>
                    <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="/assets/tailwind/img/work/pl.svg" alt="PT Primalogic" />
                    </a>
                    <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="/assets/tailwind/img/work/siscom.svg" alt="PT Shan Informasi Sistem (SISCOM)" />
                    </a>
                    <a href="#" class="mx-4 max-w-[120px] py-4 opacity-60 grayscale transition duration-500 hover:opacity-100 hover:grayscale-0 lg:mx-6 xl:mx-8">
                        <img src="/assets/tailwind/img/work/Infomedia.svg" alt="PT Infomedia Nusantara" />
                    </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Pengalaman Section End -->

    <!-- Blog Section Start -->
    <section id="blog" class="bg-slate-100 pt-36 pb-32 dark:bg-dark">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold uppercase text-primary">Blog</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Artikel Terbaru</h2>
                    <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates quisquam reprehenderit minus aliquam consequuntur.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <img src="https://source.unsplash.com/600x300?web-developer" alt="Web Developer" class="w-full" />
                        <div class="py-8 px-6">
                            <h3 class="mb-3 truncate text-xl font-semibold text-dark dark:text-white">Web Developer</h3>
                            <!-- <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Web Developer</a></h3> -->
                            <p class="mb-6 text-base font-medium text-secondary dark:text-secondarybg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta cum esse temporibus architecto velit nesciunt sit, eum corporis aut ea.
                            </p>
                            <a href="#" class="rounded-lg bg-primary py-2 px-4 font-medium hover:text-white hover:opacity-80 hover:shadow-lg dark:text-white dark:hover:text-black">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <img src="https://source.unsplash.com/600x300?web-peogrammer" alt="Web Programming" class="w-full" />
                        <div class="py-8 px-6">
                            <h3 class="mb-3 truncate text-xl font-semibold text-dark dark:text-white">Web Peogrammer</h3>
                            <!-- <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Web Developer</a></h3> -->
                            <p class="mb-6 text-base font-medium text-secondary dark:text-secondarybg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste similique fugit quidem eos ipsum, deserunt at quo voluptate aliquid ab.
                            </p>
                            <a href="#" class="rounded-lg bg-primary py-2 px-4 font-medium hover:text-white hover:opacity-80 hover:shadow-lg dark:text-white dark:hover:text-black">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                        <img src="https://source.unsplash.com/600x300?data-analysis" alt="Data Analysis" class="w-full" />
                        <div class="py-8 px-6">
                            <h3 class="mb-3 truncate text-xl font-semibold text-dark dark:text-white">Data Analysis</h3>
                            <!-- <h3><a href="#" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Web Developer</a></h3> -->
                            <p class="mb-6 text-base font-medium text-secondary dark:text-secondarybg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid aut laudantium ad eius blanditiis quia molestias adipisci nam quo saepe.
                            </p>
                            <a href="#" class="rounded-lg bg-primary py-2 px-4 font-medium hover:text-white hover:opacity-80 hover:shadow-lg dark:text-white dark:hover:text-black">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="pt-36 pb-32 dark:bg-slate-700">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-lg font-semibold uppercase text-primary">Contact</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Hubungi Kami</h2>
                    <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est libero accusamus similique quia. Repellendus eveniet qui atque reiciendis, saepe minima consequatur facilis reprehenderit aliquam. Quos distinctio harum cum sequi?
                    </p>
                </div>
            </div>

            <form>
                <div class="w-full lg:mx-auto lg:w-2/3">
                    <div class="mb-8 w-full px-4">
                        <label for="name" class="text-base font-bold text-dark dark:text-white">Nama</label>
                        <input type="text" id="name" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="email" class="text-base font-bold text-dark dark:text-white">Email</label>
                        <input type="email" id="email" class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary" />
                    </div>
                    <div class="mb-8 w-full px-4">
                        <label for="mesagge" class="text-base font-bold text-dark dark:text-white">Mesagge</label>
                        <textarea type="email" id="email" class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"></textarea>
                    </div>
                    <div class="w-full px-4">
                        <button class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-dark pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
                    <h2 class="mb-5 text-4xl font-bold text-white">
                        Didin Irfandi Jekri Ikrawan
                    </h2>
                    <h3 class="mb-2 text-2xl font-bold">Hubungi Saya</h3>
                    <p>didinirfandy16@gmai.com</p>
                    <p>Jl. Cilandak Tengah Dalam No 20B</p>
                    <p>RT.2/RW.1, Cilandak Barat</p>
                    <p>Kecamatan Cilandak</p>
                    <p>Kota Jakarta Selatan</p>
                    <p>Daerah Khusus Ibukota Jakarta 12430</p>
                </div>

                <div class="mb-12 w-full px-4 md:w-1/3">
                    <h3 class="mb-5 text-xl font-semibold text-white">Kategori Tulisan</h3>
                    <ul class="text-slate-300">
                        <li><a href="#" class="mb-3 inline-block text-base hover:text-primary">Web Developer</a></li>
                        <li><a href="#" class="mb-3 inline-block text-base hover:text-primary">Teknologi</a></li>
                        <li><a href="#" class="mb-3 inline-block text-base hover:text-primary">Gaya Hidup</a></li>
                    </ul>
                </div>
                <div class="mb-12 w-full px-4 md:w-1/3">
                    <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
                    <ul class="text-slate-300">
                        <li><a href="#home" class="mb-3 inline-block text-base hover:text-primary">Beranda</a></li>
                        <li><a href="#about" class="mb-3 inline-block text-base hover:text-primary">Tentang Saya</a></li>
                        <li><a href="#portofolio" class="mb-3 inline-block text-base hover:text-primary">Portofolio</a></li>
                        <li><a href="#pengalaman" class="mb-3 inline-block text-base hover:text-primary">Pengalaman</a></li>
                        <li><a href="#blog" class="mb-3 inline-block text-base hover:text-primary">Blog</a></li>
                        <li><a href="#contact" class="mb-3 inline-block text-base hover:text-primary">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="w-full border-t border-slate-700 pt-10">
                <div class="mb-5 flex items-center justify-center">
                    <!-- GitHub -->
                    <a href="https://github.com/didinirfandy" target="_balnk" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                        </svg>
                    </a>

                    <!-- linkedin -->
                    <a href="https://www.linkedin.com/in/didinirfandi/" target="_balnk" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                        </svg>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/yoyongmiini/" target="_balnk" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="https://twitter.com/IrfandiDIDIN" target="_balnk" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                        </svg>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/DidinIrfandi" target="_balnk" class="mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white">
                        <svg class="fill-current" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                        </svg>
                    </a>
                </div>
                <p class="text-center text-xs font-medium text-slate-500">
                    Copyright © 2022
                    <a href="https://www.linkedin.com/in/didinirfandi/" target="_blank" class="font-bold text-primary">Didin Irfandi Jekri Ikrawan</a>, with
                    <a href="https://tailwindcss.com/" target="_balnk" class="font-bold text-primary">Tailwind CSS.</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back To Top Start -->
    <a href="#home" id="toTop" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse">
        <div class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></div>
    </a>
    <!-- Back To Top End -->

    <!-- <div class="relative z-10" role="dialog" aria-modal="true">
        <div class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-stretch md:items-center justify-center min-h-full text-center md:px-2 lg:px-4">
                <div class="flex text-base text-left transform transition w-full md:max-w-2xl md:px-4 md:my-8 lg:max-w-4xl">
                    <div class="w-full relative flex items-center bg-white px-4 pt-14 pb-8 overflow-hidden shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
                            <span class="sr-only">Close</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>

                        <div class="w-full grid grid-cols-1 gap-y-8 gap-x-6 items-start sm:grid-cols-12 lg:gap-x-8">
                            <div class="aspect-w-2 aspect-h-3 rounded-lg bg-gray-100 overflow-hidden sm:col-span-4 lg:col-span-5">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-quick-preview-02-detail.jpg" alt="Two each of gray, white, and black shirts arranged on table." class="object-center object-cover">
                            </div>
                            <div class="sm:col-span-8 lg:col-span-7">
                                <h2 class="text-2xl font-extrabold text-gray-900 sm:pr-12">Basic Tee 6-Pack</h2>

                                <section aria-labelledby="information-heading" class="mt-2">
                                    <h3 id="information-heading" class="sr-only">Product information</h3>

                                    <p class="text-2xl text-gray-900">$192</p>

                                    <div class="mt-6">
                                        <h4 class="sr-only">Reviews</h4>
                                        <div class="flex items-center">
                                            <div class="flex items-center">
                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>

                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>

                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>

                                                <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>

                                                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                                </svg>
                                            </div>
                                            <p class="sr-only">3.9 out of 5 stars</p>
                                            <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                                        </div>
                                    </div>
                                </section>

                                <section aria-labelledby="options-heading" class="mt-10">
                                    <h3 id="options-heading" class="sr-only">Product options</h3>

                                    <form>
                                        <div>
                                            <h4 class="text-sm text-gray-900 font-medium">Color</h4>

                                            <fieldset class="mt-4">
                                                <legend class="sr-only">Choose a color</legend>
                                                <span class="flex items-center space-x-3">
                                                    
                                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                                        <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                                                        <span id="color-choice-0-label" class="sr-only"> White </span>
                                                        <span aria-hidden="true" class="h-8 w-8 bg-white border border-black border-opacity-10 rounded-full"></span>
                                                    </label>
                                                    
                                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                                        <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                                                        <span id="color-choice-1-label" class="sr-only"> Gray </span>
                                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-200 border border-black border-opacity-10 rounded-full"></span>
                                                    </label>
                                                    
                                                    <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-900">
                                                        <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                                                        <span id="color-choice-2-label" class="sr-only"> Black </span>
                                                        <span aria-hidden="true" class="h-8 w-8 bg-gray-900 border border-black border-opacity-10 rounded-full"></span>
                                                    </label>
                                                </span>
                                            </fieldset>
                                        </div>
                                        
                                        <div class="mt-10">
                                            <div class="flex items-center justify-between">
                                                <h4 class="text-sm text-gray-900 font-medium">Size</h4>
                                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                                            </div>

                                            <fieldset class="mt-4">
                                                <legend class="sr-only">Choose a size</legend>
                                                <div class="grid grid-cols-4 gap-4">
                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="XXS" class="sr-only" aria-labelledby="size-choice-0-label">
                                                        <span id="size-choice-0-label"> XXS </span>
                                                        
                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                                        <span id="size-choice-1-label"> XS </span>
                                                        
                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                                        <span id="size-choice-2-label"> S </span>

                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                                        <span id="size-choice-3-label"> M </span>

                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                                        <span id="size-choice-4-label"> L </span>
                                                        
                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                                        <span id="size-choice-5-label"> XL </span>
                                                        
                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-white shadow-sm text-gray-900 cursor-pointer">
                                                        <input type="radio" name="size-choice" value="XXL" class="sr-only" aria-labelledby="size-choice-6-label">
                                                        <span id="size-choice-6-label"> XXL </span>
                                                        
                                                        <span class="absolute -inset-px rounded-md pointer-events-none" aria-hidden="true"></span>
                                                    </label>

                                                    <label class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 bg-gray-50 text-gray-200 cursor-not-allowed">
                                                        <input type="radio" name="size-choice" value="XXXL" disabled class="sr-only" aria-labelledby="size-choice-7-label">
                                                        <span id="size-choice-7-label"> XXXL </span>

                                                        <span aria-hidden="true" class="absolute -inset-px rounded-md border-2 border-gray-200 pointer-events-none">
                                                            <svg class="absolute inset-0 w-full h-full text-gray-200 stroke-2" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                                                                <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                                                            </svg>
                                                        </span>
                                                    </label>
                                                </div>
                                            </fieldset>
                                        </div>

                                        <button type="submit" class="mt-6 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <script src="/assets/tailwind/js/script.js"></script>
    <script src="/js/index.min.js"></script>
</body>

</html>