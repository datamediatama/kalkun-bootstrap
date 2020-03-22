<?php
if($group->num_rows()==0):
echo "<p><i>".lang('tni_group_no_group')."</i></p>";
else: ?>
<table class="col-12" id="dataTable">
<?php foreach($group->result() as $tmp): ?>
<tr id="<?php echo $tmp->ID;?>" public="<?php echo $tmp->is_public;?>">
<td>
<div class="two_column_container contact_list col-12">
	<div class="row">
	<div class="left_column col-10">
	<div id="pbkname" class="col-12">
	<input type="checkbox" class="select_group" />
	<span class="groupname" style="font-weight: bold;"><?php echo anchor('phonebook/group_contacts/'.$tmp->ID,$tmp->GroupName  , 'title="'.$tmp->GroupName .'"');?></span>
	</div>
</div>
<div class="right_column col-2">
<span class="" class="col-12">
<?php if(isset($public_group) && !$public_group):?>
<a class="editpbkgroup simplelink" href="#"><?php echo lang('tni_edit');?></a>
<img src="<?php echo $this->config->item('img_path')?>circle.gif" />
<?php endif;?>	
<a class="sendmessage simplelink" href="#"><?php echo lang('tni_send_message');?></a>
	    </div>
		</span>
	</div>
  </div>
</div>	
</td></tr>
<?php endforeach;?>
</table>
<?php endif; ?>
