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
                                            <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                                            </path>
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

        <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16" name="checkout" id="checkout">
            <div>
                <div>
                    <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

                    <div class="mt-4">
                        <label for="emailAddress" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input type="email" name="emailAddress" id="emailAddress" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            <input type="hidden" name="customerId" id="customerId">
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-200 pt-10">
                    <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

                    <div class="mt-4 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700">First name</label>
                            <div class="mt-1">
                                <input type="text" name="firstName" id="firstName" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700">Last name</label>
                            <div class="mt-1">
                                <input type="text" name="lastName" id="lastName" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                            <div class="mt-1">
                                <input type="text" name="address" id="address" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            </div>
                        </div>

                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                            <div class="mt-1">
                                <input type="text" name="city" id="city" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                <input type="hidden" name="cityId" id="cityId">
                            </div>
                        </div>

                        <div>
                            <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                            <div class="mt-1">
                                <input type="text" name="region" id="region" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                <input type="hidden" name="regionId" id="regionId">
                            </div>
                        </div>

                        <div>
                            <label for="postalCode" class="block text-sm font-medium text-gray-700">Postal code</label>
                            <div class="mt-1">
                                <input type="text" name="postalCode" id="postalCode" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            </div>
                        </div>

                        <div class="sm:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <div class="mt-1">
                                <input type="text" name="phone" id="phone" readonly class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-gray-100 bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order summary -->
            <div class="mt-10 lg:mt-0">
                <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

                <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                    <!-- <h3 class="sr-only">Items in your cart</h3> -->
                    <ul role="list" class="divide-y divide-gray-200" id="dataCart">
                        <li class="flex py-6 px-4 sm:px-6">
                            <div class="flex-shrink-0">
                                <img src="/assets/tailwind/img/logo.jpg" class="w-20 rounded-md">
                            </div>
                            <div class="ml-6 flex-1 flex flex-col">
                                <div class="flex">
                                    <div class="min-w-0 flex-1">
                                        <h4 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800">Product Name</a>
                                        </h4>
                                        <p class="mt-1 text-sm text-gray-500"></p>
                                    </div>
                                    <div class="ml-4 flex-shrink-0 flow-root">
                                        <button type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500" onclick="delListCart(` + val.id + `,'` + val.email + `')">
                                            <span class="sr-only">Remove</span>
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex-1 pt-2 flex items-end justify-between">
                                    <p class="mt-1 text-sm font-medium text-gray-900">Rp. 0</p>
                                    <div class="ml-4">
                                        <p class="text-gray-500">Qty 0 ( 0 gr)</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    
                    <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
                        <div class="flex items-center justify-between">
                            <dt class="text-sm">Subtotal</dt>
                            <dd class="text-sm font-medium text-gray-900" id="subTotal">Rp. 0</dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-sm">Shipping</dt>
                            <dd class="text-sm font-medium text-gray-900" id="shipping">Rp. 0</dd>
                        </div>
                        <div class="flex items-center justify-between">
                            <dt class="text-sm">Insurance</dt>
                            <dd class="text-sm font-medium text-gray-900" id="insurance">Rp. 0</dd>
                        </div>
                        <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                            <dt class="text-base font-medium">Total</dt>
                            <dd class="text-base font-medium text-gray-900" id="total">Rp. 0</dd>
                        </div>
                    </dl>

                    <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                        <!-- <button type="button" id="saveCheckout" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Confirm order</button> -->
                        <button type="button" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500" data-bs-toggle="modal" data-bs-target="#confirmOrder">Confirm order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>


<!-- BEGIN Footer -->
<?= $this->include('User/Layout/Footer') ?>
<!-- END Footer -->

