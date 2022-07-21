
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>
              <h3></h3>

              <p>Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="order" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><sup style="font-size: 20px"></sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="chart/chart2" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>

              <p>Customer Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="data_user/customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3></h3>

              <p>Tenant Registration</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="data_user/tenant" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>


    <section class="content">
    


<section class="content">
  <div class="row">
    <div class="col-xs-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Best Customer</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        
          <table id="example2" class="table table-bordered table-hover">
          
            <thead>
            <tr>
              <th>CUSTOMER ID</th>
              <th>NAME</th>
              <th>EMAIL</th>
              <th>TOTAL ORDER</th>
            </tr>
            </thead>
            <?php foreach($member as $t):?>
            <tbody>
            <tr>
            <tr>
              <td><?php echo $t->custID?></td>
              <td><?php echo $t->nama?></td>
              <td><?php echo $t->email?></td>
              <td><?php echo $t->jumlah?></td>
            </tr>
            </tbody>
            <?php   endforeach?>
          </table>
        
        </div>
        
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <div class="col-xs-6">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Best Tenant</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        
          <table id="example2" class="table table-bordered table-hover">
          
            <thead>
            <tr>
              <th>TENANT ID</th>
              <th>BRAND</th>
              <th>EMAIL</th>
              <th>PRODUCT SOLD</th>
            </tr>
            </thead>
            <?php foreach($tenant as $t):?>
            <tbody>
            <tr>
            <tr>
              <td><?php echo $t->tenantID?></td>
              <td><?php echo $t->nama_tenant?></td>
              <td><?php echo $t->email?></td>
              <td><?php echo $t->jumlah?></td>
            </tr>
            </tbody>
            <?php   endforeach?>
          </table>
        
        </div>
        
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
</body>
</html>