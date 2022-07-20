<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Barang
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Product</li>
      </ol>
    </section>

    <section class="content">
      <table class="table table-bordered">
          <tr>
              <th>NOMER</th>
              <th>NAMA PRODUK</th>
              <th>DESKRIPSI</th>
              <th>KATEGORI</th>
              <th>HARGA</th>
              <th>STOK</th>
              <th>DISKON</th>
              <th colspan="2">ACTION</th>
          </tr>

          <?php
          $no=1;
          foreach($produk as $brg) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $brg->nama_produk ?></td>
              <td><?php echo $brg->deskripsi ?></td>
              <td><?php echo $brg->kategoriID ?></td>
              <td>Rp. <?php echo number_format($brg->harga_produk, 0,',','.') ?></td>
              <td><?php echo $brg->stok ?></td>
              <td><?php echo $brg->diskon ?></td>
              <td><?php echo anchor('admin/data_barang/detail/'.$brg->produkID, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div') ?></td>
              <td><?php echo anchor('admin/data_barang/hapus/'.$brg->produkID, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
          <?php endforeach; ?>
      </table>
    </section>
</div>