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
        
                <?php foreach($barang as $brg):?>
                    <div class="row">
                        <div class="col-md-4">  
                            <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="img-thumbnail">
                        </div>
                        <div class="col-md-8">  
                            <table class="table">
                                <tr>
                                    <td>Nama Produk</td>
                                    <td><strong><?php echo $brg->nama_brg?></strong></td>
                                </tr>

                                <tr>
                                    <td>Keterangan</td>
                                    <td><strong><?php echo $brg->keterangan?></strong></td>
                                </tr>

                                <tr>
                                    <td>Kategori</td>
                                    <td><strong><?php echo $brg->kategori?></strong></td>
                                </tr>

                                <tr>
                                    <td>Stok</td>
                                    <td><strong><?php echo $brg->stok?></strong></td>
                                </tr>

                                <tr>
                                    <td>Harga</td>
                                    <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.')?></div>  </strong></td>
                                </tr>
                            </table>

                            <?php echo anchor('admin/data_barang/edit/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Edit</div>') ?>

                            <?php echo anchor('admin/data_barang/','<div class="btn btn-sm btn-success">Back</div>') ?>
                            <?php echo anchor('admin/data_barang/hapus/','<div class="btn btn-sm btn-danger">Delete</div>') ?>
                        </div>

                    </div>

                <?php   endforeach?>
            </div>
        </div>

    </section>

    
</div>