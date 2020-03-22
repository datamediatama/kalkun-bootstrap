<div class="col-xl-4 col-md-6 mt-2">
  <div class="card bg-danger text-white">
    <div class="card-body"><h6><i class="fas fa-box"></i> <?php echo lang('kalkun_folder');?></h6></div>
    <div class="d-flex align-items-center justify-content-between">
<?php 
  $uid = $this->session->userdata('id_user');
  $inbox = $this->Message_model->get_messages(array('type' => 'inbox', 'uid' => $uid))->num_rows();
  $outbox = $this->Message_model->get_messages(array('type' => 'outbox', 'uid' => $uid))->num_rows();
  $sentitems = $this->Message_model->get_messages(array('type' => 'sentitems', 'uid' => $uid))->num_rows();
  $trash_inbox = $this->Message_model->get_messages(array('type' => 'inbox', 'id_folder' => '5', 'uid' => $uid))->num_rows();
  $trash_sentitems = $this->Message_model->get_messages(array('type' => 'sentitems', 'id_folder' => '5', 'uid' => $uid))->num_rows();
  $trash = $trash_inbox + $trash_sentitems;
?>
      <div class="col-12">
        <table class="table bg-danger text-white small" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="bg-light text-dark">
              <th>Name</th>
              <th>Count(s)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong><?php echo lang('kalkun_inbox');?></strong></td>
              <td><?php echo $inbox;?></td>
            </tr>
            <tr>
              <td><strong><?php echo lang('kalkun_outbox');?></strong></td>
              <td><?php echo $outbox;?></td>
            </tr>
            <tr>
              <td><strong><?php echo lang('kalkun_sentitems');?></strong></td>
              <td><?php echo $sentitems;?></td>
            </tr>                                                                  
            <tr>
              <td><strong><?php echo lang('kalkun_trash');?></strong></td>
              <td><?php echo $trash;?></td>
            </tr>                                                                    
          </tbody>
        </table>
      </div>    
    </div>
  </div>
</div>

<div class="col-xl-4 col-md-6 mt-2">
  <div class="card bg-warning text-white mb-4">
    <div class="card-body"><h6><i class="fas fa-file"></i> <?php echo lang('kalkun_myfolder');?></h6></div>
    <div class="d-flex align-items-center justify-content-between">
      <div class="col-12">
          <table class="table bg-warning text-white small" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="bg-light text-dark">
                <th>Name</th>
                <th>Count(s)</th>
              </tr>
            </thead>
            <tbody>
<?php  
foreach($this->Kalkun_model->get_folders('all')->result() as $val):
$folder_count_inbox = $this->Message_model->get_messages(array('type' => 'inbox', 'id_folder' => $val->id_folder))->num_rows();
$folder_count_sentitems = $this->Message_model->get_messages(array('type' => 'sentitems', 'id_folder' => $val->id_folder))->num_rows();
$folder_count = $folder_count_inbox + $folder_count_sentitems;
?>
              <tr>
                <td><strong><?php echo $val->name; ?></strong></td>
                <td><?php echo $folder_count; ?></td>
              </tr>
<?php
endforeach;	
?>
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-4 col-md-6 mt-2">
  <div class="card bg-success text-white mb-4">
    <div class="card-body"><h6><i class="fas fa-address-book"></i> <?php echo lang('kalkun_phonebook');?></h6></div>
    <div class="d-flex align-items-center justify-content-between">
      <div class="col-12">
        <div class="col-12">
          <table class="table bg-success text-white small" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr class="bg-light text-dark">
                <th>Name</th>
                <th>Count(s)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><strong><?php echo lang('kalkun_contact');?></strong></td>
                <td><?php echo  $this->Phonebook_model->get_phonebook(array('option' => 'all'))->num_rows();?></td>
              </tr>
              <tr>
                <td><strong><?php echo lang('kalkun_group');?></strong></td>
                <td><?php echo  $this->Phonebook_model->get_phonebook(array('option' => 'group'))->num_rows();?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
 



<!-- <?php $this->load->view('js_init/js_dashboard');?>

<base href="<?= $this->config->item('base_url') ?>" /> -->
