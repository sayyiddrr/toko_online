<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Shop Category</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Shop Category</a>
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
				<div class="top-filter-head">OUR BRANDS</div>
				<div class="common-filter">
					<div class="head">Brands</div>
					<ul class="main-categories">
					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/elektronik') ?>" aria-expanded="false" aria-controls="elektronik">Elektronik</a>
					</li>
						<?php foreach ($brand as $brn) : ?>
							<form action="#">
								<ul>
									<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple"><?php echo $brn->nama_tenant ?><span> (<?php echo $brn->jumlah ?>)</span></label></li>
								</ul>
							</form>
						<?php endforeach; ?>
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
					<?php foreach ($produk as $brg) : ?>
					<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="">
								<div class="product-details">
									<h6><?php echo $brg->nama_produk ?></h6>
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

