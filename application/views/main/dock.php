  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url('index.php'); ?>">SMS</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="small text-white"><?php echo date('l M dS, Y, h:i A');?></div>
    <?php $this->load->view('main/search');?>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="configDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="configDropdown">
<?php $level = $this->session->userdata('level');
if($level=='admin'):?>
          <a class="dropdown-item" href="<?php echo base_url('index.php/users'); ?>"><i class="fas fa-users"></i> Users</a>
          <div class="dropdown-divider"></div>
<?php endif; ?>          
          <a class="dropdown-item" href="<?php echo base_url('index.php/settings/general'); ?>"><i class="fas fa-tools"></i> Settings</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/settings/filters'); ?>"><i class="fas fa-filter"></i> Filters</a>
        </div>        
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <div class="col-12 small"><div class="text-center"><strong><?php echo $this->session->userdata('username');?></strong></div></div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('index.php/settings/personal'); ?>"><i class="fas fa-user"></i> Personal</a>
          <a class="dropdown-item" href="<?php echo base_url('index.php/settings/password'); ?>"><i class="fas fa-key"></i> Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('index.php/logout'); ?>"><i class="fas fa-power-off"></i> Logout</a>
        </div>
      </li>
    </ul>
  </nav>
<!--
<div id="top_navigation_container">
	<div id="top_navigation_left">
		<span class="modem_status">
		<?php //$this->load->view('main/notification');?>		
		</span>	
	</div>
	
	<div id="top_navigation_center">
		<?php //echo date('l M dS, Y, h:i A');?>
	</div>

	<div id="top_navigation_right">
		<?php //echo $this->session->userdata('username');?> | 
		<a href="<?php //echo site_url('settings/general');?>" id="setting"><?php //echo lang('tni_settings'); ?></a> | 
		<a href="<?php //echo site_url('settings/filters');?>" id="filters"><?php //echo lang('kalkun_filters'); ?></a> | 
		<a href="<?php //echo site_url('logout');?>" id="logout"><?php //echo lang('kalkun_logout');?></a>
	</div>
</div>
-->
