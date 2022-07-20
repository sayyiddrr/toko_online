<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pesanan Masuk
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Invoices</li>
        </ol>
    </section>
    <section class="content">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Order Masuk</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Pengiriman</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Selesai</a></li>
                    
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <table class="table">
                            <tr>
                                <th>Order ID</th>
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Nama Penerima</th>
                                <th>Alamat Penerima</th>
                                <th>Ekspedisi</th>
                                <th>Harga Produk</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach($order as $trs):?>
                            <tr>
                                <td><?php echo $trs->orderID?></td>
                                <td><?php echo $trs->tgl_order?></td>
                                <td><?php echo $trs->nama_produk?></td>
                                <td><?php echo $trs->nama_penerima?></td>
                                <td><?php echo $trs->alamat_penerima?></td>
                                <td><?php echo $trs->metode_pengiriman?></td>
                                <td>
                                    Rp. <?php echo number_format($trs->harga_produk, 0,',','.')?><br>
                                    <?php if ($trs->status_order == 'belum'){ ?>
                                        <span class="badge badge-danger">belum bayar</span>
                                    <?php } else { ?>
                                        <span class="badge badge-success">sudah bayar</span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <?php if ($trs->status_order == 'proses'){ ?>
                                    <a href="<?php echo base_url('tenant/order/proses_kirim/'.$trs->orderID) ?>" class="btn btn-sm bts-flat btn-primary">kirim</a>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php   endforeach?>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        <table class="table">
                            <tr>
                                <th>Order ID</th>
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Nama Penerima</th>
                                <th>Alamat Penerima</th>
                                <th>Ekspedisi</th>
                                <th>Harga Produk</th>
                            </tr>
                            <?php foreach($kirim as $trs):?>
                            <tr>
                                <td><?php echo $trs->orderID?></td>
                                <td><?php echo $trs->tgl_order?></td>
                                <td><?php echo $trs->nama_produk?></td>
                                <td><?php echo $trs->nama_penerima?></td>
                                <td><?php echo $trs->alamat_penerima?></td>
                                <td><?php echo $trs->metode_pengiriman?></td>
                                <td>
                                    <?php echo $trs->harga_produk?><br>
                                    <span class="badge badge-danger">selesai</span>
                                    
                                </td>
                            </tr>
                            <?php   endforeach?>
                        </table>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        <table class="table">
                            <tr>
                                <th>Order ID</th>
                                <th>Tanggal</th>
                                <th>Nama Produk</th>
                                <th>Nama Penerima</th>
                                <th>Alamat Penerima</th>
                                <th>Ekspedisi</th>
                                <th>Harga Produk</th>
                            </tr>
                            <?php foreach($selesai as $trs):?>
                            <tr>
                                <td><?php echo $trs->orderID?></td>
                                <td><?php echo $trs->tgl_order?></td>
                                <td><?php echo $trs->nama_produk?></td>
                                <td><?php echo $trs->nama_penerima?></td>
                                <td><?php echo $trs->alamat_penerima?></td>
                                <td><?php echo $trs->metode_pengiriman?></td>
                                <td>
                                    Rp. <?php echo number_format($trs->harga_produk, 0,',','.')?><br>
                                    <span class="badge badge-danger">selesai</span>
                                    
                                </td>
                            </tr>
                            <?php   endforeach?>
                        </table>
                    </div>
                <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
            <!-- /.col -->
    </section>

    
</div>