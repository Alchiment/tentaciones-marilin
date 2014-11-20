<body class="bg-black">
    
  <div class="form-box" id="login-box">
            <div class="header">
              <h1>
                <?= lang('login_heading');?>
              </h1>
            </div>
              

              <div id="infoMessage"><?php echo $message;?></div>

                <?php echo form_open("auth/login");?>
                <div class="body bg-gray">

                    <div class="form-group">
                        <?php // echo lang('login_identity_label', 'identity');?>
                        <?php echo form_input($identity);?>
                    </div>
                      <p>
                      </p>

                      <p>
                        <?php //echo lang('login_password_label', 'password');?>
                        <?php echo form_input($password);?>
                      </p>
  
                      <p>
                        <?php echo lang('login_remember_label', 'remember');?>
                        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                      </p>
    
                </div>
                <div class="footer">
                      <p><a href="forgot_password" style="color:black;"><?php echo lang('login_forgot_password');?></a></p>
                      <input type="submit" name='submit' value="Login" class="btn bg-olive btn-block">
                    <?php echo form_close();?>
                </div>

  </div>
        <script src="<?=base_url();?>js/jquery.min.js"></script>
        <script src="<?=base_url();?>js/bootstrap.min.js" type="text/javascript"></script>
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
        <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>-->
</body>


         