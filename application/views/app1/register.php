<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
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
            <form action="<?php echo site_url('auth/register'); ?>" method="post">
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" 
           value="<?php echo $this->security->get_csrf_hash(); ?>">

    <h3>Registration Form</h3>

        <!-- Tampilkan pesan error -->
        <?php if(validation_errors()): ?>
            <div style="color: red; margin-bottom: 10px;">
                <ul>
                    <?php
                        // Menggunakan explode untuk membagi error dan memeriksa setiap pesan error
                        $errors = explode("\n", validation_errors());
                        foreach ($errors as $error) {
                            $error = trim($error); // Menghapus spasi kosong di awal dan akhir
                            if (!empty($error)) { // Pastikan hanya error yang tidak kosong yang ditampilkan
                                echo "<li>$error</li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        <?php endif; ?>

        <!-- First Name -->
        <div class="form-group">
            <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" placeholder="First Name" class="form-control" required>
        <!-- Last Name -->
            <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Last Name" class="form-control" required>
        </div>

        <!-- Username -->
        <div class="form-wrapper">
            <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" class="form-control" required>
            <i class="zmdi zmdi-account"></i>
        </div>

        <!-- Email -->
        <div class="form-wrapper">
            <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Address" class="form-control">
            <i class="zmdi zmdi-email"></i>
        </div>

        <!-- Role -->
        <div class="form-wrapper">
            <select name="role" class="form-control" required>
                <option value="" disabled selected>Role</option>
                <option value="admin" <?php echo set_select('role', 'admin'); ?>>Admin</option>
                <option value="user" <?php echo set_select('role', 'user'); ?>>User</option>
            </select>
            <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
        </div>

        <!-- Password -->
        <div class="form-wrapper">
            <input type="password" name="password" placeholder="Password" class="form-control" autocomplete  required>
            <i class="zmdi zmdi-lock"></i>
        </div>

        <!-- Confirm Password -->
        <div class="form-wrapper">
            <input type="password" name="password_check" placeholder="Confirm Password" class="form-control" autocomplete required>
            <i class="zmdi zmdi-lock"></i>
        </div>

        <button type="submit">Register
            <i class="zmdi zmdi-arrow-right"></i>
        </button>
    </form>

        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>