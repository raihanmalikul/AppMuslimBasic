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

<section class=" bg-gray-50 pt-16">
    <div class="max-w-2xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Checkout</h2>

        <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
            <div>
                <div>
                    <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                    <div class="mt-4">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input type="email" name="email-address" id="email-address" autocomplete="email" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-200 pt-10">
                    <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

                    <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                            <div class="mt-1">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                            </div>
                        </div>

                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                            <div class="mt-1">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                                <input type="text" name="address" id="address" autocomplete="street-address" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                            </div>
                        </div>

                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <div class="mt-1">
                                <input type="text" name="city" id="city" autocomplete="address-level2" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                                <input type="hidden" name="cityId" id="cityId">
                            </div>
                        </div>

                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                            <div class="mt-1">
                                <input type="text" name="region" id="region" autocomplete="address-level1" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                                <input type="hidden" name="regionId" id="regionId">
                            </div>
                        </div>

                        <div>
                            <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal code</label>
                            <div class="mt-1">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <div class="mt-1">
                                <input type="text" name="phone" id="phone" autocomplete="tel" disabled class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Disabled input example">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-200 pt-10">
                    <fieldset>
                        <legend class="text-lg font-medium text-gray-900">Delivery method</legend>

                        <div class="mt-4 space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                            <div class="flex items-center">
                                <input id="pos" name="courier" type="radio" value="pos" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="pos" class="ml-3 block text-sm font-medium text-gray-700"> POS INDONESIA </label>
                            </div>

                            <div class="flex items-center">
                                <input id="jne" name="courier" type="radio" value="jne" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="jne" class="ml-3 block text-sm font-medium text-gray-700"> JNE </label>
                            </div>

                            <div class="flex items-center">
                                <input id="tiki" name="courier" type="radio" value="tiki" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="tiki" class="ml-3 block text-sm font-medium text-gray-700"> TIKI </label>
                            </div>
                        </div>

                        <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-4" id="courier">

                        </div>
                    </fieldset>
                </div>

                <!-- Payment -->
                <div class="mt-10 border-t border-gray-200 pt-10">
                    <h2 class="text-lg font-medium text-gray-900">Payment Via bank</h2>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Payment type</legend>
                        <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                            <div class="flex items-center">
                                <input id="bni" name="payment-type" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="bni" class="ml-3 block text-sm font-medium text-gray-700"> BNI </label>
                            </div>

                            <div class="flex items-center">
                                <input id="mandiri" name="payment-type" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="mandiri" class="ml-3 block text-sm font-medium text-gray-700"> MANDIRI </label>
                            </div>

                            <div class="flex items-center">
                                <input id="bca" name="payment-type" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                <label for="bca" class="ml-3 block text-sm font-medium text-gray-700"> BCA </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                        <div class="col-span-4">
                            <h3 class="font-medium leading-tight text-2xl mt-0 mb-2">No Rekening : </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order summary -->
            <div class="mt-10 lg:mt-0">
                <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <!-- <h3 class="sr-only">Items in your cart</h3> -->
                    <ul role="list" class="divide-y divide-gray-200">
                        <div id="dataCart"></div>
                    </ul>
                    <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6" id="summary">

                    </dl>

                    <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                        <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Confirm order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<!-- BEGIN Footer -->
<?= $this->include('User/Layout/Footer') ?>
<!-- END Footer -->

<!-- BEGIN SCRIPT -->
<?= $this->include('User/Layout/Script') ?>
<!-- END SCRIPT -->

