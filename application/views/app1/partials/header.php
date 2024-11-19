<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="sekolah" name="keywords">
    <meta content="management sekolah" name="description">
    <meta name="csrf-token" content="<?php echo $this->security->get_csrf_hash(); ?>">

    <!-- Favicon -->
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/img/favicon.ico'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/css/css2.css') ?>" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/css/bootstrap-icons.css') ?>" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('assets/templates/dashmin-1.0.0/css/style.css'); ?>" rel="stylesheet">
    
    <!-- GROCERY CRUD LIBRARY -->
    <?php if (isset($css_files)) : foreach ($css_files as $file) : ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
        <?php endforeach;
    endif; ?>
    <link href="<?php echo base_url('assets/css/grocery_custome.css'); ?>" rel="stylesheet">
    <!-- GROCERY CRUD LIBRARY -->
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url('assets/templates/dashmin-1.0.0/img/user.jpg') ?>" alt="profile" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $this->session->userdata('user')['full_name']; ?></h6>
                        <span><?php echo $this->session->userdata('user')['role']; ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <!-- <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a> -->
                    <a href="<?= site_url('dashboard'); ?>" class="nav-item nav-link <?= set_active('dashboard'); ?>">
                        <i class="fa fa-tachometer-alt me-2"></i>Dashboard
                    </a>

                    <div class="nav-item dropdown <?= set_dropdown_active(['master/user', 'typography', 'element']); ?>">
                        <a href="#" class="nav-link dropdown-toggle <?= set_dropdown_active_header(['master/user', 'typography', 'element']); ?>" data-bs-toggle="dropdown">
                            <i class="fa fa-user-edit me-2"></i>Data Master
                        </a>
                        <div class="dropdown-menu bg-transparent border-0 <?= set_dropdown_active(['master/user', 'typography', 'element'], 'show') ?>">
                            <a href="<?= base_url('master/user'); ?>" class="dropdown-item <?= set_active('master/user'); ?>">Guru</a>
                            <a href="<?= base_url('typography'); ?>" class="dropdown-item">Siswa</a>
                            <a href="<?= base_url('element'); ?>" class="dropdown-item">Kelas</a>
                            <a href="<?= base_url('element'); ?>" class="dropdown-item">Mata Pelajaran</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-chalkboard-teacher me-2"></i>Data Mapping</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Guru -> Mapel</a>
                            <a href="typography.html" class="dropdown-item">Guru -> Kelas</a>
                            <a href="element.html" class="dropdown-item">Siswa -> Kelas</a>
                        </div>
                    </div>
                    <a href="<?php echo base_url('master/user'); ?>" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('assets/templates/dashmin-1.0.0/img/user.jpg') ?>" alt="profile" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('assets/templates/dashmin-1.0.0/img/user.jpg') ?>" alt="profile" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('assets/templates/dashmin-1.0.0/img/user.jpg') ?>" alt="profile" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo base_url('assets/templates/dashmin-1.0.0/img/user.jpg') ?>" alt="profile" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $this->session->userdata('user')['full_name']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="<?php echo base_url('auth/logout'); ?>" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->