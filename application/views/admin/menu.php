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
<li class="nav-item <?php if($content['view_name']=='webConf'){echo 'active';} ?>">
  <a  href="<?php echo base_url('webConf'); ?>" >
    <i class="fas fa-home"></i>
    <p>Konfigurasi Web</p>
  </a>
</li>

<li class="nav-item">
  <a data-toggle="collapse" href="#base">
    <i class="fas fa-layer-group"></i>
    <p>Base</p>
    <span class="caret"></span>
  </a>
  <div class="collapse" id="base">
    <ul class="nav nav-collapse">
      <li>
        <a href="components/avatars.html">
          <span class="sub-item">Avatars</span>
        </a>
      </li>

    </ul>
  </div>
</li>
