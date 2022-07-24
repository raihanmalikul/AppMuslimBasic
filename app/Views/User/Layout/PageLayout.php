<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <!-- BEGIN LINK -->
        <?= $this->include('User/Layout/Header') ?>
        <!-- END LINK -->
    </head>

    <body>
        <!-- BEGIN CONTAINER -->
        <?= $this->renderSection('contentUser'); ?>
        <!-- END CONTAINER -->

        <!-- BEGIN SCRIPT -->
        <?= $this->include('User/Layout/Script') ?>
        <!-- END SCRIPT -->
    </body>
</html>