<?php $this->session = \Config\Services::session(); ?>

<?= $this->extend('User/Layout/PageLayout'); ?>
<?= $this->section('contentUser'); ?>

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

<!-- Body Start -->
<div class="bg-white">

    <div>
        <main class="max-w-2xl mx-auto px-4 lg:max-w-7xl lg:px-8">
            <div class="border-b border-gray-200 pt-24 pb-10">
                <h1 class="text-4xl font-extrabold tracking-tight text-gray-900">All Category</h1>
                <p class="mt-4 text-base text-gray-500">All Product Category</p>
            </div>

            <div class="pt-12 pb-24 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                <aside>
                    <div class="hidden lg:block">
                        <form class="divide-y divide-gray-200 space-y-10">
                            <div>
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                    <div class="pt-6 space-y-3">
                                        <div class="flex items-center">
                                            <input id="color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-0" class="ml-3 text-sm text-gray-600"> White </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-1" class="ml-3 text-sm text-gray-600"> Beige </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="color-2" name="color[]" value="blue" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-2" class="ml-3 text-sm text-gray-600"> Blue </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-3" class="ml-3 text-sm text-gray-600"> Brown </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-4" class="ml-3 text-sm text-gray-600"> Green </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="color-5" class="ml-3 text-sm text-gray-600"> Purple </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="pt-10">
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                    <div class="pt-6 space-y-3">
                                        <div class="flex items-center">
                                            <input id="category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="category-0" class="ml-3 text-sm text-gray-600"> All New Arrivals </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-1" name="category[]" value="tees" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="category-1" class="ml-3 text-sm text-gray-600"> Tees </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-2" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="category-2" class="ml-3 text-sm text-gray-600"> Crewnecks </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-3" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="category-3" class="ml-3 text-sm text-gray-600"> Sweatshirts </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="category-4" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="category-4" class="ml-3 text-sm text-gray-600"> Pants &amp; Shorts </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="pt-10">
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                    <div class="pt-6 space-y-3">
                                        <div class="flex items-center">
                                            <input id="sizes-0" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-0" class="ml-3 text-sm text-gray-600"> XS </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="sizes-1" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-1" class="ml-3 text-sm text-gray-600"> S </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="sizes-2" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-2" class="ml-3 text-sm text-gray-600"> M </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="sizes-3" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-3" class="ml-3 text-sm text-gray-600"> L </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="sizes-4" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-4" class="ml-3 text-sm text-gray-600"> XL </label>
                                        </div>

                                        <div class="flex items-center">
                                            <input id="sizes-5" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 border-gray-300 rounded text-indigo-600 focus:ring-indigo-500">
                                            <label for="sizes-5" class="ml-3 text-sm text-gray-600"> 2XL </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </aside>

                <section aria-labelledby="product-heading" class="mt-6 lg:mt-0 lg:col-span-2 xl:col-span-3">
                    <h2 id="product-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                        <div class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
                            <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg" alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green." class="w-full h-full object-center object-cover sm:w-full sm:h-full">
                            </div>
                            <div class="flex-1 p-4 space-y-2 flex flex-col">
                                <h3 class="text-sm font-medium text-gray-900">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee 8-Pack
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt all week, and an extra for laundry day.</p>
                                <div class="flex-1 flex flex-col justify-end">
                                    <p class="text-sm italic text-gray-500">8 colors</p>
                                    <p class="text-base font-medium text-gray-900">$256</p>
                                </div>
                            </div>
                        </div>

                        <div class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
                            <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg" alt="Front of plain black t-shirt." class="w-full h-full object-center object-cover sm:w-full sm:h-full">
                            </div>
                            <div class="flex-1 p-4 space-y-2 flex flex-col">
                                <h3 class="text-sm font-medium text-gray-900">
                                    <a href="#">
                                        <span aria-hidden="true" class="absolute inset-0"></span>
                                        Basic Tee
                                    </a>
                                </h3>
                                <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt every day.</p>
                                <div class="flex-1 flex flex-col justify-end">
                                    <p class="text-sm italic text-gray-500">Black</p>
                                    <p class="text-base font-medium text-gray-900">$32</p>
                                </div>
                            </div>
                        </div>

                        <!-- More products... -->
                    </div>
                </section>
            </div>
        </main>
    </div>
</div>
<!-- Body End -->

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

<script src="type/javascript">
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
    })

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
                                                    <p class="ml-4">` + formatRupiah(val.price, 'Rp. ') + `</p>
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
                // console.log(json)
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