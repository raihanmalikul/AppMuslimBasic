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

            <h1 class="h3 mb-3"><strong>Customer</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Master Data</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-striped" id="tblMDataCustomer">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Name</th>
                                            <th colspan="6" style="text-align: center;">Address Data</th>
                                            <th rowspan="2">Order Qty</th>
                                            <th rowspan="2">Status</th>
                                            <!-- <th rowspan="2">Action</th> -->
                                        </tr>
                                        <tr>
                                            <th>Address</th>
                                            <th>Number Phone</th>
                                            <th>Email</th>
                                            <th>Province</th>
                                            <th>City</th>
                                            <th>Postal Code</th>
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
        $('#tblMDataCustomer').DataTable({
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
                url: "/ProsesAdmin/displayCustomer",
                data: function(prm) {
                    prm.search.value = $('#tblMDataCustomer_filter input').val();
                },
                dataType: "json",
                dataSrc: function(json) {
                    // console.log(json)
                    var return_data = new Array();
                    var i = 1;

                    $.each(json.data, function(index, value) {
                        let btnAction = statusBadge = '';
                        if (value.id != null) {
                            // btnAction = '' +
                            //     '<button class="btn btn-sm btn-pill btn-primary" type="button"onclick="updData(' + value.slug + ')"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Edit</button>&nbsp;' +
                            //     '<button class="btn btn-sm btn-pill btn-danger" type="button"onclick="updIsValid(' + value.slug + ')"><i class="fa-solid fa-trash-can"></i>&nbsp; Delete</button>';
                        }

                        if (value.status == 1) {
                            statusBadge = '<span class="badge bg-success">Aktif</span>'
                        } else {
                            statusBadge = '<span class="badge bg-danger">Non Aktif</span>'
                        }

                        let order = value.order_all + `&nbsp;` +
                            `&nbsp;<button class="btn btn-sm btn-secondary" type="button" title="Detail Order" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right"
										data-bs-content="Proses = ` + value.order_process + ` <br> Done = ` + value.order_done + `" onclick="showInfoQty(this)"><i class="fas fa-info-circle"></i></button>`;

                        return_data.push({
                            'name': value.name,
                            'address': value.address,
                            'phone': value.phone,
                            'email': value.email,
                            'province': value.province,
                            'city': value.city_name,
                            'order': order,
                            'postal': value.postal_code,
                            'status': statusBadge,
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
                    data: 'name',
                    defaultContent: ''
                }, {
                    data: 'address',
                    defaultContent: ''
                }, {
                    data: 'phone',
                    defaultContent: ''
                }, {
                    data: 'email',
                    defaultContent: ''
                }, {
                    data: 'province',
                    defaultContent: ''
                }, {
                    data: 'city',
                    defaultContent: ''
                }, {
                    data: 'postal',
                    defaultContent: ''
                }, {
                    data: 'order',
                    defaultContent: ''
                }, {
                    data: 'status',
                    defaultContent: ''
                }, 
                // {
                //     data: 'action',
                //     defaultContent: ''
                // }
            ]
        });
    });

    function showInfoQty(obj) {
        $(obj).popover({
            html: true
        });
        $(obj).popover('show');
    }
</script>

<?= $this->endSection(); ?>