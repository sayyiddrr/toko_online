  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report Marketplace
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
                        <label for="staticEmail2" class="">Tahun</label>
                        <select class="form-control" name="tahun" id="">
                            <option value="">Pilih Tahun</option>
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
            Menampilkan Laporan Pendapatan Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">Bulan</td>
                <td class="text-center">Pendapatan</td>
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
                Pendapatan Per-Kategori
            </div>
            
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">Kategori</td>
                <td class="text-center">Bulan</td>
                <td class="text-center">Pendapatan</td>
            </tr>
            <?php foreach($kategori as $k) : ?>
                <tr>
                    <td><?php echo $k->nama_kategori ?></td>
                    <td><?php echo $k->bulan ?></td>
                    <td><?php echo $k->jumlah ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
    <section class="content">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
                Pendapatan Per-Tenant
            </div>
            
        <table class="table table-bordered table-striped">
            <tr>
                <td class="text-center">Tenant</td>
                <td class="text-center">Bulan</td>
                <td class="text-center">Pendapatan</td>
            </tr>
            <?php foreach($tenant as $t) : ?>
                <tr>
                    <td><?php echo $t->nama_tenant ?></td>
                    <td><?php echo $t->bulan ?></td>
                    <td><?php echo $t->jumlah ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>
  </div>
  <!-- /.content-wrapper -->

</body>
</html>