<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="confirmOrder" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmOrderLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered relative w-auto pointer-events-none">
        <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel"> Payment Order</h5>
                <button type="button" class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative p-4">
                <!-- Payment -->
                <form method="post" id="upload_image_form" enctype="multipart/form-data">
                    <div class="border-gray-200 pt-10">
                        <fieldset>
                            <legend class="text-lg font-medium text-gray-900">Delivery method</legend>

                            <div class="mt-4 space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input id="pos" name="courier" type="radio" value="pos" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="pos" class="ml-3 block text-sm font-medium text-gray-700"> POS INDONESIA
                                    </label>
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
                                <label class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none ring-2 ring-indigo-500">
                                    <input type="radio" name="delivery-method" value="Standard" class="sr-only" aria-labelledby="delivery-method-0-label" aria-describedby="delivery-method-0-description-0 delivery-method-0-description-1">
                                    <div class="flex-1 flex">
                                        <div class="flex flex-col">
                                            <span id="delivery-method-0-label" class="block text-sm font-medium text-gray-900"> Standard </span>
                                            <span id="delivery-method-0-description-0" class="mt-1 flex items-center text-sm text-gray-500"> 0 Hari </span>
                                            <span id="delivery-method-0-description-1" class="mt-6 text-sm font-medium text-gray-900"> Rp. 0 </span>
                                        </div>
                                    </div>
                                    <div class="h-5 w-5 text-indigo-600 hidden">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="absolute -inset-px rounded-lg border-2 pointer-events-none border-indigo-500" aria-hidden="true"></div>
                                </label>
                            </div>
                        </fieldset>
                    </div>
                    <div class="mt-2 pt-2">
                        <h2 class="text-lg font-medium text-gray-900">Payment Via bank</h2>

                        <fieldset class="mt-1">
                            <legend class="sr-only">Payment type</legend>
                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                <div class="flex items-center">
                                    <input id="bni" name="noReq" value="bni" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="bni" class="ml-3 block text-sm font-medium text-gray-700"> BNI </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="mandiri" name="noReq" value="mandiri" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="mandiri" class="ml-3 block text-sm font-medium text-gray-700"> MANDIRI
                                    </label>
                                </div>

                                <div class="flex items-center">
                                    <input id="bca" name="noReq" value="bca" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                                    <label for="bca" class="ml-3 block text-sm font-medium text-gray-700"> BCA </label>
                                </div>
                            </div>
                        </fieldset>

                        <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                            <div class="col-span-4">
                                <h3 class="font-medium leading-tight text-1xl mt-0 mb-2">No Rekening : <span id="noReqVal">0</span></h3>
                                <input type="hidden" id="delCode" name="delCode">
                                <input type="hidden" id="totalVal" name="totalVal">
                                <input type="hidden" id="emailVal" name="emailVal">
                            </div>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="mb-3">
                            <label for="filePayment" class="form-label inline-block mb-2 text-gray-700">Upload Evidence Payment</label>
                            <div class="grid grid-cols-4">
                                <div class="col-span-3">
                                    <input type="file" id="filePayment" name="filePayment" multiple="true" onchange="onFileUpload(this);" accept="image/*" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" required>
                                </div>
                                <div class="pl-6">
                                    <button type="button" id="uploadFile" class="form-control block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"><i class="fas fa-upload"></i> Upload</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close</button>
                <button type="button" id="saveCheckout" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"><i class="fas fa-save"></i> Save</button>
            </div>
        </div>
    </div>
