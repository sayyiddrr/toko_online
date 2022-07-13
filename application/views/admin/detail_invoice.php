<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Order Details
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Invoices</li>
        <li class="active">order details</li>
      </ol>
    </section>

    <section class="content">
        <h4>Detail Pesanan <div class="btn btn-sm btn-success">Order ID: <?php echo $invoice->orderID ?></div> </h4>

        <table class="table table-bordered table-hover table-striped">

            <tr>
                <th>PRODUK ID</th>
                <th>HARGA SATUAN</th>
                <th>DISKON</th>
                <th>JUMLAH PESANAN</th>
                <th>SUB-TOTAL</th>
            </tr>


            <?php
            $total = 0;
            foreach ($pesanan as $psn) :
                $subtotal = $psn->kuantitas * ($psn->harga - ($psn->harga * $psn->diskon / 100));
                $total += $subtotal;
            ?>

            <tr>
                <td><?php echo $psn->produkID?></td>
                <td><?php echo number_format($psn->harga,0,',','.') ?></td>
                <td><?php echo $psn->diskon?></td>
                <td><?php echo $psn->kuantitas?></td>
                
                <td><?php echo number_format($subtotal,0,',','.') ?></td>
            </tr>

            <?php endforeach; ?>

            <tr>
                <td colspan="4" align="right">Grand Total</td>
                <td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
            </tr>

        </table>

        <a href="<?php echo base_url('admin/invoice/index')?>"><div class="btn btn-sm btn-primary">kembali</div></a>
    </section>

</div>