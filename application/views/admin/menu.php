<li class="nav-item <?php if($content['view_name']=='dashboard'){echo 'active';} ?>">
  <a  href="<?php echo base_url('dashboard'); ?>" >
    <i class="fas fa-home"></i>
    <p>Dashboard</p>
  </a>
</li>


<li class="nav-section">
  <span class="sidebar-mini-icon">
    <i class="fa fa-ellipsis-h"></i>
  </span>
  <h4 class="text-section">Konfigurasi</h4>
</li>
<li class="nav-item <?php if($content['view_name']=='account'){echo 'active';} ?>">
  <a  href="<?php echo base_url('account'); ?>" >
    <i class="fas fa-users"></i>
    <p>Akun</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='webConf'){echo 'active';} ?>">
  <a  href="<?php echo base_url('webConf'); ?>" >
    <i class="fas fa-broadcast-tower"></i>
    <p>Konfigurasi Web</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='category'){echo 'active';} ?>">
  <a  href="<?php echo base_url('category'); ?>" >
    <i class="fas fa-boxes"></i>
    <p>Konfigurasi Kategori</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='recapOrder'){echo 'active';} ?>">
  <a  href="<?php echo base_url('recapOrder'); ?>" >
    <i class="fas fa-list"></i>
    <p>Order</p>
  </a>
</li>

<li class="nav-item" hidden>
  <a data-toggle="collapse" href="#base">
    <i class="fas fa-layer-group"></i>
    <p>Order</p>
    <span class="caret"></span>
  </a>
  <div class="collapse" id="base">
    <ul class="nav nav-collapse">
      <li>
        <a href="<?php echo base_url('incomingOrder') ?>">
          <span class="sub-item active">Pesanan Masuk</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('processOrder') ?>">
          <span class="sub-item active">Pesanan Diproses</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url('finishedOrder') ?>">
          <span class="sub-item active">Pesanan Selesai</span>
        </a>
      </li>

    </ul>
  </div>
</li>