<script type="text/javascript">
    let email = "<?= $this->session->get('email') ?>";
    $(function() {
        dtCustomer(email)
        dataCart(email)

        let courier = $('input[name="courier"]:checked').val()
        dtCost(courier, email)

        $("input[name='courier']").change(function() {
            let val = $(this).val()
            dtCost(val, email)
        });
    });

    function dtCustomer(email) {
        $.ajax({
            type: "POST",
            url: "/Proses/getDataCustomer",
            data: {
                email: email
            },
            async: false,
            dataType: "JSON",
            success: function(json) {
                // console.log(json.data)

                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {
                        $('#email-address').val(val.email);
                        $('#first-name').val(val.first_name);
                        $('#last-name').val(val.last_name);
                        $('#address').val(val.address);
                        $('#region').val(val.province);
                        $('#regionId').val(val.province_id);
                        $('#city').val(val.city);
                        $('#cityId').val(val.city_id);
                        $('#postal-code').val(val.postal_code);
                        $('#phone').val(val.phone);
                    })
                } else {
                    $('#email-address').val('');
                    $('#first-name').val('');
                    $('#last-name').val('');
                    $('#address').val('');
                    $('#region').val('');
                    $('#regionId').val('');
                    $('#city').val('');
                    $('#cityId').val('');
                    $('#postal-code').val('');
                    $('#phone').val('');
                }
            }
        })
    }

    function dtCost(typeCourier, email) {
        let cekCourier = typeCourier

        $.ajax({
            type: "POST",
            url: "/Proses/getDtCost",
            data: {
                courier: cekCourier,
                email: email
            },
            async: false,
            dataType: "JSON",
            success: function(json) {
                console.log(json)
                let row = cekLabel = border = hidden = "";
                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {

                    })

                    $.each(json.data.dataApi, function(idx, val) {
                        if (val.status['code'] == 200) {
                            $.each(val.result, function(i, v) {
                                let code = v.code
                                $.each(v.costs, function(p, va) {
                                    if (p == 0) {
                                        cekLabel = "ring-2 ring-indigo-500"
                                        border = "border-indigo-500"
                                        hidden = ""
                                    } else {
                                        cekLabel = ""
                                        border = ""
                                        hidden = "hidden"
                                    }

                                    row += `<label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none ` + cekLabel + `">
                                                <input type="radio" name="` + code + `" value="` + va.service + `" class="sr-only" aria-labelledby="` + code + `-0-label" aria-describedby="` + code + `-0-description-0 ` + code + `-0-description-1">
                                                <div class="flex-1 flex">
                                                    <div class="flex flex-col">
                                                        <span id="` + code + `-0-label" class="block text-sm font-medium text-gray-900"> ` + va.description + ` </span>
                                                        <span id="` + code + `-0-description-0" class="mt-1 flex items-center text-sm text-gray-500"> ` + va.cost[0].etd + ` </span>
                                                        <span id="` + code + `-0-description-1" class="mt-6 text-sm font-medium text-gray-900"> ` + va.cost[0].value + ` </span>
                                                    </div>
                                                </div>
                                                <svg class="h-5 w-5 text-indigo-600 ` + hidden + `" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="absolute -inset-px rounded-lg border-2 pointer-events-none ` + border + `" aria-hidden="true"></div>
                                            </label>`;
                                })
                                $('#courier').html(row);
                            })

                        }
                    })
                }
                // let row = `<!--
                //                 Checked: "border-transparent", Not Checked: "border-gray-300"
                //                 Active: "ring-2 ring-indigo-500"
                //             -->
                //             <label class="relative bg-white border border-gray-300 rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
                //                 <input type="radio" name="delivery-method" value="Express" class="sr-only" aria-labelledby="delivery-method-1-label" aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                //                 <div class="flex-1 flex">
                //                     <div class="flex flex-col">
                //                         <span id="delivery-method-1-label" class="block text-sm font-medium text-gray-900"> Express </span>
                //                         <span id="delivery-method-1-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 2–5 business days </span>
                //                         <span id="delivery-method-1-description-1" class="mt-6 text-sm font-medium text-gray-900"> $16.00 </span>
                //                     </div>
                //                 </div>
                //                 <!--
                //                     Not Checked: "hidden"

                //                     Heroicon name: solid/check-circle
                //                 -->
                //                 <svg class="h-5 w-5 text-indigo-600 hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                //                     <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                //                 </svg>
                //                 <!--
                //                     Active: "border", Not Active: "border-2"
                //                     Checked: "border-indigo-500", Not Checked: "border-transparent"
                //                 -->
                //                 <div class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></div>
                //             </label>`;
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
                console.log(json.data)
                let rowCart = summary = ""

                if (json.status == 1) {
                    $.each(json.data, function(idx, val) {
                        let categoryName = val.nm_category.toLowerCase();
                        rowCart += `<li class="flex py-6 px-4 sm:px-6">
                                        <div class="flex-shrink-0">
                                            <img src="/uploads/product/` + categoryName + `/` + val.image + `" class="w-20 rounded-md">
                                        </div>

                                        <div class="ml-6 flex-1 flex flex-col">
                                            <div class="flex">
                                                <div class="min-w-0 flex-1">
                                                    <h4 class="text-sm">
                                                        <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> ` + ucwords(val.nm_product) + ` </a>
                                                    </h4>
                                                    <p class="mt-1 text-sm text-gray-500">` + ucwords(val.nm_color) + ` (` + val.nm_size + `)</p>
                                                </div>

                                                <div class="ml-4 flex-shrink-0 flow-root">
                                                    <button type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500" onclick="delListCart(` + val.id + `,'` + val.email + `')">
                                                        <span class="sr-only">Remove</span>
                                                        <!-- Heroicon name: solid/trash -->
                                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="flex-1 pt-2 flex items-end justify-between">
                                                <p class="mt-1 text-sm font-medium text-gray-900">` + formatRupiah(val.tot_price, 'Rp. ') + `</p>

                                                <div class="ml-4">
                                                    <p class="text-gray-500">Qty ` + val.qty + ` ( ` + val.weight + ` gr)</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>`;
                    })

                    summary += `<div class="flex items-center justify-between">
                                    <dt class="text-sm">Subtotal</dt>
                                    <dd class="text-sm font-medium text-gray-900">` + formatRupiah(json.data[0]['sub_total'], 'Rp. ') + `</dd>
                                </div>
                                <div class="flex items-center justify-between">
                                    <dt class="text-sm">Shipping</dt>
                                    <dd class="text-sm font-medium text-gray-900"><div id="shipping"></div></dd>
                                </div>
                                <div class="flex items-center justify-between">
                                    <dt class="text-sm">Insurance</dt>
                                    <dd class="text-sm font-medium text-gray-900"><div id="insurance"></div></dd>
                                </div>
                                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                                    <dt class="text-base font-medium">Total</dt>
                                    <dd class="text-base font-medium text-gray-900">$75.52</dd>
                                </div>`;
                }
                $('#dataCart').html(rowCart);
                $('#summary').html(summary);
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