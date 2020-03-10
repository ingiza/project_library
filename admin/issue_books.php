

<?php require_once "header.php";
?>
 <div class="issuebook" style="margin-top:20px;background-size:cover;background-image:">
    <div class="container">
        <div class="row">
            <!-- <div class="col col-1"></div> -->
            <div class="col col-12">
                 <!-- Card -->
            <div class="card wow zoomIn"style="height:100%;">
            <!-- Card body -->
                <div class="card-body"style="background-color:#c7c9c8;width:100%;">
                    <form action="insert.php" method="post">
                        <p class="h4 text-center py-4">ISSUE <span style="color:#536349">BOOK</span></p>
                        <label>Admin Name</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="name" class="form-control" placeholder="Admin Name">
                        <label>Student Name</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" name="studentname" class="form-control" placeholder="Student Name">
                            <br>
                        <!-- table -->
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Book Name</th>
                                <th scope="col">ISBN</th>
                                <th scope="col">Issue Date</th>
                                <th scope="col">Return Date</th>
                                <th scope="col">Returned Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td><input type = "text"></td>
                                <td><input type = "number"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td><input type = "text"></td>
                                <td><input type = "number"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td><input type = "text"></td>
                                <td><input type = "number"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                </tr>
                                <tr>
                                <th scope="row">4</th>
                                <td><input type = "text"></td>
                                <td><input type = "number"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                </tr>
                                <tr>
                                <th scope="row">5</th>
                                <td><input type = "text"></td>
                                <td><input type = "number"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                <td><input type = "date"></td>
                                </tr>
                            </tbody>
                            </table>
                        <div class="text-center py-4 ">
                            <button class="btn" style="background-color:grey; color:white;" type="submit" name="insertBook">ISSUE</button>
                        </div>
                    </form>
                </div>
            </div>
            <a href="dashbord.php"><i class="fas fa-arrow-left fa-2x " style="color:#536349;"></i></a>
        </div>
        <!-- <div class="col col-1"></div> -->
    </div>

            </div>
            <!-- <div class="col col-1"></div> -->
        </div>
    </div>
</div>



<?php require_once "footer.php"?>