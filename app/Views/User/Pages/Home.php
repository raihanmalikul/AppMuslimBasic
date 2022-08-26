<?php $this->session = \Config\Services::session(); ?>

<?= $this->extend('User/Layout/PageLayout'); ?>
<?= $this->section('contentUser'); ?>

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
                            <a href="#best" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">BEST SELLER</a>
                        </li>
                        <li class="group">
                            <a href="#discount" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">ITEM DISCOUNT</a>
                        </li>
                        <li class="group">
                            <a href="#rating" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">RATING</a>
                        </li>
                        <li class="group">
                            <a href="#contact" class="mx-3 flex py-2 text-base text-dark group-hover:text-primary dark:text-white">CONTACT</a>
                        </li>
                        <li class="group">
                            <div class="mt-3 lg:mt-0 items-center flex pl-8">
                                <div class="inline-flex hover:shadow-lg focus:shadow-lg" role="group">
                                    <?php
                                    if ($this->session->get('loggedIn')) { ?>
                                        <button type="button" class="inline-flex relative items-center px-3 py-2.5 text-sm font-medium text-center text-gray-700 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:bg-gray-300" onclick="toggleSlideover()">
                                            <i class="fas fa-shopping-cart"></i>
                                            <span class="sr-only">Shopping Chart</span>
                                            <div id="totChart"></div>
                                        </button>
                                        <button type="button" class="inline-flex relative items-center px-3 py-2.5 text-sm font-medium text-center text-gray-700 rounded-lg hover:bg-gray-300 focus:ring-4 focus:outline-none focus:bg-gray-300" data-bs-toggle="modal" data-bs-target="#timeline">
                                            <i class="fas fa-bell"></i>
                                            <span class="sr-only">Notifications</span>
                                            <div id="totTimeline"></div>
                                        </button>
                                    <?php } ?>
                                    <div class="dropdown relative">
                                        <a class="dropdown-toggle px-3 py-2.5 text-gray-700 font-medium text-xs leading-tight uppercase rounded hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fa-solid fa-user"></i>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 m-0 bg-clip-padding border-none" aria-labelledby="dropdownMenuButton2">
                                            <?php
                                            if ($this->session->get('loggedIn')) { ?>
                                                <li>
                                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="/settings">Settings</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="/logout">Logout</a>
                                                </li>

                                            <?php } else { ?>
                                                <li>
                                                    <a class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100" href="/login">Login</a>
                                                </li>
                                            <?php }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mt-3 lg:mt-0 items-center flex pl-8" id="disabledMode">
                            <div class="flex">
                                <span class="mr-2 text-sm text-dark dark:text-white">Light</span>
                                <input type="checkbox" class="hidden" id="dark-toggle" />
                                <label for="dark-toggle">
                                    <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-700 p-1">
                                        <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-300 ease-out">
                                        </div>
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

<!-- Home Section Start -->
<section id="home" class="pt-20 dark:bg-dark">
    <div class="pt-12 pb-12 bg-gradient-to-r dark:from-gray-500 to-gray-900">
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
<!-- Home Section End -->

<!-- Best Seller Section Start -->
<section id="best" class="bg-slate-100 pt-32 pb-16 dark:bg-slate-800">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">BEST SELLER</h2>
                <!-- <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg"></p> -->
            </div>
        </div>
        <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8 xl:gap-y-4" id="bastSeller">
            <span id="bastSeller"></span>
            <!-- <a href="#" class="group">
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
            </a> -->
        </div>
    </div>
</section>
<!-- Best Seller Section End -->

<section id="discount" class="pt-32 pb-16 dark:bg-dark">
    <div class="container">
        <!-- <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2> -->
        <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">ITEM DISCOUNT</h2>
                <!-- <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, voluptates quisquam reprehenderit
                    minus aliquam consequuntur.
                </p> -->
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" id="discountItem">
            <!-- <div class="group relative">
                <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                    <div class="py-8 px-6">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                    <div class="py-8 px-6">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                    <div class="py-8 px-6">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group relative">
                <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                    <div class="py-8 px-6">
                        <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-sm text-gray-700">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">Black</p>
                            </div>
                            <p class="text-sm font-medium text-gray-900">$35</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<!-- Rarting Section Start -->
