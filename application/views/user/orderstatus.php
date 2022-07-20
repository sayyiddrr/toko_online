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
                        <a href="<?php echo base_url('dashboard/myaccount') ?>" class="list-group-item list-group-item-action active">My Account</a>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="<?php echo base_url('transaksi') ?>" class="list-group-item list-group-item-action active">My Order</a>
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
                                            &ensp;Customer
                                        <?php } ?>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"><?php echo $this->session->userdata('username') ?></a>
                                    <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url('categories') ?>">Lanjukan Belanja</a>
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
                                <h2 class="dashboard-title">My Account</h2>
                                <p class="dashboard-subtitle">
                                    Order Tracking
                                </p>
                            </div>
                            <div class="col-sm-12">
                                <div class="card card-primary card-outline card-outline-tabs">
                                    <div class="card-header p-0 border-bottom-0">
                                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Packed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Shipped</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Confirmation</a>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <table class="table">
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Tanggal</th>
                                                    <th>Ekspedisi</th>
                                                    <th>Total</th>
                                                    <th>Action</th>
                                                </tr>
                                                <?php foreach($transaksi as $trs):?>
                                                <tr>
                                                    <td><?php echo $trs->orderID?></td>
                                                    <td><?php echo $trs->tgl_order?></td>
                                                    <td><?php echo $trs->metode_pengiriman?></td>
                                                    <td>
                                                        <?php echo $trs->subtotal?><br>
                                                        <?php if ($trs->status_bayar = 'belum'){ ?>
                                                            <span class="badge badge-danger">belum bayar</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-success">sudah bayar</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <?php if ($trs->status_bayar = 'belum'){ ?>
                                                        <a href="<?php echo base_url('transaksi/bayar/'.$trs->orderID) ?>" class="btn btn-sm bts-flat btn-primary">bayar</a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php   endforeach?>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                                            Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                                            Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                                        </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
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

    <!-- Mirrored from store-html.buildwithangga.id/dashboard-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 02:33:35 GMT -->

    </html>

</div>