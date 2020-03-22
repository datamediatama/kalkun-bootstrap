<?php $this->load->view('js_init/users/js_users');?>
<!-- Delete User Confirmation -->
<div class="dialog" id="confirm_delete_user_dialog" title="<?php echo lang('tni_user_confirm_delete');?>">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
	<?php echo lang('tni_user_delete_body');?></p>
</div>		

<div id="users_container" class="hidden"></div>
	
<div class="card col-12 p-0 m-0">
<div class="card-header bg-secondary text-white">
	<h5 class="col-5 m-0 p-0 float-left"><i class="fas fa-users"></i> <?php echo lang('tni_user_wordp');?></h5>
	<div id="col-7" class="float-right">
	<div class="row">
	<a href="#" id="addpbkcontact" class="addpbkcontact nicebutton btn btn-sm btn-light">&#43; <?php echo lang('tni_user_addp');?></a> &nbsp;
	<?php echo form_open('users', array('class' => 'search_form')); ?>
	<input type="text" name="search_name" size="20" class="search_name" value="" />
	<?php echo form_close(); ?>	
	&nbsp;
    </div>
	</div>
</div>

<div id="window_content">
	<?php $this->load->view("main/users/navigation");?>
	<div id="users_list"><?php $this->load->view('main/users/users_list');?></div>
	<?php $this->load->view("main/users/navigation");?>
</div>
</div>
