
                            <a class="nav-link" href="<?php echo base_url('index.php'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard</a
                            >
                            <div class="col-12">
                              <a class="btn btn-primary btn-sm btn-block" href="#" id="compose_sms_normal"><i class="fas fa-envelope"></i> <?php echo lang('kalkun_compose');?></a>
                            </div>
                            <div class="sb-sidenav-menu-heading">Folders</div>
                            <a class="nav-link" href="<?php echo base_url('index.php/messages/folder/inbox'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-inbox"></i></div>
                                Inbox</a
                            >
                            <a class="nav-link" href="<?php echo base_url('index.php/messages/folder/outbox'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-box-open"></i></div>
                                Outbox</a
                            >
                            <a class="nav-link" href="<?php echo base_url('index.php/messages/folder/sentitems'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></div>
                                Sent Items</a
                            >
                            <a class="nav-link" href="<?php echo base_url('index.php/messages/my_folder/inbox/6'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-recycle"></i></div>
                                Spam</a
                            >                            
                            <a class="nav-link" href="<?php echo base_url('index.php/messages/my_folder/inbox/5'); ?>"
                                ><div class="sb-nav-link-icon"><i class="fas fa-trash"></i></div>
                                Trash</a
                            >
                            <div class="sb-sidenav-menu-heading">Others</div>
                            <script>
                              $(function() {
                                $("#accordion").accordion({
                                  collapsible: true,
                                  icons: false,
                                  active: false 
                                });
                              });
                              $('#accordion').collapse("toggle");
                            </script>                            
                            <div id="accordion">
                              <a class="nav-link collapsed">
                                <div class="sb-nav-link-icon"><i class="fas fa-folder"></i></div>
                                <?php echo lang('kalkun_myfolder');?>
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                              </a>

                              <div class="collapse small">
                                <nav class="">
                                <a id="addfolder" href="#" class="text-white btn btn-none btn-sm pl-1 pr-1" href="#" title="Add a new folder"><small><i class="fas fa-plus-circle"></i> <?php echo lang('kalkun_add'); ?> a new folder</small></a>
                                  <?php foreach($this->Kalkun_model->get_folders('all')->result() as $folder):?>
                                  <div class="sb-nav-link-icon"><i class="fas fa-folder"></i>
                                    <a class="" href="<?php echo base_url('index.php/messages/my_folder/inbox/'.$folder->id_folder); ?>">
	                                    <?php echo $folder->name ?>
                                        <?php 
	                                    $tmp_unread = $this->Message_model->get_messages(array('readed' => FALSE, 'id_folder' => $folder->id_folder))->num_rows();
	                                    if($tmp_unread > 0) echo " (".$tmp_unread.")";
	                                    ?>	                                  
	                                </a>
	                              </div>
	                              <?php endforeach;?>
                                </nav>
                              </div>
                            </div>
                            <a class="nav-link" href="<?php echo base_url('index.php/phonebook'); ?>"><div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div>Phonebook</a>
                            <!--
<?php
/* 
$level = $this->session->userdata('level');
if($level=='admin'):?>
	<li><?php echo anchor('users',lang('tni_user_wordp')); ?></li>
	<?php if($this->config->item('sms_content')): ?> 
	<li id="bottom"><?php echo anchor('member','Member'); ?></li>
	<?php endif; ?>
    <li><?php echo anchor('pluginss', 'Plugins'); ?></li>
<?php endif; */ ?>
                            -->