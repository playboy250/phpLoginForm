<?php
    include "config.php";
    $id = $_GET['id'];

    $delete = mysqli_query($con, "DELETE FROM table_name WHERE Id = '$id'");

    // Check if deleted success or not
    if ($delete) {
        echo "<script>alert('Deleted successfully!')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong in deleting?')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }

?>