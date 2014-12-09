<body class="bg-black">
  <div class="form-box" id="login-box">
    <div class="header">
      <h1>
        <?= lang('login_heading');?>
      </h1>
    </div>
    <?php echo form_open("auth/login");?>
      <div class="body bg-gray">
        <div class="form-group">
          <?php echo form_input($identity);?>
        </div>
        <div class="form-group">
          <?php echo form_input($password);?>
        </div>
        <div class="form-group">
          <?php echo lang('login_remember_label', 'remember');?>
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
        </div>
      </div>
      <div class="footer">
            <input type="submit" name='submit' value="Login" class="btn bg-olive btn-block">
            <p style="text-align:center"><a href="forgot_password" style="color:black;"><?php echo lang('login_forgot_password');?></a></p>
      </div>
    <?php echo form_close();?>
    <?php if($valid == 1):?>
      <div id="infoMessage" class="alert alert-danger alert-dismissable">
        <i class="fa fa-warning"></i>
        <?php echo $message;?>
      </div>  
    <?php endif?>
  </div>
<script src="<?=base_url();?>js/jquery.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js" type="text/javascript"></script>
</body>


         