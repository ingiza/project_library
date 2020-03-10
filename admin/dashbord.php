<?php
session_start();
if(!isset($_SESSION['loggedIn'])){
    header('Location:index.php');
}
    
    require_once 'header.php';
    require_once 'connection.php';  
    
?>
<body>
<div class="container-fluid" style="height:100%;">
    <div class="row topbar" style="background-color:grey;height:50px;" >
        <div class="col col-4" style="font-size:30px; font-family:Georgia, serif">
          <li> <i class="fas fa-book-reader"></i> AzaLibrary
        </div>
        <div class="col col-6"></div>
        <div class="col col-2" style="margin-top:20px;">
            <i  class="fas fa-user-alt"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Manage accounts</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i  class="fas fa-user-alt"></i> My profile</a>
                <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Change password</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>
        </div>
    </div>
<!-- <div class="container-fuid" style="background-color: #0009;"> -->
    <div class="row" style="background-color:#212132;height:896px;">
        <div class="col col-3" style="margin-left:-50px; background-color:#393950">
            <div class="card" style="background-color:#212132; margin-centre:0px;height:100%;">
                <div class="card-body">
                    <ul class="sidebar" style="margin-left:40px;color:#0df4fc; background-color:#0033660;">
                        <li> <i class="fas fa-tachometer-alt"></i> Dashboard</li><hr>
                        <li> <i class="fas fa-book "></i> <a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Manage books</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="add_books.php">Add books</a>
                                <a class="dropdown-item" href="fetch.php">Remove books</a>
                                <a class="dropdown-item" href="edit_book.php" data-target='#edit".$row['id']."'>Edit book</a>
                            </div></li>
                            <hr>
                        <li> <i class="fas fa-hand-holding-usd"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> Manage fines</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">view fines</a>
                            <a class="dropdown-item" href="#">clear fines</a>
                        </div></li>
                        <hr>
                        <li> <i class="fas fa-book-reader"></i><a href="issue_books.php"> Issue books</a></li>
                        <hr>
                        <li> <i class="fas fa-book"></i> View All Books</li><hr>
                        <li> <i class="fas fa-book-open"></i> View Bookings</li><hr>
                        <li> <i class="fas fa-user-graduate"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> student</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Add students</a>
                                    <a class="dropdown-item" href="#">view all students</a>
                                </div>
                        </li>
                        <hr>
                        <li> <i class="fas fa-cogs"></i> <a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Settings (<?php echo $_SESSION['loggedIn']; ?>)</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Manage courses</a>
                                    <a class="dropdown-item" href="#">Manage Years</a>
                                </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="col col-3" style="background-color:#393950;height:100%;">
            <br>
                <div class="card wow fadeInLeft" style="height:30%;">
                    <img src="images/lib.jpg" class="card-img-top" alt="photo">
                </div>
                <br><br>
                <div class="card wow fadeInUp" style="height:60%">
                <canvas id="doughnutChart" style="height:500px;"></canvas>
                </div>

            </div>
            <div class="col col-3" style="background-color:#212132;eight:100%;">
            <br>
            <br>
                <div class="card wow zoomIn" style="background-color:#00bfff; height:200px">
                <br>
                    <i class="fas fa-book green-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>50</a></h4>
                        <p class="card-text">Returned Books</p>
                    </div>
                </div>
                <br>
                <div class="card wow zoomIn" style="background-color:#00bfff; height:200px">
                <br>
                    <i class="fas fa-book red-text text-center fa-5x"></i>
                    <div class="card-body" >
                        <h4 class="card-title"><a>50</a></h4>
                        <p class="card-text">Not Returned Books</p>
                    </div>
                </div>
            </div>
            <div class="col col-3"style="background-color:#212132">
            <br>
            <br>
            <div class="card wow fadeInRight" style="background-color:#00bfff; height:200px">
            <br>
                    <i class="fas fa-book yellow-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>100</a></h4>
                        <p class="card-text">Issued books</p>
                    </div>
                </div>
                <br>
                <div class="card wow fadeInUp" style="background-color:#00bfff; height:200px">
                <br>
                    <i class="fas fa-book dark-grey-text text-center fa-5x"></i>
                    <div class="card-body">
                        <h4 class="card-title"><a>203</a></h4>
                        <p class="card-text">Total books</p>
                    </div>
                </div>
            </div>
    </div>
</div>

<?php
require_once "footer.php";
?>