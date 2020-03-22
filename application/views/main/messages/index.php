<?php if($this->config->item('enable_emoticons')) : ?> 
<script language="javascript" src="<?php echo $this->config->item('js_path');?>jquery-plugin/jquery.emoticons.min.js"></script>
<?php endif; ?>
<link type="text/css" rel="stylesheet" href="<?php echo $this->config->item('css_path');?>jquery-plugin/jquerycssmenu.css" />
<?php if($this->uri->segment(2)!='conversation' && $this->uri->segment(2)!='search') $this->load->view('js_init/message/js_function'); ?>

<!-- Move To Dialog -->

<div id="movetodialog" title="<?php echo lang('kalkun_select_folder');?>" class="dialog">
<?php 
if($this->uri->segment(2)=='my_folder') $folder = $this->Kalkun_model->get_folders('exclude', $this->uri->segment(4)); 
else $folder = $this->Kalkun_model->get_folders('all');
?>
<?php foreach($folder->result() as $folder):?>
<div class="move_to" id="<?php echo $folder->id_folder;?>"><a href="#"><?php echo $folder->name;?></a></div>
<?php endforeach;?>
<?php //echo form_close();?>
</div>


<div class="card col-12 p-0 m-0">
    <div class="card-header bg-secondary text-white">
      <?php
        if ($this->uri->segment(3) == 'inbox' && $this->uri->segment(4) == '')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-inbox"></i> Inbox</h5>
<?php
        } else if ($this->uri->segment(3) == 'outbox' && $this->uri->segment(4) == '')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-box-open"></i> Outbox</h5>
<?php
        }  else if ($this->uri->segment(3) == 'sentitems' && $this->uri->segment(4) == '')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-paper-plane"></i> Sent Items</h5>
<?php
        } else if ($this->uri->segment(3) == 'inbox' && $this->uri->segment(4) == '6')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-recycle"></i> Spam</h45>
<?php
        } else if (($this->uri->segment(3) == 'inbox' || $this->uri->segment(3) == 'sentitems') && $this->uri->segment(4) == '5')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-trash"></i> Trash
          <?php if($this->uri->segment(3)=='inbox') echo lang('kalkun_inbox'); ?>
          <?php if($this->uri->segment(3)=='sentitems') echo lang('kalkun_sentitems'); ?>
          </h5>
<?php
        } else if (($this->uri->segment(3) == 'inbox'  || $this->uri->segment(3) == 'sentitems') && $this->uri->segment(4) > '6')
        {
?>
          <h5 class="mb-0 pb-0"><i class="fas fa-folder"></i> My Folders

	<?php if($this->uri->segment(4)!='5' && $this->uri->segment(4)!='6'):?>
	  <?php echo $this->Kalkun_model->get_folders('name', $this->uri->segment(4))->row('name');?>
	<sup>[ 
	<a href="#" title="<?php echo lang('kalkun_rename_folder_title');?>" class="text-white small" id="renamefolder"><?php echo lang('kalkun_rename');?></a> - 
			<a href="#" title="<?php echo lang('kalkun_delete_folder_title');?>" class="text-danger small" id="deletefolder"><?php echo lang('kalkun_delete');?></a> ]
			</sup>
			<?php endif; ?>

          </h5>
<?php
        } else if ($this->uri->segment(4) == 'inbox' && $this->uri->segment(3) != 'inbox') {
          ?>
          <h5 class="mb-0 pb-0"><i class="fas fa-inbox"></i> Inbox</h5>
          <?php
        } else if ($this->uri->segment(4) == 'outbox') {
          ?>
          <h5 class="mb-0 pb-0"><i class="fas fa-box-open"></i> Outbox</h5>
          <?php
        } else if ($this->uri->segment(4) == 'sentitems' && $this->uri->segment(3) != 'sentitems') {
          ?>
          <h5 class="mb-0 pb-0"><i class="fas fa-paper-plane"></i> Sent Items</h5>
          <?php
        }

      ?>
      </div>
    <div class="card-body pt-0 mt-0">



<?php $this->load->view("main/messages/navigation",array('place'=>'top')); ?>		

<?php
// my folder view
if($this->uri->segment(2)=='my_folder')
{ ?>

<!-- Rename Folder Dialog -->
<div id="renamefolderdialog" title="<?php echo lang('kalkun_rename_folder');?>" class="dialog">
	<form class="renamefolderform" method="post" action="<?php echo site_url();?>/kalkun/rename_folder">
		<label for="name"><?php echo lang('kalkun_folder_name');?></label>
		<input type="hidden" name="id_folder" value="<?php echo $this->uri->segment(4);?>" />
		<input type="hidden" name="source_url" value="<?php echo $this->uri->uri_string();?>" />
		<input type="text" name="edit_folder_name" id="edit_folder_name" class="text ui-widget-content ui-corner-all" />
	</form>
</div>	
		
<!-- Delete Folder Confirmation -->
<div class="dialog" id="deletefolderdialog" title="<?php echo lang('kalkun_delete_folder_confirmation_header');?>">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
	<?php echo lang('kalkun_delete_folder_confirmation');?></p>
</div>		
<!-- Delete All Confirmation -->
<div class="dialog" id="deletealldialog" title="<?php echo lang('kalkun_delete_all_confirmation_header');?>">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>
	<?php echo lang('kalkun_delete_all_confirmation');?></p>
</div>	

<div id="two_column_container" class="tabbing">
<div id="left_column" class="two_column_medium">
	<?php //echo"<span class=\"folder_name\">".$this->Kalkun_model->get_folders('name', $this->uri->segment(4))->row('name')."</span>";?>
	
    <?php if($this->uri->segment(4)=='6'):?>
 <div class="col-12">
  <ul class="nav justify-content-center">
    <li class="nav-item">     
      <a href="javascript:void(0)" id="delete-all-link" class="text-danger nav-link"><?php echo lang('kalkun_delete_all_message_now');?></a>
    </li>
  </ul>
 </div>
    <?php endif; ?>
    

		</div>
        <?php if( $this->uri->segment(4)!='6'):?>

 <div class="col-12">
  <ul class="nav justify-content-center">
    <li class="nav-item">
     <a href="<?php echo base_url('index.php/messages/my_folder/inbox/'.$this->uri->segment(4)); ?>"class="text-muted nav-link" ><?php echo lang('kalkun_inbox'); ?></a>
    </li>
    <li class="nav-item">
    <a href="<?php echo base_url('index.php/messages/my_folder/sentitems/'.$this->uri->segment(4)); ?>" class="text-muted nav-link"><?php echo lang('kalkun_sentitems'); ?></a>
    </li>      	
    <li class="nav-item">     
      <a href="javascript:void(0)" id="delete-all-link" class="text-danger nav-link"><?php echo lang('kalkun_delete_all_message_now');?></a>
    </li>
  </ul>
 </div>

        <?php endif; ?>
		</div>	
	<?php } ?>

	<div class="col-12" id="message_holder">
	<?php 
	if($this->uri->segment(2)=='conversation' || $this->uri->segment(2)=='search')
	{
		$this->load->view('main/messages/conversation');
		$this->load->view('js_init/message/js_object');
		$this->load->view('js_init/message/js_conversation');
	}
	else 
	{
		$this->load->view('main/messages/message_list');
		$this->load->view('js_init/message/js_object');
	}
	?>
	</div>

	<?php $this->load->view("main/messages/navigation",array('place'=>'bottom')); ?>


    </div>
  </div>
