<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data User</li>
      </ol>
    </section>

    <section class="content">
      <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user"><i class="fa fa-plus fa-sm"></i>  Tambah User</button>
      <table class="table table-bordered">
          <tr>
              <th>NOMOR</th>
              <th>NAMA PENGGUNA</th>
              <th>E-MAIL</th>
              <th>USERNAME</th>
              <th>PASSWORD</th>
              <th>ROLE-ID</th>
              <th colspan="3">ACTION</th>
          </tr>

          <?php
          $no=1;
          foreach($user as $usr) : ?>

          <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $usr->nama_usr ?></td>
              <td><?php echo $usr->email ?></td>
              <td><?php echo $usr->username ?></td>
              <td><?php echo $usr->password ?></td>
              <td><?php echo $usr->role_id ?></td>
              <td><?php echo anchor('admin/data_user/detail/'.$usr->id_usr, '<div class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></div') ?></td>
              <td><?php echo anchor('admin/data_user/edit/'.$usr->id_usr, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
              <td><?php echo anchor('admin/data_user/hapus/'.$usr->id_usr, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
          </tr>
          <?php endforeach; ?>

      </table>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="tambah_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">FORM INPUT USER</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url().'admin/data_user/tambah_aksi';?>" method="post" enctype="multipart/form-data">
              
              <div class="form-group">
                  <label>Nama Pengguna</label>
                  <input type="text" name="nama_brg" class="form-control">
              </div>
              <div class="form-group">
                  <label>E-Mail</label>
                  <input type="text" name="email" class="form-control">
              </div>
              <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control">
              </div>
              <div class="form-group">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control">
              </div>
              <div class="form-group">
                  <label>Role_Id</label>
                  <select class="form-control" name="role_id">
                  <option>1 For Admin Marketplace</option>
                  <option>2 For Seller</option>
                  <option>3 For Customer</option>
                  </select>
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