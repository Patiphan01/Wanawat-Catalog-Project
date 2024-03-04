<h1 class="app-page-title"><br>จัดการข้อมูลประเภทสินค้า</br></h1>

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
                    $title = $_POST['title'];
                   
                if(!empty($title)){
                    // Check if the user already exists
                    $sql_check = "SELECT * FROM tb_type_product WHERE title = '$title'";
                    $query_check = mysqli_query($connection, $sql_check);
                    $row_check = mysqli_num_rows($query_check);

                    if ($row_check > 0) {
                        $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("ชื่อประเภทสินค้าซ่ำกรุณากรอกใหม่");';
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'&function=add";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                    } else {
                        
                        $sql = "INSERT INTO tb_type_product (title)
                                VALUES ('$title')";

                        if (mysqli_query($connection, $sql)) {
                            $alert = '<script type = "text/javascript">';
                            $alert .= 'alert("เพิ่มประเภทสำเร็จ");';
                            $alert .= 'window.location.href = "?page='.$_GET['page'].'";';
                            $alert .= '</script>';
                            echo $alert;
                            exit();
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                        }

                }
            }
            }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                    
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">ชื่อประเภทสินค้า</label>
                        <input type="text" class="form-control" name="title" placeholder="ชื่อประเภทสินค้า" autocomplete="off" required>
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
	