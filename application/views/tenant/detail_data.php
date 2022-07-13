<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Product</li>
        <li class="active">Detail Product</li>
      </ol>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">Detail Produk</div>
            <div class="card-body">
        
                <?php foreach($produk as $brg):?>
                    <div class="row">
                        <div class="col-md-4">  
                            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="img-thumbnail">
                        </div>
                        <div class="col-md-8">  
                            <table class="table">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><strong><?php echo $brg->nama_produk?></strong></td>
                                </tr>

                                <tr>
                                    <td>Deskripsi</td>
                                    <td><strong><?php echo $brg->deskripsi?></strong></td>
                                </tr>

                                <tr>
                                    <td>Kategori</td>
                                    <td><strong><?php echo $brg->kategoriID?></strong></td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><strong><?php echo $brg->stok?></strong></td>
                                </tr>
                                <tr>
                                    <td>Diskon</td>
                                    <td><strong><?php echo $brg->diskon?>%</strong></td>
                                </tr>

                                <tr>
                                    <td>harga_produk</td>
                                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga_produk,0,',','.')?></div>  </strong></td>
                                </tr>
                                <tr>
                                    <td>Discounted</td>
                                    <td><strong><div class="btn btn-sm btn-primary">Rp. <?php echo number_format($brg->harga_produk-($brg->harga_produk*$brg->diskon/100),0,',','.') ?></div>  </strong></td>
                                </tr>
                                
                            </table>

                            <?php echo anchor('tenant/data_barang/edit/'.$brg->produkID,'<div class="btn btn-sm btn-primary">Edit</div>') ?>

                            <?php echo anchor('tenant/data_barang/','<div class="btn btn-sm btn-success">Back</div>') ?>
                            <?php echo anchor('tenant/data_barang/hapus/','<div class="btn btn-sm btn-danger">Delete</div>') ?>
                        </div>

                    </div>

                <?php   endforeach?>
            </div>
        </div>

    </section>

    
</div>