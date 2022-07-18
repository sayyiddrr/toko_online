<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kategori</li>
      </ol>
    </section>

    <section class="content">
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kategori"><i class="fa fa-plus fa-sm"></i>  Tambah Kategori</button>
      <table class="table table-bordered">
          <tr>
              <th>NOMOR</th>
              <th>KATEGORI ID</th>
              <th>NAMA KATEGORI</th>
          </tr>

          <?php
          $no=1;
          foreach($kategori as $qaz) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $qaz->kategoriID ?></td>
              <td><?php echo $qaz->nama_kategori ?></td>
          </tr>
          <?php endforeach; ?>

      </table>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM INPUT KATEGORI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'admin/data_barang/tambah_kategori';?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama_kategori" class="form-control">
              </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      </div>
    </section>
    
</div>