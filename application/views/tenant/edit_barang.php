<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Product</li>
        <li class="active">Update Product</li>
      </ol>
    </section>

    <section class="content">
        <h3><i class="fa fa-edit"></i> EDIT DATA BARANG</h3>

        <?php foreach($produk as $brg) : ?>
            
            <form method="post" action="<?php echo base_url().'tenant/data_barang/update' ?>">
                <div class="for-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $brg->nama_produk ?>">
                </div>
                <div class="for-group">
                    <label>Deskripsi</label>
                    <input type="hidden" name="produkID" class="form-control" value="<?php echo $brg->produkID ?>">
                    <input type="text" name="deskripsi" class="form-control" value="<?php echo $brg->deskripsi ?>">
                </div>
                <div class="for-group">
                    <label>kategoriID</label>
                    <input type="text" name="kategoriID" class="form-control" value="<?php echo $brg->kategoriID ?>">
                </div>
                <div class="for-group">
                    <label>Harga</label>
                    <input type="text" name="harga_produk" class="form-control" value="<?php echo $brg->harga_produk ?>">
                </div>
                <div class="for-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
                </div>
                <div class="for-group">
                    <label>Diskon</label>
                    <input type="text" name="diskon" class="form-control" value="<?php echo $brg->diskon ?>">
                </div>
                <br>

                <button type="submit" class="btn btn-primary btn-sm mt-3">Save Change</button>
            </form>

        <?php endforeach; ?>
    </section>
    
</div>