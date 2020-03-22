<title><?php echo "SMS"; if(isset($title)): echo " / ".$title; endif;?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 0.13" />
<meta name="robots" content="noindex,nofollow">
<link rel="shortcut icon" href="<?php //echo  $this->config->item('img_path');?>icon.ico" type="image/x-icon" />

<link href="<?php echo base_url('css/styles.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('css/misc.css') ?>" rel="stylesheet" />

<script language="javascript" src="<?php echo $this->config->item('js_path');?>font-awesome_5.11.2_js_all.min.js"/></script>        


<link type="text/css" rel="stylesheet" href="<?php echo $this->config->item('js_path');?>jquery-ui-1.12.1/jquery-ui.min.css" />	


<script language="javascript" src="<?php echo $this->config->item('js_path');?>jquery-3.4.1.min.js"/></script>        

<script language="javascript" src="<?php echo $this->config->item('js_path');?>jquery-ui-1.12.1/jquery-ui.min.js"/></script>

<script language="javascript" src="<?php echo $this->config->item('js_path');?>bootstrap-4.3.1.bundle.min.js"/></script>

<?php
$this->load->view('js_init/js_layout');
//$this->load->view('js_init/js_keyboard');
?>	
