<a href="?page=<?=$_GET['page']?>" class="btn btn-success text-red" style="float: right;">ย้อนกลับ</a>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = $_GET['id']; 
        $sql = "select * from tb_admin where id ='$id'";
        $query = mysqli_query($connection,$sql);
        $result = mysqli_fetch_assoc($query);
}

?>
<br></br>


<hr class="mb-4">
<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <?php
                // Check if the form was submitted
                if (isset($_POST['submit'])) {
                    // Establish a database connection (You should have this already)

                    // Retrieve form data
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $oldimage = $_POST['oldimage']; // Corrected the case of $_POST
                    
                    // Check if an image file was uploaded
                    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
                        $allowedExtensions = array("jpeg", "png", "jpg");
                        $target = 'upload/admin/';
                        $filename = $_FILES['image']['name'];
                        $filetmp = $_FILES['image']['tmp_name'];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    
                        // Check if the file already exists in the target folder.
                        if (!file_exists($target . $filename)) {
                            // If it doesn't exist, try to move the uploaded file to the target folder.
                            if (move_uploaded_file($filetmp, $target . $filename)) {
                                // File moved successfully.
                            } else {
                                echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
                            }
                        } else {
                            // If the file already exists, rename it by appending a timestamp.
                            $newfilename = time() . $filename;
                            if (move_uploaded_file($filetmp, $target . $newfilename)) {
                                // File moved and renamed successfully.
                                $filename = $newfilename;
                            } else {
                                // Failed to move and rename the file.
                                echo 'เพิ่มไฟล์เข้า folder ไม่สำเร็จ';
                            }
                        }
                    } else {
                        echo 'ไม่ได้เลือกไฟล์รูปภาพ';
                    }
                    
                    // Check if there is a condition for $oldimage, and set $filename accordingly
                    if (empty($filename) && !empty($oldimage)) {
                        $filename = $oldimage;
                    }
                    
                        // Perform the SQL insertion
                        $sql = "UPDATE tb_admin SET firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', image = '$filename' WHERE id = '$id'";

                        if (mysqli_query($connection, $sql)) {
                            echo "เพิ่มข้อมูลสำเร็จ";
                            echo '<script>window.location.href = "?page=admin";</script>';
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }

                        // Close the database connection
                        mysqli_close($connection);
                    }
                
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label" >รูปภาพ</label>
                        <div>
                            <image id="preview" src="upload/admin/<?=$result['image']?>" width="200" height="200" >
                            <br></br>
							
                            <input type="file" class="form-control" name="image" id="image" required>
                            <input type="hidden" name="oldimage" value="<?=$result['image']?>">

                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ชื่อผู้ใช้</label>
                        <input type="text" class="form-control" placeholder="ชื่อผู้ใช้" name="user" value="<?=$result['User']?>" required disabled>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" name="firstname" value="<?=$result['firstname']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" name="lastname" value="<?=$result['lastname']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" placeholder="ilikeU@gmail.com" name="email" value="<?=$result['email']?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="phone" value="<?=$result['phone']?>" required>
                    </div>
                    <button type="submit" class="btn app-btn-primary" name="submit">บันทึก</button>
                </form>
            </div><!--//app-card-body-->
        </div><!--//app-card-->
    </div>
</div><!--//row-->

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function () {
        readURL(this);
    });
</script>
	