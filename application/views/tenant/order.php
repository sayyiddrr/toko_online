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
              <th>ORDER ID</th>
              <th>NAMA BARANG</th>
              <th>HARGA</th>
              <th>DISKON</th>
              <th>TANGGAL ORDER</th>
              <th>NAMA PENERIMA</th>
              <th>ALAMAT ORDER</th>
              <th>JUMLAH</th>
              <th>STATUS PENGIRIMAN</th>
              <th>STATUS PEMBAYARAN</th>
          </tr>

          <?php
          $no=1;
          foreach($order as $brg) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $brg->orderID ?></td>
              <td><?php echo $brg->nama_produk ?></td>
              <td>Rp. <?php echo number_format($brg->harga, 0,',','.') ?></td>
              <td><?php echo $brg->diskon ?></td>
              <td><?php echo $brg->tgl_order ?></td>
              <td><?php echo $brg->nama_penerima ?></td>
              <td><?php echo $brg->alamat_penerima ?></td>
              <td><?php echo $brg->kuantitas ?></td>
              
              <td>
                            <select class="country_select" name="status_order" id="status_order">
                                <option value="">Pending</option>
                                <option value="">Shipping</option>
                                <option value="">Complete</option>
                            </select>      
              </td>
          </tr>
          <?php endforeach; ?>
        

      </table>
    </section>
    
</div>