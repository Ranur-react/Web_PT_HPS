<?php $pesan = $this->session->flashdata('pesan');
if (!empty($pesan)) {
  echo $pesan;
}
?>

<div class="col-lg-12">
  <div class="panel panel-default">
    <div class="panel-heading">
      Tabel Administrator
      <a href="#widget1" data-toggle="collapse"><span class="fa fa-chevron-down" style="float: right"></span>
      </a>
    </div>

    <div id="widget1" class="panel-body collapse in">

      <div class="table-header">


        <button onclick="return pilih();" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data </button>
      </div>
      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
          <tr>
            <th class="center" width="20">No</th>
            <th class="center" width="60">image</th>
            <th class="center" width="79" rowspan="">Username</th>
            <th class="center" width="80" rowspan="">Nama</th>
            <th class="center" width="80" rowspan="">Email</th>

            <th class="center" width="50" rowspan="">Level</th>
            <!--<th class="center" width="50" rowspan="2">Status</th>-->

            <th width="70" height="" class="center" rowspan="">Aksi </th>
          </tr>
          <thead>










          <tbody>
            <tr>
              <?php
              $nomor = 0;
              foreach ($user->result_array() as $a) {
                $nomor++;
                $id = $a['id'];
                $image = $a['image'];
                $pass = $a['pass'];
                $level = $a['level'];
                $nama = $a['nama'];
                $username = $a['username'];


              ?>
                <td>
                  <center><?php echo $nomor; ?></center>
                </td>


                <td class="text-center"><a href="javascript:void(0)" onclick="foto('<?php echo $a['id'] ?>')"><img width="100" height="70" src="<?php echo base_url(); ?>images/<?php echo $a['image'] ?>" class="img-thumbnail" alt="Foto"></a>
                  <b>
                    <p class="btn btn-default"> <a href="javascript:void(0)" onclick="foto('<?php echo $a['id'] ?>')">>Klik jika daganti
                        <</p> <a />
                </td>
                <td><?php echo $a['username']; ?></b></td>
                <td><?php echo $a['nama']; ?></td>
                <td><?php echo $a['email']; ?></td>

                <td>
                  <?php
                  if ($a['level'] == '1') {
                    echo "Administrator";
                  } elseif ($a['level'] == '2') {
                    echo "Pimpinan";
                  } 

                  ?>
                </td>






                <td class="center">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <center>
                      <a class="btn btn-xs btn-success" href="<?php echo site_url('user/reset/' . $a['id']) ?>"><i class="ace-icon glyphicon glyphicon-refresh"></i></a>
                      <a class="btn btn-xs btn-info" href="#modalEditPelanggan<?php echo $id ?>" data-toggle="modal" title="Edit" class="edit-link"><span class="fa fa-edit"></span></a>
                      <a class="btn btn-xs btn-danger delete-link" href="<?php echo site_url('user/hapus/' . $a['id']) ?>"><span class="glyphicon glyphicon-trash"></span></a>
                    </center>
                  </div>
    </div>
    </td>
    </tr>
  <?php } ?>
  </tbody>
  </table>

  <script>
    function pilih() {
      $('#mymodal').modal('show');
    }

    function hapus(id) {
      $('#modalid').val(id);
      $('#myhapus').modal('show');

    }

    function foto(id) {
      $('#idfoto').val(id);
      $('#foto').modal('show');
    }

    function edit(id, username, nama, pass, image, email, level) {
      $('#modalid').val(id);
      $('#modalusername').val(username);
      $('#modalnama').val(nama);
      $('#modalpass').val(pass);
      $('#modalimage').val(image);
      $('#modalemail').val(email);
      $('#modallevel').val(level);
      $('#myedit').modal('show');
    }
  </script>
  <!-- ============ MODAL HAPUS =============== -->




  <div class="modal fade bs-example-modal-sm" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Tambah Data Pengguna</h4>
        </div>
        <form method="POST" action="<?php echo site_url('user/simpan'); ?>" name="fhasil" id="fhasil" enctype="multipart/form-data">
          <div class="modal-body">
            
            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Nama Lengkap </label>
              <div class="col-sm-6">
                <input type="text" id="form-field-1" class="form-control" name="nama" class="col-xs-10 col-sm-10" />
              </div>

            </div> <br>
