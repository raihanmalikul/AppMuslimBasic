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

            <h1 class="h3 mb-3"><strong>All Order</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row text-muted">
                                <div class="col-6 text-start">
                                    <h5 class="card-title">All Order Customer</h5>
                                </div>  
                                <div class="col-6 text-end">
                                    <!-- <button type="button" class="btn btn-primary">Confir</button> -->
                                </div>  
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped" id="tblAllOrder">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Code Order</th>
                                            <th>Email</th>
                                            <th>Name Customer</th>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            <th>Total Price</th>
                                            <!-- <th>Action</th> -->
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

<!-- Modal -->
<div class="modal fade" id="updData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updDataLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
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
            order: [1,'asc'],
            processing: true,
            columnDefs: [
                {
                    searchable: false,
                    orderable: false,
                    targets: 0,
                    render: function(data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                }
            ],
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

                    let btnAction = statusBadge = '';
                    $.each(json.data, function(i, v) {
                        // btnAction = '<button class="btn btn-sm btn-pill btn-primary" type="button"onclick="updData(' + v.id + ')"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Edit</button>&nbsp;'
                            // '<button class="btn btn-sm btn-pill btn-danger" type="button"onclick="updIsValid(' + v.slug + ')"><i class="fa-solid fa-trash-can"></i>&nbsp; Delete</button>';

                        if (v.status_order == 0) {
                            statusBadge = '<span class="badge bg-warning">Verifikasi Pembayaran</span>';
                        } else if (v.status_order == 1) {
                            statusBadge = '<span class="badge bg-info">Delivery Proses</span>';
                        } else if (v.status_order == 2) {
                            statusBadge = '<span class="badge bg-success">Complete</span>';
                        } else {
                            statusBadge = '<span class="badge bg-danger">Cancelled</span>';
                        }

                        return_data.push({
                            'orderCode': v.order_id,
                            'email': v.email,
                            'customerName': v.name_customer,
                            'invoice': v.invoice,
                            'statusOrder': statusBadge,
                            'totalPrice': formatRupiah(v.subTotal, 'Rp. '),
                            // 'action': btnAction
                        });
                        i++;
                    });
                    return return_data;
                }
            },
            columns: [
                {
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
                }, 
                // {
                //     data: 'action',
                //     defaultContent: ''
                // }
            ]
        });
    });
</script>

<?= $this->endSection(); ?>