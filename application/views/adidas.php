<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shop Brands</h1>
				<nav class="d-flex align-items-center">
					<a href="">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="">Shop Brands</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<br>
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Browse Categories</div>
				<ul class="main-categories">
					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/elektronik') ?>" aria-expanded="false" aria-controls="elektronik">Elektronik</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/pakaian_pria') ?>" aria-expanded="false" aria-controls="pakaianpria">Fashion Pria</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/pakaian_wanita') ?>" aria-expanded="false" aria-controls="pakaianwanita">Fashion Wanita</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/pakaian_anak_anak') ?>" aria-expanded="false" aria-controls="pakaiananakanak">Fashion Anak</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/peralatan_olahraga') ?>" aria-expanded="false" aria-controls="peralatanolahraga">Sport</a>
					</li>

				</ul>
			</div>
			<div class="sidebar-filter mt-50">
				<div class="top-filter-head">Product Filters</div>
				<div class="common-filter">
					<div class="head">Brands</div>
                    <ul class="main-categories">
						<ul>
                            <li class="main-nav-list">
                            <a href="<?php echo base_url('categories/adidas') ?>" aria-expanded="false" aria-controls="elektronik">Adidas</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/nike') ?>" aria-expanded="false" aria-controls="elektronik">Nike</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/asus') ?>" aria-expanded="false" aria-controls="elektronik">Asus</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/hp') ?>" aria-expanded="false" aria-controls="elektronik">HP</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/rexona') ?>" aria-expanded="false" aria-controls="elektronik">Rexona</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/zara') ?>" aria-expanded="false" aria-controls="elektronik">Zara</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/hm') ?>" aria-expanded="false" aria-controls="elektronik">H&M</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/rebook') ?>" aria-expanded="false" aria-controls="elektronik">Rebook</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/samsung') ?>" aria-expanded="false" aria-controls="elektronik">Samsung</a>
                            </li>
                            <li class="main-nav-list">
                                <a href="<?php echo base_url('categories/apple') ?>" aria-expanded="false" aria-controls="elektronik">Apple</a>
                            </li>
						</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				
			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<?php foreach ($adidas as $brg) : ?>
					<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="">
								<div class="product-details">
									<h6><?php echo $brg->nama_produk ?></h6>
									<h6> Toko <?php echo $brg->nama_tenant ?></h6>
									<div class="price">
										<h6>Rp. <?php echo number_format($brg->harga_produk, 0,',','.') ?></h6>
									</div>
									<div class="stok">
										<h7> Stok <?php echo $brg->stok ?></h7>
									</div>
									<div class="prd-bottom">

										<a href="<?php echo base_url('categories/tambah_ke_keranjang/'.$brg->produkID )?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="<?php echo base_url('dashboard/detail/'.$brg->produkID) ?>" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">detail</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Like</p>
										</a>				
									</div>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</section>
			<!-- End Best Seller -->
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				
			</div>
			<!-- End Filter Bar -->
		</div>
	</div>
</div>