</div>

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

        $('#noReqVal').html('1345658765432')
        $('#account').val('1345658765432')
        $('input[name="noReq"]').change(function() {
            let val = $(this).val();
            console.log(val)
            
            if (val == 'bni') {
                $('#noReqVal').html('1345658765432')
                $('#account').val('1345658765432')
            } else if (val == 'mandiri') {
                $('#noReqVal').html('1630000123345')
                $('#account').val('1630000123345')
            } else if (val == 'bca') {
                $('#noReqVal').html('7345029342345')
                $('#account').val('7345029342345')
            } else {
                $('#account').val('0')
                $('#noReqVal').html('0')
            }
        })

        $('#uploadFile').click(function() {
            if ($('#filePayment').val() == '') {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Upload gagal',
                    showConfirmButton: false,
                    timer: 3000
                })
            } else {
                $.ajax({
                    url: "/Proses/uploadFile",
                    type: "POST",
                    data: new FormData(document.getElementById("upload_image_form")),
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: "json",
                    success: function (json) {
                        console.log(json.msg);
                        if (json.status == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Berhasil Upload.',
                                showConfirmButton: false,
                                timer: 3000
                            })
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
                                title: 'Gagal Upload. ' +json.msg,
                                showConfirmButton: false,
                                timer: 3000
                            })
                        }
                    }
                });
            }
        })

        $("#saveCheckout").click(function() {
            let email           = $("#emailAddress").val();
            let firstName       = $("#firstName").val();
            let lastName        = $("#lastName").val();
            let name            = (firstName != "") ? firstName : "" + (lastName != "") ? "-"+lastName : "";
            let customerId      = $("#customerId").val()
            let phone           = $("#phone").val();
            let regionId        = $("#regionId").val();
            let cityId          = $("#cityId").val();
            let postalCode      = $("#postalCode").val();
            let total           = $("#totalVal").val();
            let deliveryCode    = $("#delivery_code").val();
            let address         = $("#address").val();
            let orderPro        = $("input[name='orderPro[]']").map(function(){return $(this).val();}).get();

            // console.log(email)
            // console.log(name)
            // console.log(customerId)
            // console.log(phone)
            // console.log(regionId)
            // console.log(cityId)
            // console.log(postalCode)
            // console.log(total)
            // console.log(deliveryCode)
            // console.log(address)
            // console.log(noReqVal)
            // console.log(orderPro)
            // console.log(filePayment)
            // return

            $.ajax({
                type: "POST",
                url: "/Proses/insListChart",
                data: {
                    email: email,
                    name: name,
                    customerId: customerId,
                    phone: phone,
                    regionId: regionId,
                    cityId: cityId,
                    postalCode: postalCode,
                    total: total,
                    deliveryCode: deliveryCode,
                    address: address,
                    orderPro: orderPro
                },
                async: false,
                dataType: "JSON",
                success: function(json) {
                    // console.log(json)
                    if (json.status == 1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Data Barang Berhasil Disimpan.',
                            showConfirmButton: false,
                            timer: 3000
                        })

                        setTimeout(() => {
                            window.location.href = "http://localhost:8080/";
                        }, 3000);
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Data Barang gagal Disimpan.',
                            showConfirmButton: false,
                            timer: 3000
                        })

                        setTimeout(() => {
                            window.location.reload()
                        }, 3000);
                    }
                }
            })
        })
    });

    function onFileUpload(input, id) {
        id = id || '#ajaxImgUpload';
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(id).attr('src', e.target.result).width(300)
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    function showSelectedpos(e) {
        if (this.checked) {
            const delivery = document.querySelector('input[name="deliverypos"]:checked');
            const labDelMet = document.querySelectorAll("#labDelMetpos");

            for (let i = 0; i < labDelMet.length; i++) {
                const el = labDelMet[i];
                const hide = el.querySelector("#svgHiddenpos")
                const bor = el.querySelector("#borHidpos")
                const delCode = el.querySelector("#delivery_code").value
                
                if (el == e.path[1]) {
                    e.checked = "checked";
                    el.classList.add('ring-2');
                    el.classList.add('ring-indigo-500');
                    hide.classList.remove('hidden');
                    bor.classList.add('border-indigo-500');
                    
                    const sub = el.querySelector('#subTot').value
                    const val = el.querySelector('#costValFixpos').value
                    const ins = parseInt(val) - (90 / 100 * parseInt(val))
                    const tot = parseInt(sub) + parseInt(val) + parseInt(ins)
    
                    subx = formatRupiah(sub, 'Rp. ')
                    valx = formatRupiah(val, 'Rp. ')
                    insx = formatRupiah(ins.toString(), 'Rp. ')
                    totx = formatRupiah(tot.toString(), 'Rp. ')
    
                    $('#subTotal').html(subx);
                    $('#shipping').html(valx);
                    $('#insurance').html(insx);
                    $('#total').html(totx);
                    $('#totalVal').val(tot);
                    $('#delCode').val(delCode);

                } else {
                    e.checked = false;
                    el.classList.remove('ring-2');
                    el.classList.remove('ring-indigo-500');
                    el.classList.add('border-transparent');
                    hide.classList.add('hidden');
                    bor.classList.remove('border-indigo-500');
                    bor.classList.add('border');
                }
            }
        }
    }

    function showSelectedjne(e) {
        if (this.checked) {
            const delivery = document.querySelector('input[name="deliveryjne"]:checked');
            const labDelMet = document.querySelectorAll("#labDelMetjne");

            for (let i = 0; i < labDelMet.length; i++) {
                const el = labDelMet[i];
                const hide = el.querySelector("#svgHiddenjne")
                const bor = el.querySelector("#borHidjne")
                const delCode = el.querySelector("#delivery_code").value

                
                if (el == e.path[1]) {
                    e.checked = "checked";
                    el.classList.add('ring-2');
                    el.classList.add('ring-indigo-500');
                    hide.classList.remove('hidden');
                    bor.classList.add('border-indigo-500');
                    
                    const sub = el.querySelector('#subTot').value
                    const val = el.querySelector('#costValFixjne').value
                    const ins = parseInt(val) - (90 / 100 * parseInt(val))
                    const tot = parseInt(sub) + parseInt(val) + parseInt(ins)
    
                    subx = formatRupiah(sub, 'Rp. ')
                    valx = formatRupiah(val, 'Rp. ')
                    insx = formatRupiah(ins.toString(), 'Rp. ')
                    totx = formatRupiah(tot.toString(), 'Rp. ')
    
                    $('#subTotal').html(subx);
                    $('#shipping').html(valx);
                    $('#insurance').html(insx);
                    $('#total').html(totx);
                    $('#totalVal').val(tot);
                    $('#delCode').val(delCode);
                } else {
                    e.checked = false;
                    el.classList.remove('ring-2');
                    el.classList.remove('ring-indigo-500');
                    el.classList.add('border-transparent');
                    hide.classList.add('hidden');
                    bor.classList.remove('border-indigo-500');
                    bor.classList.add('border');
                }
            }
        }
    }

    function showSelectedtiki(e) {
        if (this.checked) {
            const delivery = document.querySelector('input[name="deliverytiki"]:checked');
            const labDelMet = document.querySelectorAll("#labDelMettiki");

            for (let i = 0; i < labDelMet.length; i++) {
                const el = labDelMet[i];
                const hide = el.querySelector("#svgHiddentiki")
                const bor = el.querySelector("#borHidtiki")
                const delCode = el.querySelector("#delivery_code").value

                
                if (el == e.path[1]) {
                    e.checked = "checked";
                    el.classList.add('ring-2');
                    el.classList.add('ring-indigo-500');
                    hide.classList.remove('hidden');
                    bor.classList.add('border-indigo-500');
                    
                    const sub = el.querySelector('#subTot').value
                    const val = el.querySelector('#costValFixtiki').value
                    const ins = parseInt(val) - (90 / 100 * parseInt(val))
                    const tot = parseInt(sub) + parseInt(val) + parseInt(ins)
    
                    subx = formatRupiah(sub, 'Rp. ')
                    valx = formatRupiah(val, 'Rp. ')
                    insx = formatRupiah(ins.toString(), 'Rp. ')
                    totx = formatRupiah(tot.toString(), 'Rp. ')
    
                    $('#subTotal').html(subx);
                    $('#shipping').html(valx);
                    $('#insurance').html(insx);
                    $('#total').html(totx);
                    $('#totalVal').val(tot);
                    $('#delCode').val(delCode);
                } else {
                    e.checked = false;
                    el.classList.remove('ring-2');
                    el.classList.remove('ring-indigo-500');
                    el.classList.add('border-transparent');
                    hide.classList.add('hidden');
                    bor.classList.remove('border-indigo-500');
                    bor.classList.add('border');
                }
            }
        }
    }

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
                        $('#emailAddress').val(val.email);
                        $('#emailVal').val(val.email);
                        $('#customerId').val(val.id);
                        $('#firstName').val(val.first_name);
                        $('#lastName').val(val.last_name);
                        $('#address').val(val.address);
                        $('#region').val(val.province);
                        $('#regionId').val(val.province_id);
                        $('#city').val(val.city);
                        $('#cityId').val(val.city_id);
                        $('#postalCode').val(val.postal_code);
                        $('#phone').val(val.phone);
                    })
                } else {
                    $('#emailAddress').val('');
                    $('#firstName').val('');
                    $('#lastName').val('');
                    $('#address').val('');
                    $('#region').val('');
                    $('#regionId').val('');
                    $('#city').val('');
                    $('#cityId').val('');
                    $('#postalCode').val('');
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
                // console.log(json)
                let row = cekLabel = summary = hidden = checked = "";
                let subx = valx = insx = totx = "";
                if (json.status == 1) {
                    $.each(json.data.dataApi, function(idx, val) {
                        if (val.status['code'] == 200) {
                            let subTot = json.data['sub_total'];
                            $.each(val.result, function(i, v) {
                                let code = v.code
                                let costs = v.costs
                                const courier = document.querySelector('#courier');
                                courier.innerHTML = costs
                                    .map(
                                        (val) => `<label id="labDelMet${code}" class="relative bg-white border rounded-lg shadow-sm p-4 flex cursor-pointer focus:outline-none">
                                                    <input type="radio" name="delivery${code}" value="${val.service}" id="${val.service}" class="sr-only peer" aria-labelledby="${code}-0-label" aria-describedby="${code}-0-description-0 ${code}-0-description-1">
                                                    <div class="flex-1 flex">
                                                        <div class="flex flex-col">
                                                            <span id="costDescription${code}" class="block text-sm font-medium text-gray-900">${val.description}</span>
                                                            <span id="costEtd${code}" class="mt-1 flex items-center text-sm text-gray-500">${val.cost[0].etd}</span>
                                                            <span id="costVal${code}" class="mt-6 text-sm font-medium text-gray-900">${formatRupiah(val.cost[0].value.toString(), 'Rp. ')}</span>
                                                            <input type="hidden" id="costValFix${code}" value="${val.cost[0].value}">
                                                        </div>
                                                    </div>
                                                    <div id="svgHidden${code}" class="h-5 w-5 text-indigo-600 hidden">
                                                        <i class="fas fa-check-circle"></i>
                                                    </div>
                                                    <div id="borHid${code}" class="absolute -inset-px rounded-lg border-2 pointer-events-none" aria-hidden="true"></div>
                                                    <input type="hidden" id="subTot" value="${subTot}">
                                                    <input type="hidden" id="delivery_code" value="${code}-${val.description}-${val.cost[0].etd}-${val.cost[0].value}">
                                                </label>`
                                    ).join(' ');
                                
                                let deliverypos = $('input:radio[name="deliverypos"]:first').attr("checked", true);

                                if (costs[0]) {
                                    if (code == 'pos') {
                                        const el = document.querySelector("#labDelMetpos");
                                        const hide = el.querySelector("#svgHiddenpos")
                                        const bor = el.querySelector("#borHidpos")
        
                                        el.classList.add('ring-2');
                                        el.classList.add('ring-indigo-500');
                                        hide.classList.remove('hidden');
                                        bor.classList.add('border-indigo-500');

                                        const sub = el.querySelector('#subTot').value
                                        const val = el.querySelector('#costValFixpos').value
                                        const ins = parseInt(val) - (90 / 100 * parseInt(val))
                                        const tot = parseInt(sub) + parseInt(val) + parseInt(ins)

                                        subx = formatRupiah(sub, 'Rp. ')
                                        valx = formatRupiah(val, 'Rp. ')
                                        insx = formatRupiah(ins.toString(), 'Rp. ')
                                        totx = formatRupiah(tot.toString(), 'Rp. ')

                                        $('#subTotal').html(subx);
                                        $('#shipping').html(valx);
                                        $('#insurance').html(insx);
                                        $('#total').html(totx);
                                        $('#totalVal').val(tot);
                                    } else if (code == 'jne') {
                                        const el = document.querySelector("#labDelMetjne");
                                        const hide = el.querySelector("#svgHiddenjne")
                                        const bor = el.querySelector("#borHidjne")
        
                                        el.classList.add('ring-2');
                                        el.classList.add('ring-indigo-500');
                                        hide.classList.remove('hidden');
                                        bor.classList.add('border-indigo-500');
                                        
                                        const sub = el.querySelector('#subTot').value
                                        const val = el.querySelector('#costValFixjne').value
                                        const ins = parseInt(val) - (90 / 100 * parseInt(val))
                                        const tot = parseInt(sub) + parseInt(val) + parseInt(ins)

                                        subx = formatRupiah(sub, 'Rp. ')
                                        valx = formatRupiah(val, 'Rp. ')
                                        insx = formatRupiah(ins.toString(), 'Rp. ')
                                        totx = formatRupiah(tot.toString(), 'Rp. ')

                                        $('#subTotal').html(subx);
                                        $('#shipping').html(valx);
                                        $('#insurance').html(insx);
                                        $('#total').html(totx);
                                        $('#totalVal').val(tot);
                                    } else if (code == 'tiki') {
                                        const el = document.querySelector("#labDelMettiki");
                                        const hide = el.querySelector("#svgHiddentiki")
                                        const bor = el.querySelector("#borHidtiki")
        
                                        el.classList.add('ring-2');
                                        el.classList.add('ring-indigo-500');
                                        hide.classList.remove('hidden');
                                        bor.classList.add('border-indigo-500');

                                        const sub = el.querySelector('#subTot').value
                                        const val = el.querySelector('#costValFixtiki ').value
                                        const ins = parseInt(val) - (90 / 100 * parseInt(val))
                                        const tot = parseInt(sub) + parseInt(val) + parseInt(ins)

                                        subx = formatRupiah(sub, 'Rp. ')
                                        valx = formatRupiah(val, 'Rp. ')
                                        insx = formatRupiah(ins.toString(), 'Rp. ')
                                        totx = formatRupiah(tot.toString(), 'Rp. ')

                                        $('#subTotal').html(subx);
                                        $('#shipping').html(valx);
                                        $('#insurance').html(insx);
                                        $('#total').html(totx);
                                        $('#totalVal').val(tot);
                                    }
                                }
                            })
                        }
                    })
                }

                const deliverypos  = document.querySelectorAll('input[name="deliverypos"]');
                const deliveryjne  = document.querySelectorAll('input[name="deliveryjne"]');
                const deliverytiki = document.querySelectorAll('input[name="deliverytiki"]');

                for (const pos of deliverypos) { pos.addEventListener('change', showSelectedpos); }
                for (const jne of deliveryjne) { jne.addEventListener('change', showSelectedjne); }
                for (const tiki of deliverytiki) { tiki.addEventListener('change', showSelectedtiki); }
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
                let rowCart = ""

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
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="flex-1 pt-2 flex items-end justify-between">
                                                <p class="mt-1 text-sm font-medium text-gray-900">` + formatRupiah(val.tot_price, 'Rp. ') + `</p>
                                                <div class="ml-4">
                                                    <p class="text-gray-500">Qty ` + val.qty + ` ( ` + val.weight + ` gr)</p>
                                                </div>
                                            </div>
                                            <input type="hidden" id="orderPro" name="orderPro[]" value="${val.id}" >
                                        </div>
                                    </li>`;
                    })
                }
                $('#dataCart').html(rowCart);
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