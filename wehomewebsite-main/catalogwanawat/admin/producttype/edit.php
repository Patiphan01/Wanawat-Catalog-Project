<a href="?page=<?=$_GET['page']?>" class="btn btn-success text-red" style="float: right;">ย้อนกลับ</a>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id']; 
        $sql = "SELECT * from tb_type_product where id ='$id'";
        $query = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($query);
}

?>
<br></br>
<h1 class="app-page-title"><br>แก้ไขประเภทสินค้า</br></h1>

<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <?php
                // Check if the form was submitted
            
                    // Establish a database connection (You should have this already)
                    if (isset($_POST['submit'])) {
                    // Retrieve form data
                    $title = $_POST['title'];


                    if(!empty($title)){
                        // Check if the user already exists
                        $sql_check = "SELECT * FROM tb_type_product WHERE title = '$title' AND id != '$id'";
                        $query_check = mysqli_query($connection, $sql_check);
                        $row_check = mysqli_num_rows($query_check);
                        if ($row_check > 0) {
                            $alert = '<script type = "text/javascript">';
                                $alert .= 'alert("แก้ไขไม่สำเร็จ");';
                                $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                                $alert .= '</script>';
                                echo $alert;
                                exit();
                        } else {
                    
                        $sql = "UPDATE tb_type_product SET title = '$title' WHERE id = '$id'";
                            if(mysqli_query($connection,$sql)){
                        $alert = '<script type = "text/javascript">';
                                $alert .= 'alert("แก้ไขสำเร็จ");';
                                $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                                $alert .= '</script>';
                                echo $alert;
                                exit();
                                } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }

                        // Close the database connection
                        mysqli_close($connection);
                    }
                }
                    }
                
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                      
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ชื่อประเภทสินค้า</label>
                        <input type="text" class="form-control" placeholder="ชื่อประเภทสินค้า" name="title" value="<?=$result['title']?>"  autocomeplete="off" required>
                    </div>
                    
                   
                    <button type="submit" class="btn app-btn-primary" name="submit">บันทึก</button>
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

