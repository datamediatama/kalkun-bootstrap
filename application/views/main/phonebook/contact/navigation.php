<div class="col-12">
<div class="left_column_big">
<?php if(isset($public_contact) && !$public_contact):?>
<ul class="nav justify-content-center">
    <li class="nav-item">	
	  <a href="#" class="select_all nicebutton nav-link text-muted"><?php echo lang('kalkun_select_all');?></a>
	</li>
    <li class="nav-item">	
	  <a href="#" class="clear_all nicebutton nav-link text-muted"><?php echo lang('kalkun_clear_all');?></a>
	</li>
    <li class="nav-item">	
	  <a href="javascript:void(0)" class="delete_contact nicebutton nav-link text-muted"><?php echo lang('kalkun_delete');?></a>
	</li>
    <li class="nav-item">	
	<select name="grp_action" class="grp_action nicebutton mt-2" style="width: 100px;">
	<option value="do"><?php echo lang('kalkun_action');?></option>
	<option value="null">- <?php echo lang('kalkun_add_to_group');?> -</option>
	<?php
	$group = $this->Phonebook_model->get_phonebook(array('option' => 'group'));
	foreach($group->result() as $tmp):
	echo "<option value='{$tmp->ID}'> {$tmp->GroupName} </option>";
	endforeach; 
	?>
	<option value="null">- <?php echo lang('kalkun_delete_from_group');?> -</option>
	<?php
	$group = $this->Phonebook_model->get_phonebook(array('option' => 'group'));
	foreach($group->result() as $tmp):
	echo "<option value='-{$tmp->ID}'> {$tmp->GroupName} </option>";
	endforeach; 
	?>
	</select>
	</li>			
</ul>	
	
		
 	

<?php endif;?>
</div>
<div class="right_column">
	<?php if(empty($_POST));?><div id="simplepaging" class="paging_grey"><?php echo $this->pagination->create_links();?></div>
</div>
</div>