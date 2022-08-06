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

            <h1 class="h3 mb-3"><strong>Order</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">All Order Customer</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-striped" id="tblAllOrder">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Code Order</th>
                                            <th>Email</th>
                                            <th>Name Customer</th>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            <th>Total Price</th>
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

    <!-- BEGIN Footer -->
    <?= $this->include('Admin/Layout/Footer') ?>
    <!-- END Footer -->
</div>

<!-- BEGIN SCRIPT -->
<?= $this->include('Admin/Layout/Script') ?>
<!-- END SCRIPT -->

<script type="text/javascript">
    $(function() {
        $('#tblAllOrder').DataTable({
            serverSide: true,
            autoWidth: false,
            lengthMenu: [5, 10, 15, 20, 30, 50, 100],
            pageLength: 10,
            order: [1, 'asc'],
            processing: true,
            columnDefs: [{
                searchable: false,
                orderable: false,
                targets: 0,
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
            }],
            ajax: {
                type: "POST",
                url: "/ProsesAdmin/displayAllOrder",
                data: function(prm) {
                    prm.search.value = $('#tblAllOrder_filter input').val();
                },
                dataType: "json",
                dataSrc: function(json) {
                    // console.log(json)
                    var return_data = new Array();
                    var i = 1;

                    $.each(json.data, function(index, value) {
                        let btnAction = statusBadge = '';
                        // if (value.id != null) {
                        // }
                        btnAction = '' +
                            '<button class="btn btn-sm btn-pill btn-primary" type="button"onclick="updData(' + value.slug + ')"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Edit</button>&nbsp;' +
                            '<button class="btn btn-sm btn-pill btn-danger" type="button"onclick="updIsValid(' + value.slug + ')"><i class="fa-solid fa-trash-can"></i>&nbsp; Delete</button>';

                        if (value.status_order == 0) {
                            statusBadge = '<span class="badge bg-warning">Delivery Process </span>'
                        } else if (value.status_order == 1) {
                            statusBadge = '<span class="badge bg-danger">Delivery Failed</span>'
                        } else {
                            statusBadge = '<span class="badge bg-success">Done</span>'
                        }

                        return_data.push({
                            'orderCode': value.order_id,
                            'email': value.email,
                            'customerName': value.customer_name,
                            'invoice': value.invoice,
                            'statusOrder': statusBadge,
                            'totalPrice': value.subTotal,
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
            }, {
                data: 'orderCode',
                defaultContent: ''
            }, {
                data: 'email',
                defaultContent: ''
            }, {
                data: 'customerName',
                defaultContent: ''
            }, {
                data: 'invoice',
                defaultContent: ''
            }, {
                data: 'statusOrder',
                defaultContent: ''
            }, {
                data: 'totalPrice',
                defaultContent: ''
            }, {
                data: 'action',
                defaultContent: ''
            }]
        });
    });
</script>

<?= $this->endSection(); ?>