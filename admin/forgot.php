<?php
  require_once "header.php";
  require_once "connection.php"
?>
<body>
<div class="row">
    <div class="col-4"></div>
        <div class="col-4">
            <form action="update_forgot.php" name="frmForgot" id="frmForgot" method="post" onSubmit="return validate_forgot();">
            <h4 style="margin-top:80px;color:blue;">Forgot Password?</h4>
                <?php if(!empty($success_message)) { ?>
                <div class="success_message"><?php echo $success_message; ?></div>
                <?php } ?>

                <div id="validation-message">
                    <?php if(!empty($error_message)) { ?>
                <?php echo $error_message; ?>
                <?php } ?>
                </div>

                <div class="field-group">
                    <div><label for="username">Username/Email</label></div>
                    <div><input type="text" name="uName" id="user-login-name" class="form-control"></div>
                </div>
                
                <div class="field-group">
                    <div><label for="password">New Password</label></div>
                    <div><input type="password" name="user-password" id="user-password" class="form-control"></div>
                </div>
                <div class="field-group">
                    <div><label for="password">confirm Password</label></div>
                    <div><input type="password" name="confirmpassword" id="user-password" class="form-control"></div>
                </div>
                
                <div class="field-group">
                    <div style="margin-left:120px;margin-top:50px;"><input  style="border-radius:30px;padding:5px 60px ;text-decoration:none;" type="submit" name="forgot-password" id="forgot-password" value="Submit" class="form-submit-button btn-primary"></div>
                </div>	
            </form>
        </div>
    <div class="col-4"></div>
</div>
<?php
    require_once "footer.php";
?>