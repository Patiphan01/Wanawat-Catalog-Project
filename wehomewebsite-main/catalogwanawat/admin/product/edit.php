<a href="?page=<?=$_GET['page']?>" class="btn btn-success text-red" style="float: right;">ย้อนกลับ</a>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id']; 
    $sql = "SELECT * FROM tb_product WHERE id ='$id'";
    $query = mysqli_query($connection, $sql);
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
                    $type_product_id = $_POST['type_product_id'];
                    $title = $_POST['title'];
                    $detail = $_POST['detail'];
                    $oldimage = $_POST['oldimage']; // Corrected the case of $_POST
                    
                    // Check if an image file was uploaded
                    if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
                        $allowedExtensions = array("jpeg", "png", "jpg");
                        $target = 'upload/product/';
                        $filename = $_FILES['image']['name'];
                        $filetmp = $_FILES['image']['tmp_name'];
                        $ext = pathinfo($filename, PATHINFO_EXTENSION);
                    
                        // Check if the file has an allowed extension
                        if (in_array($ext, $allowedExtensions)) {
                            // Check if the file already exists in the target folder.
                            if (!file_exists($target . $filename)) {
                                // Move the uploaded file to the target folder.
                                if (move_uploaded_file($filetmp, $target . $filename)) {
                                    // File moved successfully.
                                } else {
                                    $alert = '<script type = "text/javascript">';
                                    $alert .= 'alert("เพิ่มข้อมูลไม่สำเร็จ");';
                                    $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                                    $alert .= '</script>';
                                    echo $alert;
                                    exit();
                                }
                            } else {
                                // If the file already exists, rename it by appending a timestamp.
                                $newfilename = time() . $filename;
                                if (move_uploaded_file($filetmp, $target . $newfilename)) {
                                    // File moved and renamed successfully.
                                    $filename = $newfilename;
                                } else {
                                    $alert = '<script type = "text/javascript">';
                                    $alert .= 'alert("เพิ่มข้อมูลไม่สำเร็จ");';
                                    $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                                    $alert .= '</script>';
                                    echo $alert;
                                    exit();
                                }
                            }
                        } else {
                            $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=update&id='.$id.'";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        }
                    }
                    
                    // Check if there is a condition for $oldimage, and set $filename accordingly
                    if (empty($filename) && !empty($oldimage)) {
                        $filename = $oldimage;
                    }
                    
                    // Perform the SQL update
                    $sql = "UPDATE tb_product SET type_product_id='$type_product_id', title='$title', detail='$detail', image='$filename' WHERE id='$id'";

                    if (mysqli_query($connection, $sql)) {
                        $alert = '<script type = "text/javascript">';
                        $alert .= 'alert("แก้ไขข้อมูลสำเร็จ");';
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

                $sql1 = "SELECT * FROM tb_type_product";
                $query1 = mysqli_query($connection, $sql1);
                ?>
              
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">รูปภาพ</label>
                        <div>
                        <img id="preview" src="upload/product/<?=$result['image']?>" width="200" height="200" >
                            <br /><br />
                            <input type="file" class="form-control" name="image" id="image" required>
                            <input type="hidden" name="oldimage" value="<?=$result['image']?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ประเภทสินค้า</label>
                        <select name="type_product_id" class="form-control" required>
                            <option value="" disabled>ประเภทสินค้า</option>
                            <?php foreach($query1 as $data):?>
                                <option value="<?= $data['id'] ?>" <?=$result['type_product_id'] == $data['id'] ? 'selected' : ''  ?>><?= $data['title'] ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label class="form-label">ชื่อสินค้า</label>
                        <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="title" value="<?=$result['title'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">รายละเอียด</label>
                        <textarea name="detail" class="form-control" style="height: 100px" ><?= $result['detail'] ?></textarea>
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
