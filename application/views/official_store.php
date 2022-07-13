<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Our Official Partnership</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="category.html">Official Store</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row">
            <?php foreach($tenant as $tnt):?>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="<?php echo base_url() ?>assets/karma/img/blog/cat-post/cat-post-3.jpg" alt="post">
                        <div class="categories_details">
                            <div class="categories_text">
                                <a href="blog-details.html">
                                    <h5><?php echo $tnt->nama_tenant?></h5>
                                </a>
                                <div class="border_line"></div>
                                <p><?php echo $tnt->deskripsi_tenant?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->