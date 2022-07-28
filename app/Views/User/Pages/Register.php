<?php $this->session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/ico" href="/assets/tailwind/img/logo.jpg">
    <title><?= $title; ?></title>

    <!-- BEGIN LINK -->
    <?= $this->include('User/Layout/Header') ?>
    <!-- END LINK -->
</head>

<body>
    <section class="h-screen">
        <div class="container px-6 py-12 h-full text-gray-800">
            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">
                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="w-full" alt="Phone image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-xl dark:bg-slate-800">
                        <div class="py-8 px-6">
                            <div class="mx-auto text-center">
                                <h2 class="mb-7 text-1xl font-bold text-dark sm:text-2xl lg:text-3xl dark:text-white">Register, Muslim Basic </h2>
                            </div>
                            <form action="/Login/actionRegis" method="post" id="checkRegis">
                                <?= csrf_field(); ?>
                                <div class="mb-4 form-group">
                                    <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="name" name="name" placeholder="Name" autofocus require />
                                </div>
                                <div class="mb-4 form-group">
                                    <input type="text" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" name="email" placeholder="Email" require />
                                </div>
                                <div class="mb-4 form-group">
                                    <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="pass" name="pass" placeholder="Password" require />
                                </div>
                                <div class="mb-4 form-group">
                                    <input type="password" class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="con_pass" name="con_pass" placeholder="Confirm Password" require />
                                </div>

                                <div class="flex justify-between items-center mb-6">
                                    <div class="form-group form-check">
                                        <!-- <input type="checkbox" class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" id="rememberMe" /> -->
                                        <!-- <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">Remember me</label> -->
                                    </div>
                                    <a href="/forgotPass" class="text-gray-800">Forgot password?</a>
                                </div>

                                <div class="text-center lg:text-left">
                                    <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                        Create Account
                                    </button>
                                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                        Already have an account?
                                        <a href="/login" class="text-red-600 hover:text-red-700 focus:text-red-700 transition duration-200 ease-in-out">Login</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN SCRIPT -->
    <?= $this->include('User/Layout/Script') ?>
    <!-- END SCRIPT -->

    <script type="text/javascript">
        $(function() {
            $('#checkRegis').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true
                    },
                    pass: {
                        required: true
                    },
                    con_pass: {
                        required: true
                    },
                },
                messages: {
                    name: {
                        required: "Name cannot be empty"
                    },
                    email: {
                        required: "Email cannot be empty"
                    },
                    pass: {
                        required: "Password cannot be empty"
                    },
                    con_pass: {
                        required: "Confirm Password cannot be empty"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('text-xs text-red-500');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>

</html>