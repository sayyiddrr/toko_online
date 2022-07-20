<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Shopping Cart</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Cart</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th></th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    foreach($this->cart->contents() as $items) : ?>
                        <tr>
                            <td><h5><?php echo $no++ ?></h5></td>
                            <td>
                                <div class="media">
                                    <div class="media-body">
                                        <p><h5><?php echo $items['name'] ?></h5></p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp. <?php echo number_format($items['price'], 0,',','.') ?></h5>
                            </td>
                            <td></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <a href="<?=base_url()?>dashboard/kurang_jumlah_produk/<?=$items['rowid']?>" class="btn btn-sm btn-danger ">min
                                    </a>
                                    <span style="margin-left: 10px; margin-right: 10px; "><?=$items['qty'] ?></span>
                                    <a href="<?=base_url()?>dashboard/tambah_jumlah_produk/<?=$items['rowid']?>" class="btn btn-sm btn-success">plus
                                    </a>
                                </div>
                            </td>
                            <td>
                                <h5>Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></h5>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <th></th>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></h5>
                            </td>
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-right">
                                    <a class="genric-btn success" href="<?php echo base_url('categories') ?>">Continue Shopping</a>
                                    <a class="genric-btn danger" href="<?php echo base_url('dashboard/hapus_keranjang') ?>">Clear Cart</a>
                                    <a class="genric-btn primary" href="<?php echo base_url('dashboard/pembayaran') ?>">Proceed to Checkout</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->