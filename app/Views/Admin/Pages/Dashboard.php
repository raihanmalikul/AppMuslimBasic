;./<?php $this->session = \Config\Services::session(); ?>

<?= $this->extend('Admin/Layout/PageLayout'); ?>

<?= $this->section('contentAdmin'); ?>

<!-- BEGIN Sidebar -->
<?= $this->include('Admin/Layout/Sidebar') ?>
<!-- END Sidebar -->
<div class="main">

    <!-- BEGIN Navbar -->
    <?= $this->include('Admin/Layout/Navbar') ?>
    <!-- END Navbar -->

    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

            <div class="row">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Products </h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="fas fa-box-open"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3"><?= $countProd; ?></h1>
                            <div class="mb-0">
                                <!-- <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i></span> -->
                                <!-- <span class="text-muted"></span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Orders</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="shopping-bag"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3"><?= $countOrder; ?></h1>
                            <div class="mb-0">
                                <!-- <span class="badge badge-danger-light"> <i class="mdi mdi-arrow-bottom-right"></i> -5.25% </span> -->
                                <!-- <span class="text-muted">Since last week</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Users</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg> -->
                                        <i class="fa-solid fa-user-group"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3"><?= $countProfil; ?></h1>
                            <div class="mb-0">
                                <!-- <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 3.65% </span> -->
                                <!-- <span class="text-muted">Since last week</span> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Revenue</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <i class="align-middle" data-feather="shopping-cart"></i>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3"><span id="sumOrder"></span></h1>
                            <div class="mb-0">
                                <!-- <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 2.35% </span> -->
                                <!-- <span class="text-muted">Since last week</span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sales/Revenue</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <div class="align-self-center chart chart-lg">
                                <canvas id="chartjs-dashboard-bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Top Selling Products</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless my-0" id="tblTopSell">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Product</th>
                                        <th>Orders</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                            </table>
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
        let status = "<?= $this->session->getFlashdata('msg'); ?>";
        if (status) {
            toastr.success(status);
        }
        let sumOrder = "<?= $sumOrder; ?>";
        $('#sumOrder').text(formatRupiah(sumOrder, 'Rp. '));

        salesRevenue()

        $('#tblTopSell').DataTable({
            serverSide: true,
            autoWidth: false,
            lengthMenu: [5, 10, 15, 20, 30, 50, 100],
            pageLength: 5,
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
                url: "/ProsesAdmin/displayTopSelling",
                data: function(prm) {
                    prm.search.value = $('#tblTopSell_filter input').val();
                },
                dataType: "json",
                dataSrc: function(json) {
                    // console.log(json)
                    var return_data = new Array();
                    var i = 1;

                    let statusBadge = '';
                    $.each(json.data, function(i, v) {
                        if (v.status == 0) {
                            statusBadge = '<span class="badge bg-warning">Verifikasi Pembayaran</span>'
                        } else if (v.status == 1) {
                            statusBadge = '<span class="badge bg-info">Delivery Proses</span>'
                        } else if (v.status == 2) {
                            statusBadge = '<span class="badge bg-success">Complete</span>'
                        } else {
                            statusBadge = '<span class="badge bg-danger">Cancelled</span>'
                        }

                        return_data.push({
                            'nameCustomer': v.name_customer,
                            'nameCategory': v.name_category,
                            'customerName': v.customer_name,
                            'nameProduct': v.name_product,
                            'orders': v.orders,
                            'status': statusBadge
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
                data: 'nameCustomer',
                defaultContent: ''
            }, {
                data: 'nameCategory',
                defaultContent: ''
            }, {
                data: 'nameProduct',
                defaultContent: ''
            }, {
                data: 'orders',
                defaultContent: ''
            }, {
                data: 'status',
                defaultContent: ''
            }]
        });
    });

    function salesRevenue() {
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "This year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    }
</script>

<?= $this->endSection(); ?>