<section id="rating" class="bg-slate-100 pt-36 pb-32 dark:bg-slate-400">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">What they say
                    about us!</h2>
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
            <div class="mb-5 flex items-center justify-center dark:text-white">
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
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci illo nisi non
                                        debitis, vero quas nulla magni necessitatibus nesciunt at illum, dolorum,
                                        perspiciatis laboriosam esse!</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur et quaerat non
                                        eveniet voluptatum possimus, facere ex dolorem quo aliquid!</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto corporis in,
                                        iure asperiores dolorem earum deleniti odio aspernatur ut molestias!</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea ipsam in voluptate
                                        voluptatum. Sed nisi harum natus eum minus. Nobis!</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item relative float-left w-full">
                    <div class="flex flex-wrap w-full justify-center px-4">
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed natus animi facilis
                                        architecto amet unde molestias suscipit similique debitis consectetur?</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis id dolorem
                                        doloribus repellat mollitia cupiditate quo sunt fugit commodi ipsam.</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint deserunt quasi
                                        quaerat. Dicta veritatis nulla dignissimos sit ad exercitationem tenetur.</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi aliquam voluptatum
                                        adipisci doloremque saepe nesciunt natus et pariatur accusantium iusto.</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item relative float-left w-full">
                    <div class="flex flex-wrap w-full justify-center px-4">
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum commodi minus
                                        vitae sint mollitia libero nostrum perferendis illum ex! Est.</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt quaerat dicta
                                        consequuntur labore suscipit voluptatum, nulla placeat ad quidem quam?</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis eum modi fugiat!
                                        Ut dolor in a neque quod quo! Maxime?</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
                            </div>
                        </div>
                        <div class="px-3 w-1/4">
                            <div class="carousel-caption text-center">
                                <div class="text-sm">
                                    <h5 class="text-amber-300 ">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque asperiores
                                        voluptatum harum aliquam, nemo fugit possimus voluptate nisi necessitatibus
                                        quod!</p>
                                </div>
                                <div class="text-sm py-16">Dani, 06/09/2021</div>
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
    </div>
</section>
<!-- Rerting Section End -->

<!-- Contact Section Start -->
<section id="contact" class="pt-36 pb-16 dark:bg-slate-700">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Contact us</h2>
                <p class="text-md font-medium text-secondary dark:text-secondarybg md:text-lg">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est libero accusamus similique quia.
                    Repellendus eveniet qui atque reiciendis, saepe minima consequatur facilis reprehenderit aliquam.
                    Quos distinctio harum cum sequi?
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

<!-- Modal Cart Start -->
<div class="relative z-10 invisible" aria-labelledby="slide-over-title" role="dialog" aria-modal="false" id="slideover-container">
    <!--
        Background backdrop, show/hide based on slide-over state.

        Entering: "ease-in-out duration-500"
        From: "opacity-0"
        To: "opacity-100"
        Leaving: "ease-in-out duration-500"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 ease-in-out duration-500 opacity-0" id="slideover-bg"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden transform transition-all ease-in-out duration-500 sm:duration-700 translate-x-full" id="slideover">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <!--
                    Slide-over panel, show/hide based on slide-over state.

                    Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-full"
                        To: "translate-x-0"
                    Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-0"
                        To: "translate-x-full"
                -->
                <div class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500" onclick="toggleSlideover()">
                                        <span class="sr-only">Close panel</span>
                                        <!-- Heroicon name: outline/x -->
                                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flow-root">
                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        <div id="dataCart"></div>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900" id="subTotalCart">
                            </div>
                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            <div class="mt-6" id="btnCheckout">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Cart End -->

<!-- BEGIN Footer -->
<?= $this->include('User/Layout/Footer') ?>
<!-- END Footer -->

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="timeline" tabindex="-1" aria-labelledby="timelineLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="timelineLabel"> Timeline </h5>
                <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <div class="flow-root">
                    <ul role="list" class="-mb-8" id="timelineList">
                    </ul>
                </div>
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal"> Close </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Item Product start -->
<!-- <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto modalItem" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
<!-- Modal Item Product end -->

