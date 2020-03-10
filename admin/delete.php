<?php
    require_once "connection.php";

// sql to delete a record
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

 
?>
<!-- <td><button class='btn btn-danger' name='delete' onclick='ConfirmDelete()' type='button'>DELETE</button></td> -->
