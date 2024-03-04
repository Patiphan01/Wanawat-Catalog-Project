<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id']; 
    $sql = "DELETE FROM tb_admin WHERE id = '$id'";
    
    if(mysqli_query($connection, $sql)) {
        $alert = 'ลบข้อมูลสำเร็จ';
        echo '<script>window.location.href = "?page=admin";</script>';
        exit; // Add exit to stop further script execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
}

// Close the database connection
mysqli_close($connection);
?>
