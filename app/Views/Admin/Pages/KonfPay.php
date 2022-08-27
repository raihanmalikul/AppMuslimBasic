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

            <h1 class="h3 mb-3"><strong>Payment confirmation</strong></h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row text-muted">
                                <div class="col-6 text-start">
                                    <h5 class="card-title">Data Payment confirmation</h5>
                                </div>  
                                <div class="col-6 text-end">
                                    <button type="button" id="btnConfirm" class="btn btn-primary">Confirm</button>
                                </div>  
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped" id="tblKonfPay">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Code Order</th>
                                            <th>Email</th>
                                            <th>Name Customer</th>
                                            <th>Invoice</th>
                                            <th>Status</th>
                                            <th>Total Price</th>
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
        var table = $('#tblKonfPay').DataTable({
            serverSide: true,
            processing: true,
            autoWidth: false,
            lengthMenu: [5, 10, 15, 20, 30, 50, 100],
            pageLength: 10,
            order: [1,'asc'],
            columnDefs: [
                {
                    searchable: false,
                    orderable: false,
                    targets: 0,
                    checkboxes: {
                        selectRow: true
                    }
                }
            ],
            select: {
                style: 'multi'
            },
            ajax: "/ProsesAdmin/displayOrderConfirm"
        });

        $('#btnConfirm').click(function() {
            // var form = new FormData(document.getElementById("formConfirm"));
            // var rows_selected = table.column().checkboxes.selected();
            var rows_selected = table.$(".dt-checkboxes:checked", {"page": "all"});
            var rows = new Array();
            console.log(rows_selected)
            $.each(rows_selected, function(index, rowId){
                var checkbox_value = $(rowId).val();
                console.log(checkbox_value)
                // rows.push({
                //     'id': rowId
                // })
            });

            // $.ajax({
            //     url: "/ProsesAdmin/updConfirm",
            //     type: "POST",
            //     data: {
            //         id: rows
            //     },
            //     dataType: "JSON",
            //     success: function (json) {
            //         console.log(json.msg);
            //         if (json.status == 0) {
            //             Toast.fire({
            //                 icon: 'error',
            //                 title: 'Confirmation failed!'
            //             })
            //         } else {
            //             Toast.fire({
            //                 icon: 'success',
            //                 title: 'Confirmation successfully!'
            //             })
            //             $('#tblKonfPay').DataTable().reload();
            //         }
            //     }
            // })
        })
    });
</script>

<?= $this->endSection(); ?>