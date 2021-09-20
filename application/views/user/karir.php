<div class="content-wrapper">
          <div class="container mb-4">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <h4 class="font-weight-600 mb-4">
                        Form Pendaftaran Jurnalis Fokusnews
                      </h4>
                      <p>Anda dapat bergabung sebagai jurnalis difokusnews dengan mengisi form pendaftaran ini dengan benar.</p>
                      <hr>

                      <?php 

                        $pesan = $this->input->get('pesan');
                        if ($pesan == true) {?>
                          <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>Hello.</strong> Form pendaftaran anda berhasil dikirim, silahkan menunggu konfirmasi selanjutnya, konfirmasi persetujuan akan kami kirim melalui email anda.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                        <?php } ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                    <form method="POST" action="<?= base_url('fokusnews/act_karir') ?>" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Lengkap</label>
                      <input type="text" name="nama" placeholder="Masukan nama lengkap" required="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Alamat</label>
                      <input type="text" name="alamat" placeholder="Masukan alamat lengkap" required="" class="form-control">
                    </div>

                     <div class="form-group">
                      <label for="exampleInputPassword1">Jenis Kelamin</label>
                      <select class="form-control" name="jk">
                        <option>-- Pilih Jenis Kelamin --</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Tempat Lahir</label>
                      <input type="text" name="tempat_lahir" placeholder="Masukan nama lengkap" required="" class="form-control">
                    </div>



                    <div class="form-group">
                      <label for="exampleInputPassword1">Tanggal Lahir</label>
                      <input type="date" name="tgl_lahir" placeholder="Masukan nama lengkap" required="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">No Telp / Wa</label>
                      <input type="number" name="no_telp" placeholder="62xxxxxx" required="" class="form-control" minlength="10" maxlength="13">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="email" name="email" placeholder="Masukan akun email anda" required="" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Foto KTP</label>
                      <input type="file" name="ktp" placeholder="" required="" class="form-control">
                      <small>Masukan gambar ktp anda dengan format jpg dan png.</small>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Pash Foto</label>
                      <input type="file" name="foto" placeholder="" required="" class="form-control">
                      <small>Masukan gambar pash foto anda dengan format jpg dan png.</small>
                    </div>

                     <div class="form-group">
                      <button type="submit" class="btn btn-primary"><i class="fas fa-user"></i> Daftar Jurnalis </button>
                    </div>
                  </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>





  <script src="<?php echo base_url() ?>assets_admin/alert.js"></script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?> 

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>