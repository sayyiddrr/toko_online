  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report 
        <small>Sazan Shop</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Report</li>
      </ol>
    </section>

    <section class="content">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
                 Pendapatan Tahunan
            </div>
            <div class="card-body">
                <form class="form-inline">
                    
                    <div class="form-group mb-2 ml=5">
                        <label for="staticEmail2" class="">tahun</label>
                        <select class="form-control" name="tahun" id="">
                            <option value="">pilih tahun</option>
                            <?php $tahun = date('Y');
                            for($i=2017;$i<$tahun+5;$i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                
                            <?php }?>

                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i> Show</button>
                </form>
            </div>
        </div>
        <?php
            if((isset($_GET['tahun']) && $_GET['tahun']!='')){
            
                $tahun = $_GET['tahun'];
            }else{
                $tahun = date('Y');
            }
        ?>
        <div class="alert alert-info">
            menapilkan laporan pendapatan tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">bulan</td>
                <td class="text-center">pendapatan</td>
            </tr>
            <?php foreach($penjualan as $a) : ?>
                <tr>
                    <td><?php echo $a->bulan ?></td>
                    <td><?php echo $a->jumlah ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

    <section class="content">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
                 Pendapatan per produk
            </div>
            <div class="card-body">
                <form class="form-inline">
                    
                    <div class="form-group mb-2 ml=5">
                        <label for="staticEmail2" class="">tahun</label>
                        <select class="form-control" name="tahun" id="">
                            <option value="">pilih tahun</option>
                            <?php $tahun = date('Y');
                            for($i=2017;$i<$tahun+5;$i++) { ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                
                            <?php }?>

                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fa fa-eye"></i> Show</button>
                </form>
            </div>
        </div>
        <?php
            if((isset($_GET['tahun']) && $_GET['tahun']!='')){
            
                $tahun = $_GET['tahun'];
            }else{
                $tahun = date('Y');
            }
        ?>
        <div class="alert alert-info">
            menapilkan laporan pendapatan per produk: <span class="font-weight-bold"><?php echo $tahun ?></span>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">Nama Produk</td>
                <td class="text-center">pendapatan</td>
            </tr>
            <?php foreach($produk as $b) : ?>
                <tr>
                    <td><?php echo $b->nama_produk ?></td>
                    <td><?php echo $b->jumlah ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    
  </div>
  <!-- /.content-wrapper -->

</body>
</html>