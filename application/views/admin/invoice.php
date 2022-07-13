<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoices
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoices</li>
      </ol>
    </section>

    <section class="content">
        <h4> Invoice Pemesanan Produk </h4>

        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Order ID</th>
                <th>Nama Pemesanan</th>
                <th>Nama Penerima</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Pembayaran</th>
                <th>Pengiriman</th>
                <th>Aksi</th>
            </tr>

        <?php foreach($invoice as $inv): ?>
            <tr>
                <td><?php echo $inv->orderID ?></td>
                <td><?php echo $inv->custID ?></td>
                <td><?php echo $inv->nama_penerima ?></td>
                <td><?php echo $inv->alamat_penerima ?></td>
                <td><?php echo $inv->tgl_order ?></td>
                <td><?php echo $inv->metode_pembayaran ?></td>
                <td><?php echo $inv->metode_pengiriman ?></td>
                <td><?php echo anchor('admin/order/detail/'.
                    $inv->orderID, '<div class="btn btn-sm btn-primary">Detail</div>')?></td>
            </tr>

        <?php endforeach; ?>

        </table>
    </section>
</div>