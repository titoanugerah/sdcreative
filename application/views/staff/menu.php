<li class="nav-item <?php if($content['view_name']=='dashboard'){echo 'active';} ?>">
  <a  href="<?php echo base_url('dashboard'); ?>" >
    <i class="fas fa-home"></i>
    <p>Dashboard</p>
  </a>
</li>

<li class="nav-item <?php if($content['view_name']=='listJob'){echo 'active';} ?>">
  <a  href="<?php echo base_url('listJob'); ?>" >
    <i class="fas fa-list"></i>
    <p>Order</p>
  </a>
</li>
