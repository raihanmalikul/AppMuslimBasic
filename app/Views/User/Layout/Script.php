<script src="/assets/tailwind/js/script.js"></script>
<script src="/js/index.min.js"></script>
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="/assets/plugins/toastr/toastr.min.js"></script>
<script src="/assets/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    function ucwords(val) {
        var name = val.toLowerCase().replace(/\b[a-z]/g, function(letter) {
            return letter.toUpperCase();
        });
        return name
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

    function getTheMonth(num) {
            if (num == 0) return 'Januari';
            else if (num == 1) return 'Februari';
            else if (num == 2) return 'Maret';
            else if (num == 3) return 'April';
            else if (num == 4) return 'Mei';
            else if (num == 5) return 'Juni';
            else if (num == 6) return 'Juli';
            else if (num == 7) return 'Agustus';
            else if (num == 8) return 'September';
            else if (num == 9) return 'Oktober';
            else if (num == 10) return 'November';
            else if (num == 11) return 'Desember';
        }
</script>