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

            <h1 class="h3 mb-3"><strong>Products</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title">Master Product</h5>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-pill btn-primary" type="button" id="addProducts" style="float: right; margin-left: 1%;"><i class="fas fa-plus-square"></i>&nbsp;&nbsp; Add New</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-sm table-striped" id="tblMstrProducts">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Category Code</th>
                                        <th>Category Name</th>
                                        <th>Products Code</th>
                                        <th>Products Name</th>
                                        <th>Status</th>
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
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalAddProducts" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAddCategoryLabel">Add New Category or New Products</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="loadingSimpan"></span>
                    <form action="" method="POST" id="formAddProducts">
                        <div class="mb-3">
                            <label class="form-label">Select category</label>
                            <select class="form-control" name="optCategory" id="optCategory"></select>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Category</label>
                                <input type="text" class="form-control" name="category_id" id="category_id" placeholder="Code" readonly>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">&nbsp;</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="row dtlProduct">
                            <div class="row">
                                <div class="mb-3 col-md-2">
                                    <label class="form-label">Products</label>
                                    <input type="text" class="form-control" name="product_id[]" id="product_id" placeholder="Code" readonly>
                                </div>
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">&nbsp;</label>
                                    <input type="text" class="form-control" name="product_name[]" id="product_name" placeholder="Product Name">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label">&nbsp;</label>
                                    <input type="number" min="1" class="form-control" name="product_price[]" id="product_price" placeholder="Price">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label">&nbsp;</label>
                                    <input type="number" min="1" class="form-control" name="product_weight[]" id="product_weight" placeholder="Weight">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label">&nbsp;</label>
                                    <input type="number" min="1" class="form-control" name="product_stock[]" id="product_stock" placeholder="Stock">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-5">
                                    <textarea class="form-control" name="product_des[]" id="product_des" placeholder="Description" rows="1"></textarea>
                                </div>
                                <div class="mb-3 col-md-3">
                                    <input type="file" class="form-control" name="product_image[]" id="product_image" accept="image/png, image/jpeg" placeholder="Image">
                                </div>
                                <div class="mb-3 col-md-2">
                                    <select class="form-select" name="product_size[]" id="product_size" placeholder="Size"></select>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <input type="hidden" name="product_slug[]" id="product_slug">
                                    <select class="form-select" name="product_color[]" id="product_color" placeholder="Color"></select>
                                </div>
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

    <!-- BEGIN Footer -->
    <?= $this->include('Admin/Layout/Footer') ?>
    <!-- END Footer -->
</div>

<!-- BEGIN SCRIPT -->
<?= $this->include('Admin/Layout/Script') ?>
<!-- END SCRIPT -->

