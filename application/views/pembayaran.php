<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Checkout</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="single-product.html">Checkout</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!--================Checkout Area =================-->
<section class="checkout_area section_gap">
    <div class="container">
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Shipping Address</h3>
                    <?php echo $this->session->flashdata('pesan') ?>
                    <form class="row contact_form" action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="post" novalidate="novalidate">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Penerima">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Penerima">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Telepon">
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <div class="creat_account">
                                <h3>Metode Pengiriman</h3>
                            </div>
                            <select class="country_select" name="metode_pengiriman" id="metode_pengiriman">
                                <option value="JNE">JNE</option>
                                <option value="JNT">JNT</option>
                                <option value="POS">POS</option>
                                <option value="TIKI">TIKI</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <div class="creat_account">
                                <h3>Metode Pembayaran</h3>
                                <p>Harap membayar dengan cara transfer sesuai dengan TOTAL Harga sebesar Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></p> 
                            </div>
                            <select class="country_select" name="metode_pembayaran" id="metode_pembayaran">
                                <option value="BCA">BCA 12855567 an PT.Sazan</option>
                                <option value="BNI">BNI 54715556 an PT.Sazan</option>
                                <option value="BRI">BRI 57887455 an PT.Sazan</option>
                                <option value="MANDIRI">Mandiri 1287566 an PT.Sazan</option>
                                <option value="SazanPay">SazanPay 785444 </option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <h3>Have a Coupon?</h3>
                            <input type="text" class="form-control" placeholder="Enter coupon code"><br>
                            <a class="tp_btn" href="#">Apply Coupon</a>
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div>
                        <div class="creat_account">
                            <h5>Upload Bukti Transfer  </h5>
                        </div>
                        <div>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-sm primary-btn col-md-12">Proceed to Payment</button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li><a>Product <span>Total</span></a></li>
                            <?php foreach($this->cart->contents() as $items) : ?>
                            <li><a><?php echo $items['name'] ?><span class="middle">x<?php echo $items['qty'] ?></span> <span class="last">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></span></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></span></a></li>
                            <li><a href="#">Shipping <span>Free</span></a></li>
                            <li><a href="#">Total <span>Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></span></a></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Check payments</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                Store Postcode.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Checkout Area =================-->
