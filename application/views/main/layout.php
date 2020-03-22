<?php 
$this->load->helper('html');
echo doctype('xhtml1-trans');?>
<html>
<head><?php echo $this->load->view('main/header');?></head>
<body class="sb-nav-fixed">
<?php echo $this->load->view('main/base');?>
<div id="maincontainer">

  <?php echo $this->load->view('main/dock');?>
  <?php //echo $this->load->view('main/search');?>

  <div id="layoutSidenav">

    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <?php echo $this->load->view('main/menu');?>
          </div>
        </div>
        <div class="sb-sidenav-footer">
          <div class="small"><?php $this->load->view('main/notification');?></div>
            <small><strong>Fork by</strong> <a class="text-muted" target="_blank" href="https://www.facebook.com/datamediatama">Data Mediatama</a></small>
        </div>
      </nav>
    </div>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <div class="row mt-4">        
            <?php echo $this->load->view('main/base');?>
            <?php echo $this->load->view($main);?>
          </div>
        </div>
      </main>

      <?php echo $this->load->view('main/footer');?>

    </div>
  </div>
</div>
<div id="compose_sms_container" title="<?php echo lang('tni_compose_sms')?>" class="hidden">&nbsp;</div>		  
</body>
</html>
<!--
<body>
<?php //echo $this->load->view('main/base');?>
<center>
	<div class="loading_container"><span class="loading_area hidden"><?php //echo lang('tni_loading');?>...</span></div>
	<div id="top_navigation"><?php //echo $this->load->view('main/dock');?></div>
	
	<div style="clear: both">&nbsp;</div>
	
	<div id="header">
		<div id="header_left">
			<div id="logo"><a href="#"><img src="<?php //echo $this->config->item('img_path');?>logo.png" /></a></div>
			
		</div>
		<div id="header_right">
			<div id="top_link"><?php //echo $this->load->view('main/search');?></div>
			<div class="clear">&nbsp;</div>
			<div class="notification_container" align="center"><span class="notification_area hidden"><?php //echo lang('tni_loading');?>...</span>
			<?php //if($this->session->flashdata('notif')): ?>
			<span class="notification_area"><?php //echo $this->session->flashdata('notif');?></span>
			<?php //endif; ?>
			</div>
		</div>
	</div>
	
	<div id="container">
		<div id="menu"><?php //echo $this->load->view('main/menu');?></div>
		<div id="content">
			<div id="compose_sms_container"  title="<?php //echo lang('tni_compose_sms')?>" class="hidden">&nbsp;</div>
			<?php //echo $this->load->view($main);?>
		</div>		
	</div>
	<div id="footer"><?php //echo $this->load->view('main/footer');?></div>
</center>
</body>
</html>
-->
