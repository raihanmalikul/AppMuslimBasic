<?php $this->session = \Config\Services::session(); ?>
<?= $this->extend('Admin/Layout/PageLayout'); ?>

<?= $this->section('contentAdmin'); ?>

<!-- BEGIN NAVBAR -->
<?= $this->include('Admin/Layout/Sidebar') ?>
<!-- END NAVBAR -->
<div class="main">

    <!-- BEGIN SCRIPT -->
    <?= $this->include('Admin/Layout/Navbar') ?>
    <!-- END SCRIPT -->

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Master Products</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-pill btn-primary" type="button" id="addProducts"><i class="fas fa-plus-square"></i>&nbsp;&nbsp; Add Category</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-striped" id="tblMstrProducts">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Category Code</th>
                                            <th>Products Code</th>
                                            <th>Name</th>
                                            <th>Price (IDN)</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalAddProducts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddCategoryLabel">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="loadingSimpan"></span>
                    <form action="" method="POST" id="formAddProducts">
                        <div class="mb-3">
                            <label class="form-label">Select category</label>
                            <select class="form-control" name="optCategory" id="optCategory">
                            </select>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Code" readonly>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">&nbsp;</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Name">
                            </div>
                        </div>
                        <div class="row dtlProduct">
                            <div class="mb-3 col-md-2">
                                <label class="form-label">Products</label>
                                <input type="text" class="form-control" name="product_id[]" id="product_id" placeholder="Code" readonly>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label class="form-label">&nbsp;</label>
                                <input type="text" class="form-control" name="product_name[]" id="product_name" placeholder="Name">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <input type="number" class="form-control" name="product_price[]" id="product_price" placeholder="Price">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <input type="number" class="form-control" name="product_weight[]" id="product_weight" placeholder="Weight">
                            </div>
                            <div class="mb-3 col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <input type="number" class="form-control" name="product_qty[]" id="product_qty" placeholder="Quantity">
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-sm btn-success" id="multiProduct"><i class="fas fa-plus-square"></i>&nbsp; Add Product</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeDataCategory" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="addDataCategory">Save</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>AdminKit</strong></a> &copy; | Environment : <?= ENVIRONMENT ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script type="text/javascript">
    $(function() {
        $('#tblMstrProducts').DataTable();

        $("#addProducts").click(function() {
            getCategoryCode();
            getNewCategoryCode();
            $("#modalAddProducts").modal('show');
        })

        $("#formAddProducts").validate({
            rules: {
                category_id: "required",
                category_name: "required",
                "product_name[]": "required",
                "product_price[]": "required",
                "product_weight[]": "required",
                "product_qty[]": "required",
            },
            messages: {
                category_id: "Category id Cannot be Empty",
                category_name: "Category name Cannot be Empty",
                "product_name[]": "Product name Cannot be Empty",
                "product_price[]": "Product price Cannot be Empty",
                "product_weight[]": "Product weight Cannot be Empty",
                "product_qty[]": "Product quantity Cannot be Empty",
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        $("#addDataCategory").click(function() {
            let formValid = $("#formAddProducts").valid();
            if (!formValid) return;
            let optCategory = $("#optCategory").val()
            let category_id = $("#category_id").val()
            let category_name = $("#category_name").val()
            let product_id = $("#product_id").val()
            let product_name = $("#product_name").val()
            let product_price = $("#product_price").val()
            let product_weight = $("#product_weight").val()
            let product_qty = $("#product_qty").val()

            let data = $("#formAddProducts").serialize();

            $.ajax({
                type: "POST",
                url: "/ProsesAdmin/AddMasterCategory",
                data: data,
                dataType: "json",
                async: false,
                beforeSend: function() {
                    $("#addDataCategory").prop("disabled", true);
                    $("#closeDataCategory").prop("disabled", true);
                    $("#formAddProducts").hide();

                    var loading = `<div class="col-12">
                                        <div class="placeholder-glow">
                                            <div class="placeholder mb-3" style="width: 99%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                            <div class="placeholder mb-3" style="width: 16%;"></div>
                                            <div class="placeholder mb-3" style="width: 33%;"></div>
                                            <div class="placeholder mb-3" style="width: 16%;"></div>
                                            <div class="placeholder mb-3" style="width: 16%;"></div>
                                            <div class="placeholder mb-3" style="width: 16%;"></div>
                                        </div>
                                    </div>
                                    <button href="#" tabindex="-1" class="btn btn-sm btn-success disabled placeholder col-1"></button>`;
                    $("#loadingSimpan").html(loading);
                },
                success: function(data) {
                    // console.log(data);
                    Toast.fire({
                        icon: 'success',
                        title: 'Data Barang Berhasil Disimpan.'
                    })

                    $("#formAddProducts").show();
                    $("#addDataCategory").prop("disabled", false);
                    $("#closeDataCategory").prop("disabled", false);

                    setTimeout(() => {
                        window.location.reload()
                    }, 3000);
                }
            })
        })

        $("#multiProduct").click(function() {
            let indexForm = $(".dtlProduct").length
            let newProduct = "newProduct-" + indexForm;
            let product_id = $("#product_id").val()
            // console.log(indexForm);
            if (indexForm > 1) {
                let indexDetail = indexForm - 1
                product_id = $(".newProduct-" + indexDetail + " #product_id").val()
            }
            product_id = product_id.replace('.', '')
            product_id = String(parseInt(product_id) + 1).padStart(2, '0') + '.';

            let formProduct = `<div class="row dtlProduct newProductBrg ` + newProduct + `">
                                    <div class="mb-3 col-md-2">
                                        <input type="text" class="form-control" name="product_id[]" id="product_id" placeholder="Code" value="` + product_id + `" readonly>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <input type="text" class="form-control" name="product_name[]" id="product_name" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <input type="number" class="form-control" name="product_price[]" id="product_price" placeholder="Price">
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <input type="number" class="form-control" name="product_weight[]" id="product_weight" placeholder="Weight">
                                    </div>
                                    <div class="mb-3 col-md-2">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" name="product_qty[]" id="product_qty" placeholder="Quantity" aria-label="Quantity" aria-describedby="button-productQty">
                                            <button type="button" class="btn btn-sm btn-outline-danger" id="button-productQty" onClick="removeProduct('` + newProduct + `')"><i class="fas fa-times"></i></button>
                                        </div>
                                    </div>
                                </div>`;
            $("#formAddProducts").append(formProduct)
        })

        $("#optCategory").change(function() {
            let categorySlug = $("#optCategory").val()
            let textOptAdd = $("#optTambah option:selected").text()
            textOptAdd = textOptAdd.split(' ')
            // console.log(textOptAdd)
            let categoryNama = textOptAdd[1];
            $(".newProductBrg").remove()

            if (categorySlug == '') {
                getNewCategoryCode();
                $('#category_name').val('')
                $('#product_name').val('')
                $('#product_price').val('')
                $('#product_weight').val('')
                $('#product_qty').val('')

                $('#category_name').attr('readonly', false)
                $('#product_name').attr('readonly', false)
                $('#product_price').attr('readonly', false)
                $('#product_weight').attr('readonly', false)
                $('#product_qty').attr('readonly', false)
            } else {
                getNewCategoryCode(categorySlug);
                $('#category_name').val(categoryNama)
                $('#category_name').attr('readonly', true)
                $('#product_name').attr('readonly', true)
                $('#product_weight').attr('readonly', true)
                $('#product_qty').attr('readonly', true)
            }
        });
    })

    function getCategoryCode() {
        $.ajax({
            type: "GET",
            url: "/ProsesAdmin/getCategoryCode",
            dataType: "json",
            async: false,
            success: function(json) {
                console.log(json);
                let row = '<option value="" selected>Add New Category</option>';
                for (let i = 0; i < json.length; i++) {
                    row += `<option value="` + json[i].slug + `">` + json[i].category_id + ` ` + json[i].name + `</option>`;
                }
                $('#optCategory').html(row)
            }
        })
    }

    function getNewCategoryCode(slug = '') {
        console.log(slug);
        $.ajax({
            type: "GET",
            url: "/ProsesAdmin/getNewCategoryCode",
            data: {
                slug: slug
            },
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
            dataType: "json",
            success: function(json) {
                console.log(json);
                $("#category_id").val(json.category_id);
                $("#category_name").val(json.name);
                $("#category_name").attr('readonly', true);
                $("$product_id").val(json.product_id);
            }
        })
    }

    function removeProduct() {
        let indexProduct = $('.dtlProduct').length - 1
        $(".newProduct-" + indexProduct).remove();
    }
</script>

<?= $this->endSection(); ?>