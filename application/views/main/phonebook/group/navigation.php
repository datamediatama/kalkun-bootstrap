<div class="col-12">
<div class="left_column">
<?php if(isset($public_group) && !$public_group):?>	
<ul class="nav justify-content-center">
    <li class="nav-item">	
	  <a href="#" class="select_all nicebutton nav-link text-muted"><?php echo lang('kalkun_select_all');?></a>
	</li>
    <li class="nav-item">	
	  <a href="#" class="clear_all nicebutton nav-link text-muted"><?php echo lang('kalkun_clear_all');?></a>
	</li>
    <li class="nav-item">	
	  <a href="#" class="delete_contact nicebutton nav-link text-muted"><?php echo lang('kalkun_delete');?></a>
	</li>		
</ul>	
<?php endif;?>			
</div>
<div class="right_column">
	<?php if(empty($_POST));?><div id="simplepaging" class="paging_grey"><?php echo $this->pagination->create_links();?></div>
</div>
</div>