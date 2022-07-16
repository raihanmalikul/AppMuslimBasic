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

            <h1 class="h3 mb-3"><strong>Produk</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Data Kategori</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-bordered table-striped" id="tblKategori">
                                    <thead>
                                        <tr>
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

    <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy; | Environment : <?= ENVIRONMENT ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>

<script type="text/javascript">
    $(function () {
        $('#tblKategori').DataTable();
    });
</script>

<?= $this->endSection(); ?>