<script type="text/javascript">
    $(function() {
        $('#tblMstrProducts').DataTable({
            // responsive: true,
            serverSide: true,
            autoWidth: false,
            // scrollX: true,
            // scrollCollapse: true,
            lengthMenu: [5, 10, 15, 20, 30, 50, 100],
            pageLength: 10,
            order: [1, 'asc'],
            processing: true,
            // fnInitComplete: function(oSettings) {
            //     $(window).resize();
            // },
            // fnDrawCallback: function(oSettings) {
            //     $(window).trigger('resize');
            // },
            columnDefs: [{
                searchable: false,
                orderable: false,
                targets: 0,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            }],
            ajax: {
                type: "POST",
                url: "/ProsesAdmin/displayProduct",
                data: function(prm) {
                    prm.search.value = $('#tblMstrProducts_filter input').val();
                },
                dataType: "json",
                dataSrc: function(json) {
                    // console.log(json)
                    var return_data = new Array();
                    var i = 1;

                    $.each(json.data, function(index, value) {
                        let btnAction = statusBadge = '';
                        if (value.product_id != null) {
                            btnAction = '' +
                                '<button class="btn btn-sm btn-pill btn-primary" type="button"onclick="updData(' + value.slug + ')"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Edit</button>&nbsp;' +
                                '<button class="btn btn-sm btn-pill btn-danger" type="button"onclick="updIsValid(' + value.slug + ')"><i class="fa-solid fa-trash-can"></i>&nbsp; Delete</button>';
                        }

                        if (value.is_valid == 1) {
                            statusBadge = '<span class="badge bg-success">Aktif</span>'
                        } else {
                            statusBadge = '<span class="badge bg-danger">Non Aktif</span>'
                        }

                        return_data.push({
                            'category-code': value.category_id,
                            'category-name': value.category_name,
                            'product-code': value.product_id,
                            'product-name': value.product_name,
                            'status': statusBadge,
                            'createdAt': value.created_at,
                            'action': btnAction
                        });
                        i++;
                    });
                    return return_data;
                }
            },
            columns: [{
                    data: 'no',
                    defaultContent: ''
                },
                {
                    data: 'category-code',
                    defaultContent: ''
                },
                {
                    data: 'category-name',
                    defaultContent: ''
                },
                {
                    data: 'product-code',
                    defaultContent: ''
                },
                {
                    data: 'product-name',
                    defaultContent: ''
                },
                {
                    data: 'status',
                    defaultContent: ''
                },
                {
                    data: 'createdAt',
                    defaultContent: ''
                },
                {
                    data: 'action',
                    defaultContent: ''
                }
            ]
        })

        $("#addProducts").click(function() {
            getCategoryCode()
            getSizeCode()
            getColorCode()
            getNewCategoryCode()
            $("#modalAddProducts").modal('show');
        })

        $("#formAddProducts").validate({
            rules: {
                category_id: "required",
                category_name: "required",
                "product_name[]": "required",
            },
            messages: {
                category_id: "Category id Cannot be Empty",
                category_name: "Category name Cannot be Empty",
                "product_name[]": "Product name Cannot be Empty",
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

            let data = $("#formAddProducts").serialize();

            $.ajax({
                type: "POST",
                url: "/ProsesAdmin/AddMasterCategory",
                data: data,
                dataType: "json",
                async: false,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                beforeSend: function() {
                    $("#addDataCategory").attr("disabled", true);
                    $("#closeDataCategory").attr("disabled", true);
                    $("#formAddProducts").hide();
                    $("#multiProduct").hide();

                    var loading = `<div class="col-12">
                                        <div class="placeholder-glow">
                                            <div class="placeholder mb-3" style="width: 99%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                            <div class="placeholder mb-3" style="width: 49%;"></div>
                                        </div>
                                    </div>
                                    <button href="#" tabindex="-1" class="btn btn-sm btn-success disabled placeholder col-1"></button>`;
                    $("#loadingSimpan").html(loading);
                },
                success: function(json) {
                    // console.log(json);
                    if (json.status) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Data Barang Berhasil Disimpan.',
                            showConfirmButton: false,
                            timer: 3000
                        })

                        // $("#formAddProducts").show();
                        $("#addDataCategory").prop("disabled", false);
                        $("#closeDataCategory").prop("disabled", false);

                        setTimeout(() => {
                            window.location.reload()
                        }, 3000);
                    }
                }
            })
        })

        $("#multiProduct").click(function() {
            let indexForm = $(".dtlProduct").length
            let newProduct = "newProduct-" + indexForm;
            let product_id = $("#product_id").val()
            if (indexForm > 1) {
                let indexDetail = indexForm - 1
                product_id = $(".newProduct-" + indexDetail + " #product_id").val()
            }
            product_id = product_id.replace('.', '')
            product_id = String(parseInt(product_id) + 1).padStart(2, '0');
            // console.log(product_id);

            let formProduct = `<div class="row dtlProduct newProductBrg ` + newProduct + `">
                                    <div class="row">
                                        <div class="mb-3 col-md-2">
                                            <label class="form-label">Products</label>
                                            <input type="text" class="form-control" name="product_id[]" id="product_id" value="` + product_id + `" placeholder="Code" readonly>
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">&nbsp;</label>
                                            <input type="text" class="form-control" name="product_name[]" id="product_name" placeholder="Product Name">
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <label class="form-label">&nbsp;</label>
                                            <input type="number" min="1" class="form-control" name="product_price[]" id="product_price" placeholder="Price">
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <label class="form-label">&nbsp;</label>
                                            <input type="number" min="1" class="form-control" name="product_weight[]" id="product_weight" placeholder="Weight">
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <label class="form-label">&nbsp;</label>
                                            <input type="number" min="1" class="form-control" name="product_stock[]" id="product_stock" placeholder="Stock">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-5">
                                            <textarea class="form-control" name="product_des[]" id="product_des" placeholder="Description" rows="1"></textarea>
                                        </div>
                                        <div class="mb-3 col-md-3">
                                            <input type="file" class="form-control" name="product_image[]" id="product_image" accept="image/png, image/jpeg" placeholder="Image">
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <select class="form-select" name="product_size[]" id="product_size` + product_id + `" placeholder="Size"></select>
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <div class="input-group mb-3">
                                                <select class="form-select" name="product_color[]" id="product_color` + product_id + `" placeholder="Color" aria-describedby="button-productColor"></select>
                                                <input type="hidden" name="product_slug[]" id="product_slug">
                                                <button type="button" class="btn btn-sm btn-outline-danger" id="button-productColor" onClick="removeProduct('` + newProduct + `')"><i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>`;
            $("#formAddProducts").append(formProduct)
            getSizeCode(product_id)
            getColorCode(product_id)
        })

        $("#optCategory").change(function() {
            let categorySlug = $("#optCategory").val()
            $(".newProductBrg").remove()

            if (categorySlug == '') {
                getNewCategoryCode();
                $('#category_name').val('')
                $('#product_name').val('')

                $('#category_name').attr('readonly', false)
            } else {
                getNewCategoryCode(categorySlug);
                $('#category_name').attr('readonly', true)
                $('#product_name').val('')
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
                // console.log(json);
                let row = '<option value="" selected>Add New Category</option>';
                for (let i = 0; i < json.length; i++) {
                    row += `<option value="` + json[i].slug + `">` + json[i].name + `</option>`;
                }
                $('#optCategory').html(row)
            }
        })
    }

    function getSizeCode(product_id = '') {
        $.ajax({
            type: "GET",
            url: "/ProsesAdmin/getSizeCode",
            dataType: "json",
            async: false,
            success: function(json) {
                // console.log(json);
                let row = '<option value="" selected>--Pilih--</option>';
                for (let i = 0; i < json.length; i++) {
                    row += `<option value="` + json[i].size_id + `">` + json[i].name + `</option>`;
                }

                if (product_id == 'new') {
                    $('#product_size').html(row)
                } else {
                    $('#product_size' + product_id).html(row)
                }
            }
        })
    }

    function getColorCode(product_id = '') {
        $.ajax({
            type: "GET",
            url: "/ProsesAdmin/getColorCode",
            dataType: "json",
            async: false,
            success: function(json) {
                // console.log(json);
                let row = '<option value="" selected>--Pilih--</option>';
                for (let i = 0; i < json.length; i++) {
                    row += `<option value="` + json[i].color_id + `">` + json[i].name + `</option>`;
                }
                if (product_id == '') {
                    $('#product_color').html(row)
                } else {
                    $('#product_color' + product_id).html(row)
                }
            }
        })
    }

    function getNewCategoryCode(slug = '') {
        // console.log(slug)
        $.ajax({
            type: "POST",
            url: "/ProsesAdmin/getNewCategoryCode",
            data: {
                slug: slug
            },
            async: false,
            dataType: "json",
            success: function(json) {
                // console.log(json);
                $("#category_id").val(json.category_id);
                $("#category_name").val(json.category_name);
                $("#product_id").val(json.product_id);
            }
        })
    }

    function removeProduct() {
        let indexProduct = $('.dtlProduct').length - 1
        $(".newProduct-" + indexProduct).remove();
    }

    function updIsValid(slug) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

<?= $this->endSection(); ?>