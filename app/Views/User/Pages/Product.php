<?php $this->session = \Config\Services::session(); ?>

<?= $this->extend('User/Layout/PageLayout'); ?>
<?= $this->section('contentUser'); ?>

<style>
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .custom-number-input input:focus {
        outline: none !important;
    }

    .custom-number-input button:focus {
        outline: none !important;
    }
</style>

<!-- Header Start -->
<header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
    <div class="container">
        <div class="relative flex items-center justify-between">
            <div class="px-4">
                <a href="/" class="block py-6 text-xl font-bold text-dark dark:text-white">MuslimBasic</a>
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
                            <div class="mt-3 lg:mt-0 items-center flex pl-8">
                                <?php if ($this->session->get('loggedIn')) { ?>
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
                                    <a class="dropdown-toggle px-6 py-2.5 text-gray-700 font-medium text-xs leading-tight uppercase rounded hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg active:text-white transition duration-150 ease-in-out flex items-center whitespace-nowrap" href="#" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
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

<section class=" bg-white pt-20">
    <nav aria-label="Breadcrumb" id="nameTag">

    </nav>

    <!-- Image gallery -->
    <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8" id="imageCek">

    </div>

    <!-- Product info -->
    <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl" id="productName"></h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:mt-0 lg:row-span-3">
            <h2 class="text-gray-900">Product information</h2>
            <p class="text-3xl text-gray-900" id="price"></p>
            <h3 class="text-sm text-gray-900 font-medium">Stock Varian: <span id="stock"></span></h3>

            <!-- Reviews -->
            <div class="mt-6">
                <h3 class="sr-only">Reviews</h3>
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
                    <p class="sr-only">4 out of 5 stars</p>
                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                </div>
            </div>

            <form class="mt-10" name="AddDetailProduct" id="chekingForm">
                <input type="hidden" name="price" id="priceInp">
                <input type="hidden" name="name" id="namePro">
                <input type="hidden" name="description" id="description">
                <input type="hidden" name="sub_code" id="subCode">
                <!-- Colors -->
                <div>
                    <h3 class="text-sm text-gray-900 font-medium">Color</h3>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Choose a color</legend>
                        <div class="flex items-center space-x-3" id="colorCek">
                        </div>
                    </fieldset>
                </div>

                <!-- Sizes -->
                <div class="mt-10 grid grid-cols-3">
                    <div class="col-span-2">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm text-gray-900 font-medium">Size</h3>
                            <!-- <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a> -->
                        </div>
                        <fieldset class="mt-4">
                            <legend class="sr-only">Choose a size</legend>
                            <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4" id="sizeCek">
                            </div>
                        </fieldset>
                    </div>

                    <div class="px-2">
                        <h3 class="text-sm text-gray-900 font-medium">Quantity</h3>
                        <fieldset class="mt-4">
                            <legend class="sr-only">Set your item quantity</legend>
                            <div class="custom-number-input h-10 w-32">
                                <div class="flex items-center space-x-3" id="qty">
                                    <div class="flex flex-row h-10 w-full border-2 border-gray-300 rounded-lg relative bg-transparent mt-1">
                                        <button data-action="decrement" type="button" id="decrement" class=" bg-white text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-thin">−</span>
                                        </button>
                                        <input type="number" class="focus:outline-none text-center w-full bg-white font-semibold text-md hover:text-black focus:text-black  flex items-center text-gray-700  outline-none" name="qty" min="1" max="500" value="1"></input>
                                        <button data-action="increment" type="button" id="increment" class="bg-white text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer outline-none">
                                            <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                    </div>
                                </div>
                        </fieldset>
                    </div>
                </div>

                <?php if ($this->session->get('loggedIn')) { ?>
                    <button type="button" id="saveShop" class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add to bag</button>
                <?php } else { ?>
                <?php } ?>
            </form>
        </div>

        <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <!-- Description and details -->
            <div>
                <h3 class="sr-only">Description</h3>

                <div class="space-y-6">
                    <p class="text-base text-gray-900" id="desc">Not fount</p>
                </div>
            </div>

            <!-- <div class="mt-10">
            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

            <div class="mt-4">
                <ul role="list" class="pl-4 list-disc text-sm space-y-2" id="highlights">
                    <li class="text-gray-400"><span class="text-gray-600">Not fount</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary colors</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp; pre-shrunk</span></li>
                    <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span></li>
                </ul>
            </div>
        </div> -->

            <div class="mt-10">
                <h2 class="text-sm font-medium text-gray-900">Details</h2>

                <div class="mt-4 space-y-6">
                    <p class="text-sm text-gray-600" id="detail">Not fount</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BEGIN Footer -->
<?= $this->include('User/Layout/Footer') ?>
<!-- END Footer -->

<!-- Modal Cart Start -->
<div class="relative z-10 invisible" aria-labelledby="slide-over-title" role="dialog" aria-modal="false" id="slideover-container">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 ease-in-out duration-500 opacity-0" id="slideover-bg"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden transform transition-all ease-in-out duration-500 sm:duration-700 translate-x-full" id="slideover">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
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

<!-- Modal Timeline Start-->
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
<!-- Modal Timeline End-->

<!-- BEGIN SCRIPT -->
<?= $this->include('User/Layout/Script') ?>
<!-- END SCRIPT -->

<script type="text/javascript">
    let color_id = null
    let slug = "<?= $slug ?>";
    let email = "<?= $this->session->get('email') ?>";

    $(function() {
        let statusSuccess = "<?= $this->session->getFlashdata('msg'); ?>";
        let statusError = "<?= $this->session->getFlashdata('msg_err'); ?>";

        if (statusSuccess) {
            toastr.success(statusSuccess);
        }
        if (statusError) {
            toastr.warning(statusError);
        }

        getTotChart(email)
        getTotTimeline(email)

        const decrementButtons = document.querySelectorAll("#decrement");
        const incrementButtons = document.querySelectorAll("#increment");

        decrementButtons.forEach(btn => {
            btn.addEventListener("click", function(e) {
                const btn = e.target.parentNode.parentElement.querySelector("#decrement");
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value--;
                target.value = (value < 1) ? 1 : value
            });
        });

        incrementButtons.forEach(btn => {
            btn.addEventListener("click", function(e) {
                const btn = e.target.parentNode.parentElement.querySelector("#decrement");
                const target = btn.nextElementSibling;
                let value = Number(target.value);
                value++;
                target.value = (value < 0) ? 0 : value;
            });
        });

        getMaster(slug)
        // getDetail(slug)
        // buttonSize();
        // console.log(color_id)
        // let cekColor = $("#color_" + color_id).attr("checked", true)
        // console.log(cekColor)

        // $('#chekingForm').validate({
        //     rules: {
        //         color_id: {
        //             required: true
        //         },
        //         size_id: {
        //             required: true
        //         },
        //     },
        //     messages: {
        //         color_id: {
        //             required: "Color cannot be empty"
        //         },
        //         size_id: {
        //             required: "Size cannot be empty"
        //         }
        //     },
        //     errorElement: 'span',
        //     errorPlacement: function(error, element) {
        //         error.addClass('text-xs text-red-500');
        //         element.closest('.form-group').append(error);
        //     },
        //     highlight: function(element, errorClass, validClass) {
        //         $(element).addClass('is-invalid');
        //     },
        //     unhighlight: function(element, errorClass, validClass) {
        //         $(element).removeClass('is-invalid');
        //     }
        // });

        $("#saveShop").click(function() {
            let description = $('input[name="description"]').val()
            let namePro = $('input[name="name"]').val()
            let price = $('input[name="price"]').val()
            let size_id = $('input[name="size_id"]:checked').val()
            let color_id = $('input[name="color_id"]:checked').val()
            let qty = $('input[name="qty"]').val()

            let totPrice = qty * price;

            // let data = $("#formAddProducts").serialize();

            // console.log(description);
            // console.log(price);
            // console.log(size_id);
            // console.log(color_id);
            // console.log(qty);
            // console.log(email);
            // console.log(slug);
            // console.log(namePro);
            // console.log(totPrice);

            $.ajax({
                type: "POST",
                url: "/Proses/saveShopChart",
                data: {
                    slug: slug,
                    email: email,
                    namePro: namePro,
                    price: price,
                    size_id: size_id,
                    color_id: color_id,
                    qty: qty,
                    totPrice: totPrice,
                    description: description,
                },
                async: false,
                dataType: "json",
                success: function(json) {
                    // console.log(json);
                    if (json.status == 1) {
                        Toast.fire({
                            icon: 'success',
                            title: 'Successfully'
                        })

                        setTimeout(() => {
                            // window.location.href = "http://localhost:8080/";
                            window.location.reload()
                        }, 3000);
                    } else {
                        Toast.fire({
                            icon: 'error',
                            title: 'Failed'
                        })

                        setTimeout(() => {
                            window.location.reload()
                        }, 3000);
                    }
                }
            })
        })

    });

    function toggleSlideover() {
        document.getElementById('slideover-container').classList.toggle('invisible');
        document.getElementById('slideover-bg').classList.toggle('opacity-0');
        document.getElementById('slideover-bg').classList.toggle('opacity-100');
        document.getElementById('slideover').classList.toggle('translate-x-full');
    }

    function getMaster(slug) {
        $.ajax({
            type: "POST",
            url: "/Proses/productMaster",
            data: {
                slug: slug
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json.data)
                let des = dtl = namePro = prName = listHig = nameTag = price = priceInp = stock = rowColor = active = checked = "";
                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {
                        des = val.description;
                        dtl = val.detail;
                        namePro = val.name
                        prName = ucwords(val.name);

                        // listHig += `<li class="text-gray-400"><span class="text-gray-600"></span></li>`;

                        nameTag += `<ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                                        <li>
                                            <div class="flex items-center">
                                                <a href="#" class="mr-2 text-sm font-medium text-gray-900"> ` + val.category + ` </a>
                                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                                </svg>
                                            </div>
                                        </li>
                                        <li class="text-sm">
                                            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600"> ` + prName + ` </a>
                                        </li>
                                    </ol>`;
                        getColor(val.subCode, val.category)
                    })
                    $("#namePro").val(namePro);
                    $("#nameTag").html(nameTag);
                    $("#desc").html(des);
                    $("#description").val(des);
                    $("#detail").html(dtl);
                    $("#productName").html(prName);
                    // $("#highlights").html(listHig);
                }
            }
        })
    }

    function getColor(subCode, category) {
        $.ajax({
            type: "POST",
            url: "/Proses/productColor",
            data: {
                subCode: subCode
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json.data)
                let rowColor = active = checked = subCode = "";
                if (json.status == 1) {
                    const colorCek = document.querySelector('#colorCek');
                    const data = json.data
                    colorCek.innerHTML = data
                        .map(
                            (val) => `<label id="cekColor" onclick="getSizeImage('${val.sub_code}', '${val.color_id}', '${category}')" class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                                            <input type="radio" id="color_id" name="color_id" value="${val.color_id}" require class="sr-only">
                                            <span id="color_id-${val.color_id}" class="sr-only"> ${val.nm_color} </span>
                                            <span aria-hidden="true" class="h-8 w-8 bg-[${val.class_code}] border border-black border-opacity-10 rounded-full"></span>
                                        </label>`
                        ).join(' ');

                    let colorPick = $('input:radio[name="color_id"]:first').attr("checked", true);
                    if (data[0]) {
                        const cekColor = document.querySelector('#cekColor')
                        cekColor.classList.add('ring')
                        cekColor.classList.add('ring-offset-1')
                    }
                }
                const cc = document.querySelectorAll('input[name="color_id"]')
                for (const cck of cc) {
                    cck.addEventListener('change', showColor)
                }

                getSizeImage(json.data[0]['sub_code'], json.data[0]['color_id'], category)
            }
        })
    }

    function showColor(e) {
        if (this.checked) {
            // console.log(e)
            const cekColor = document.querySelectorAll('#cekColor')

            for (let i = 0; i < cekColor.length; i++) {
                // console.log(el)
                const el = cekColor[i];
                if (el == e.path[1]) {
                    e.checked = "checked";
                    el.classList.add('ring')
                    el.classList.add('ring-offset-1')
                } else {
                    // console.log(el)
                    e.checked = false;
                    el.classList.remove('ring')
                    el.classList.remove('ring-offset-1')
                }
            }
        }
    }

    function getSizeImage(subCode, colorId, nmCtg) {
        $.ajax({
            type: "POST",
            url: "/Proses/productSizeImage",
            data: {
                subCode: subCode,
                colorId: colorId
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json.data)
                let rowSize = rowImage = active = checked = "";
                if (json.status == 1) {
                    let count = json.data.length;
                    // console.log(json.data.length)
                    $.each(json.data, function(idx, val) {
                        if (count > 3) {
                            // console.log(idx)
                            if (idx == 0) {
                                rowImage += `<div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                                                <img src="/uploads/product/` + nmCtg + `/` + val.image + `" class="w-full h-full object-center object-cover">
                                            </div>`;
                            }
                            if (idx == 1) {
                                rowImage += `<div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                                                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                                    <img src="/uploads/product/` + nmCtg + `/` + val.image + `">
                                                </div>`;
                            }
                            if (idx == 2) {
                                rowImage += `
                                                <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                                                    <img src="/uploads/product/` + nmCtg + `/` + val.image + `">
                                                </div>
                                            </div>`;

                            }
                            if (idx == 3) {
                                rowImage += `<div class="aspect-w-3 aspect-h-4 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                                                <img src="/uploads/product/` + nmCtg + `/` + val.image + `" class="w-full h-full object-center object-cover">
                                            </div>`;
                            }
                        } else if (count <= 3) {
                            rowImage += `<div class="hidden aspect-w-3 aspect-h-3 rounded-lg overflow-hidden lg:block">
                                            <img src="/uploads/product/` + nmCtg + `/` + val.image + `" class="w-full h-full object-center object-cover">
                                        </div>`;
                        }

                    })
                    const data = json.data
                    const sizeCek = document.querySelector('#sizeCek');
                    sizeCek.innerHTML = data
                        .map(
                            (val) => `<!-- Active: "ring-2 ring-indigo-500" -->
                                        <label id="cekSize" onclick="getPriceStock('${subCode}', '${colorId}', '${val.size_id}')" class="group relative border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer">
                                            <input type="radio" name="size_id" value="${val.size_id}" require class="sr-only" aria-labelledby="size_id-7-label">
                                            <span id="size_id-7-label"> ${val.nm_size} </span>

                                            <!--
                                                Active: "border", Not Active: "border-2"
                                                Checked: "border-indigo-500", Not Checked: "border-transparent"
                                            -->
                                            <span id="borSize" class="absolute -inset-px rounded-md pointer-events-none border-indigo-500" aria-hidden="true"></span>
                                        </label>`
                        ).join(' ');
                    let colorPick = $('input:radio[name="size_id"]:first').attr("checked", true);
                    if (data[0]) {
                        const cekSize = document.querySelector('#cekSize')
                        const bor = cekSize.querySelector('#borSize')
                        cekSize.classList.add('ring-2')
                        cekSize.classList.add('ring-indigo-500')
                        bor.classList.add('border-indigo-500')
                    }
                }
                $("#imageCek").html(rowImage);
                // $("#sizeCek").html(rowSize);

                const cs = document.querySelectorAll('input[name="size_id"]')
                for (const csk of cs) {
                    csk.addEventListener('change', showSize)
                }

                getPriceStock(subCode, colorId, json.data[0]['size_id'])
            }
        })
    }

    function showSize(e) {
        if (this.checked) {
            // const sizeId = document.querySelector('input[name="size_id"]:checked')
            const cekSize = document.querySelectorAll('#cekSize')

            for (let i = 0; i < cekSize.length; i++) {
                const el = cekSize[i];
                const bor = el.querySelector('#borSize')

                if (el == e.path[1]) {
                    // console.log(el)
                    e.checked = "checked";
                    el.classList.add('ring-2')
                    el.classList.add('ring-indigo-500')
                    bor.classList.add('border-indigo-500')
                } else {
                    // console.log(el)
                    e.checked = false;
                    el.classList.remove('ring-2')
                    el.classList.remove('ring-indigo-500')
                    bor.classList.remove('border-indigo-500')
                }
            }
        }
    }

    function getPriceStock(subCode, colorId, sizeId) {
        $.ajax({
            type: "POST",
            url: "/Proses/productPriceStock",
            data: {
                subCode: subCode,
                colorId: colorId,
                sizeId: sizeId
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json.data)
                let rowColor = active = checked = subCode = priceInp = price = stock = "";
                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {
                        priceInp += val.price
                        price += formatRupiah(val.price, 'Rp. ');
                        stock += (val.stock != 0) ? val.stock : "";
                    })
                }
                $("#price").html(price)
                $("#priceInp").val(priceInp)
                $("#stock").html(stock)
            }
        })
    }

    function buttonSize() {
        var prev = null;
        var rad = document.AddDetailProduct.color_id;
        var e = document.AddDetailProduct.querySelectorAll("#labelCek")
        let t = Array.from(document.AddDetailProduct.querySelectorAll("input"))
        // console.log(e)
        this.value = t[e]?.value;
        for (let e of t) {
            // console.log(e);
            // console.log(t);
            e.addEventListener("change", (() => {
                this.active = t.value
                // console.log(this.active)
                // e.classList.remove("ring-2")
                // e.classList.add("ring")
                // e.classList.add("ring-offset-1")
            })),
            e.addEventListener("focus", (() => {
                this.active = t.value
                // console.log(this.active)
                // e.classList.add("ring-2")
            }));
            window.addEventListener("focus", (() => {
                console.log("Focus change"),
                    t.includes(document.AddDetailProduct.activeElement) || (console.log("HIT"),
                        this.active = void 0)
            }), !0)
        }

        for (var i = 0; i < e.length; i++) {
            e[i].addEventListener('change', function() {
                (prev) ? console.log(prev.value): null;
                if (this !== prev) {
                    prev = this;
                }
                console.log(this.value)
            });
        }
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