<?php $this->load->view('js_init/users/js_users');
if($users->num_rows()==0):
	if($_POST) echo "<p><i><?php echo lang('tni_user_not_found'); ?></i></p>";
	else echo "<p><i><?php echo lang('tni_user_search_empty'); ?></i></p>";
else: ?>
<table class="col-12" id="dataTable">
<?php foreach($users->result() as $tmp): ?>
<tr id="<?php echo $tmp->id_user;?>">
<td>
<div class="two_column_container contact_list col-12">
<div class="row">
	<div class="left_column col-8">
	<div id="pbkname" class="col-12">
	<input type="checkbox" class="select_user" />&nbsp;<span style="font-weight: bold;"><?php echo $tmp->realname;?></span>
	<?php if(in_array($tmp->id_user, $this->config->item('inbox_owner_id'))) echo "<sup>( Inbox Master )</sup>"; ?>
	</div>	
</div>
<div class="right_column col-4">
<span class="pbk_menu col-12">
<div class="pr-2 float-right">	
<a class="edit_user simplelink" href="#"><?php echo lang('tni_edit'); ?></a>
</div>
</span>
</div>
</td></tr>
<?php endforeach;?>
</table>
<?php endif; ?>
