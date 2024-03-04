		
<?php
	$sql = "SELECT * from tb_type_product";
	$query = mysqli_query($connection,$sql);

	
?>

<a href="?page=<?=$_GET['page']?>" class="btn btn-success text-red" style="float: right;">ย้อนกลับ</a>
<h1 class="app-page-title"><br>เพิ่มข้อมูลสินค้า</br></h1>
<hr class="mb-4">

<div class="row g-4 settings-section">
    <div class="col-12 col-md-12">
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <?php
                // Check if the form was submitted
                if (isset($_POST['submit'])) {

                    if(isset($_POST) && !empty($_POST)){
                    //     echo '<pre>';
                    //     print_r($_POST);
                    //     // print_r($_FILES);
                    //     echo  '</pre>';
                    // exit();
                   

                    // Retrieve form data
                    $type_product_id = $_POST['type_product_id'];
                    $title = $_POST['title'];
                    $detail = $_POST['detail'];
                        if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name'])) {
                            $extensions = array("jpeg", "png", "jpg");
                            $target = 'upload/product/';
                            $filename = $_FILES['image']['name'];
                            $filetmp = $_FILES['image']['tmp_name'];
                            $ext = pathinfo($filename, PATHINFO_EXTENSION);
                            if(in_array($ext,$extensions)){
                            if (!file_exists($target . $filename)) {
                                if (move_uploaded_file($filetmp, $target . $filename)) {
                                    $filename = $filename;
                                } else {
                                    $alert = '<script type = "text/javascript">';
                                    $alert .= 'alert("เพิ่มข้อมูลไม่สำเร็จ");';
                                    $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=add";';
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
                                        $alert .= 'alert("เพิ่มข้อมูลสำเร็จ");';
                                        $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                                        $alert .= '</script>';
                                        echo $alert;
                                        exit();
                                }
                            }
                        } else {
                           
                                $alert = '<script type = "text/javascript">';
                                $alert .= 'alert("ประเภทไฟล์ไม่ถูกต้อง");';
                                $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                                $alert .= '</script>';
                                echo $alert;
                                exit();
                      
                            $filename = '';
                        }
                    

                        // Perform the SQL insertion
                        $sql = "INSERT INTO tb_product
                                (type_product_id, title, detail,image)
                                VALUES ('$type_product_id', '$title', '$detail','$filename')";

                        if (mysqli_query($connection, $sql)) {
                            $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("เพิ่มข้อมูลสินค้าสำเร็จ");';
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
                        <label class="form-label" >รูปภาพ</label>
                        <div>
                            <image id="preview" width="250" height="250" >
                            <br></br>
							
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ประเภทสินค้า</label>
                        <select name="type_product_id" class="form-control" required>
                                <option value="" selected disabled>ประเภทสินค้า</option>
                                <?php foreach ($query as $data): ?>
                                    <option value="<?=$data['id']?>"><?=$data['title']?></option>
                                <?php endforeach;?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">ชื่อสินค้า</label>
                        <input type="text" class="form-control" placeholder="ชื่อสินค้า" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">รายละเอียด</label>
                        <textarea name="detail" class= "form-control" style="height: 100px" name="detail"></textarea>
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
	