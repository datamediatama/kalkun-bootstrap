<?php
if($this->uri->segment(1)=='phonebook') :
?>
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="<?php echo base_url('index.php/phonebook'); ?>" class="sms_search_form" method="post" accept-charset="utf-8">
<div class="input-group">	
<input type="text" name="search_name"  id="search" value="<?php if (isset($search_string)) echo $search_string;?>" placeholder="Search contact..." aria-label="Search" aria-describedby="basic-addon2" />
<div class="input-group-append">
<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button> <!--
<div style="border-right: 1px solid #289bff; margin-left: 0px; float: left; height: auto; background: transparent;"></div>
          <a id="a_search" href="#" class="btn btn-primary text-white"><small><strong>Advanced</strong></small></a> -->
        </div>
</div>
</form>
<?php
else: 
?>
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="<?php echo base_url('index.php/messages/query'); ?>" class="sms_search_form" method="post" accept-charset="utf-8">
<div class="input-group">	
<input id="search" name="search_sms" class="form-control" type="text" placeholder="Search SMS..." aria-label="Search" aria-describedby="basic-addon2" />
<div class="input-group-append">
<button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button> <!--
<div style="border-right: 1px solid #289bff; margin-left: 0px; float: left; height: auto; background: transparent;"></div>
          <a id="a_search" href="#" class="btn btn-primary text-white"><small><strong>Advanced</strong></small></a> -->
        </div>
</div>
</form>
<?php endif; ?>


<!--
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input id="search" name="search_sms" class="form-control" type="text" placeholder="Search..." aria-label="Search" aria-describedby="basic-addon2" />
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
          <div style="border-right: 1px solid #289bff; margin-left: 0px; float: left; height: auto; background: transparent;"></div>
          <a id="a_search" href="#" class="btn btn-primary text-white"><small><strong>Advanced</strong></small></a>
        </div>
      </div>
    </form>




<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td><input type="text" name="search_name"  id="search" value="<?php if (isset($search_string)) echo $search_string;?>" class="ui-corner-left" /></td> 
<td><input type="submit" value="<?php //echo lang('tni_search_contacts'); ?>" /></td>
</tr>
</table>
<?php //echo form_close();
//else: 
//echo form_open("messages/query", array('class' => 'sms_search_form')); ?>
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td><input type="text" name="search_sms" id="search"  value="<?php if (isset($search_string)) echo $search_string;?>" class="ui-corner-left" /></td> 
<td><input type="submit" value="<?php //echo lang('tni_search_sms');?>" /></td>
<td valign="middle"><div style="margin-left: 5px"><small><a style="text-decoration: underline" id="a_search" href="#"><?php //echo lang('kalkun_advanced_search');?></a></small></div></td>
</tr>
</table>
<?php //echo form_close(); endif; ?>
-->