<!-- <div class="form-box" id="login-box"> -->

        <div class="header">
          <h1>
            <?php echo lang('edit_user_heading');?>
          </h1>
        </div>

        <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open(uri_string());?>
        <div>
          
               <div class="form-group">
                    <label><?php echo lang('edit_user_fname_label', 'first_name');?></label> <br />
                    <div class="input-group">
                      <div class="input-group-addon">
                          <i class="fa fa-user"></i>
                      </div>
                      <?php echo form_input($first_name);?>
                    </div><!-- /.input group -->
              </div>
                  <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/> -->

              <div class="form-group">
                    <label><?php echo lang('edit_user_lname_label', 'last_name');?> </label><br />
                      <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <?php echo form_input($last_name);?>
                        
                      </div><!-- /.input group -->

              </div>

              <div class="form-group">
                    <label><?php echo lang('edit_user_company_label', 'company');?> </label><br />
                      <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-suitcase"></i>
                        </div>
                        <?php echo form_input($company);?>
                        
                      </div><!-- /.input group -->

              </div>

              <div class="form-group">
                    <label><?php echo lang('edit_user_phone_label', 'phone');?> </label><br />
                      <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <?//php echo form_input($phone);?>
                        <input type="<?=$phone['type']?>" name="<?= $phone['name']?>" class="<?= $phone['class']?>" value="<?=$phone['value']?>" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                      </div><!-- /.input group -->

              </div>

              <div class="form-group">
                    <label><?php echo lang('edit_user_password_label', 'password');?> </label><br />
                      <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </div>
                        <?php echo form_input($password);?>
                        
                      </div><!-- /.input group -->

              </div>

              <div class="form-group">
                    <label><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label><br />
                      <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </div>
                        <?php echo form_input($password_confirm);?>
                        
                      </div><!-- /.input group -->

              </div>

              <?php if ($this->ion_auth->is_admin()): ?>

                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                  <?php foreach ($groups as $group):?>
                      <label class="checkbox">
                      <?php
                          $gID=$group['id'];
                          $checked = null;
                          $item = null;
                          foreach($currentGroups as $grp) {
                              if ($gID == $grp->id) {
                                  $checked= ' checked="checked"';
                              break;
                              }
                          }
                      ?>
                      <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                      <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                      </label>
                  <?php endforeach?>

              <?php endif ?>

              <?php echo form_hidden('id', $user->id);?>
              <?php echo form_hidden($csrf); ?>
                
        </div>
        <div class="footer">
          <p><?php echo form_submit('submit', lang('edit_user_submit_btn'), 'class="btn btn-success"');?></p>
        </div>

        <?php echo form_close();?>

<!-- </div> -->