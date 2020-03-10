<?php
    require_once "/opt/lampp/htdocs/project_library/admin/header.php";
?>


<div class="view" style="background: #ffe5ea">
<img src=""style="width:100%;height:900px;">
<div class="mask flex-center">
    <div class="container" >
        <div class="row">
            <div class="col col-3">
            </div>
            <div  class="col col-6" style="background-image:">
                <div class="card" style="margin-top:20px;height:60%; background-color: #fcf9f4;">
                    <div class="card-body" style="background-color: #fff8f9 ;color:#ffa500 ;">
                        <form action="" method="post">
                                <img src="https://www.stickpng.com/assets/images/580b585b2edbce24c47b2772.png" style="height:150px; width:150px; margin-left:180px;">
                                <p class="text-center mt-1" style="font-style:fantacy;">Welcome To<br><span style="font-family:fantasy; font-size:30px; font-weight: 900;">Aza Library</span></p>
                            <div class="md-form">
                                <i class="fa fa-user prefix black-text"></i>
                                <label class="font-weight-light">User Name</label>
                                <input type="text" id="materialFormCardNameEx" class="form-control">
                            </div>
                            <div class="md-form">
                                <i class="fa fa-lock prefix black-text"></i>
                                <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                <div id="col col-sm-6">
                                <div id="col col-sm-6">
                                <input type="password" id="materialFormCardPasswordEx" class="form-control">
                            </div>
                            <div class="text-center py-4 mt-3">
                                <button style="border-radius:20px" class="btn" type="submit">Log In</button>
                            </div>
                            New member? <a href="signup.php">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
            <div  class="col col-3"></div>
        </div>
    </div>
</div>
</div>

<?php
    require_once "/opt/lampp/htdocs/project_library/admin/footer.php";
?>