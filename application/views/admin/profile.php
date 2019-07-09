<div class="panel-header bg-primary-gradient">
  <div class="page-inner py-5">
    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
      <div>
        <h2 class="text-white pb-2 fw-bold">Profil</h2>
        <h5 class="text-white op-7 mb-2"> <?php echo $this->session->userdata['fullname']; ?></h5>
      </div>

    </div>
  </div>
</div>
<div class="page-inner mt--5">
  <div class="row">
    <div class="col-md-9">
      <div class="card">
        <div class="card-header">
          <div class="card-title">Form Edit Profil</div>
        </div>
        <form  method="post">
        <div class="card-body">
          <div class="row">
            <div class="form-group">
              <label>Nama Pengguna Akun</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Masukan username" aria-label="Username" aria-describedby="basic-addon1" name="username" value="<?php echo $this->session->userdata['username']; ?>">
              </div>
            </div>

            <div class="form-group col-6 col-md-3">
              <label>Kata Sandi Akun</label>
              <input type="password" class="form-control" id="password" placeholder="Masukan password" name="password">
            </div>

            <div class="form-group col-6 col-md-5">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="fullname" value="<?php echo $this->session->userdata['fullname']; ?>">
            </div>

            <div class="form-group col-6 col-md-4">
              <label>Email</label>
              <input type="email" class="form-control" placeholder="Masukan email anda" name="email" value="<?php echo $this->session->userdata['email']; ?>">
            </div>

            <div class="form-group col-6 col-md-4">
              <label>Nomor HP</label>
              <input type="text" class="form-control" placeholder="Masukan nomor HP anda" name="phone_number" value="<?php echo $this->session->userdata['phone_number']; ?>">
            </div>

            <div class="form-group col-6 col-md-4">
              <label>Sebagai</label>
              <input type="text" class="form-control" value="<?php echo $this->session->userdata['role']; ?>" disabled>
            </div>

          </div>
        </div>
        <div class="card-action">
          <button class="btn btn-success" type="submit" name="updateAccount" value="updateAccount">Update Akun</button>
        </div>
      </form>

      </div>
    </div>
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
            <img src="<?php echo base_url('./assets/template/atlantisLite'); ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">

        </div>

      </div>
  </div>
</div>
</div>
