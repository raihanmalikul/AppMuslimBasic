<!DOCTYPE html>
<html>

<head>
    <!-- BEGIN LINK -->
    <?= $this->include('Admin/Layout/Header') ?>
    <!-- END LINK -->
</head>

<body>
    <div class="wrapper">
        <!-- BEGIN CONTAINER -->
        <?= $this->renderSection('contentAdmin'); ?>
        <!-- END CONTAINER -->
    </div>
</body>

</html>