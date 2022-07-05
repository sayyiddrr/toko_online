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
                            <td><h5><?php echo $items['qty'] ?></h5></td>
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
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <a class="gray_btn" href="<?php echo base_url('categories') ?>">Continue Shopping</a>
                                    <a class="primary-btn" href="<?php echo base_url('dashboard/pembayaran') ?>">Proceed to checkout</a>
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