<!-- BEGIN SCRIPT -->
<?= $this->include('User/Layout/Script') ?>
<!-- END SCRIPT -->

<script type="text/javascript">
    let email = "<?= $this->session->get('email') ?>";
    $(function() {
        getBestSeller()
        getDiscountItem()
        getTotChart(email)
        getTotTimeline(email)

        // $('#cartModal').hide();
        // $('#showCart').click(function() {
        //     $('#cartModal').show();
        // });

        // $('#hideCart').click(function() {
        //     $('#cartModal').hide();
        // })
    });

    function toggleSlideover() {
        document.getElementById('slideover-container').classList.toggle('invisible');
        document.getElementById('slideover-bg').classList.toggle('opacity-0');
        document.getElementById('slideover-bg').classList.toggle('opacity-100');
        document.getElementById('slideover').classList.toggle('translate-x-full');
    }

    function getBestSeller() {
        $.ajax({
            url: "/Proses/getBestSeller",
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json.data)
                let row = rpPrice = '';

                if (json.status == 1) {
                    $.each(json.data, function(ind, val) {
                        rpPrice = formatRupiah(val.price, 'Rp. ');
                        let categoryName = val.categoryName.toLowerCase();

                        row += `<a href="/productShow/` + val.slug + `" class="group">
                                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                                        <img src="/uploads/product/` + categoryName + `/` + val.image + `" alt="" class="w-full h-full object-center object-cover group-hover:opacity-75">
                                    </div>
                                    <h3 class="mt-4 text-sm text-gray-700 dark:text-white">` + val.name + ` - ` + val.nmColor + ` (` + val.nmSize + `)</h3>
                                    <p class="my-1 text-lg font-medium text-gray-900 dark:text-secondarybg">` + rpPrice + `</p>
                                </a>`;
                    })
                    $('#bastSeller').html(row);
                    $('#subTotal').html(row);
                }
            }
        })
    }

    function getDiscountItem() {
        $.ajax({
            url: "/Proses/getDiscountItem",
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json)
                let row = rpPrice = '';

                if (json.status == 1) {
                    $.each(json.data, function(i, v) {
                        rpPrice = formatRupiah(v.price_disc, 'Rp. ');
                        let categoryName = v.name_category.toLowerCase();
                        row += `<div class="group relative">
                                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                                        <div class="py-8 px-6">
                                            <div class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                                <img src="/uploads/product/` + categoryName + `/` + v.image + `" alt="" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                            </div>
                                            <div class="mt-4 flex justify-between">
                                                <div>
                                                    <h3 class="text-sm text-gray-700">
                                                        <a href="/productShow/` + v.slug + `">
                                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                                            ` + v.name_product + `
                                                        </a>
                                                    </h3>
                                                    <p class="mt-1 text-sm text-gray-500">` + v.name_color + ` (` + v.name_size + `)</p>
                                                </div>
                                                <p class="text-sm font-medium text-gray-900">` + rpPrice + `</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
                    })
                }
                $('#discountItem').html(row);
            }
        })
    }

    function getTotChart(email) {
        $.ajax({
            type: "POST",
            url: "/Proses/getTotChart",
            data: {
                email: email
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json)
                let totChart = "";
                if (json.status == 1 && json.data['total'] != 0) {
                    totChart += `<div class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900">` + json.data['total'] + `
                                </div>`;
                }
                $("#totChart").html(totChart)
                dataCart(email)
            }
        })
    }
    
    function getTotTimeline(email) {
        $.ajax({
            type: "POST",
            url: "/Proses/getTotTimeline",
            data: {
                email: email
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json)
                let row = "";
                if (json.status == 1 && json.data['total'] != 0) {
                    row += `<div class="inline-flex absolute -top-2 -right-2 justify-center items-center w-6 h-6 text-xs font-bold text-white bg-red-500 rounded-full border-2 border-white dark:border-gray-900">` + json.data['total'] + `
                                </div>`;
                }
                $("#totTimeline").html(row)
                timelineList(email, json.data['timeline_id'])
            }
        })
    }

    function dataCart(email) {
        $.ajax({
            type: "POST",
            url: "/Proses/getDataCart",
            data: {
                email: email
            },
            async: false,
            dataType: "JSON",
            success: function(json) {
                // console.log(json.data)
                let rowCart = btnCheck = ""

                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {
                        let categoryName = val.nm_category.toLowerCase();
                        rowCart += `<li class="flex py-6">
                                        <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="/uploads/product/` + categoryName + `/` + val.image + `" alt="" class="h-full w-full object-cover object-center">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="#"> ` + ucwords(val.nm_product) + ` </a>
                                                    </h3>
                                                    <p class="ml-4">` + formatRupiah(val.tot_price, 'Rp. ') + `</p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">` + ucwords(val.nm_color) + ` (` + val.nm_size + `)</p>
                                            </div>
                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                <p class="text-gray-500">Qty ` + val.qty + `</p>

                                                <div class="flex">
                                                    <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500" onclick="delListCart(` + val.id + `,'` + val.email + `')">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>`;
                    })
                    btnCheck += `<a href="/Pages/checkout" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>`;
                    let subTot = `<p>Subtotal</p> <p>` + formatRupiah(json.data[0]['sub_total'], 'Rp. ') + `</p>`;
                    $('#subTotalCart').html(subTot);
                    $('#dataCart').html(rowCart);
                }
                $('#btnCheckout').html(btnCheck);
            }
        })
    }

    function timelineList(email, timeline_id) {
        $.ajax({
            type: "POST",
            url: "/Proses/getTimelineList",
            data: {
                email: email,
                timelineId: timeline_id
            },
            async: false,
            dataType: "JSON",
            success: function(json) {
                console.log(json)
                if (json.status == 1) {
                    let row = icontList = timeList = ""
                    let textList = "Not Fount";
                    var tahun, bulan, nomorBulan, tgl, waktu;
                    console.log(json.data)
                    $.each(json.data, function(idx, val) {
                        // console.log(idx)
                        // console.log(val)
                        var date = new Date(val.dateTimeline);
                        nomorBulan = date.getMonth();
                        tahun = date.getFullYear();
                        bulan = getTheMonth(nomorBulan);
                        tgl = ("00" + date.getDate()).slice(-2) + " " + bulan + " " + date.getFullYear();
                        waktu = ("00" + date.getHours()).slice(-2) + ":" + ("00" + date.getMinutes()).slice(-2);
                        
                        textList = val.feedback
                        timeList = tgl + ', ' + waktu;
                        if (val.stTimeLine == "0") {
                            icontList = '<i class="fas fa-clock" bg-yellow></i>'; //  verifikasi pembayaran
                        } else if (val.stTimeLine == "1") {
                            icontList = '<i class="fas fa-truck-moving bg-blue"></i>'; // pengiriman barang
                        } else if (val.stTimeLine == "2") {
                            icontList = '<i class="fas fa-check" bg-blue></i>'; // barang telah sampai
                        } else {
                            icontList = '<i class="fas fa-lock bg-red"></i>'; // barang telah sampai
                        }

                        row += `<li>
                                    <div class="relative pb-8">
                                        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-400" aria-hidden="true"></span>
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span class="h-8 w-8 rounded-full bg-blue-500 flex items-center justify-center ring-8 ring-white">
                                                    ${icontList}
                                                </span>
                                            </div>
                                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                <div>
                                                    <p class="text-sm text-gray-500">${textList}</p>
                                                </div>
                                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                    <time datetime="${timeList}">${timeList}</time>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>`;
                    });

                    if (json.data != "") {
                        row += `<li>
                                    <div class="relative pb-8">
                                        <div class="relative flex space-x-3">
                                            <div>
                                                <span class="h-8 w-8 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                    <i class="fas fa-play"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </li>`;
                    }
                    $('#timelineList').html(row);
                }
            }
        })
    }

    function delListCart(id, email) {
        $.ajax({
            type: "POST",
            url: "/Proses/delListCart",
            data: {
                id: id
            },
            async: false,
            dataType: "JSON",
            success: function(json) {
                if (json.status == 1) {
                    dataCart(email)
                    getTotChart(email)
                }
            }
        })
    }
</script>

<?= $this->endSection(); ?>