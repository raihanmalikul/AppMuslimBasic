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
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
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
        $('#tblMDataCustomer').DataTable();
    });
</script>

<?= $this->endSection(); ?>