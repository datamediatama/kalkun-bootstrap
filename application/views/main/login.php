<?php 
$this->load->helper('html');
echo doctype('xhtml1-trans');?>
<html>
<head>
<title>SMS / Login</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 0.13" />
<meta name="robots" content="noindex,nofollow">

<link href="<?php echo base_url('css/styles.css') ?>" rel="stylesheet" />
<link href="<?php echo base_url('css/misc.css') ?>" rel="stylesheet" />

<script language="javascript" src="<?php echo $this->config->item('js_path');?>font-awesome_5.11.2_js_all.min.js"/></script>
<script language="javascript" src="<?php echo $this->config->item('js_path');?>jquery-3.4.1.min.js"/></script>
<script language="javascript" src="<?php echo $this->config->item('js_path');?>bootstrap-4.3.1.bundle.min.js"/></script>


<script language="javascript">
$(document).ready(function(){
$("#username").focus();
});
</script>
</head>

<body class="bg-light">


<center>
<div class="login_loading_container">&nbsp;
<?php if($this->session->flashdata('errorlogin')): ?>
<span class="loading_area"><?php echo $this->session->flashdata('errorlogin');?></span>
<?php endif; ?>
</div>

<div class="col-12">
  <h5 class="text-center m-3 text-muted"><strong>SMS</strong></h5>
</div>
<div id="login_container">
<?php echo form_open('login'); ?>
<table id="login" cellpadding="3" cellspacing="2" border="0"  class="rounded">
<tr><td><i>Please enter your username and password</i></td></tr>
<tr><td><label>Username</label><input type="text" name="username" id="username" style="width:95%" /></td></tr>
<tr><td><label>Password</label><input type="password" name="password" style="width:95%" /></td></tr>
<tr><td><div style="float: left">
<input type="checkbox" id="remember_me" name="remember_me" /><label for="remember_me">Remember me</label></div>
<div align="center" style="float: right; padding-right: 3px"><input type="submit" id="submit" value="Login" /></div></td></tr>
<tr><td align="center"><a class="text-muted small" href="<?php echo site_url('login/forgot_password');?>">Forgot your password?</a></td></tr>
</table>
<?php echo form_close();?>
</div>

</center>

      <footer class="py-4 bg-dark text-white mt-5 mb-auto">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">SMS &copy; <?php echo date('Y'); ?></div>
            <div>
              <small><strong>Powered by</strong> Gammu &middot; Kalkun &middot; CodeIgniter &middot; Bootstrap &middot; PHP7 &middot; MySQL</small>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>
