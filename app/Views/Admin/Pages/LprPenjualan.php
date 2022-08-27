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

            <h1 class="h3 mb-3"><strong>Laporan</strong> Penjualan</h1>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    <input type="text" class="form-control" id="reservation">
                                    <button type="button" class="btn btn-outline-secondary" id="searchByDate"><i class="fas fa-search"></i>&nbsp;&nbsp;Proses</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped" id="tblBuy">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Order Id</th>
                                            <th>Date Order</th>
                                            <th>Category</th>
                                            <th>Product</th>
                                            <th>Color</th>
                                            <th>Size</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dtBuy">

                                    </tbody>
                                    <tfoot id="subTotal">

                                    </tfoot>
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
    let table = "";
    $(function() {
        if (sessionStorage.getItem("dateStart") && sessionStorage.getItem("dateEnd")) {
            displayData()
            $("#reservation").val(sessionStorage.getItem("dateStart") + ' - ' + sessionStorage.getItem("dateEnd"))

            sessionStorage.removeItem("dateStart")
            sessionStorage.removeItem("dateEnd")
        }
        let endDate = moment();
        $('#reservation').daterangepicker({
            locale: {
                format: 'DD/MM/YYYY',
                cancelLabel: 'Clear'
            },
            maxDate: endDate
        })

        initTable()

        $('#searchByDate').click(async function() {
            let rangeTgl = $("#reservation").val()

            let dateStart = rangeTgl.split(' - ')[0]
            let dateEnd = rangeTgl.split(' - ')[1]

            sessionStorage.setItem("dateStart", dateStart)
            sessionStorage.setItem("dateEnd", dateEnd)
            window.location.reload()
            // await displayData(dateStart, dateEnd);
            // await $("#tblBuy").DataTable().ajax.reload();
        })
    });

    function initTable() {
        table = $("#tblBuy").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "order": [],
            "buttons": [
                {
                    extend: 'excelHtml5',
                    footer: true
                },
                {
                    extend: 'pdfHtml5',
                    footer: true
                }
            ],
            "pageLength": 30
        }).buttons().container().appendTo('#tblBuy_wrapper .col-md-6:eq(0)');
    }

    function displayData() {
        let dateStart = sessionStorage.getItem("dateStart")
        let dateEnd = sessionStorage.getItem("dateEnd")
        $.ajax({
            type: "POST",
            url: "/ProsesAdmin/purchaseReport",
            data: {
                start: dateStart,
                end: dateEnd
            },
            dataType: "json",
            async: false,
            success: function(json) {
                console.log(json.data);

                if (json.status == 1) {
                    let row = '';
                    let kdBuy = '';
                    let no = 1;
                    let indexTotal = [];
                    let sumQty = sumPrice = 0;
    
                    //get index total
                    for (let i = 0; i < json.data.length; i++) {
                        if (kdBuy != json.data[i].kodeBuy) {
                            if (i != 0) {
                                indexTotal.push(i - 1)
                            }
                            if (i == json.data.length - 1) {
                                indexTotal.push(i)
                            }
                            kdBuy = json.data[i].kodeBuy
                        } else {
                            if (i == json.data.length - 1) {
                                indexTotal.push(i)
                            }
                            kdBuy = json.data[i].kodeBuy
                        }
                    }
    
                    kdBuy = '';
                    for (let i = 0; i < json.data.length; i++) {
                        let kodeBuy = json.data[i].kodeBuy
                        let date = new Date(json.data[i].tglBuy);
                        let tglBuy = ("00" + date.getDate()).slice(-2) + "-" + ("00" + (date.getMonth() + 1)).slice(-2) + "-" + date.getFullYear();
                        let nameCategory = json.data[i].nameCategory
                        let nameProduct = json.data[i].nameProduct
                        let nameColor = json.data[i].nameColor
                        let nameSize = json.data[i].nameSize
                        let qty = json.data[i].qty
                        let price = json.data[i].price
                        let totQty = json.data[i].totQty
                        let totPrice = json.data[i].totPrice
    
                        rowTotal = `<tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align:right"><b>Total</b></td>
                                        <td><b>` + totQty + `</b></td>
                                        <td><b>` + formatRupiah(totPrice, '') + `</b></td>
                                    </tr>`;
                                        // <td><b>` + formatRupiah(totQty, '') + `</b></td>
                                        // <td><b>` + totPrice + `</b></td>
    
                        if (kdBuy != kodeBuy) {
    
                            //header buy
                            row += `<tr>
                                        <td><b>` + no + `</b></td>
                                        <td><b>` + kodeBuy + `</b></td>
                                        <td><b>` + tglBuy + `</b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>`;
                            // <td></td>                                      
                            no++;
                            kdBuy = kodeBuy
                        }

                        //detail buy
                        row += `<tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>` + nameCategory + `</td>
                                    <td>` + nameProduct + `</td>
                                    <td>` + nameColor + `</td>
                                    <td>` + nameSize + `</td>
                                    <td>` + qty + `</td>
                                    <td>` + formatRupiah(price, '') + `</td>
                                </tr>`;
                                    // <td>` + formatRupiah(qty, '') + `</td>
                                    // <td>` + price + `</td>
    
                        //sub total
                        if (indexTotal.includes(i)) {
                            row += rowTotal;
                            sumQty += parseInt(totQty)
                            sumPrice += parseInt(totPrice)
                        }
                    }
                    rowGrand = `<tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style="text-align:right">Grand Total</th>
                                    <th>` + sumQty + `</th>
                                    <th>` + formatRupiah(sumPrice.toString(), '') + `</th>
                                </tr>`;
                                    // <th>` + sumPrice.toString() + `</th>
                                    // <th>` + formatRupiah(sumQty.toString(), '') + `</th>
                    $('#dtBuy').html(row);
                    $('#subTotal').html(rowGrand);
                    // table.reload();
                } else {
                    Toast.fire({
                        icon: 'error',
                        title: 'Get Data failed!'
                    })
                }

            }
        })
    }
</script>

<?= $this->endSection(); ?>