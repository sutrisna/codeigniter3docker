<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('assets/favicon/apple-icon-57x57.png') ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('assets/favicon/apple-icon-60x60.png') ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('assets/favicon/apple-icon-72x72.png') ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets/favicon/apple-icon-76x76.png') ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('assets/favicon/apple-icon-114x114.png') ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('assets/favicon/apple-icon-120x120.png') ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/favicon/apple-icon-144x144.png') ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('assets/favicon/apple-icon-152x152.png') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/favicon/apple-icon-180x180.png') ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/favicon/manifest.json') ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= base_url('assets/favicon/ms-icon-144x144.png') ?>">
    <meta name="theme-color" content="#ffffff">
    <meta name="csrf-token" content="<?php echo $this->security->get_csrf_hash(); ?>">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templates/colorlib-regform-17/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') ?>">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/templates/colorlib-regform-17/css/style.css') ?>">
</head>

<body>

    <div class="wrapper" style="background-image: url('<?php echo base_url('assets/templates/colorlib-regform-17/images/bg-registration-form-1.webp') ?>');">
        <div class="inner">
            <div class="image-holder">
                <img src="<?php echo base_url('assets/templates/colorlib-regform-17/images/registration-form-1.webp') ?>" alt="image">
            </div>
            <form action="<?php echo site_url('auth/login'); ?>" method="post">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" 
                value="<?php echo $this->security->get_csrf_hash(); ?>">
                <h3>Login Form</h3>
                <?php if (isset($error)): ?>
                    <div style="color: red;">
                        <p><?php echo $error; ?></p>
                    </div>
                <?php endif; ?>
                <div class="form-wrapper">
                    <input type="text" name="username"  placeholder="Username" class="form-control" required>
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div class="form-wrapper">
                    <input type="password" name="password" placeholder="Password" class="form-control" autocomplete required>
                    <i class="zmdi zmdi-lock"></i>
                </div>

                <button type="submit" id="loginBtn">Sign In
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>