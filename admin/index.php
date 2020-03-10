<?php
    require_once 'header.php';
    require_once 'signup.php';
    require_once 'connection.php';
?>
<body class="body" style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Low_Memorial_Library_Columbia_University_College_Walk_Court_Yard_05.jpg/1024px-Low_Memorial_Library_Columbia_University_College_Walk_Court_Yard_05.jpg);opacity:1;">
    <div class="container-fluid" >
                <div class="row">
                    <div class="col col-4"></div>
                    <div  class="col col-3">
                        <div class="card" style="margin-top:100px;height:60%; width:430px;">
                            <div class="card-body" style="background-color: #d9d9d9;color:black;">
                                <form action="login_session.php" method="post">
                                    <p class="h4 text-center py-4">Sign In</p>
                                    <div class="md-form">
                                        <i class="fa fa-user prefix black-text"></i>
                                        <label for="materialFormCardNameEx" class="font-weight-light">User Name</label>
                                        <input type="text" name="uName" id="materialFormCardNameEx" class="form-control">
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix black-text"></i>
                                        <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                        <input type="password" name="password" id="materialFormCardPasswordEx" class="form-control">
                                    </div>
                                    <a href="forgot.php" name="forgot" value="forgot" style="margin-left:250px;">forgot password?</a>
                                    <div class="text-center py-4 mt-3">
                                        <button class="btn btn-primary" name="signIn" style="border-radius:20px;">Sign In</button>
                                    </div>
                                </form>
                                <p>New Member?<a href="dashbord.php" data-toggle="modal" data-target="#exampleModalLong"> Sign Up</a></p>                                 
                            </div>
                        </div>
                    </div>
                    <div  class="col col-4"></div>
                </div>
        </div>
    </div>
<?php
    require_once 'footer.php';
?>