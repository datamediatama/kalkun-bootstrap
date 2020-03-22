<div class="card p-0 m-0 col-12">

  <div class="card-header bg-secondary text-white">
    <h5 class="mb-0 pb-0"><i class="fas fa-tools"></i> <?php echo lang('tni_settings'); ?></h5>
  </div>

<div class="col-12">
  <ul class="nav justify-content-center">
    <li class="nav-item"><a class="text-muted nav-link" href="<?php echo base_url('index.php/settings/general'); ?>"><?php echo lang('tni_set_general'); ?></a></li>
    <li class="nav-item"><a class="text-muted nav-link" href="<?php echo base_url('index.php/settings/personal'); ?>"><?php echo lang('tni_set_personal'); ?></a></li>
    <li class="nav-item"><a class="text-muted nav-link" href="<?php echo base_url('index.php/settings/password'); ?>"><?php echo lang('tni_user_password'); ?></a></li>
    <li class="nav-item"><a class="text-muted nav-link" href="<?php echo base_url('index.php/settings/filters'); ?>"><?php echo lang('kalkun_filters'); ?></a></li>
  </ul>	


<script type="text/javascript">
$(document).ready(function(){ 	
// Get current page for styling/css	
$("#window_sub_header").find("a[href='"+window.location.href+"']").each(function(){
	$(this).addClass("current");
});	
	
});	
</script>

<div id="window_container" class="pb-2 mb-2">

<!--<li><?php echo anchor('settings/appearance', 'Appearance');?></li>-->

<div id="window_content">
<?php if(!empty($notif)): echo "<div class=\"notif\">".$notif."</div>"; endif;?>
<?php if($type != 'main/settings/filters'):?>
<?php
echo form_open('settings/save', array('id' => 'settingsForm')); 
$this->load->view($type);
?>
<br />
<div align="center"><input type="submit" id="submit" value="<?php echo lang('kalkun_save'); ?>" /></div>
<?php echo form_close();?>

<?php else:?>
<?php $this->load->view($type);?>
<?php endif;?>
</div>
</div> 

</div>