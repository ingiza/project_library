

<?php 
    require_once "header.php";
?>
<body class="body" style="background-image:url(https://business.stthomas.edu/_media-library/info/current-students/images/stthomas-students-studying-skyway.jpg);background-size:cover;background-color:#0009;">
<div class="container-fluid">
    <div class="row topbar" style="background-color:grey;height:50px;" >
        <div class="col col-4" style="font-size:30px; font-family:Georgia, serif">
          <li> <i class="fas fa-book-reader"></i> AzaLibrary
        </div>
        <div class="col col-6"></div>
        <div class="col col-2" style="margin-top:10px;">
            <i  class="fas fa-user-alt"></i><a class="dropdown-toggle mr-4" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Manage accounts</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i  class="fas fa-user-alt"></i> My profile</a>
                <a class="dropdown-item" href="#"><i class="fas fa-key"></i> Change password</a>
                <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log out</a>
            </div>
        </div>
    </div>
<a href="dashbord.php"><i class="fas fa-arrow-left fa-2x " style="color:blue;"></i></a>
    <div class="container-fluid">
        <div class="row">
            <div class="col col-3"></div>
            <div class="col col-7">
                 <!-- Card -->
                <div class="card wow zoomIn" style="height:620px;margin-top:-10px;">
                    <!-- Card body -->
                    <div class="card-body"  style="margin-top:-10px;">
                        <form action="insert_books.php" method="POST">
                            <p class="h4 text-center py-4">ADD NEW <span style="color:#536349;margin-top:-100px;">BOOK</span></p>
                            <label>Your Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="name" class="form-control" placeholder="Your Name">
                            <label>Book Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="bookName" class="form-control" placeholder="Add Book Name">
                            <label>Author Name</label>
                                <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="author" class="form-control" placeholder="Author Name">
                                <label>Add ISBN/Serial</label>
                                <input type="text" name="isbn" class="form-control" placeholder="Add ISBN/Serial">
                            <label>Add book profile</label><br>
                                <input type="file" class="fileToUpload" id="fileToUpload" name="file" placeholder="Add book profile"><br>
                            <label>Add Book Details</label><br>
                                <textarea name="details" placeholder="Add book details"></textarea>
                            <div class="text-center py-4 ">
                                <button  class="btn btn-primary btn-block btn-rounded z-depth-1" type="submit" name="insertBook">ADD</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col col-2"></div>
            </div>
        </div>
    </div>



<?php require_once "footer.php"?>