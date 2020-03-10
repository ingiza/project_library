<?php
    error_reporting(E_ALL^E_WARNING);
    require_once "header.php";
    require_once "connection.php";
    require_once "edit_book.php";
?>

        <div class="row">
        <table class="table" style="margin:5px;">
            <thead>
                <tr>
                    <th scope="colspan">#</th>
                    <th scope="colspan">AdminName</th>
                    <th scope="colspan">BookName</th>
                    <th scope="colspan">AuthorName</th>
                    <th scope="colspan">ISBN</th>
                    <th scope="colspan">Bookprofile</th>
                    <th scope="colspan">Details</th>
                    <th scope="colspan">Action</th>
                </tr>
                <tr></tr>
            </thead>
            <?

                $stmt = "SELECT * FROM books";
                $result = mysqli_query($conn, $stmt);

                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                        <td>".$row['id']."</td>
                            <td>".$row['adminName']."</td>
                            <td>".$row['bookName']."</td>
                            <td>".$row['authorName']."</td>
                            <td>".$row['ISBN']."</td>
                            <td><img src=".$row['bookProfile']."></td>
                            <td>".$row['details']."</td>
                            <td>
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit".$row['id']."' >Edit</button>
                            <button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete".$row['id']."' name='id'>DELETE
                            </button>
                            </tr>";
                        
        ?>

                <!-- edit modal -->
                <div aria-hidden="true"  aria-labelledby="exampleModalLongTitle" class="modal fade" id="edit<?php echo $row['id'];?>" role="dialog" tabindex="-1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle"> <span style="color:#536349;">EDIT</span><?php echo $row['bookName']; ?></h5><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="fetch.php" method="POST">
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $row['id'];?>" name="theid">
                                    </div>
                                    <p class="h4 text-center py-4">EDIT <span style="color:#536349">BOOK</span></p>
                                    <div class="form-group">
                                    <label>Your Name</label>
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text"  name="name" class="form-control" placeholder="Your Name" value="<?php echo $row['adminName'];?>" >
                                    </div>
                                    <div class="form-group">
                                        <label>Book Name</label>
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="bookName"  class="form-control" placeholder="Add Book Name" value="<?php echo $row['bookName'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Author Name</label>
                                        <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="author" class="form-control" placeholder="Author Name" value="<?php echo $row['authorName'];?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                        <label>Add ISBN/Serial</label>
                                        <input type="text" name="isbn" class="form-control" placeholder="Add ISBN/Serial" value="<?php echo $row['ISBN'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Add book profile</label><br>
                                        <input type="file" class="fileToUpload" id="fileToUpload" name="profile" placeholder="Add book profile"><br>
                                    </div>
                                        <div class="form-group">
                                        <label>Add Book Details</label><br>
                                        <textarea name="details" placeholder="Add book"><?php echo $row['details'];?></textarea>
                                    </div>
                                        <div class="text-center py-4 ">
                                        <button class="btn btn-success btn-block btn-rounded z-depth-1" type="submit" name="updateBook">UPDATE</button>
                                    </div>
                                </div>
                                </form>
                                    <a href="fetch.php"><i class="fas fa-arrow-left fa-2x " style="color:green;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- delete modal -->
         
                    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="delete<?php echo $row['id'];?>" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content">
                                <form action = "fetch.php" method ="POST">
                                <!-- <input type='hidden' name='id' value='$id'/> -->
                                    <div class="form-group">
                                        <input type="hidden" value="<?php echo $row['id'];?>" name="theid">
                                    </div>
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="color" style="text-align:center;height:200px;">
                                        <h3>Are you sure want to <br>remove.</h3>
                                        <img src="https://cdn2.iconfinder.com/data/icons/e-business-helper/240/627249-delete3-512.png" style="width:80px;height:80px;"><br>
                                        <span style="color:#536349;margin-bottom:10px;"><?php echo $row['bookName']; ?></span>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" name="delet"  id="deleteBook">REMOVE</button>
                                    <?php 
                                    if(isset($_POST['delet'])){
                                    $del = $_POST['?'];
                                    $sql = "DELETE FROM books WHERE id='$del'";

                                    if ($conn->query($sql) === TRUE) {
                                        echo "Record deleted successfully";
                                    } else {
                                        echo "Error deleting record: " . $conn->error;
                                    }
                                }
                                    
                                    ?>
                                    </div>
                                </form>
      
                                </div>
                        </div>
                    </div>
       
                            <!-- javascript -->
                            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
                            </script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
                            </script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
                            </script>

                        </div>
                    <?php
                            }
                        }
                        // require_once "delete.php";
                        ?>
          
        </table>
        <a class="btn btn-primary" href="dashbord.php">&#60;&#60;BACK</a>
          </div>
            </div>
        </div>

    </body>
    </html>
