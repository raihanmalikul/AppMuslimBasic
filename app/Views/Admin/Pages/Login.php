<?php $this->session = \Config\Services::session(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <link rel="shortcut icon" type="image/ico" href="/assets/tailwind/img/logo.jpg">

    <link href="/assets/static/css/app.css" rel="stylesheet">
    <!-- <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="/assets/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome</h1>
                            <p class="lead">Sign in to your account</p>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4">
                                    <form action="/LoginAdmin/actionLogin" method="post" id="checkLogin" class="needs-validation" novalidate>
                                        <?= csrf_field(); ?>
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input class="form-control form-control-lg" type="text" id="username" name="username" placeholder="Enter your username" autofocus required />
                                            <div class="invalid-feedback">
                                                Username cannot be empty
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter your password" required />
                                            <div class="invalid-feedback">
                                                Password cannot be empty
                                            </div>
                                        </div>
                                        <div class="text-center mt-3">
                                            <button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary"><i class="fas fa-sign-in-alt"></i> &nbsp;Sign in</button>
                                            <!-- <button type="button" class="btn btn-lg btn-default">Create an account</button> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="/assets/static/js/app.js"></script>
    <!-- <script src="/assets/bootstrap/js/bootstrap.min.js"></script> -->
    <script src="/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="/assets/plugins/toastr/toastr.min.js"></script>
    <script src="/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

    <script type="text/javascript">
        $(function() {
            let statusSuccess = "<?= $this->session->getFlashdata('msg'); ?>";
            let statusError = "<?= $this->session->getFlashdata('msg_err'); ?>";

            if (statusSuccess) {
                toastr.success(statusSuccess);
            }
            if (statusError) {
                toastr.warning(statusError);
            }

            $('#checkLogin').validate({
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    },
                },
                messages: {
                    username: {
                        required: "Please enter a username"
                    },
                    password: {
                        required: "Please provide a password"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.input-group').append(error);
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