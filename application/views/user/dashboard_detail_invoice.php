<div class="container-fluid">

    <!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from store-html.buildwithangga.id/dashboard-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 02:33:35 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="<?php echo base_url() ?>assets/aset/style/main.css" rel="stylesheet" />

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/aset/css/all.css">
    </head>

    <body>
        <div class="page-dashboard">
            <div class="d-flex" id="wrapper" data-aos="fade-right">
                <!-- Sidebar -->
                <div class="border-right" id="sidebar-wrapper">
                    <div class="sidebar-heading text-center"><br>
                        <i style="color:#f9b234;" class="fas fa-user-alt fa-3x"></i><br><br>
                        <div class="sidebar-brand-text mx-3"><h2><?php echo $this->session->userdata('username') ?></h2></div>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="<?php echo base_url('dashboard/myaccount') ?>" class="list-group-item list-group-item-action">My Account</a>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="<?php echo base_url('dashboard/invoice') ?>" class="list-group-item list-group-item-action active">Invoice</a>
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
                        <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
                            &laquo; Menu
                        </button>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto d-none d-lg-flex">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="indextoko.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php if ($this->session->userdata('username')) { ?>
                                            <i style="color:#f9b234;" class="fas fa-user-alt fa-2x"></i>
                                            &ensp;Selamat Datang
                                        <?php } ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"><?php echo $this->session->userdata('username') ?></a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('dashboard') ?>">Lanjukan Belanja</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="section-content section-dashboard-home" data-aos="fade-up">
                        <div class="container-fluid">
                            <div class="dashboard-heading">
                                <h2 class="dashboard-title">Invoice</h2>
                                <p class="dashboard-subtitle">
                                    Faktur Pesanan Anda Saat Ini
                                </p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                        </div>
                                            <div class="col-md-8">
                                                <b>To : </b>
                                            </div>
                                            <div class="col-md-8">
                                                <b>Alamat : </b>
                                            </div>
                                    </div>
                                    <hr>
                                    <table class="table table-hover table-striped table-light">
                                        <tr>
                                            <th class="text-center align-middle">ID</th>
                                            <th class="text-center align-middle">Nama Barang</th>
                                            <th class="text-center align-middle">Qty</th>
                                            <th class="text-center align-middle">Harga</th>

                                            <th class="text-center align-middle">Sub-Total</th>
                                        </tr>

                                        <?php
                                        $no = 1;
                                        foreach ($this->cart->contents() as $items) : ?>

                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $items['name'] ?></td>
                                                <td><?php echo $items['qty'] ?></td>
                                                <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
                                                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
                                            </tr>

                                        <?php endforeach; ?>
                                        
                                        <tr>
                                            <td colspan="4"></td>
                                            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo base_url() ?>assets/aset/vendor/jquery/jquery.slim.min.js"></script>
        <script src="<?php echo base_url() ?>assets/aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url() ?>assets/aset/../unpkg.com/aos%402.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    </html>
</div>