<?php $this->session = \Config\Services::session(); ?>

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
                                    <h5 class="card-title">Income</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">$47.482</h1>
                            <div class="mb-0">
                                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 3.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Income</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">$47.482</h1>
                            <div class="mb-0">
                                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 3.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Income</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">$47.482</h1>
                            <div class="mb-0">
                                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 3.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col mt-0">
                                    <h5 class="card-title">Income</h5>
                                </div>

                                <div class="col-auto">
                                    <div class="stat text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign align-middle">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <h1 class="mt-1 mb-3">$47.482</h1>
                            <div class="mb-0">
                                <span class="badge badge-success-light"> <i class="mdi mdi-arrow-bottom-right"></i> 3.65% </span>
                                <span class="text-muted">Since last week</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sales/Revenue</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <div class="align-self-center chart chart-lg">
                                <div class="chartjs-size-monitor">
                                    <div class="chartjs-size-monitor-expand">
                                        <div class=""></div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink">
                                        <div class=""></div>
                                    </div>
                                </div>
                                <canvas id="chartjs-dashboard-bar" width="328" height="350" style="display: block; width: 328px; height: 350px;" class="chartjs-render-monitor"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Top Selling Products</h5>
                        </div>
                        <table class="table table-borderless my-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="d-none d-xxl-table-cell">Company</th>
                                    <th class="d-none d-xl-table-cell">Assigned</th>
                                    <th class="d-none d-xl-table-cell text-end">Orders</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-light rounded-2">
                                                    <img class="p-2" src="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <strong>Aurora</strong>
                                                <div class="text-muted">
                                                    UI Kit
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Lechters</strong>
                                        <div class="text-muted">
                                            Real Estate
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <strong>Vanessa Tucker</strong>
                                        <div class="text-muted">
                                            HTML, JS, React
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-end">
                                        520
                                    </td>
                                    <td>
                                        <span class="badge badge-success-light">In progress</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-light rounded-2">
                                                    <img class="p-2" src="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <strong>Bender</strong>
                                                <div class="text-muted">
                                                    Dashboard
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Cellophane Transportation</strong>
                                        <div class="text-muted">
                                            Transportation
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <strong>William Harris</strong>
                                        <div class="text-muted">
                                            HTML, JS, Vue
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-end">
                                        240
                                    </td>
                                    <td>
                                        <span class="badge badge-warning-light">Paused</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-light rounded-2">
                                                    <img class="p-2" src="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <strong>Camelot</strong>
                                                <div class="text-muted">
                                                    Dashboard
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Clemens</strong>
                                        <div class="text-muted">
                                            Insurance
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <strong>Darwin</strong>
                                        <div class="text-muted">
                                            HTML, JS, Laravel
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-end">
                                        180
                                    </td>
                                    <td>
                                        <span class="badge badge-success-light">In progress</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-light rounded-2">
                                                    <img class="p-2" src="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <strong>Edison</strong>
                                                <div class="text-muted">
                                                    UI Kit
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Affinity Investment Group</strong>
                                        <div class="text-muted">
                                            Finance
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <strong>Vanessa Tucker</strong>
                                        <div class="text-muted">
                                            HTML, JS, React
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-end">
                                        410
                                    </td>
                                    <td>
                                        <span class="badge badge-danger-light">Cancelled</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="bg-light rounded-2">
                                                    <img class="p-2" src="">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <strong>Fusion</strong>
                                                <div class="text-muted">
                                                    Dashboard
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Konsili</strong>
                                        <div class="text-muted">
                                            Retail
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">
                                        <strong>Christina Mason</strong>
                                        <div class="text-muted">
                                            HTML, JS, Vue
                                        </div>
                                    </td>
                                    <td class="d-none d-xl-table-cell text-end">
                                        250
                                    </td>
                                    <td>
                                        <span class="badge badge-warning-light">Paused</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- BEGIN Footer -->
    <?= $this->include('Admin/Layout/Footer') ?>
    <!-- END Footer -->
</div>

<script type="text/javascript">
    $(function() {
        let status = "<?= $this->session->getFlashdata('msg'); ?>";
        if (status) {
            toastr.success(status);
        }
    });
</script>

<?= $this->endSection(); ?>