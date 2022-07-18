<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        ORDER
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">ORDER</li>
      </ol>
    </section>

    <section class="content">
      <table class="table table-bordered">
          <tr>
              <th>NOMOR</th>
              <th>NAMA BARANG</th>
              <th>HARGA</th>
              <th>DISKON</th>
              <th>JUMLAH</th>
              <th colspan="3">ACTION</th>
          </tr>

          <?php
          $no=1;
          foreach($order as $brg) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $brg->nama_produk ?></td>
              <td><?php echo $brg->harga ?></td>
              <td><?php echo $brg->diskon ?></td>
              <td><?php echo $brg->kuantitas ?></td>
              <td><?php echo anchor('admin/data_barang/detail/'.$brg->produkID, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div') ?></td>
              <td><?php echo anchor('admin/data_barang/edit/'.$brg->produkID, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
              <td><?php echo anchor('admin/data_barang/hapus/'.$brg->produkID, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
          <?php endforeach; ?>

      </table>
    </section>
    
</div>