<!-- 
            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Alamat </label>
              <div class="col-sm-6">
                <input type="text" id="form-field-1" class="form-control" name="alamat" class="col-xs-10 col-sm-10" />
              </div>

            </div> <br> -->


            <!-- <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Jenis Kelamin </label>
              <div class="col-sm-6">
              <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='1' class='ace' checked/>
                          <span class='lbl'> Laki-Laki</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='2' />
                          <span class='lbl'> Perempuan</span>
                        </label>
                     
                        
              </div>

            </div> <br> -->


            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> email </label>
              <div class="col-sm-6">
                <input type="text" id="form-field-1" class="form-control" name="email" class="col-xs-10 col-sm-12" />
              </div>
            </div>


            <br>
            <hr class="ui-widget-content" style="margin:1px">

            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Username </label>
              <div class="col-sm-6">
                <input type="text" id="form-field-1" class="form-control" name="username" class="col-xs-10 col-sm-12" />
              </div>
            </div>


            <br>

            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Password </label>
              <div class="col-sm-6">
                <input type="text" id="form-field-1" class="form-control" name="pass" class="col-xs-10 col-sm-12" />
              </div>
            </div>


            <br>

            <hr class="ui-widget-content" style="margin:1px">

            <div class="form-group">
              <label class="col-sm-2 control-label no-padding-right" class="form-control" for="form-field-1"> Level </label>
              <div class="col-sm-6">
                <select name="level" widht="50" class="form-control" data-placeholder="Pilih...">
                  <option selected="selected">-Pilih-</option>
                  <option value="1">Administrator</option>
                  <option value="2">Pimpinan</option>

                </select>
              </div>
            </div>
            <br>

            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
              <input type="hidden" id="form-field-1" class="form-control" name="useraktif" value="1" class="col-xs-10 col-sm-12" />

              <label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Foto </label>
              <div class="col-sm-6">
                <input type="file" name="image" class="form-control" id="id-input-file-2" />
              </div>
            </div>

            <br>
            <div class="modal-footer">
              <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
              <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- ============ MODAL EDIT =============== -->
  <?php
  foreach ($user->result_array() as $a) {
    $nama = $a['nama'];
    $level = $a['level'];
    $id = $a['id'];
    $email = $a['email'];
    $pass = $a['pass'];
    $username = $a['username'];
    $image = $a['image'];


  ?>

    <div id="modalEditPelanggan<?php echo $id ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="myModalLabel">Edit Admin</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/user/update' ?>">
            <div class="modal-body">
              <input name="id" type="hidden" value="<?php echo $id; ?>">

              <div class="form-group">
                <label class="control-label col-xs-3">nama</label>
                <div class="col-xs-9">
                  <div class="form-line">
                    <input name="nama" class="form-control" type="text" placeholder="" value="<?php echo $nama; ?>" required>
                  </div>
                </div>
              </div>

              <!-- <div class="form-group">
                <label class="control-label col-xs-3">Alamat</label>
                <div class="col-xs-9">
                  <div class="form-line">
                     <input name="alamat" class="form-control" type="text" placeholder="" value="<?php echo $alamat; ?>" required> 
                  </div>
                </div>
              </div> -->

              <!-- <div class="form-group">
                <label class="control-label col-xs-3">Jenis Kelamin</label>
                <div class="col-xs-9">
                  <div class="form-line">
                   <?php
                    if ($a['jenis_kelamin'] == '1') {
                      echo "
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='1' class='ace' checked/>
                          <span class='lbl'> Admin</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='2' />
                          <span class='lbl'> Pimpinan</span>
                        </label>
                        ";
                    } elseif ($a['jenis_kelamin'] == '2') {
                      echo "
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' value='1' class='ace' />
                          <span class='lbl'> Admin</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='jenis_kelamin' id='modallevel' class='ace' value='2' checked/>
                          <span class='lbl'> Pimpinan</span>
                        </label>
                        ";
                    }


                    ?> 

                  </div>
                </div>
              </div> -->

              <div class="form-group">
                <label class="control-label col-xs-3">email</label>
                <div class="col-xs-9">
                  <div class="form-line">
                    <input name="email" class="form-control" type="text" placeholder="" value="<?php echo $email; ?>" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-xs-3">username</label>
                <div class="col-xs-9">
                  <div class="form-line">
                    <input name="username" class="form-control" type="text" placeholder="" value="<?php echo $username; ?>" required>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-xs-3">level</label>
                <div class="col-xs-9">
                  <div class="form-line">
                    <?php
                    if ($a['level'] == '1') {
                      echo "
                        <label>
                          <input type='radio' name='level' id='modallevel' value='1' class='ace' checked/>
                          <span class='lbl'> Admin</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='level' id='modallevel' class='ace' value='2' />
                          <span class='lbl'> Pimpinan</span>
                        </label>
                        ";
                    } elseif ($a['level'] == '2') {
                      echo "
                        <label>
                          <input type='radio' name='level' id='modallevel' value='1' class='ace' />
                          <span class='lbl'> Admin</span>
                        </label>&nbsp;
                        <label>
                          <input type='radio' name='level' id='modallevel' class='ace' value='2' checked/>
                          <span class='lbl'> Pimpinan</span>
                        </label>
                        ";
                    }


                    ?>

                  </div>
                </div>
              </div>

            </div>
            <!--<br>
            <hr class="ui-widget-content" style="margin:1px">
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" class="form-control" for="form-field-1"> Level </label>
                <div class="col-sm-6">
                    <select name="useraktif" widht="50" class="form-control" data-placeholder="Pilih...">
                      <option selected="selected">-Pilih-</option>
                       <option value="1" <?php if ($this->session->userdata('useraktif') == '1') {
                                            echo "selected";
                                          } ?>>Aktif</option>
                        <option value="2" <?php if ($this->session->userdata('useraktif') == '2') {
                                            echo "selected";
                                          } ?>>Tidak Aktif</option>
                                  
                     </select>

                       
                </div>
            </div><br> -->



            <!-- <div class="form-group">
                        <label class="control-label col-xs-3" >Gambar</label>
                        <div class="col-xs-9"><div class="form-line">
                            <input name="image" class="form-control" type="hidden" placeholder="Nama kontribusi..." value="<?php echo $image; ?>"  required>
                        
                         <?php if ($image == null) {
                            echo '<p>Tidak ada Foto</p>';
                          } else { ?>
                                   <img src="<?php echo base_url(); ?>images/<?php echo $a['image'] ?>"data-rel="colorbox" class="img-responsive" width="100">
                                <?php } ?>
                                <label for="image-upload" id="image-label">Choose File</label>
           

                                <input type="file" name="image" class="form-control"  id="id-input-file-2" />
                
   
                        </div></div>
                    </div>
                </div> -->


            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button type="submit" class="btn btn-info">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php
  }
  ?>



  <?php
  foreach ($user->result_array() as $a) {
    $id = $a['id'];
  ?>
    <div id="myhapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="myModalLabel">Hapus Admin</h3>
          </div>
          <form class="form-horizontal" method="post" action="<?php echo base_url() . 'index.php/user/hapus' ?>">
            <div class="modal-body">
              <p>Apakah anda yakin akan menghapus data ini ?</p>
              <input name="id" id="modalid" type="hidden" value="<?php echo $id; ?>">
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php
  }
  ?>

  <div class="row">
    <div id="foto" class="modal fade">
      <div class="modal-dialog">
        <form action="<?php echo site_url('user/foto'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h6 class="modal-title"><strong>Update Foto Akun</strong></h6>
            </div>
            <input type="hidden" name="id" id="idfoto">
            <div class="modal-body">
              <div class="form-group">
                <label class='col-md-3'>Foto</label>
                <div class='col-md-9'>
                  <input type="file" class="file-styled-primary" name="image">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Ganti Foto <i class="glyphicon glyphicon-picture"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>