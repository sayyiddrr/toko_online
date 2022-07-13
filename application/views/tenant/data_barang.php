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
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus fa-sm"></i>  Tambah Produk</button>
      <table class="table table-bordered">
          <tr>
              <th>NOMER</th>
              <th>NAMA PRODUK</th>
              <th>DESKRIPSI</th>
              <th>KATEGORI</th>
              <th>HARGA</th>
              <th>STOK</th>
              <th>DISKON</th>
              <th colspan="3">ACTION</th>
          </tr>

          <?php
          $no=1;
          foreach($produk as $brg) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $brg->nama_produk ?></td>
              <td><?php echo $brg->deskripsi ?></td>
              <td><?php echo $brg->kategoriID ?></td>
              <td><?php echo $brg->harga_produk ?></td>
              <td><?php echo $brg->stok ?></td>
              <td><?php echo $brg->diskon ?></td>
              <td><?php echo anchor('tenant/data_barang/detail/'.$brg->produkID, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div') ?></td>
              <td><?php echo anchor('tenant/data_barang/edit/'.$brg->produkID, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
              <td><?php echo anchor('tenant/data_barang/hapus/'.$brg->produkID, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
          <?php endforeach; ?>

      </table>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'tenant/data_barang/tambah_aksi';?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nama_produk" class="form-control">
              </div>
              <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="deskripsi" class="form-control">
              </div>
              <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="kategoriID">
                  <option value='1'>Elektronik</option>
                  <option value='2'>Fashion Pria</option>
                  <option value='3'>Fashion Wanita</option>
                  <option value='4'>Fashion Anak Anak</option>
                  <option value='5'>Sport</option>
                  </select>
              </div>
              <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="harga_produk" class="form-control">
              </div>
              <div class="form-group">
                  <label>Stok</label>
                  <input type="text" name="stok" class="form-control">
              </div>
              <div class="form-group">
                  <label>diskon</label>
                  <input type="text" name="diskon" class="form-control">
              </div>
              <div class="form-group">
                  <label>Gambar Produk</label><br>
                  <input type="file" name="gambar" class="form-control">
              </div>
          
          
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