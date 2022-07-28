<script src="/assets/tailwind/js/script.js"></script>
<script src="/js/index.min.js"></script>
<script src="/assets/plugins/jquery/jquery.min.js"></script>
<script src="/assets/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/assets/plugins/jquery-validation/additional-methods.min.js"></script>
<script src="/assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
    $(function() {
        let statusSuccess = "<?= $this->session->getFlashdata('msg'); ?>";
        let statusError = "<?= $this->session->getFlashdata('msg_err'); ?>";

        if (statusSuccess) {
            toastr.success(statusSuccess);
        }
        if (statusError) {
            toastr.warning(statusError);
        }
    });
</script>