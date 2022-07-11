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
						<a href="<?php echo base_url('categories/pakaian_pria') ?>" aria-expanded="false" aria-controls="pakaianpria">Pakaian Pria</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/pakaian_wanita') ?>" aria-expanded="false" aria-controls="pakaianwanita">Pakaian Wanita</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/pakaian_anak_anak') ?>" aria-expanded="false" aria-controls="pakaiananakanak">Pakaian Anak-Anak</a>
					</li>

					<li class="main-nav-list">
						<a href="<?php echo base_url('categories/peralatan_olahraga') ?>" aria-expanded="false" aria-controls="peralatanolahraga">Peralatan Olahraga</a>
					</li>

				</ul>
			</div>
			<div class="sidebar-filter mt-50">
				<div class="top-filter-head">Product Filters</div>
				<div class="common-filter">
					<div class="head">Brands</div>
					<form action="#">
						<ul>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
							<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
						</ul>
					</form>
				</div>
				<div class="common-filter">
					<div class="head">Price</div>
					<div class="price-range-area">
						<div id="price-range"></div>
						<div class="value-wrapper d-flex">
							<div class="price">Price:</div>
							<span>$</span>
							<div id="lower-value"></div>
							<div class="to">to</div>
							<span>$</span>
							<div id="upper-value"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center">
				<div class="sorting">
					<select>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
						<option value="1">Default sorting</option>
					</select>
				</div>
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">
					<?php foreach ($pakaian_wanita as $brg) : ?>
					<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="">
								<div class="product-details">
									<h6><?php echo $brg->nama_brg ?></h6>
									<div class="price">
										<h6>Rp. <?php echo number_format($brg->harga, 0,',','.') ?></h6>
									</div>
									<div class="prd-bottom">

										<a href="<?php echo base_url('categories/tambah_ke_keranjang/'.$brg->id_brg )?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
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
				<div class="sorting mr-auto">
					<select>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
						<option value="1">Show 12</option>
					</select>
				</div>
				<div class="pagination">
					<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
					<a href="#" class="active">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
					<a href="#">6</a>
					<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</div>
			</div>
			<!-- End Filter Bar -->
		</div>
	</div>
</div>

