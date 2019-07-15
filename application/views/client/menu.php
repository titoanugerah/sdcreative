<li class="nav-item <?php if($content['view_name']=='dashboard'){echo 'active';} ?>">
  <a  href="<?php echo base_url('dashboard'); ?>" >
    <i class="fas fa-home"></i>
    <p>Dashboard</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='newOrder'){echo 'active';} ?>">
  <a  href="<?php echo base_url('newOrder'); ?>" >
    <i class="fas fa-paper-plane"></i>
    <p>Order Baru</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='orderHistory'){echo 'active';} ?>">
  <a  href="<?php echo base_url('orderHistory'); ?>" >
    <i class="fas fa-calendar-check"></i>
    <p>Riwayat Order</p>
  </a>
</li>
